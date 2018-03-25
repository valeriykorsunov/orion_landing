jQuery(document).ready(function($){


    $('#my_form').on('submit', function(e){
        e.preventDefault();
        var $that = $(this),
            formData = new FormData($that.get(0));

        var user_name = $('[name = "user_name"]');
        var user_phone = $('[name = "user_phone"]');
        var email = $('[name = "email"]');

        user_name.parent().removeClass('has-error');
        user_phone.parent().removeClass('has-error');
        email.parent().removeClass('has-error');

        var text_error = '';
        if (!user_name.val()){
            text_error = text_error + 'Не заполнено поле ФИО <br>';
            user_name.parent().addClass('has-error');
            //alert(text_error);
            //has-error
        }
        if (!user_phone.val()){
            text_error = text_error + 'Не заполнено поле Телефон <br>';
            user_phone.parent().addClass('has-error');
            //alert(text_error);
            //has-error
        }
        if (email.val()==''){
            text_error = text_error + 'Не заполнено поле e-mail <br>';
            email.parent().addClass('has-error');
            //alert(text_error);
            //has-error
        }

        if (!user_name.val() || !user_phone.val() ||!email.val() ) {
            $('#error').addClass('form__error');
            $('#error').html(text_error);
            return ;
        } else {
            $('#error').html('');
            $('#error').removeClass('form__error');
        }

        // если запос уже отправленн то повторно отправлять ненужно
        // if($('.section.section_bg_gray.alert')){
        //     return;
        // }
        var section_bg_gray = $('.section.section_bg_gray');
        if (section_bg_gray.hasClass("alert")) {
            return ;
        }


        $.ajax({
            url : '/ajax.php',
            type : 'POST',
            processData: false,
            contentType: false,
            cache:false,
            data : formData,
            success : function (msg){
                if (msg){

                    if (msg == 'error'){

                        $('#error').addClass('form__error');
                        $('#error').html("Неверный формат файла!<br>");
                        return;
                    } else {
                        $('#error').html('');
                        $('#error').removeClass('form__error');
                    }
                    $("#registration").addClass('hidden');
                    $(".section.section_bg_gray.registration").after(msg);
                    location.hash = "#success";
                    // для сайтов на bootstrap можно использовать класс hidden
                    // для того чтобы скрыть объект
                }
            }
        });

    });


});




