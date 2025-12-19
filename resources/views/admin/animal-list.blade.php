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
            <h1 class="admin__header__left">Liste des animaux</h1>
            <div class="admin__header__right">
                <div class="admin__header_notification-icon">
                    <span class="admin__header__notification-badge">1</span>
                </div>
                <div class="admin__user-avatar">SC</div>
                <div class="admin__user-name"><a href="{{ __('/profile') }}">Seren Coban</a></div>
            </div>
        </div>
        <div class="main-content">
            <div class="animals-filters">
                <p class="animals-filters__label">Filtrer par:</p>
                <a href="#" class="animals-filters__all">Voir tous les animaux</a>
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
                <a href="" class="cta-admin__btn">Filtrer</a>
            </div>
            <section class="animals">
                <table class="animals__table">
                    <tr class="animals__row--head">
                        <th class="animals__cell animals__cell--header">Image</th>
                        <th class="animals__cell animals__cell--header">Nom</th>
                        <th class="animals__cell animals__cell--header">Animal</th>
                        <th class="animals__cell animals__cell--header">Status</th>
                        <th class="animals__cell animals__cell--header">Dernière modification</th>
                        <th class="animals__cell animals__cell--header">Actions</th>
                    </tr>
                    @for($i = 1; $i <=10 ; $i++)
                        <x-card-animal-item></x-card-animal-item>
                    @endfor
                </table>
            </section>
        </div>
    </div>
</main>
</body>
</html>
