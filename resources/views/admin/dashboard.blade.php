<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Refuge">
    <meta name="author" content="Coban Seren">
    <title>Refuge - Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header class="main-content">
    <div class="admin__header">
        <h1 class="admin__header__left">Dashboard</h1>
        <div class="admin__header__right">
            <div class="admin__header_notification-icon">
                🔔
                <span class="admin__header__notification-badge">1</span>
            </div>
            <div class="admin__user-avatar">SC</div>
            <div class="admin__user-name">Séren<br>Coban</div>
        </div>
    </div>

    <div class="content-area">

    </div>
</header>
<nav class="admin__sidebar">
    <div class="admin__logo">LES PATTES HEUREUSES</div>
    <div class="admin__menu-item">
        <span>📊</span> Dashboard
    </div>
    <div class="admin__menu-item active">
        <span>🐾</span> Animaux
    </div>
    <div class="admin__menu-item">
        <span>❤️</span> Bénévoles
    </div>
    <div class="admin__menu-item">
        <span>✉️</span> Messages
    </div>
    <div class="logout">Déconnexion</div>
</nav>
<div class="stats__container">
    <section class="stats-graph__section">
        <h2>Graphique</h2>
        <!-- GRAPHIQUE -->
    </section>
    <section class="stats-number__section">
        <h2 class="hidden">Statistique</h2>
        <div class="stats-number__one">
            <strong class="stats-number__icon">20</strong>
            <p class="stats-number__text">Animaux accueillis</p>
        </div>
        <div class="stats-number__two">
            <strong class="stats-number__icon">20</strong>
            <p class="stats-number__text">Animaux accueillis</p>
        </div>
        <div class="stats-number__three">
            <strong class="stats-number__icon">20</strong>
            <p class="stats-number__text">Animaux accueillis</p>
        </div>
    </section>
</div>
<div class="adopt-fiche__container">
    <section class="adoption-application__section">
        <h2>Demande d'adoption</h2>
    </section>
    <section class="validate-form__section">
        <h2>Fiche à valider</h2>
    </section>
</div>
<div class="notif-message__container">
    <section class="notification__section">
        <h2>Notifications</h2>
    </section>
    <section class="recent-message__section">
        <h2>Messages récent</h2>
    </section>
</div>
</body>
</html>
