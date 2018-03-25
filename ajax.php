<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

CModule::IncludeModule('iblock');


function print_mi($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
} // DEBUG




/*
 * Отправка емаил с файлом
 * возвращает TRUE если файл отправлен
 * */
function send_mail(){

    if ($_FILES['upload']['type']) {
        $filePath = $_FILES['upload']['tmp_name'];
        $fileId = CFile::SaveFile(
            array(
                "name" => $_FILES['upload']['name'],   // имя файла, как оно будет в письме
                "size" => $_FILES['upload']['size'],   // работает и без указания размера
                "tmp_name" => $filePath,                    // собственно файл
                // "type" => "",                            // тип, не ясно зачем
                "old_file" => "0",                          // ID "старого" файла
                "del" => "N",                               // удалять прошлый?
                "MODULE_ID" => "",                          // имя модуля, работает и так
                "description" => "",                        // описание
                // "content" => "содержимое файла"          // если указать, то вместо файла будет указанный текст
            ),
            'mails',  // относительный путь от upload, где будут храниться файлы
            false,    // ForceMD5
            false     // SkipExt
        );
    }

    if ($_POST['doklad'] == 'on') $doklad = 'Участие с докладом.';
    else $doklad = '';

    $arFields = array(
        "user_name" => $_POST['user_name'], // $arUpdateValues['NAME'],
        'user_phone' => $_POST['user_phone'],
        'email' => $_POST['email'],
        'compani' => $_POST['compani'],
        'position' => $_POST['position'],
        'pasport' => $_POST['pasport'],
        'doklad' => $doklad,
        'description' => $_POST['description']
    );

    $result = CEvent::SendImmediate(
        'FEEDBACK_FORM_END_REC',
        's1',
        $arFields,
        $Duplicate = "N",
        '',
        [$fileId]
    );

    if ($_FILES['upload']['type']) CFile::Delete($fileId);

    if ($result=='Y'){
        //echo 'Письмо отправлено';
        return true;
    }

    //CEvent::Send("PLAN_FEEDBACK", 's1', ['AUTHOR_EMAIL' => 'email@domain.com', 'TEXT' => 'text'], 'N', '', [$arFields["PROPERTY_VALUES"]["98"]]);
}

