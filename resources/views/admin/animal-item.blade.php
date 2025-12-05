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
        <div class="pet-grid">
            <div class="pet-grid__right">
                <section class="pet-details">
                    <h2>Details</h2>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <td>Moka</td>
                        </tr>
                        <tr>
                            <th>Espèce</th>
                            <td>Chat persan</td>
                        </tr>
                        <tr>
                            <th>Sexe</th>
                            <td>Femelle</td>
                        </tr>
                        <tr>
                            <th>Age</th>
                            <td>5 ans</td>
                        </tr>
                        <tr>
                            <th>Vaccins</th>
                            <td>Rage</td>
                        </tr>
                        <tr>
                            <th>Pelage</th>
                            <td>Doux</td>
                        </tr>
                        <tr>
                            <th>Photo</th>
                            <td><img src="/storage/app/public/first-animal.png" alt=""></td>
                        </tr>
                    </table>
                </section>
            </div>
            <div class="pet-grid__left">
                <aside class="pet-adoption">
                    <h2>Demande d'adoption</h2>
                    <p class="pet-grid__text">Personne n’a encore demandé Moka</p>
                </aside>
                <aside class="pet-note">
                    <h2>Notes</h2>
                    <p class="pet-grid__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse  eget eros eget magna accumsan mollis. Fusce nec laoreet magna. Nulla  elementum nisl id tempor interdum.</p>
                </aside>
            </div>
        </div>
    </div>
    </div>
</main>
</body>
</html>
