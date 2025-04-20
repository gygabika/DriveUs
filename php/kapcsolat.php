<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/kapcsolat.css">
    <title>DRIVEUS - KAPCSOLAT</title>
</head>
<body>
    <header>
        <h1 id="cegnev">DriveUs</h1>
        <nav>
            <a href="./index.php">FŐOLDAL</a>
            <a href="./autok.php">AUTÓK</a>
            <a href="./profilom.php">PROFILOM</a>
            <a href="./berleseim.php">BÉRLÉSEIM</a>
        </nav>
        <div id="google_translate_element"></div>
        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'hu'}, 'google_translate_element');
            }
        </script>
    </header>
    <main>
        <section class="intro">
            <h1>Kapcsolatfelvétel a DriveUs-szal</h1>
            <p>Lépjen kapcsolatba velünk bármilyen kérdéssel vagy kéréssel! Ügyfélszolgálatunk készséggel áll rendelkezésére, hogy segítsen autóbérlési igényeivel kapcsolatban.</p>
        </section>
        <section class="contact-container">
            <div class="contact-card">
                <h4>Elérhetőségeink</h4>
                <p>Email: <a href="mailto:driveus.car.rent@gmail.com">driveus.car.rent@gmail.com</a></p>
                <p>Telefon: +36 1 234 5678</p>
                <p>Cím: 1052 Budapest, Luxus utca 1.</p>
            </div>
            <div class="contact-card">
                <h4>Nyitvatartás</h4>
                <p>Hétfő-Péntek: 8:00 - 18:00</p>
                <p>Szombat: 9:00 - 14:00</p>
                <p>Vasárnap: Zárva</p>
            </div>
            <div class="contact-card">
                <h4>Közösségi Média</h4>
                <p>Kövessen minket a legfrissebb ajánlatokért!</p>
                <a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">Twitter</a>
            </div>
            <div class="contact-form">
                <h4>Üzenet Küldése</h4>
                <form id="contact-form">
                    <label for="name">Név:</label>
                    <input type="text" id="name" required>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" required>
                    <label for="message">Üzenet:</label>
                    <textarea id="message" rows="5" required></textarea>
                    <button type="submit">Küldés</button>
                </form>
            </div>
        </section>
        <section class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.662794300614!2d19.050334315611!3d47.497912979177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc3b1d4e4e5d%3A0x3e7b8e5f1e8e4e5d!2sBudapest%2C%20Luxus%20utca%201%2C%201052!5e0!3m2!1shu!2shu!4v1698765432100!5m2!1shu!2shu" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>
    <footer>
        <img src="../assetts/logo.jpg" alt="DriveUs Logo" id="footer-img">
        <p id="email">Vegye fel velünk a kapcsolatot: <a href="mailto:driveus.car.rent@gmail.com">driveus.car.rent@gmail.com</a></p>
        <p id="footer_p">© 2025 DriveUs - Luxus autóbérlés</p>
    </footer>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="../js/kapcsolat.js"></script>
</body>
</html>