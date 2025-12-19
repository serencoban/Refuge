@include('components.header')
<main>
    <section class="fiche__animal container">
        <div class="image__container">
            <img class="image" src="/storage/second-dog.jpg" alt="">
        </div>
        <div class="fiche__container">
            <div class="fiche__container__head">
                <div class="fiche__container__title">
                    <h1 class="hero__title">La fiche de Moka</h1>
                    <svg width="323" height="15" viewBox="0 0 323 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 2.5H319.587" stroke="#656D4A" stroke-width="5" stroke-linecap="round"/>
                        <path d="M44.9128 12.5L298.27 3" stroke="#656D4A" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </div>
                <a class="cta__btn" href="">Partager</a>
            </div>
            <div>
                <p>Moka est un gentil caniche très doux et sociable</p>
            </div>
            <div class="fiche__container__details">
                <p>Nom</p>
                <strong>Moka</strong>
            </div>
            <div class="fiche__container__details">
                <p>Espèce</p>
                <strong>Chat persan</strong>
            </div>
            <div class="fiche__container__details">
                <p>Age</p>
                <strong>5 ans</strong>
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
            <div class="form__appointment__details">
                <h2>Je voudrais planifier un rendez-vous pour rencontrer Moka</h2>
                <small>Remplissez le formulaire pour prendre un rendez-vous</small>
                <div class="form__appointment__flex">
                    <div class="lastname__container">
                        <label for="lastname">Nom*</label>
                        <input class="lastname__input input" type="text" name="lastname" id="lastname"
                               placeholder="ex: Coban">
                    </div>
                    <div class="firstname__container">
                        <label for="firstname">Prenom*</label>
                        <input class="firstname__input input" type="text" name="firstname" id="firstname">
                    </div>

                </div>
                <div class="form__appointment__flex">
                    <div class="email__container">
                        <label for="email">Email*</label>
                        <input class="email__input input" type="email" name="email" id="email">
                    </div>
                    <div class="tel__container">
                        <label for="tel">Numéro de téléphone*</label>
                        <input class="tel__input input" type="tel" name="name" id="name">
                    </div>

                </div>
                <div class="desc__container">
                    <label for="desc">Description*</label>
                    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                </div>
                <button class="cta__btn" type="submit">Envoyer le formulaire</button>
            </div>
            <div class="form__image__container">
                <img class="form__image" src="/storage/bunny.png" alt="">
            </div>
        </form>

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
                <div class="image-container">
                    <img class="image" src="/storage/first-animal.jpg" alt="">
                </div>
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
                <div class="image-container">
                    <img class="image" src="/storage/second-dog.jpg" alt="">
                </div>
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
                <div class="image-container">
                    <img class="image" src="/storage/third-cat.jpg" alt="">
                </div>
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
                <div class="image-container">
                    <img class="image" src="/storage/fourth-cat.jpg" alt="">
                </div>
            </article>
        </div>

        <div class="u-center">
            <a href="" class="cta__btn">Voir tous nos animaux</a>
        </div>
    </section>
</main>
@include('components.footer')
