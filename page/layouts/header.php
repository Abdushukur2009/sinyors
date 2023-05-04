<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSite</title>
    <?= links(["bootstrap.css", 'style.css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', 'https://fonts.gstatic.com', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"]);
    ?>
</head>

<body>
    <div class="container-fluid main-bg ">
        <div class="container main-bg py-3">
            <div class="navbar navbar-expand-md rel menu">
                <a href="#" class="menu-main-link"><img
                        src="<?= $conf['img_src'] ?>02e7f5b6320167812454720ff0bb6f99-removebg-preview.png"
                        width="100px">Games</a>
                <div class="collapse navbar-collapse justify-content-end" id="one">
                    <ul class="navbar-nav mr-4 text-center">
                        <li class="nav-item menu-link"><a href="#" class="nav-link mx-3 span-hover menu-link">HOME</a>
                        </li>
                        <li class="nav-item menu-link"><a href="#games"
                                class="nav-link mx-3 span-hover menu-link">GAMES</a>
                        </li>
                        <li class="nav-item menu-link"><a href="#images"
                                class="nav-link mx-3 span-hover menu-link">IMAGES</a>
                        </li>
                        <li class="nav-item menu-link"><a href="#contact"
                                class="nav-link mx-3 span-hover menu-link">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#one">
                    <span class="navbar-toggler-icon" style="border: 3px solid #EB1616; border-radius: 10px;"></span>
                </button>
            </div>
            <div class="image-dragon" style="background-image: url(<?= $conf['img_src'] ?>jostick.jpg);">
                <div class="row">
                    <div class="col">
                        <h1 class="welcome-text">"GameSite"ga Hushkelibsiz</h1>
                        <p class="welcome-text-lorem">
                            Maʼlumki, inson oʻz hayotida oʻyin, oʻqish, mehnat, dam olish kabi mashgʻulotlar bilan band
                            boʻladi. Inson hayotining dastlabki davrlarida Oʻ. asosiy faoliyat hisoblanadi, keyin esa u
                            oʻqish bilan baravar davom etadi, undan soʻng esa Oʻ. kamayib, uning oʻrnini oʻqish va
                            mehnat egallaydi. Odamzod tarixining dastlabki davrlarida Oʻ.lar hayotda muhim oʻrin tutgan.
                            Oʻ.lar yordamida insoniyat oʻsgan, ulgʻaygan, chiniqqan, jismonan baquvvat boʻlgan, aqlan,
                            ruhan rivojlangan, maʼnaviy kamol topgan.
                        </p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>