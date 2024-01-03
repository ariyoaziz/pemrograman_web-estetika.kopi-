<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodiee.Order</title>
    <link rel="icon" type="<?= base_url() ?>/image/png" href="" sizes="16x16">
    <link rel="stylesheet" href="<?= base_url() ?>/css/main.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="nav d-flex">
                <a href="#" class="logo">
                    <!-- <img src="<?= base_url() ?>/images/logo.svg" alt="Foodiee.order"> -->
                    <h3 style="color: #76453B;">Estetika.<span style="color: #43766C; font-weight: bold;text-decoration: underline;">kopi</span></h3>
                </a>
                <!-- Toggle bar -->

                <div class="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="navigation-bar">
                    <ul>
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#services">services</a></li>
                        <li><a href="#getapp">get app</a></li>
                        <li><a href="#booknow" class="btn book-btn ">Book now</a></li>
                        <li class="cart"><img src="<?= base_url() ?>/images/cart-logo.svg" alt="facebook"></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <!-- Home  -->
        <section class="home" id="home">
            <div class="container">
                <div class="home-wrapper d-grid">
                    <div class="col-left mt-2">
                        <h3>coffee shop</h3>
                        <h1>Take Home Peace,<br> One Sip</h1>

                        <p>bahwa setiap sips kopi memiliki kekuatan untuk membawa ketenangan, memberikan momen damai yang dapat diambil dan dinikmati di mana pun Anda berada. Tagline ini menciptakan citra kebahagiaan dan ketenangan yang dapat ditemukan dalam pengalaman sederhana menikmati secangkir kopi. </p>

                        <div class="search-food d-flex">
                            <input type="text" placeholder="Search coffee...">
                            <a href="#" class="btn"> Search</a>
                        </div>
                        <div class="social-icons d-flex">
                            <a href="https://facebook.com/"> <img src="<?= base_url() ?>/images/facebook.svg" alt="facebook"></a>
                            <a href="https://twitter.com/"> <img src="<?= base_url() ?>/images/twitter.svg" alt="twitter"></a>
                            <a href="https://instagram.com/"> <img src="<?= base_url() ?>/images/instagram.svg" alt="Instagram"></a>
                        </div>

                    </div>
                    <div class="col-right">
                        <img data-tilt src="<?= base_url() ?>/images/hero-img.png" alt="Home image" class="img-fluid">
                    </div>
                </div>
            </div>

        </section>
        <!-- menu -->
        <section class="menu ptb-80" id="menu">
            <div class="container">
                <div class="section-title">
                    <h3>Menu</h3>
                    <h2>Signature Dishes </h2>
                    <p>Dengan rasa yang istimewa dan presentasi yang menarik, Signature Dishes menjadi daya tarik utama yang memperkaya pengalaman bersantai di kedai kopi. </p>

                </div>
                <div class="menu-items d-grid">
                    <!-- item -->
                    <div class="item">
                        <img src="<?= base_url() ?>/images/Espresso Vanilla Bliss.jpg" alt="pizza" class="img-fluid">
                        <div class="item-content">
                            <h4>Espresso Vanilla Bliss</h4>
                            <p>Eat luctus est vestibulum vel. Integer pulvinar <br> nibh quis diam ullamcorper,</p>
                            <div class="action d-flex">
                                <span class="price">
                                    $ &nbsp; 10.22
                                </span>
                                <a href="#" class="cart-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <img src="<?= base_url() ?>/images/CappuccinoCaramelDelight.jpg" alt="burger" class="img-fluid">
                        <div class="item-content">
                            <h4>Cappucino caramel</h4>
                            <p>Eat luctus est vestibulum vel. Integer pulvinar <br> nibh quis diam ullamcorper,</p>
                            <div class="action d-flex">
                                <span class="price">
                                    $ &nbsp; 9.99
                                </span>
                                <a href="#" class="cart-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <img src="<?= base_url() ?>/images/chocolate-cake-tiramisu.jpg" alt="salad" class="img-fluid">
                        <div class="item-content">
                            <h4>Chocolate cake</h4>
                            <p>Eat luctus est vestibulum vel. Integer pulvinar <br> nibh quis diam ullamcorper,</p>
                            <div class="action d-flex">
                                <span class="price">
                                    $ &nbsp; 10.22
                                </span>
                                <a href="#" class="cart-btn">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view-more">
                    <a href="#" class="btn">View more</a>
                </div>
            </div>
        </section>
        <!-- about -->
        <section class="about ptb-80" id="about">
            <div class="container">
                <div class="content-col-wrapper d-grid">
                    <div class="content-col">
                        <h3>About us</h3>
                        <h2>The Finest Coffee <br> in Your City</h2>
                        <p> Dekorasi interior kedai ini didesain dengan gaya yang modern dan nyaman, memberikan suasana yang cocok untuk bersantai atau berkumpul bersama teman. Dengan pencahayaan yang lembut dan desain yang estetis, tempat ini menciptakan suasana yang mengundang dan membuat pengunjung merasa nyaman.
                        </p>
                        <p>Menu kopi di kedai ini tidak hanya mencakup varietas kopi berkualitas tinggi dari berbagai daerah, tetapi juga menampilkan minuman kopi khas atau Signature Drinks yang menjadi keistimewaan tempat ini. Para barista terampil dan berpengetahuan tinggi siap memberikan pengalaman kopi yang tak terlupakan, dengan kemampuan untuk meracik kopi sesuai selera pengunjung.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                    <div class="content-col-image">
                        <img data-tilt src="<?= base_url() ?>/images/interior.jpg" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- Our services -->
        <section class="services ptb-80" id="services">
            <div class="container">
                <div class="content-col-wrapper d-grid">
                    <div class="content-col-image">
                        <img data-tilt src="<?= base_url() ?>/images/service.jpg" alt="services" class="img-fluid">
                    </div>
                    <div class="content-col">
                        <h3>Our services</h3>
                        <h2>Book yourd <br>Next Order Now</h2>


                        <p>Anda dapat menjelajahi berbagai pilihan tempat mulai dari ruang pertemuan yang nyaman hingga lokasi pesta yang megah, semua hanya dalam beberapa klik. Kami menawarkan berbagai jenis acara, mulai dari pernikahan, pertemuan bisnis, hingga acara sosial. Setiap tempat yang terdaftar di platform kami telah melewati seleksi ketat untuk memastikan kualitas dan kenyamanan yang optimal.</p>

                        <p>Selain itu, memberikan fitur-fitur tambahan seperti estimasi biaya, ulasan pengguna, dan foto-foto berkualitas tinggi sehingga Anda dapat membuat keputusan yang tepat sesuai dengan kebutuhan acara Anda. Dengan layanan pelanggan yang responsif, kami berkomitmen untuk memberikan pengalaman pemesanan yang tak terlupakan</p>
                        <a href="#" class="btn">read more</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- Get application -->
        <section class="getapp ptb-80" id="getapp">
            <div class="container">
                <div class="getapp-wrapper d-grid">
                    <div class="img-col">
                        <img data-tilt src="<?= base_url() ?>/images/cta.png" alt="get app" class="img-fluid">
                    </div>
                    <div class="getapp-content">
                        <h3>10% Cashback</h3>
                        <h2>Now you can order <br>
                            from mobile </h2>

                        <p>platform pemesanan acara yang mudah digunakan. Temukan dan pesan lokasi acara impian Anda tanpa kerumitan. Dengan berbagai pilihan tempat dan fitur estimasi biaya, ulasan pengguna, serta layanan pelanggan responsif, Book Yourd memastikan pengalaman pemesanan acara yang praktis dan tanpa stres. Segera pesan sekarang dan raih momen spesial Anda. </p>

                        <a href="#"><img src="<?= base_url() ?>/images/google-play.svg" alt="play store" class="img-fluid"></a>
                        <a href="#"><img src="<?= base_url() ?>/images/apple-store.svg" alt="apple store" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-wrapper d-flex">
                <div class="footer-about">
                    <a href="#" class="footer-logo">
                        <h3 style="color: #76453B;">Estetika.<span style="color: #43766C; font-weight: bold;text-decoration: underline;">kopi</span></h3>
                    </a>
                    <p>
                        bahwa setiap sips kopi memiliki kekuatan untuk membawa ketenangan, memberikan momen damai yang dapat diambil dan dinikmati di mana pun Anda berada. Tagline ini menciptakan citra kebahagiaan dan ketenangan yang dapat ditemukan dalam pengalaman sederhana menikmati secangkir kopi.

                    </p>
                </div>
                <div class="footer-col">
                    <h5>Useful links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">Get Application</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">terms & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><a href="#">+92 123211</a></li>
                        <li><a href="ariyoaziz.partama@gmail.com">ariyoaziz.paratama@gmail.com</a></li>
                        <li><a href="ariyoaziz.paratama@gmail.com">ariyoaziz.paratama@gmail.com</a></li>
                        <li><a href="#">Cashback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Social media </h5>
                    <ul>
                        <li><a href="https://facebook.com/">facebook</a></li>
                        <li><a href="https://twittwer.com/">twitter</a></li>
                        <li><a href="https://instagram.com/">instagram</a></li>
                        <li><a href="https://youtube.com/">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy; 2024 <a href="#">| Ariyo Aziz Pratama </a>- 5220411184</p>
                <p>Pemrograman Web</p>
                <br><br>
            </div>
        </div>
    </footer>

    <!-- Scroll up -->
    <a href="javascript:void(0)" class="scrollup">
        <img src="<?= base_url() ?>/images/rocket.svg" alt="arrow up">
    </a>
</body>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/gumshoe/dist/gumshoe.polyfills.min.js"></script>
<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
<script src="<?= base_url() ?>/js/main.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

</html>