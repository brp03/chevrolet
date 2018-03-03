var price = 0;

$(document).ready(function () {

    $(function () {
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop != 0)
                $('.mdl-layout__header').stop().animate({
                    'opacity': '0.6'
                }, 400);
            else
                $('.mdl-layout__header').stop().animate({
                    'opacity': '1'
                }, 400);
        });

        $('.mdl-layout__header').hover(
            function (e) {
                var scrollTop = $(window).scrollTop();
                if (scrollTop != 0) {
                    $('.mdl-layout__header').stop().animate({
                        'opacity': '1'
                    }, 400);
                }
            },
            function (e) {
                var scrollTop = $(window).scrollTop();
                if (scrollTop != 0) {
                    $('.mdl-layout__header').stop().animate({
                        'opacity': '0.6'
                    }, 400);
                }
            }
        );
    });
    $(".mdl-layout__header").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1000);

    });

    $('.thumbnail').on('click', 'button', function () {
        var accessoryId = $(this).attr('id');
        $.ajax({
            url: 'accessory.php',
            method: 'post',
            dataType: 'json',
            data: {
                id: accessoryId
            }
        }).done(function (result) {
            $("#accessory-modal .modal-title").text(result[0]['title']);
            $("#accessory-modal .modal-body h1").text("Цена: " + result[0]['price'] + " грн.");
            $("#accessory-modal .modal-body p").text(result[0]['description']);
            $("#accessory-modal .carousel-inner div").remove();
            $("#accessory-modal .carousel-indicators li").remove();
            for (var i = 0; i < result[0]['images'].length; i++) {
                if (i == 0) {
                    $('.carousel').carousel();
                    $("#accessory-modal .carousel-indicators").append("<li class='active' data-target='#carousel-example-generic' data-slide-to='" + i + "'></li>");
                    $("#accessory-modal .carousel-inner").append("<div class='item active'><img src='" + result[0]['file_path'] + result[0]['images'][i] + "' alt='#' style='max-width:500px; height:200px'></div>");
                } else {
                    $('.carousel').carousel();
                    $("#accessory-modal .carousel-indicators").append("<li data-target='#carousel-example-generic' data-slide-to='" + i + "'></li>");
                    $("#accessory-modal .carousel-inner").append("<div class='item'><img src='" + result[0]['file_path'] + result[0]['images'][i] + "' alt='#'></div>");
                }

            }
            $('.btn-cart').attr('id', result[0]['id']);
        }).fail(function (result) {

        });
    });
    $('.btn-cart').on('click', function () {
        var cartId = $(this).attr('id'),
            numOfItems=parseInt($(".num-of-item").text());
        
        $.ajax({
            url: 'shoppingcart.php',
            method: 'post',
            dataType: 'json',
            data: {
                id: cartId
            }
        }).done(function (result) {
            $(".num-of-item").text(numOfItems+1);
            price += parseInt(result[0]['price']);
            $('.total-price h5').text("Сумма заказа: " + price + " грн.");
            $('.shoppingcart .container .row').append("<div class='col-sm-6 col-md-4 col-lg-4 cart-accessory'><div class='thumbnail'><img src='" + result[0]['file_path'] + "preview.jpg" + "'><div class='caption'><hr><h5>" + result[0]['title'] + "</h5><p>Цена: <span>" + result[0]['price'] + "</span> грн.</p><button class='mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect button-delete'>Убрать из корзины</button></div></div></div>");
            $(".order").prop("disabled", false);

        });
    });
    $('.shoppingcart').on('click', '.button-delete', function () {
        var numOfItems=parseInt($(".num-of-item").text());
        $(".num-of-item").text(numOfItems-1);
        price = price - parseInt($(this).prev('p').find('span').text());
        $(this).parents('.cart-accessory').remove();
        $('.total-price h5').text("Сумма заказа: " + price + " грн.");
        if ($(".shoppingcart .thumbnail").length == 0) {
            $(".order").prop("disabled", true);
        } else {
            $(".order").prop("disabled", false);
        }
    });
    $('.order-form').on('submit', function (e) {
        e.preventDefault();
        var arrOfOrders = [],
            name = $("#order-modal input[name='name']").val(),
            surname = $("#order-modal input[name='surname']").val(),
            region = $("#order-modal input[name='region']").val(),
            city = $("#order-modal input[name='city']").val(),
            deliveryMethod =
            $("#deliveryMethod option[value=" + $("#deliveryMethod").val() + "]").text(),
            adress = $("#order-modal input[name='adress']").val(),
            typeOfPayment = $("#typeOfPayment option[value=" + $("#typeOfPayment").val() + "]").text(),
            phoneNumber = $("#order-modal input[name='phoneNumber']").val();
        $('.shoppingcart .thumbnail h5').each(function (index) {
            arrOfOrders.push($(this).text());
        });
        $.ajax({
            url: 'order.php',
            method: 'post',
            
            data: {
                name: name,
                surname: surname,
                region: region,
                city: city,
                deliveryMethod: deliveryMethod,
                adress: adress,
                typeOfPayment: typeOfPayment,
                phoneNumber: phoneNumber,
                arrOfOrders: arrOfOrders
            }
        }).done(function(result) {
            $("#order-modal .modal-footer").empty();
            $("#order-modal .modal-footer").append(result);
        });
    });

    $("#deliveryMethod").on('click', function () {
        if ($('#deliveryMethod').val() == 3) {
            $('.adress').val("г. Днепр, ул. Титова 36");
            $('.adress').prop("disabled", true);
            $("#typeOfPayment option:nth-child(1)").text("Перевод на карту");
            $("#typeOfPayment option:nth-child(2)").text("Наличным расчетом");
        } else {
            $('.adress').attr("placeholder", "Номер отделения");
            $('.adress').val("");
            $('.adress').prop("disabled", false);
            $("#typeOfPayment option:nth-child(1)").text("Наложенный платеж");
            $("#typeOfPayment option:nth-child(2)").text("Оплата на карту");
        }
    });
    $(".feedback-form").on("submit",function(e){
        e.preventDefault();
        var usermail = $(".feedback-form input[name='email']").val(),
            subject = $(".feedback-form input[name='subject']").val(),
            description = $(".feedback-form textarea[name='description']").val();
        $.ajax({
            url: 'feedback.php',
            method: 'post',
            data: {
                usermail: usermail,
                subject: subject,
                description: description
            }
        }).done(function(result) {
            $(".feedback-msg").empty();
            $(".feedback-msg").append(result);
        });
    });

});