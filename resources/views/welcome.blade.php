<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>заголовок</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/Footer-with-button-logo.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#"><img class="store_logo" src="img/store.png" alt="store_logo"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">ГЛАВНАЯ</a></li>
                <li><a href="{{ route('home') }}">О НАС</a></li>
                <li><a href="#">КАТАЛОГ</a></li>
                <li><a href="#myFooter">КОНТАКТЫ</a></li>
                <li><a href="#reviews">ОТЗЫВЫ</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-6 col-offset-2">
                <h1>НАДЁЖНЫЕ</h1>
                <h2>ОТОПИТЕЛЬНЫЕ СИСТЕМЫ</h2>
                <h6>Предлагаем Вам ознакомиться с существующими видами систем отопления частного дома. Вы ознакомитесь с принципами и особенностями работы каждой конкретной системы отопления, сравните уровень затрат на ее установку и расходы в процессе эксплуатации.</h6>
                <button data-toggle="modal" href="#callback" type="button" class="btn">ЗАКАЗАТЬ ЗВОНОК</button>
            </div>


            <!--СЛАЙДЕР КАРУСЕЛЬ +СКРИПТ-->


            <div id="slider" class="owl-carousel">
                <div class="slide">
                    <img src="img/Slider.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/slider1.png" alt="">
                </div>
                <div class="slide">
                    <img src="img/Slider.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!--модальное окно-->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">ОСТАВЬТЕ ВАШ НОМЕР ТЕЛЕФОНА И МЫ ПЕРЕЗВОНИМ</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Номер телефона">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-send btn-primary">Отправить</button>
            </div>
        </div>
    </div>
</div>
<section class="about-us text-center bg-block" id="about">
    <div class="container">
        <div class="row">

            <h2 class="h2-after">НАШИ ПРЕИМУЩЕСТВА</h2>
            <div class="col-sm-3">
                <p class="first-item"><img src="img/dostavka.png" alt=""></p>
                <p class="second-item">Доставка <br> 1-2 дня</p>
            </div>
            <div class="col-sm-3">
                <p class="first-item"><img src="img/vnalichii.png" alt=""></p>
                <p class="second-item">Весь товар <br>всегда в наличии</p>
            </div>
            <div class="col-sm-3">
                <p class="first-item"><img src="img/garanty.png" alt=""></p>
                <p class="second-item">Гарантия <br>возврата и обмена</p>
            </div>
            <div class="col-sm-3">
                <p class="first-item"><img src="img/service.png" alt=""></p>
                <p class="second-item">Высокий <br>клиент-сервис</p>
            </div>
        </div>
    </div>
</section>
<section class="carousel center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel brand">

                    <div class="img-width"> <img src="img/brands/1.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/2.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/3.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/4.png" alt=""></div>
                    <div class="img-width"> <img src="img/brands/5.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/6.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/7.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/8.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/9.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/10.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/11.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/12.png" alt=""> </div>
                    <div class="img-width"> <img src="img/brands/13.png" alt=""> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container content">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item">Газовые котлы</a>
                <a href="#" class="list-group-item">Электрические котлы</a>
                <a href="#" class="list-group-item">Твёрдотоплевные котлы</a>
                <a href="#" class="list-group-item">Комбинированные котлы</a>
            </div>
        </div>
        <div class="col-md-8 products">
            <div class="row">
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/1.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Bosh</a>
                        </p>
                        <p class="product-desc">Газовый котел Bosch Gaz 6000 W WBN 18 C</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 1089 BYN</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/2.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Thermex</a>
                        </p>
                        <p class="product-desc">Газовый котел Thermex Xantus HM24</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 1181 BYN</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/3.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Bosh</a>
                        </p>
                        <p class="product-desc">Газовый котел Bosch Gaz 7000 W ZSC 24-3 MFA</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 1631 BYN</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/4.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Лемакс</a>
                        </p>
                        <p class="product-desc">Газовый котел Лемакс Премиум 12.5N</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 594 BYN</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/5.png" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Buderus</a>
                        </p>
                        <p class="product-desc">Газовый котел Buderus Logamax U072-24</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 1535 BYN</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/6.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Ariston</a>
                        </p>
                        <p class="product-desc">Газовый котел Ariston Clas EVO System 28 CF</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 1639 BYN</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/7.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Ariston</a>
                        </p>
                        <p class="product-desc">Газовый котел Ariston ALTEAS X 35 FF NG</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 2879 BYN</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/8.jpg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Buderus</a>
                        </p>
                        <p class="product-desc">Газовый котел Buderus Logamax U052-24К</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 2031 BYN</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product">
                        <div class="product-img">
                            <a href="#"><img class="image" src="img/gas/9.jpeg" alt=""></a>
                        </div>
                        <p class="product-title">
                            <a href="#">Ariston</a>
                        </p>
                        <p class="product-desc">Конденсационный котел Ariston GENUS EVO 35 FF</p>
                        <button class="btn order">Заказать</button>
                        <p class="product-price">Цена: 3536 BYN</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="reviews bg-block" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="h2-after">О нас в цифрах
                    <hr>
                </h2>
            </div>

            <div class="col-sm-3">
                <img src="img/onas/1.png" alt="">

            </div>

            <div class="col-sm-3 about">
                <img src="img/onas/2.png" alt="">
            </div>
            <div class="col-sm-3 about">
                <img src="img/onas/3.png" alt="">

            </div>
            <div class="col-sm-3 about">
                <img src="img/onas/4.png" alt="">
            </div>
        </div>
    </div>
