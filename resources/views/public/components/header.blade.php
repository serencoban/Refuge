<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Refuge">
    <meta name="author" content="Coban Seren">
    <title>Refuge - Accueil</title>
    @vite('resources/css/app.css')
</head>

<body class="body">
<header class="header">
    <div class="nav-info container">
        <p class="nav-info__text">
            Nous vous accueillons du <strong>lundi au samedi de 10h à 18h</strong>.
            Venez rencontrer nos animaux et trouvez votre futur compagnon !
        </p>
        <span class="nav-info__lang">
                <a href="">Fr</a> | <a href="">En</a>
            </span>
    </div>
    <nav class="nav-bar container">
        <a href="{{ __('/') }}" class="nav-bar__brand">
            <h2 class="nav-bar__title">Les Pattes Heureuses</h2>
            <p class="nav-bar__subtitle">Votre refuge Liégeois</p>
        </a>
        <ul class="nav-bar__menu">
            <li><a href="{{ __('/') }}">Accueil</a></li>
            <li><a href="{{ __('/animals') }}">Nos animaux</a></li>
            <li><a class="cta__btn" href="{{ __('/contact') }}">Nous contacter</a></li>
        </ul>
        <ul class="mobile__nav-bar__menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="17" viewBox="0 0 41 17" fill="none">
                <line x1="1.5" y1="1.5" x2="39.5" y2="1.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                <line x1="1.5" y1="8.5" x2="39.5" y2="8.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                <line x1="1.5" y1="15.5" x2="39.5" y2="15.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </ul>
    </nav>
</header>
