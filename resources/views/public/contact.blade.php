@include('public.components.header')
<main>
    <aside>
    <div>
        <h1>Devenir Bénévole</h1>
        <p>Devenez la personne qui, chaque jour, offrent de leur temps et de leur énergie pour prendre soin de nos animaux. Grâce à leur engagement, chaque animal reçoit l’attention et l’amour qu’il mérite.</p>
    </div>
        <div>
            <img src="" alt="">
        </div>

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
