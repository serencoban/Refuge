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
                        <li class="menu-item"><a href="">Dashboard</a></li>
                        <li class="menu-item"><a href="">Animaux</a></li>
                        <li class="menu-item"><a href="">Bénévole</a></li>
                        <li class="menu-item"><a href="">Messages</a></li>
                    </ul>
                </div>
            </div>
            <h1 class="admin__header__left">Boite de contact</h1>
            <div class="admin__header__right">
                <div class="admin__header_notification-icon">
                    <span class="admin__header__notification-badge">1</span>
                </div>
                <div class="admin__user-avatar">SC</div>
                <div class="admin__user-name">Seren<br>Coban</div>
            </div>
        </div>
        <div class="main-content messages">
            <section class="messages__left">
                <h2>Boite de reception</h2>
                <div>
                    <div class="messages__left__div">
                        <p>Adrien Charlier</p>
                        <p>Lorem ipsum dolor sit amet</p>
                        <small>11:20AM</small>
                    </div>
                    <div class="messages__left__div">
                        <p>Adrien Charlier</p>
                        <p>Lorem ipsum dolor sit amet</p>
                        <small>11:20AM</small>
                    </div>
                </div>
                <div>
                    <a class="cta-admin__btn">Nouveau message</a>
                </div>
            </section>
            <section class="messages__right">
                <h2>Adrien Charlier</h2>
            </section>
        </div>
    </div>
</main>
</body>
</html>
