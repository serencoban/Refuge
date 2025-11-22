<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Refuge">
    <meta name="author" content="Coban Seren">
    <title>Refuge - Accueil</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="header">
    <div class="nav-info container">
        <p class="nav-info__text">
            Nous vous accueillons du lundi au samedi de 10h à 18h.
            Venez rencontrer nos animaux et trouvez votre futur compagnon !
        </p>
        <span class="nav-info__lang">
                <a href="">Fr</a> | <a href="">En</a>
            </span>
    </div>
    <nav class="nav-bar container">
        <a href="#" class="nav-bar__brand">
            <h2 class="nav-bar__title">Les Pattes Heureuses</h2>
            <p class="nav-bar__subtitle">Votre refuge Liégeois</p>
        </a>
        <ul class="nav-bar__menu">
            <li><a href="">Accueil</a></li>
            <li><a href="">Nos animaux</a></li>
            <li><a href="">Devenir bénévole</a></li>
            <li><a class="u-btn" href="">Nous contacter</a></li>
        </ul>
    </nav>
</header>
<main>
    <section>
        <h1 class="hero__title">Nos animaux</h1>
        <svg width="319" height="15" viewBox="0 0 319 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
            <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
        </svg>
        <p>Parcourez les profils de nos chiens, chats et petits compagnons en attente d’un nouveau foyer. Chaque animal a son histoire, son caractère et ses besoins : peut-être trouverez-vous ici votre futur compagnon de vie.</p>
    </section>
    <section>
        <div>
            <p>Filtrer par:</p>
            <a href="">Voir tous les animaux</a>
            <div>
                <label for="age"></label>
                <select>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                </select>
            </div>
            <div>
                <label for="espece"></label>
                <select>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                </select>
            </div>
            <div>
                <label for="pelage"></label>
                <select>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                    <option value="1">1 an</option>
                </select>
            </div>
        </div>

        <div class="cards__animal">
            <div class="card__animal">
                <div class="card__description">
                    <h3>Moka</h3>
                    <p>Caniche - 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <div class="btn__arrow">
                    <a href="">-></a>
                </div>
            </div>
            <div class="card__animal">
                <div class="card__description">
                    <h3>Moka</h3>
                    <p>Caniche - 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <div class="btn__arrow">
                    <a href="">-></a>
                </div>
            </div>
            <div class="card__animal">
                <div class="card__description">
                    <h3>Moka</h3>
                    <p>Caniche - 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <div class="btn__arrow">
                    <a href="">-></a>
                </div>
            </div>
            <div class="card__animal">
                <div class="card__description">
                    <h3>Moka</h3>
                    <p>Caniche - 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <div class="btn__arrow">
                    <a href="">-></a>
                </div>
            </div>
        </div>
    </section>
</main>
@include('public.components.footer')
