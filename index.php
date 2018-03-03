<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Аксессуары для Chevrolet Lacetti">
    <meta name="keywords" content="Аксессуары Chevrolet Lacetti, решетка в бампер для Chevrolet Lacetti, решетка для Chevrolet Lacetti, решетка в бампер для шевроле, решетка для шевроле">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Samochod.dp.ua</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- MDL -->
    <link rel="stylesheet" href="mdl/material.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/css/style.css">

    <script type="text/javascript">
        function initMap() {
            var uluru = {
                lat: 48.4328318,
                lng: 35.0023488
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwKooVwGX0a6h_IWCvXCyAS9gyvKgwFGE&callback=initMap">
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <a id="intro"></a>
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Samochod.dp.ua</span>
                    <!-- Add spacer, to align navigation to the right -->
                    
                    <div class="mdl-layout-spacer"></div>
                    
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link my-nav-style-a" href="#intro">О нас</a>
                        <a class="mdl-navigation__link my-nav-style-a" href="#accessories">Запчасти Lacetti</a>
                        <a class="mdl-navigation__link my-nav-style-a" href="#delivery">Доставка и оплата</a>
                       
                        <a class="mdl-navigation__link my-nav-style-a" href="#feedback">Контакты</a>


                    </nav>
                    <div class="mdl-textfield__expandable-holder">
           <a class="mdl-navigation__link my-nav-style-a" href="#shoppingcart"><span class="glyphicon glyphicon-shopping-cart"><span class="num-of-item">0</span></span> </a>
        </div>
                </div>
            </header>
            <div class="mdl-layout__drawer mdl-layout--small-screen-only">
                <span class="mdl-layout-title">Samochod.dp.ua</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link my-nav-style-a" href="#intro">О нас</a>
                    <a class="mdl-navigation__link my-nav-style-a" href="#accessories">Запчасти Lacetti</a>
                    <a class="mdl-navigation__link my-nav-style-a" href="#delivery">Доставка и оплата</a>
                   
                    <a class="mdl-navigation__link my-nav-style-a" href="#feedback">Контакты</a>

                </nav>
            </div>
        </div>
        <div class="intro">

            <div class="caption">
                <h1>Автозапчасти и аксесcуары для Chevrolet Lacetti</h1>
                <p>+38 098-681-39-81 <img src="/images/iconviber.ico" alt="#"></p>
                <p>График работы: пн-сб 9:00-18:00</p>
            </div>
        </div>
        <div class="accessories">
            <a id="accessories"></a>
            <h4>Аксесcуары для Chevrolet Lacetti</h4>
            
            <div class="container">
                <div class="row">

                    <? require_once("scripts/accessories.php");
                                foreach($result as $accessory){?>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="thumbnail">
                                <img src="<?=$accessory['file_path'].'preview.jpg'?>" alt="#">
                                <div class="caption">
                                    <hr>
                                    <h5>
                                        <?=$accessory['title'];?>
                                    </h5>
                                    <p>
                                        <?=mb_substr($accessory['description'],0,160, 'UTF-8'),'...';?>
                                    </p>
                                    <hr>

                                    <button type="button" id="<?=$accessory['id'];?>" class="mdl-button mdl-js-button  mdl-button--primary" data-toggle="modal" data-target="#accessory-modal">Просмотр</button>
                                </div>
                            </div>
                        </div>
                        <?}
                           ?>

                            <!-- Modal -->
                            <div class="modal fade" id="accessory-modal" tabindex="-1" role="dialog" aria-labelledby="accessoryModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                                            <h5 class="modal-title" id="accessoryModalLabel"></h5>
                                            <hr>
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    <div class="item active">
                                                        <img src="" alt="#">
                                                    </div>

                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <h1></h1>
                                            <p></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Назад</button>
                                            <button type="button" class="btn btn-primary btn-cart" data-dismiss="modal" aria-label="Close"  id="">Отправить в корзину</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <!-- Modal -->
                            <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-labelledby="accessoryModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                                            <h5 class="modal-title" id="orderModalLabel">Форма заказа</h5>

                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" class="order-form">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="name" placeholder="Имя" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="surname" placeholder="Фамилия" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="region" placeholder="Область" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="city" placeholder="Город" required>
                                                    </div>

                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <label for="deliveryMethod" class="col-form-label"> Выберите способ доставки:</label>
                                                        <select name="deliveryMethod" id="deliveryMethod" class="form-control">
                                                              <option value="1">Новая почта</option>
                                                              <option value="2">Ин-тайм</option>
                                                              <option value="3">Самовывоз</option>
                                                          </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control adress" name="adress" placeholder="Номер и адрес отделения" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <label for="typeOfPayment" class="col-form-label"> Выберите способ оплаты:</label>
                                                        <select name="typeOfPayment" id="typeOfPayment" class="form-control">
              <option value="1">Наложенный платеж</option>
              <option value="2">Оплата на карту</option>
          </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <label for="phoneNumber">Номер телефона:</label>
                                                        <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="" value="+380" required pattern="(\+?\d[- .]*){12}?">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary send-order">Отправить</button>

                                            </form>

                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                </div>
            </div>
        </div>

        <div class="delivery">
              <a id="delivery"></a>

            <h1>Доставка и оплата</h1>
            <p>Доставка по территории Украины осуществляется перевозчиками:</p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 ">
                        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title nova_poshta">

                            </div>
                            <div class="mdl-card__supporting-text">
                                Отправка осуществляется в день заказа, если:
                                <ul>
                                    <li>Товар в наличии на складе;</li>
                                    <li>Заказ на сайте сделан до 18:00.</li>
                                </ul>


                                Забрать товар можно будет в ближайшем к Вам почтовом отделении через 1-3 дня после отправки. Оплата производится наложенным платежом либо предоплата на карту.
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://novaposhta.ua/delivery" target="_blank">
      Рассчитать сумму доставки
    </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 ">
                        <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title intime">
                            </div>
                            <div class="mdl-card__supporting-text">
                                Отправка осуществляется в день заказа, если:
                                <ul>
                                    <li>Товар в наличии на складе;</li>
                                    <li>Заказ на сайте сделан до 16:30.</li>

                                </ul>


                                Забрать товар можно будет в ближайшем к Вам почтовом отделении через 3-5 дня после отправки. Оплата производится наложенным платежом либо предоплата на карту.
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://intime.ua/ru-calc" target="_blank">
      Рассчитать сумму доставки
    </a>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <div class="pickup">

                <p>Забрать выбранный товар самостоятельно Вы можете в г. Днепр по адресу: ул. Титова 36 (ТЦ Appolo) по согласованию с менеджером. Оплата производится при получение товара.</p>
                <div id="map"></div>

             
            </div>
            
            
        </div>

        <div class="shoppingcart">
            <a id="shoppingcart"></a>
            <div class="total-price">
                <h5>Сумма заказа: 0 грн.</h5>
            </div>
            <div class="container">
                <div class="row">

                </div>
            </div>
            <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect order" data-toggle="modal" data-target="#order-modal" disabled>Оформить заказ</button>
        </div>
        <div class="feedback">
            <a id="feedback"></a>
            <h5>Есть вопросы? Можете отправить нам e-mail!</h5>
            <div class="feedback-form">
                <form action="" method="post">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label email">
                        <label class="mdl-textfield__label" for="email"><span class="glyphicon glyphicon-envelope"></span> Ваш email...</label>
                        <input class="mdl-textfield__input" type="email" name="email" id="email" required>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label subject">
                        <input class="mdl-textfield__input" type="text" name="subject" id="subject" required>
                        <label class="mdl-textfield__label" for="subject"><span class="glyphicon glyphicon-book"></span> Тема...</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label description">
                        <textarea class="mdl-textfield__input" type="text" rows="4" name="description" id="description" required></textarea>
                        <label class="mdl-textfield__label" for="description"><span class="glyphicon glyphicon-comment"></span> Ваш вопрос?</label>
                    </div>
                    <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored feedback-button">

                </form>
                <div class="feedback-msg"></div>
            </div>

        </div>
        <footer>
            <a href="https://www.olx.ua/list/user/2uQQk/"><img src="images/olx.png" alt=""></a>
        </footer>





    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="mdl/material.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>