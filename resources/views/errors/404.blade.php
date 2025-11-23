<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erreur</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="error__container">
    <div class="error__container__txt">
        <h1 class="error__title">Erreur 404</h1>
        <p class="error__txt">Oops... Votre page n'existe pas !</p>
        <a class="cta__btn" href="{{ __('/') }}">Retourner à la page d'accueil</a>
    </div>
    <div class="error__svg">
        <svg width="639" height="593" viewBox="0 0 639 593" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="413.591" cy="367.466" r="224.61" transform="rotate(-36.0117 413.591 367.466)" fill="#EDE0D4" fill-opacity="0.4"/>
            <ellipse cx="83.7719" cy="471.822" rx="64.5753" ry="84.2286" transform="rotate(-99.4138 83.7719 471.822)" fill="#EDE0D4" fill-opacity="0.4"/>
            <ellipse cx="85.4285" cy="243.2" rx="64.5753" ry="84.2286" transform="rotate(-81.0117 85.4285 243.2)" fill="#EDE0D4" fill-opacity="0.4"/>
            <ellipse cx="257.01" cy="73.3623" rx="64.5753" ry="84.2286" transform="rotate(-49.9274 257.01 73.3623)" fill="#EDE0D4" fill-opacity="0.4"/>
        </svg>

    </div>
</div>
</body>
</html>