function add_ement_block(){
    $typiblocks = CIBlockType::GetList(array(),array('code'=>'reg_participant'));
    if ($typiblocks->Fetch()){
        //проверка на наличие ИБ

        $iblocks = CIBlock::GetList(array(),array('TYPE'=>'reg_participant'));

        $arblocks = $iblocks->Fetch();

        if($arblocks['NAME'] == "Регистрация участника конференции"){
            // добавить элемент ИБ (записать сообщение)
            //print_mi($_POST);
            $el = new CIBlockElement;
            $arLoadProductArray = Array(
                "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
                "IBLOCK_ID"      => $arblocks["ID"],
                "NAME"           =>$_POST['user_name'],
                "ACTIVE"         => "Y",            // активен
                "PREVIEW_TEXT"   => "",
                "DETAIL_TEXT"    => "",
                "PROPERTY_VALUES"=> array(
                    "user_phone" => $_POST['user_phone'],
                    "email"      => $_POST['email'],
                    "compani"    => $_POST['compani'],
                    "position"   => $_POST['position'],
                    "pasport"    => $_POST['pasport'],
                    "description"=> $_POST['description'],
                    "theses_articles" => array(
                        "name" => $_FILES['upload']['name'],           // имя файла, как оно будет в письме
                        "size" => $_FILES['upload']['size'],   // работает и без указания размера
                        "tmp_name" => $_FILES['upload']['tmp_name'],            // собственно файл
                        // "type" => "",                    // тип, не ясно зачем
                        "old_file" => "0",                  // ID "старого" файла
                        "del" => "N",                       // удалять прошлый?
                        "MODULE_ID" => "",                  // имя модуля, работает и так
                        "description" => "",                // описание
                        // "content" => "содержимое файла"  // если указать, то вместо файла будет указанный текст
                        )
                )
            );
            $PRODUCT_ID = $el->Add($arLoadProductArray);
            if(!$PRODUCT_ID) {
                echo 'Error: '.$el->LAST_ERROR.'<br>';
                return false;
            }else {
                send_mail();
            }

        } else {
            $ib = new CIBlock;
            $arFields = Array(
                "ACTIVE" => 'Y',
                "NAME" => 'Регистрация участника конференции',
                "CODE" => 'reg_participant_ib',
                "LIST_PAGE_URL" => '#SITE_DIR#/catalog/list.php?SECTION_ID=#SECTION_ID#',
                "DETAIL_PAGE_URL" => '#SITE_DIR#/catalog/detail.php?ID=#ELEMENT_ID#',
                "IBLOCK_TYPE_ID" => 'reg_participant',
                "SITE_ID" => SITE_ID,
                "SORT" => 500,
                "PICTURE" => '',
                "DESCRIPTION" => '',
                "DESCRIPTION_TYPE" => '',
                "GROUP_ID" => Array("2"=>"W", "3"=>"W")
            );
            $res = $ib->Add($arFields);
            if(!$res){
                echo 'Ошибка создание ИБ: '. $ib->LAST_ERROR .'<br>';
            }else{
                $arFields = Array(
                    "NAME" => "Тезисы, статья",
                    "ACTIVE" => "Y",
                    "SORT" => "1700",
                    "CODE" => "theses_articles",
                    "PROPERTY_TYPE" => "F",
                    "FILE_TYPE" => "doc, docx",
                    "IBLOCK_ID" => $res,
                    "WITH_DESCRIPTION" => "Y",
                );
                $iblockproperty = new CIBlockProperty;
                $PropertyID = $iblockproperty->Add($arFields);

                $arFields = Array(
                    "NAME" => "Телефон",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "user_phone",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);

                $arFields = Array(
                    "NAME" => "E-mail",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "email",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);

                $arFields = Array(
                    "NAME" => "Организация",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "compani",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);


                $arFields = Array(
                    "NAME" => "Должность",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "position",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);

                $arFields = Array(
                    "NAME" => "Паспортные данные (для пропуска)",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "pasport",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);

                $arFields = Array(
                    "NAME" => "Участие с докладом",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "doklad",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);

                $arFields = Array(
                    "NAME" => "Тема доклада (автор, соавтор, докладчик)",
                    "ACTIVE" => "Y",
                    "SORT" => "500",
                    "CODE" => "description",
                    "PROPERTY_TYPE" => "S",
                    "IBLOCK_ID" => $res,
                );
                $PropertyID = $iblockproperty->Add($arFields);
//                         if(!$PropertyID)
//                         {
//                             echo 'Ошибка создание ИБ свойства для хранения файла <br>';
//                         }
            }
        }
    }else{
        $arFields = array(
            'ID'=>'reg_participant',
            'SECTIONS'=>'N',
            'IN_RSS'=>'N',
            'SORT'=>500,
            'LANG'=>Array(
                'ru'=>Array(
                    'NAME'=>'Регистрация участника конференции',
                    'SECTION_NAME'=>'',
                    'ELEMENT_NAME'=>''
                )
            )
        );
        $obBlocktype = new CIBlockType;
        $res = $obBlocktype->Add($arFields);
        if(!$res)
        {
            echo 'Error: '.$obBlocktype->LAST_ERROR.'<br>';
        }
    }
}

// получен запрос на отпраавку
if (isset($_POST['user_name'])){
    /*
     * проверка на расширение файла перед записью
     * */
    $item = '.doc';

    if($_FILES['tmp_name']!='' && !preg_match("/$item\$/i", $_FILES['upload']['name'])){
        echo 'error';
        die();
    }
    add_ement_block();
    //send_mail(); // alert
?>
<section class="section section_bg_gray alert" id="success">
    <div class="container">
        <div class="h2">
            Спасибо! <br>
            Регистрация прошла успешно
        </div>
    </div>
</section>
<?
}
