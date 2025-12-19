@include('components.header-admin')
<main class="admin-main">
    @include('components.aside')

    <div class="admin__main">
        <div class="admin__header">
            <div id="menuToggle">
                <label for="menuCheckbox" class="visually-hidden">
                    Toggle mobile menu
                </label>
                <input type="checkbox"
                       id="menuCheckbox"
                       aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
                <div role="navigation" id="mobileMenu" class="sidenav" aria-hidden="true">
                    <ul class="menu">
                        <li class="menu-item"><a href="{{ __('/dashboard') }}">Dashboard</a></li>
                        <li class="menu-item"><a href="{{ __('/animal-list') }}">Animaux</a></li>
                        <li class="menu-item"><a href="{{ __('/volunteer') }}">Bénévole</a></li>
                        <li class="menu-item"><a href="{{ __('/messages') }}">Messages</a></li>
                    </ul>
                </div>
            </div>
            <h1 class="admin__header__left">Bénévole</h1>
            <div class="admin__header__right">
                <div class="admin__header_notification-icon">
                    <span class="admin__header__notification-badge">1</span>
                </div>
                <div class="admin__user-avatar">SC</div>
                <div class="admin__user-name"><a href="{{ __('/profile') }}">Seren Coban</a></div>
            </div>
        </div>
        <div class="main-content">
            <section>
                <div class="volunteer__head">
                    <div class="volunteer__head__left">
                        <h2>Tous les bénévoles</h2>
                        <span class="notif__badge">1</span>
                    </div>
                    <a class="cta-admin__btn">+ Ajouter un bénévole</a>
                </div>
                <div class="volunteer_container">
                    @for($i = 1; $i <=5 ; $i++)
                        <x-card-volunteer></x-card-volunteer>
                    @endfor
                </div>
            </section>
        </div>
    </div>
</main>
</body>
</html>
