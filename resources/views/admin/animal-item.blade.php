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
            <h1 class="admin__header__left">Fiche de Moka</h1>
            <div class="admin__header__right">
                <div class="admin__header_notification-icon">
                    <span class="admin__header__notification-badge">1</span>
                </div>
                <div class="admin__user-avatar">SC</div>
                <div class="admin__user-name">Seren<br>Coban</div>
            </div>
        </div>
    <div class="main-content">
        <section class="pet-status">
            <div class="pet-status__status">
                <span class="pet-status__status__badge"></span>
                <label for="pet-status"></label>
                <select name="pet-status" id="pet-status">
                    <option value="adoptable">Adoptable</option>
                    <option value="adopted">Adopté</option>
                    <option value="ongoing">En cours d'adoption</option>
                    <option value="care">En soins</option>
                </select>
            </div>
            <div class="pet-status__actions">
                <div class="pet-status__actions-edit">Edit</div>
                <div class="pet-status__actions-delete">Delete</div>
                <a class="cta-admin__btn">Publier</a>
            </div>
        </section>
        <section class="pet-details"></section>
        <aside class="pet-adoption"></aside>
        <aside class="pet-note"></aside>
    </div>
    </div>
</main>
</body>
</html>
