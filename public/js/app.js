$(document).ready(function() {

    if ($('#form_feedback').length) {
        $('#form_feedback').on('submit', function(e){
            ajaxFormSubmit(e, feedbackSuccess);
        })
    }

    if ($('#form_recall').length) {
        $('#form_recall').on('submit', function(e){
            ajaxFormSubmit(e, recallSuccess);
        })
    }

    if ($('#form_consultation').length) {
        $('#form_consultation').on('submit', function(e){
            ajaxFormSubmit(e, consultationSuccess);
        })
    }

    $('#our-mission').animate({opacity: 1}, 500);
    $('#our-mission').addClass("animated fadeIn");

    $('#land-department').animate({opacity: 1}, 500);
    $('#land-department').addClass("animated fadeIn");

    $('#building-department').animate({opacity: 1}, 500);
    $('#building-department').addClass("animated fadeIn");

    $('#investing-department').animate({opacity: 1}, 500);
    $('#investing-department').addClass("animated fadeIn");

    $('#about-us').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#about-us .row').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).addClass("animated flipInX");
        }
    });

    $('#we-know-truth').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#we-know-truth .row').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).addClass("animated slideInLeft");
        }
    });

    $('#satisfaction').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#satisfaction .row').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).addClass("animated slideInDown");
        }
    });

    $('#advices').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#advices .sketch-left').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated slideInLeft");
        }
    });

    $('#advices .sketch-right').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated slideInRight");
        }
    });

    $('#advices .content-text').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).addClass("animated slideInUp");
        }
    });

    $('#money').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#money .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInUp");
        }
    });

    $('#unity').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#unity .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInLeft");
        }
    });

    $('#partners').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#partners .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInUp");
        }
    });

    $('#recalls').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#recalls .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInRight");
        }
    });

    $('#appointment').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#appointment .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInRight");
        }
    });

    $('#cottage-or-land').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#cottage-or-land .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInRight");
        }
    });

    $('#steps').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#steps .container').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInRight");
        }
    });

    $('#materials').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#materials .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInRight");
        }
    });

    $('#investing').scrollfire({
        offset: 100,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
        }
    });

    $('#investing .row').scrollfire({
        offset: 200,
        onBottomIn: function (elm, distance_scrolled) {
            $(elm).animate({opacity: 1}, 500);
            $(elm).addClass("animated fadeInRight");
        }
    });

});

function ajaxFormSubmit(e, successFunction)
{
    e.preventDefault();

    var form = e.target;

    // Место для отображения ошибок в форме
    var formStatus = $(form).find('.form-status');
    if (formStatus.length) {
        formStatus.html('');
    }

    // Анимированная кнопка при отправки формы
    var formButton = $(form).find('.form-button');
    if (formButton.length) {
        formButton.append(' <i class="fa fa-spinner fa-spin"></i>');
        formButton.prop('disabled', true);
    }

    $.ajax({
        method: $(form).attr('method'),
        url: $(form).attr('action'),
        data: $(form).serialize(),
        dataType: 'json',
        success: function (data)
        {
            successFunction(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            if (formStatus.length && jqXHR.status == 422) // Если статус 422 (неправильные входные данные) то отображаем ошибки
            {
                var formStatusText = "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><div class='text-uppercase'>" + (formStatus.data('errorText') ? formStatus.data('errorText') : 'Ошибка!') + "</div><ul>";

                $.each(jqXHR.responseJSON, function (index, value) {
                    formStatusText += "<li>" + value + "</li>";
                });

                formStatusText += "</ul></div>";
                formStatus.html(formStatusText);
                $('body').scrollTo(formStatus, 500);
            }
            else
            {
                sweetAlert("", "Ошибка при запросе к серсеру", 'error');
            }
        },
        complete: function (jqXHR, textStatus)
        {
            if (formButton.length)
            {
                formButton.find('i').remove();
                formButton.prop('disabled', false);
            }
        }
    });
}

function feedbackSuccess(data)
{
    showNoty(data.message, 'success');
}

function recallSuccess(data)
{
    $('#recallModal').modal('hide');
    showNoty(data.message, 'success');
}

function consultationSuccess(data)
{
    showNoty(data.message, 'success');
}

function showNoty(message, type)
{
    noty({
        text: message,
        type: type,
        layout: 'topCenter',
        theme: 'relax',
        timeout: 5000,
        animation: {
            open: 'animated flipInX', // jQuery animate function property object
            close: 'animated flipOutX', // jQuery animate function property object
            easing: 'swing', // easing
            speed: 500 // opening & closing animation speed
        }
    });
}