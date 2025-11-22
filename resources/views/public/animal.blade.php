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
    <section class="fiche__animal container">
        <div class="image__container">
            <img src="/storage/first-animal.png" alt="">
        </div>
        <div class="fiche__container">
            <h1 class="hero__title">La fiche de Moka</h1>
            <a href="">Partager</a>
            <div class="fiche__container__details">
                <p>Nom</p>
                <strong>Moka</strong>
            </div>
            <div class="fiche__container__details">
                <p>Espèce</p>
                <strong>Chat persan</strong>
            </div>
            <div class="fiche__container__details">
                <p>Femelle</p>
                <strong>Tigré</strong>
            </div>
            <div class="fiche__container__details">
                <p>Age</p>
                <strong>5 ans</strong>
            </div>
            <div class="fiche__container__details">
                <p>Vaccins</p>
                <strong>Inconnus</strong>
            </div>
            <div class="fiche__container__details">
                <p>Caractère</p>
                <strong>Doux</strong>
            </div>
            <div class="fiche__container__details">
                <p>Status</p>
                <strong>En attente d’adoption</strong>
            </div>
        </div>

    </section>
    <section class="section__appointment container">
        <form class="form__appointment" method="GET" action="#">
            <h2>Je voudrais planifier un rendez-vous pour rencontrer Moka</h2>
            <small>Remplissez le formulaire pour prendre un rendez-vous</small>
                <div class="lastname__container">
                    <label for="lastname">Nom*</label>
                    <input class="lastname__input input" type="text" name="lastname" id="lastname" placeholder="ex: Coban">
                </div>
                <div class="firstname__container">
                    <label for="firstname">Prenom*</label>
                    <input class="firstname__input input" type="text" name="firstname" id="firstname">
                </div>
                <div class="email__container">
                    <label for="email">Email*</label>
                    <input class="email__input input" type="email" name="email" id="email">
                </div>
                <div class="tel__container">
                    <label for="tel">Numéro de téléphone*</label>
                <input class="tel__input input" type="tel" name="name" id="name">
                </div>
                <div class="desc__container">
                    <label for="desc">Description*</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                </div>
            <button class="u-btn" type="submit">Envoyer le formulaire</button>
        </form>
        <img src="/storage/bunny.png" alt="">
    </section>
    <section class="section discover container">
        <div class="discover__animals">
            <h2>Découvrez nos animaux</h2>
            <p>
                Parcourez les fiches de nos animaux disponibles à l’adoption.
                Chacun d’eux attend une nouvelle famille où il pourra s’épanouir
                et être aimé comme il le mérite.
            </p>
        </div>
        <div class="card-grid">
            <article class="card">
                <div class="card-text__content">
                    <div class="card__text__container">
                        <h3 class="card__title">Moka</h3>
                        <p class="card__text">Caniche – 5 ans</p>
                        <p class="card__status">Adoptable</p>
                    </div>
                    <div class="card__btn">
                        <a class="card__arrow" href="">→</a>
                    </div>
                </div>
                <figure class="image-container">
                    <img class="image" src="/storage/first-animal.png" alt="">
                </figure>
            </article>

            <article class="card">
                <div class="card-text__content">
                    <div class="card__text__container">
                        <h3 class="card__title">Moka</h3>
                        <p class="card__text">Caniche – 5 ans</p>
                        <p class="card__status">Adoptable</p>
                    </div>
                    <div class="card__btn">
                        <a class="card__arrow" href="">→</a>
                    </div>
                </div>
                <figure class="image-container">
                    <img class="image" src="/storage/first-animal.png" alt="">
                </figure>
            </article>

            <article class="card">
                <div class="card-text__content">
                    <div class="card__text__container">
                        <h3 class="card__title">Moka</h3>
                        <p class="card__text">Caniche – 5 ans</p>
                        <p class="card__status">Adoptable</p>
                    </div>
                    <div class="card__btn">
                        <a class="card__arrow" href="">→</a>
                    </div>
                </div>
                <figure class="image-container">
                    <img class="image" src="/storage/first-animal.png" alt="">
                </figure>
            </article>

            <article class="card">
                <div class="card-text__content">
                    <div class="card__text__container">
                        <h3 class="card__title">Moka</h3>
                        <p class="card__text">Caniche – 5 ans</p>
                        <p class="card__status">Adoptable</p>
                    </div>
                    <div class="card__btn">
                        <a class="card__arrow" href="">→</a>
                    </div>
                </div>
                <figure class="image-container">
                    <img class="image" src="/storage/first-animal.png" alt="">
                </figure>
            </article>
        </div>

        <div class="u-center">
            <a href="" class="u-btn">Voir tous nos animaux</a>
        </div>

    </section>
</main>
@include('public.components.footer')