</section>
<div class="certificate">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="col-md-4 text-center diplom">

                    <img class="img_flat" src="img/sertificate/sertificate1.png" alt="fire">
                    <h4>"Lorem ipsum dolor"</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium molestiae mollitia quos possimus inventore quibusdam harum quas nesciunt pariatur veritatis</p>
                </div>
                <div class="col-md-4 text-center diplom">
                    <img class="img_flat" src="img/sertificate/sertificate2.png" alt="fire">
                    <h4>"Laudantium molestiae"</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium molestiae mollitia quos possimus inventore quibusdam harum quas nesciunt pariatur veritatis</p>
                </div>
                <div class="col-md-4 text-center diplom">
                    <img class="img_flat" src="img/sertificate//sertificate3.png" alt="fire">
                    <h4>"Laudantium molestiae"</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium molestiae mollitia quos possimus inventore quibusdam harum quas nesciunt pariatur veritatis</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="reviews bg-block" id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="h2-after">Отзывы наших клиентов
                    <hr>
                </h2>
            </div>

            <div class="col-sm-3">
                <p class="comment">Александр <img src="img/avatar.png" alt=""></p>
                <p class="content">Отличный магазин, Брали Buderus Logamax, идеально подходит на время летнего отключения воды. На даче стоит накопительный, и особой разницы в температуре воды я не увидел. пользуюсь уже два года без нареканий, покупал по отзывам знакомых именно в этом магазине. Спасибо.</p>
            </div>
            <div class="col-sm-3">
                <p class="comment">Дмитрий <img src="img/avatar.png" alt=""></p>
                <p class="content">Отличный магазин, Брали Buderus Logamax, идеально подходит на время летнего отключения воды. На даче стоит накопительный, и особой разницы в температуре воды я не увидел. Спасибо.</p>
            </div>
            <div class="col-sm-3">
                <p class="comment">Владимир <img src="img/avatar.png" alt=""></p>
                <p class="content">Отличный магазин, Брали Buderus Logamax, идеально подходит на время летнего отключения воды. На даче стоит накопительный, и особой разницы в температуре воды я не увидел. пользуюсь уже два года без нареканий, покупал по отзывам знакомых именно в этом магазине. Спасибо.</p>
            </div>
            <div class="col-sm-3">
                <p class="comment">Пётр <img src="img/avatar.png" alt=""></p>
                <p class="content">Всё отлично. Вежливо и доходчиво объясняют. Бесплатная установка. Спасибо.</p>
            </div>
        </div>
    </div>
</section>
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h5>Информация</h5>
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>Контакты</h5>
                <ul>
                    <li><img src="img/%D0%BC%D1%82%D1%81.png" alt=""> +375(29) 334-34-34</li>
                    <li><img src="img/velcom.png" alt=""> +375(33) 334-34-34</li>
                    <li><img src="img/life.png" alt=""> +375(25) 334-34-34</li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h5>Наш адрес</h5>
                <ul>
                    <li>г.Гомель, ул.Советская 139</li>
                    <li>gomel.boiler@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© 2018 Copyright Kondratenko and Popovich </p>
    </div>
</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
