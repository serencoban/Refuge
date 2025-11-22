<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Refuge">
    <meta name="author" content="Coban Seren">
    <title>Devenir Bénévole</title>
    @vite('resources/css/app.css')
</head>
<body>
<header>
    <div class="navbar__container">
        <div class="navbar__subtitle">
            <p>Nous vous accueillons du lundi au samedi de 10h à 18h. Venez rencontrer nos animaux et trouvez votre futur compagnon ! </p>
            <span class="lang"><a href="">Fr</a> | <a href="">En</a></span>
        </div>
        <nav class="navbar__navigation">
            <a href="#">
                <h2 class="home__title">Les Pattes Heureuses</h2>
                <p class="home__subtitle">Votre refuge Liègeois</p>
            </a>
            <ul>
                <li><a href="">Accueil</a></li>
                <li><a href="">Nos animaux</a></li>
                <li><a href="">Devenir bénévole</a></li>
                <li><a href="">Nous contacter</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    <div>
        <h1>Devenir Bénévole</h1>
        <p>Devenez la personne qui, chaque jour, offrent de leur temps et de leur énergie pour prendre soin de nos animaux. Grâce à leur engagement, chaque animal reçoit l’attention et l’amour qu’il mérite.</p>
    </div>
    <aside>
        <h2>Vous souhaites devenir bénévole ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris  porttitor venenatis pretium.</p>
    </aside>
    <section>
        <form action="#" method="post">
            <div>
                <label for="name">Votre nom et prénom complet*</label>
                <input type="text" name="name" id="name" placeholder="ex: Coban Seren">
            </div>
            <div>
                <label for="email">Votre email*</label>
                <input type="email" name="email" id="email" placeholder="ex: serencobs@gmail.com">
            </div>
            <div>
                <label for="message">Votre message*</label>
                <textarea id="message" name="message" rows="5" placeholder="ex: Je voudrais rejoindre votre équipe pour ..."></textarea>
            </div>
            <button type="submit">Envoyer le formulaire</button>
        </form>
    </section>
</main>
@include('public.components.footer')
