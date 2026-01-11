<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Junior PHP Developer</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- JS -->
    <script src="frontend/main.js" defer></script>
</head>
<body>

<nav class="navbar">
    <div class="logo">Portfolio</div>

    <ul class="nav-links">
        <li><a href="#about">O mně</a></li>
        <li><a href="#skills">Dovednosti</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
    </ul>

    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<header class="hero">
    <h1>Jan Novák</h1>
    <p>Junior PHP / Web Developer</p>
    <a href="#kontakt" class="btn">Kontaktovat</a>
</header>

<section id="about">
    <h2>O mně</h2>
    <p>
        Jsem absolvent se zaměřením na tvorbu webových aplikací.
        Pracuji s PHP, HTML, CSS a JavaScript a hledám svou první
        juniorní pozici.
    </p>
</section>

<section id="skills">
    <h2>Dovednosti</h2>

    <div class="skills-grid">
        <div>PHP</div>
        <div>HTML</div>
        <div>CSS</div>
        <div>JavaScript</div>
        <div>MySQL</div>
        <div>Git</div>
    </div>
</section>

<section id="kontakt">
    <h2>Kontakt</h2>

    <form action="backend/contact.php" method="post">
        <input type="text" name="name" placeholder="Jméno" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Zpráva"></textarea>
        <button type="submit">Odeslat</button>
    </form>
</section>

<div id="scrollTopBtn">^</div>

</body>
</html>




