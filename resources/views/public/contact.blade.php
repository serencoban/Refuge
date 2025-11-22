@include('public.components.header')
<main>
    <section class="animals-hero">
        <h1 class="animals-hero__title">Nos animaux</h1>
        <svg class="animals-hero__divider" width="319" height="15" viewBox="0 0 319 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
            <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
        </svg>
        <p class="animals-hero__subtitle">
            Parcourez les profils de nos chiens, chats et petits compagnons en attente d'un nouveau foyer.
            Chaque animal a son histoire, son caractère et ses besoins : peut-être trouverez-vous ici votre futur compagnon de vie.
        </p>
    </section>
    <aside class="aside">
        <h1 class="aside__title">Devenir Bénévole</h1>
        <p class="aside__text">Devenez la personne qui, chaque jour, offrent de leur temps et de leur énergie pour prendre soin de nos animaux. Grâce à leur engagement, chaque animal reçoit l’attention et l’amour qu’il mérite.</p>
        <svg class="aside__svg" width="319" height="15" viewBox="0 0 319 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.5 2.5H316.5" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
            <path d="M44.5 12.5L295.391 3" stroke="#EDE0D4" stroke-width="5" stroke-linecap="round"/>
        </svg>
    </aside>
    <section class="contact-form">
        <form class="contact-form__form" action="#" method="post">

            <div class="contact-form__group">
                <label class="contact-form__label" for="name">Votre nom et prénom complet*</label>
                <input class="contact-form__input" type="text" name="name" id="name" placeholder="ex: Coban Seren">
            </div>

            <div class="contact-form__group">
                <label class="contact-form__label" for="email">Votre email*</label>
                <input class="contact-form__input" type="email" name="email" id="email" placeholder="ex: serencobs@gmail.com">
            </div>

            <div class="contact-form__group">
                <label class="contact-form__label" for="message">Votre message*</label>
                <textarea class="contact-form__textarea" id="message" name="message" rows="5" placeholder="ex: Je voudrais rejoindre votre équipe pour ..."></textarea>
            </div>

            <button class="contact-form__button" type="submit">Envoyer le formulaire</button>

        </form>
    </section>
</main>
@include('public.components.footer')
