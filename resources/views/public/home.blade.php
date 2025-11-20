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

<body class="flow">
<header class="flow">
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
        <a href="#" class="nav-bar__brand flow">
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
<main class="flow">
    <section class="hero">
        <div class="hero__content flow">
            <h1 class="hero__title">Les Pattes Heureuses</h1>

            <p class="hero__text">
                Nous accueillons chaque année des dizaines d’animaux dans le besoin.
                Découvrez-les et aidez-les à trouver un nouveau foyer.
            </p>

            <a href="" class="u-btn">Voir tous nos animaux</a>
        </div>
    </section>
    <section class="section adopt container flow">
        <h2>Comment adopter ?</h2>

        <ol class="adopt__list">
            <li class="step-card">
                <span class="step-card__number">1</span>
                <h3 class="step-card__title">Choisissez votre futur compagnon</h3>
                <a href="" class="step-card__link">Consultez les fiches d’animaux disponibles.</a>
            </li>

            <li class="step-card">
                <span class="step-card__number">2</span>
                <h3 class="step-card__title">Faites une demande d’adoption</h3>
                <a href="" class="step-card__link">Remplissez le formulaire lié à sa fiche.</a>
            </li>

            <li class="step-card">
                <span class="step-card__number">3</span>
                <h3 class="step-card__title">Rencontrez-le au refuge</h3>
                <a href="" class="step-card__link">L’équipe vous contactera pour fixer un rendez-vous.</a>
            </li>
        </ol>
    </section>
    <section class="section discover container flow">

        <div class="flow">
            <h2>Découvrez nos animaux</h2>
            <p>
                Parcourez les fiches de nos animaux disponibles à l’adoption.
                Chacun d’eux attend une nouvelle famille où il pourra s’épanouir
                et être aimé comme il le mérite.
            </p>
        </div>

        <div class="animal-grid">
            <article class="animal-card">
                <div class="animal-card__content">
                    <h3>Moka</h3>
                    <p>Caniche – 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <a class="animal-card__arrow" href="">→</a>
            </article>

            <article class="animal-card">
                <div class="animal-card__content">
                    <h3>Moka</h3>
                    <p>Caniche – 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <a class="animal-card__arrow" href="">→</a>
            </article>

            <article class="animal-card">
                <div class="animal-card__content">
                    <h3>Moka</h3>
                    <p>Caniche – 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <a class="animal-card__arrow" href="">→</a>
            </article>

            <article class="animal-card">
                <div class="animal-card__content">
                    <h3>Moka</h3>
                    <p>Caniche – 5 ans</p>
                    <p>Adoptable</p>
                </div>
                <a class="animal-card__arrow" href="">→</a>
            </article>
        </div>

        <div class="u-center">
            <a href="" class="u-btn">Voir tous nos animaux</a>
        </div>

    </section>
    <section class="section about container about-grid">

        <div class="flow">
            <h2>Nous & nos missions</h2>

            <p>
                Situé en plein cœur de la région liégeoise, notre refuge offre une seconde chance
                à des chiens, chats et petits compagnons qui n’attendent qu’une famille aimante.
                Depuis plus de 10 ans, notre équipe de bénévoles passionnés veille chaque jour
                au bien-être des animaux.
            </p>

            <a href="" class="u-btn">Rejoignez-nous</a>
        </div>

        <div class="about__image-area">
            <div class="about__paw"></div>
            <img src="" alt="Refuge">
        </div>

    </section>
</main>
<footer class="footer container">

    <div class="footer__left flow">
        <h2>Les Pattes Heureuses</h2>
        <p>rue du Quelquechose 18<br>4500 Ville</p>
        <p>+32 471 32 63 08</p>
        <p>Du lundi au samedi de 10h à 18h</p>
    </div>

    <nav class="footer__right">
        <ul class="footer__menu">
            <li><a href="">Accueil</a></li>
            <li><a href="">Nos animaux</a></li>
            <li><a href="">Devenir bénévole</a></li>
            <li><a href="">Nous contacter</a></li>
        </ul>
    </nav>

</footer>

</body>
</html>
