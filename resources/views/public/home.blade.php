@include('components.header')
<main class="main">
    <section class="main__hero container">
        <h1 class="main__hero__title">Les Pattes Heureuses</h1>
        <p class="main__hero__text">
            Nous accueillons chaque année des dizaines d’animaux dans le besoin.
            Découvrez-les et aidez-les à trouver un nouveau foyer.
        </p>
        <a href="{{ __('/animals') }}" class="cta__btn">Voir tous nos animaux</a>
    </section>
    <section class="section adopt container">
        <h2>Comment adopter ?</h2>
        <ol class="adopt__list">
            <li class="step-card">
                <strong class="step-card__number">1</strong>
                <h3 class="step-card__title">Choisissez votre futur compagnon</h3>
                <a href="" class="step-card__link">Consultez les fiches d’animaux disponibles.</a>
            </li>

            <li class="step-card">
                <strong class="step-card__number">2</strong>
                <h3 class="step-card__title">Faites une demande d’adoption</h3>
                <a href="" class="step-card__link">Remplissez le formulaire lié à sa fiche.</a>
            </li>

            <li class="step-card">
                <strong class="step-card__number">3</strong>
                <h3 class="step-card__title">Rencontrez-le au refuge</h3>
                <a href="" class="step-card__link">L’équipe vous contactera pour fixer un rendez-vous.</a>
            </li>
        </ol>
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
                    <img class="image" src="/storage/second-animal.png" alt="">
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
                    <img class="image" src="/storage/third-animal.png" alt="">
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
                    <img class="image" src="/storage/fourth-animal.png" alt="">
                </figure>
            </article>
        </div>
        <div class="u-center">
            <a href="{{ __('/animals') }}" class="cta__btn">Voir tous nos animaux</a>
        </div>
    </section>
    <section class="section about container about-grid">

        <div class="about__text">
            <div class="about__title">
                <h2>Nous & nos missions</h2>
                <svg width="319" height="15" viewBox="0 0 319 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                    <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
                </svg>
            </div>
            <p>
                Situé en plein cœur de la région liégeoise, notre refuge offre une seconde chance à des chiens, chats et
                petits compagnons qui n’attendent qu’une famille aimante. Depuis plus de 10 ans, notre équipe de
                bénévoles passionnés veille chaque jour au bien-être des animaux, de leur arrivée jusqu’à leur adoption.
            </p>
            <p class="about__paragraphs">
                Chaque histoire est unique, et nous mettons tout en œuvre pour leur redonner confiance, santé et amour
            </p>

            <a href="{{ __('/contact') }}" class="cta__btn">Rejoignez-nous</a>
        </div>

        <div class="about__image-area">
            <img class="about__image" src="/storage/mission-dog.png" alt="Refuge">
            <svg class="about__image__svg" xmlns="http://www.w3.org/2000/svg" width="234" height="233"
                 viewBox="0 0 234 233" fill="none">
                <circle cx="154" cy="152.174" r="80" fill="#EDE0D4"/>
                <ellipse cx="37.1228" cy="113.172" rx="23" ry="30" transform="rotate(-63.4021 37.1228 113.172)"
                         fill="#EDE0D4"/>
                <ellipse cx="85.4767" cy="47.6509" rx="23" ry="30" transform="rotate(-45 85.4767 47.6509)"
                         fill="#EDE0D4"/>
                <ellipse cx="170.477" cy="34.6509" rx="23" ry="30" transform="rotate(-13.9157 170.477 34.6509)"
                         fill="#EDE0D4"/>
            </svg>
        </div>

    </section>
</main>
@include('components.footer')

