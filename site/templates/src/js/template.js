/**
 * Created by vladimirlozkin on 07.09.18.
 */
$(document).ready(function() {
    $(window).scroll(function(){
        if ($(this).scrollTop()>500) {
            $('#menu').addClass('active');
        }
        else {
            $('#menu').removeClass('active');
        };
    });

    $('.js-input').on('focus focusout', function(e) {
        e.preventDefault();
        $(e.target).parent().toggleClass('is_focused');
        if (e.type="focus") {
            $(e.target).parent().removeClass('error');
        }
        if(e.type == 'focusout') {
            $(e.target).val($.trim($(e.target).val()));
        }
    });
    $('.js-input').on('change keyup', function(e) {
        e.preventDefault();
        if($.trim($(e.target).val()) !== '' && !$(e.target).hasClass('is_filled')) {
            $(e.target).parent().addClass('is_filled');
        } else {
            $(e.target).parent().removeClass('is_filled');
        }
    });
    $('.js-phone').on('focusout', function(e) {
        e.preventDefault();
        var val = $(this).val().replace(/[^0-9]/gi,'');
        if(val.substr(0, 1) == 7) {
            val = '+7' + val.substr(1, val.length - 1);
        }
        $(this).val(val);
    });
    var source = "site";
    $(".callform").on("click", function () {
        source = $(this).data("source");
    });

    $(".sidebar__submit > .submit__button").on('click', function (e) {
        console.log(13);
        var name_filed = $("#name");
        var phone_filed = $("#phone");

        var regex_phone = new RegExp(/\+?[7-8]\d{10}/);
        var regex_name = new RegExp(/.+/);

        var hasErr = false;

        if (!regex_name.test(name_filed.val())) {
            name_filed.parent().addClass("error");
            hasErr = true;
        }
        if (!regex_phone.test(phone_filed.val())) {
            phone_filed.parent().addClass("error");
            hasErr = true;
        }
        if (hasErr) {
            return false;
        }

        var data = {
            name: name_filed.val(),
            phone: phone_filed.val(),
            source: source
        };
        name_filed.val("");
        phone_filed.val("");

        $.ajax({
            url: "ajax-handler/",
            type: 'POST',
            data: {data: data},
            success: function (result) {
                UIkit.offcanvas.hide([force = false]);
                UIkit.notify({
                    message: (result == "success") ? 'Благодарим за обращение! В скором времени мы Вам перезвоним.' : 'Ошибка отправки сообщения',
                    status: result,
                    timeout: 3000,
                    pos: 'top-right'
                });
            },
            error: function (result) {
                UIkit.notify({
                    message: 'Ошибка отправки сообщения',
                    status: 'warning',
                    timeout: 3000,
                    pos: 'top-right'
                });
            }

        });

        e.preventDefault();
    });

    $(".form__submit > .submit__button").on("click", function (e) {
        var validator = new RegExp($(this).data("validator"));
        var input = $("#"+$(this).data("input"));
        if (!validator.test(input.val())) {
            input.parent().addClass("error");
        } else {
            var data = {
                value: input.val()
            };
            input.val("");

            $.ajax({
                url: "ajax-handler/",
                type: 'POST',
                data: {data: data},
                success: function (result) {
                    UIkit.offcanvas.hide([force = false]);
                    UIkit.notify({
                        message: (result == "success") ? 'Благодарим за обращение! В скором времени мы Вам перезвоним.' : 'Ошибка отправки сообщения',
                        status: result,
                        timeout: 3000,
                        pos: 'top-right'
                    });
                },
                error: function (result) {
                    UIkit.notify({
                        message: 'Ошибка отправки сообщения',
                        status: 'warning',
                        timeout: 3000,
                        pos: 'top-right'
                    });
                }

            });
        }
        e.preventDefault();
    });

});