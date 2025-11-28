@include('public.layouts.header')

<main class="animals-page">
    <section class="animals-hero">
        <h1 class="animals-hero__title">Nos animaux</h1>
        <svg class="animals-hero__divider" width="319" height="15" viewBox="0 0 319 15" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
            <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
        </svg>
        <p class="animals-hero__subtitle">
            Parcourez les profils de nos chiens, chats et petits compagnons en attente d'un nouveau foyer.
            Chaque animal a son histoire, son caractère et ses besoins : peut-être trouverez-vous ici votre futur
            compagnon de vie.
        </p>
    </section>

    <section class="animals-list">
        <div class="animals-filters">
            <p class="animals-filters__label">Filtrer par:</p>
            <a href="#" class="cta__btn">Voir tous les animaux</a>
            <div class="animals-filters__group">
                <label for="age" class="animals-filters__group-label">Âge</label>
                <select id="age" class="animals-filters__group-select">
                    <option value="">Âge</option>
                    <option value="1">1 an</option>
                    <option value="2">2 ans</option>
                    <option value="3">3 ans</option>
                    <option value="4">4 ans</option>
                    <option value="5">5 ans</option>
                </select>
            </div>
            <div class="animals-filters__group">
                <label for="espece" class="animals-filters__group-label">Espèce</label>
                <select id="espece" class="animals-filters__group-select">
                    <option value="">Espèces</option>
                    <option value="chien">Chien</option>
                    <option value="chat">Chat</option>
                    <option value="autre">Autre</option>
                </select>
            </div>
            <div class="animals-filters__group">
                <label for="pelage" class="animals-filters__group-label">Pelage</label>
                <select id="pelage" class="animals-filters__group-select">
                    <option value="">Pelage</option>
                    <option value="court">Court</option>
                    <option value="long">Long</option>
                    <option value="boucle">Bouclé</option>
                </select>
            </div>
            <a href="" class="cta__btn">Filtrer</a>
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
                    <img class="image" src="/storage/first-animal.png" alt="">
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
                <img class="image" src="/storage/moka.jpg" alt="">
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
                    <img class="image" src="/storage/third-animal.png" alt="">
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
                    <img class="image" src="/storage/fourth-animal.png" alt="">
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
                    <img class="image" src="/storage/first-animal.png" alt="">
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
                    <img class="image" src="/storage/second-animal.png" alt="">
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
                    <img class="image" src="/storage/third-animal.png" alt="">
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
                    <img class="image" src="/storage/fourth-animal.png" alt="">
                </div>
            </article>
        </div>

        <div class="animals-list-footer">
            <a href="#" class="btn-suivant">Suivant →</a>
        </div>
    </section>
</main>

@include('public.layouts.footer')
