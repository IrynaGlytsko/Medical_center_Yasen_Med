<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/405933996c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Медицинский центр "ЯСЕНЬ МЕД"</title>
</head>

<body>

    <!-- Header -->
    <header class="header">
        <div class="header__top header__height">
            <div class="phone header__height__phone">
                <span class="a1">А1</span>
                <a href="tel:+375296975700" class="a1_phone">+375 (29) 697-57-00</a>

                <span class="mts">МТС</span>
                <a href="tel:+375298483388" class="mts_phone">+375 (29) 848-33-88</a>

                <i class="fas fa-phone-alt"></i>
                <a href="tel:+375225700077" class="city_phone">
                    +375 (225) 7-000-77</a>

                <i class="fas fa-map-marker-alt"></i>
                <a href="https://goo.gl/maps/BBta9sPV344u8Y6j7" target="_blank" class="address">г.Бобруйск, пер.Революционный, д.3а</a>

                <span class="working">ПН-ПТ 08:00-19:00, СБ 08:00-12:00, ВС - выходной</span>
            </div>
        </div>

        <div class="header__bottom header__bottom__height">
            <div class="logo">
                <img src="img/logo-mini.png" alt="Логотип ЯСЕНЬ МЕД" />
            </div>

            <nav class="nav nav__height" id="nav">
                <a href="index.html" class="nav__link height_nav">Главная</a>
                <a href="about.html" class="nav__link height_nav">О нас</a>
                <a href="services.html" class="nav__link height_nav">Услуги</a>
                <a href="doctors.html" class="nav__link height_nav">Врачи</a>
                <a href="contacts.html" class="nav__link height_nav">Контакты</a>
            </nav>
        </div>

        <!-- Burger navigation -->
        <div class="burger__nav">
            <div class="burger__logo">
                <img src="img/logo-mini.png" alt="Логотип ЯСЕНЬ МЕД" />
            </div>

            <nav class="nav nav__height navig">
                <ul class="header__list">
                    <li class="header__burger__item burger__link">
                        <span class="a1">А1</span>
                        <a href="tel:+375296975700" class="a1_phone fsb">+375 (29) 697-57-00</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <span class="mts">МТС</span>
                        <a href="tel:+375298483388" class="mts_phone fsb">+375 (29) 848-33-88</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+375225700077" class="city_phone fsb">
                            +375 (225) 7-000-77</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <a href="index.html" class="nav__link height_nav">Главная</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <a href="about.html" class="nav__link height_nav">О нас</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <a href="services.html" class="nav__link height_nav">Услуги</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <a href="doctors.html" class="nav__link height_nav">Врачи</a>
                    </li>
                    <li class="header__burger__item burger__link">
                        <a href="contacts.html" class="nav__link height_nav">Контакты</a>
                    </li>
                </ul>

                <div class="header__nav-close">
                    <span class="header__nav-close-line"></span>
                    <span class="header__nav-close-line"></span>
                </div>
            </nav>

            <div class="header__burger burger">
                <span class="burger__line burger__line_first"></span>
                <span class="burger__line burger__line_second"></span>
                <span class="burger__line burger__line_third"></span>
            </div>
        </div>
        <!-- /.burger navigation -->
    </header>
    <!-- /.header -->

    <!-- Intro -->
    <div class="intro">
        <div class="slide" style="background-image: url(img/special_offer/special_offer_6.jpg)">
            <h3>
                <a href="services.html" class="special_offer">Лабораторная диагностика</a>
            </h3>
        </div>

        <div class="slide active" style="background-image: url(img/special_offer/special_offer_5.jpg)">
            <h3>
                <a href="services.html" class="special_offer">Медицинские услуги</a>
            </h3>
        </div>

        <div class="slide" style="background-image: url(img/special_offer/special_offer_3.jpg)">
            <h3>
                <a href="doctors.html" class="special_offer">Врачебный состав</a>
            </h3>
        </div>
    </div>
    <!-- /.intro -->

    <!-- About -->
    <section class="section">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">
                    Почему большинство клиентов доверяют именно нам?
                </h3>
                <h2 class="section__title">Особенности</h2>
                <div class="section__text">
                    <p>
                        Наличие в центре собственной многопрофильной
                        клинико-диагностической лаборатории позволяет получать результаты
                        исследований в кратчайшие сроки, выявлять заболевания на ранней
                        стадии развития и назначать эффективное лечение
                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="img/card__img.png" alt="#" />
                        </div>
                        <h4 class="card__title">Профессионализм</h4>
                        <div class="card__text">
                            <p>
                                Врачи нашего центра имеют многолетний опыт работы, владеют
                                современными методами диагностики, лечения и постоянно
                                повышают свой профессиональный уровень
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="img/card__img.png" alt="#" />
                        </div>
                        <h4 class="card__title">Скорость работы</h4>
                        <div class="card__text">
                            <p>
                                Возможности лаборатории позволяют проводить исследования
                                непосредственно в нашем центре, что обеспечивает получение
                                результатов анализов в минимальные сроки
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card__item">
                    <div class="card__inner">
                        <div class="card__img">
                            <img src="img/card__img.png" alt="#" />
                        </div>
                        <h4 class="card__title">Качество услуг</h4>
                        <div class="card__text">
                            <p>
                                Наш медицинский центр оснащен самым современным оборудованием
                                для проведения лабораторных исследований, а также УЗИ-сканером
                                экспертного класса. Приходите и убедитесь в этом сами
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.about -->

    <!-- Services -->
    <section class="section__services">
        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">Работаем по следующим направлениям</h3>
                <h2 class="section__title">Наши услуги</h2>
            </div>

            <div class="services">
                <div class="services__item">
                    <div class="services__img">
                        <img src="img/bc_img.png" alt="#" />
                    </div>
                    <div class="services__content">
                        <div class="services__name">Гинекология</div>
                        <div class="services__text">
                            Прием врачей по вопросам невынашивания беременности, бесплодию,
                            подбору средств контрацепции и методов, позволяющих сохранить
                            здоровье и энергичность в менопаузальный период,
                            специализированные процедуры такие как кольпоскопия, УЗИ, анализ
                            крови, мазки на флору и другие виды работ
                        </div>
                    </div>
                </div>

                <div class="services__item">
                    <div class="services__img">
                        <img src="img/bc_img.png" alt="#" />
                    </div>
                    <div class="services__content">
                        <div class="services__name">Узи-диагностика</div>
                        <div class="services__text">
                            Ультразвуковое исследование (УЗИ) — неинвазивное исследование
                            организма человека с помощью ультразвуковых волн. К услугам
                            пациентов Медицинского центра «Ясень Мед » —
                            высококвалифицированное ультразвуковое исследование органов
                            брюшной полости, мочеполовой системы, щитовидной железы
                        </div>
                    </div>
                </div>

                <div class="services__item">
                    <div class="services__img">
                        <img src="img/bc_img.png" alt="#" />
                    </div>
                    <div class="services__content">
                        <div class="services__name">Урология</div>
                        <div class="services__text">
                            В нашем центре вы можете получить помощь профессионала-уролога
                            при мочекаменной болезни, аденоме предстательной железы,
                            простатите. Сделать УЗИ мочеполовой системы
                        </div>
                    </div>
                </div>

                <div class="services__item">
                    <div class="services__img">
                        <img src="img/bc_img.png" alt="#" />
                    </div>
                    <div class="services__content">
                        <div class="services__name">Детский невролог</div>
                        <div class="services__text">
                            Детский врач невролог специализируется на диагностике и лечении
                            заболеваний еще не окрепшей десткой нервной системы.
                            Консультация по заболеваниям на ранней стадии
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.services -->

    <!-- Doctors -->
    <section class="section__doctors">

        <div class="container">
            <div class="section__header">
                <h3 class="section__suptitle">Высококвалифицированный персонал</h3>
                <h2 class="section__title">Врачебный состав</h2>
            </div>

            <div class="doctors">
                <?php
                $doctors = mysqli_query($connect, query: "SELECT * FROM `doctors`");
                $doctors = mysqli_fetch_all($doctors);
                foreach ($doctors as $doctors) {
                ?>

                    <div class="doctors__item">
                        <div class="doctors__inner">
                            <div class="doctors__img">
                                <img src="img/doctors/doctor_5.png" alt="#" />
                            </div>
                            <h4 class="doctors__title"><?= $doctors[2] ?></h4>
                            <h5 class="doctors__subtitle"><?= $doctors[3] ?></h5>
                            <div class="doctors__text">
                                <p><?= $doctors[4] ?></p>
                            </div>
                        </div>
                    </div>

                <?php

                }
                ?>

            </div>

        </div>

    </section>
    <!-- /.doctors -->

    <!-- Map -->
    <section class="section__map">
        <div class="container">
            <div class="map">
                <h2 class="map__title">
                    <i class="fas fa-map-marker-alt ffas"></i>
                    <a href="https://goo.gl/maps/BBta9sPV344u8Y6j7" target="_blank">Мы на карте</a>
                </h2>
            </div>
        </div>
    </section>
    <!-- /.map -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__info">
                    <div class="footer__logo">
                        <img src="img/logo-mini.png" alt="Логотип ЯСЕНЬ МЕД" />
                    </div>
                    <div class="footer__text">
                        <p>
                            Уже много лет мы занимаемся исследованием и дальнейшим лечением
                            опасных вирусных заболеваний. Помогаем предотвратить
                            распространение забоевания. В состав нашей команды входят лучшие
                            доктора нашего города. Мы всегда рады сотрудничать.
                        </p>
                    </div>
                </div>

                <div class="footer__contacts">
                    <h3 class="footer__title">Контакты</h3>
                    <div class="footer__a1">
                        <span class="a1 fs">А<sup>1</sup></span>
                        <a href="tel:+375296975700" class="a1_phone fs">+375 (29) 697-57-00</a>
                    </div>
                    <div class="footer__mts">
                        <span class="mts fs">МТС</span>
                        <a href="tel:+375298483388" class="mts_phone fs">+375 (29) 848-33-88</a>
                    </div>
                    <div class="footer__sity">
                        <i class="fas fa-phone-alt fs"></i>
                        <a href="tel:+375225700077" class="city_phone fs">
                            +375 (225) 7-000-77</a>
                    </div>
                    <div class="footer__address">
                        <i class="fas fa-map-marker-alt fs"></i>
                        <a href="https://goo.gl/maps/BBta9sPV344u8Y6j7" target="_blank" class="address fs">г.Бобруйск, пер.Революционный, д.3а</a>
                    </div>
                    <div class="footer__message">
                        <div class="social__content">
                            <a href="https://instagram.com/yasenmed.bobruisk?igshid=YmMyMTA2M2Y=" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="footer__email">
                    <h3 class="footer__title">Напишите нам</h3>
                    <form action="/" method="post" class="subscribe">
                        <input type="email" name="name" placeholder="Ваш Email" class="subscribe__email" />
                        <textarea name="text" cols="40" rows="5" placeholder="Текст сообщения" class="subscribe__text"></textarea>
                        <button class="subscribe__btn" type="submit">Отправить</button>
                    </form>
                </div>
            </div>

            <div class="copyright">
                <div class="logo__img">
                    <img src="img/logo_jasen1.png" alt="Логотип ЯСЕНЬ МЕД" />
                </div>
                <div class="content">2022 © «Медицинский Центр "ЯСЕНЬ МЕД"»</div>
            </div>
        </div>
    </footer>
    <!-- /.footer -->

    <a href="#" class="scrollup up">&#8593;</a>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>