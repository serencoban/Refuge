<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    @vite('resources/css/app.scss')
</head>
<body>
    <div class="auth__form__block">
        <h1>Les Pattes Heureuses</h1>
        <div class="auth__form__container">
            <h2>Se connecter</h2>
            <small>Bienvenue Elise</small>
            <form class="auth__form" action="#" method="POST">
                <div class="auth__name">
                    <label class="auth__name__label" for="name">Nom et prénom*</label>
                    <input class="auth__name__input" type="text" name="name" id="name">
                </div>
                <div class="auth__pass">
                    <label class="auth__pass_label" for="pass">Mot de passe*</label>
                    <input class="auth__pass__input" type="password" name="pass" id="pass">
                    <small class="auth__pass__forgot">Mot de passe oublié ?</small>
                </div>
                <div class="auth__btn">
                    <button class="auth__cta" type="submit">Se connecter</button>
                    <p class="auth__small__connect">Pas de compte ? <a class="auth__small__link" href="#">S'inscrire</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
