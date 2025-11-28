@include('admin.layouts.header')
<main class="admin-main">
    @include('admin.layouts.aside')

    <div class="admin__main">
            <div class="admin__header">
                <ul id="burgerMenu" class="mobile__sidebar__menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="17" viewBox="0 0 41 17">
                        <line x1="1.5" y1="1.5" x2="39.5" y2="1.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                        <line x1="1.5" y1="8.5" x2="39.5" y2="8.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                        <line x1="1.5" y1="15.5" x2="39.5" y2="15.5" stroke="#414833" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </ul>
                <h1 class="admin__header__left">Dashboard</h1>
                <div class="admin__header__right">
                    <div class="admin__header_notification-icon">
                        <span class="admin__header__notification-badge">1</span>
                    </div>
                    <div class="admin__user-avatar">SC</div>
                    <div class="admin__user-name">Seren<br>Coban</div>
                </div>
            </div>

    <div class="main-content">
        <div class="stats__container">
        <section class="stats-number__section">
            <div class="stats-number__filter">
                <h2 class="stats-number__title">Bonjour Elise</h2>
                <div class="animals-filters__container">
                <div class="animals-filters__group">
                    <label for="filter">Filter par date :</label>
                    <select class="cta-admin__btn" id="filter">
                        <option value="today">Aujourd'hui</option>
                        <option value="week">Cette semaine</option>
                        <option value="month">Ce mois-ci</option>
                        <option value="three-month">Les 3 derniers mois</option>
                        <option value="year">Cette année</option>
                    </select>
                </div>
                <div class="animals-filters__group">
                    <a class="cta-admin__btn" href="#">
                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M1.5 6C1.22386 6 1 6.22386 1 6.5V14.5C1 14.7761 1.22386 15 1.5 15H10.5C10.7761 15 11 14.7761 11 14.5V6.5C11 6.22386 10.7761 6 10.5 6H8.5C8.22386 6 8 5.77614 8 5.5C8 5.22386 8.22386 5 8.5 5H10.5C11.3284 5 12 5.67157 12 6.5V14.5C12 15.3284 11.3284 16 10.5 16H1.5C0.671572 16 0 15.3284 0 14.5V6.5C0 5.67157 0.671573 5 1.5 5H3.5C3.77614 5 4 5.22386 4 5.5C4 5.77614 3.77614 6 3.5 6H1.5Z"
                                  fill="black"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M5.64645 0.146447C5.84171 -0.0488155 6.15829 -0.0488155 6.35355 0.146447L9.35355 3.14645C9.54882 3.34171 9.54882 3.65829 9.35355 3.85355C9.15829 4.04882 8.84171 4.04882 8.64645 3.85355L6.5 1.70711V10.5C6.5 10.7761 6.27614 11 6 11C5.72386 11 5.5 10.7761 5.5 10.5V1.70711L3.35355 3.85355C3.15829 4.04882 2.84171 4.04882 2.64645 3.85355C2.45118 3.65829 2.45118 3.34171 2.64645 3.14645L5.64645 0.146447Z"
                                  fill="black"/>
                        </svg>
                        Exporter un rapport</a>
                </div>
                </div>

            </div>
            <div class="stats-number">
            <div class="stats-number__box">
                <strong class="stats-number__icon">20</strong>
                <p class="stats-number__text">Animaux accueillis</p>
            </div>
            <div class="stats-number__box">
                <strong class="stats-number__icon">20</strong>
                <p class="stats-number__text">Animaux accueillis</p>
            </div>
            <div class="stats-number__box">
                <strong class="stats-number__icon">20</strong>
                <p class="stats-number__text">Animaux accueillis</p>
            </div>
            </div>
        </section>
    </div>
    <div class="adopt-fiche__container">
        <section class="adoption-application__section">
            <h2 class="adoption-application__title">
                Demande d'adoption
                <span class="adoption-application__notif notif__badge">3</span>
            </h2>
            <table class="adoption-application__table">
                <tr class="adoption-application__table__titles">
                    <th>Nom</th>
                    <th>Adopteur</th>
                    <th>Date de demande</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>Moka</td>
                    <td>Sarah Smith</td>
                    <td>05/11/25</td>
                    <td>En attente</td>
                </tr>
                <tr>
                    <td>Moka</td>
                    <td>Sarah Smith</td>
                    <td>05/11/25</td>
                    <td>En cours</td>
                </tr>
                <tr>
                    <td>Moka</td>
                    <td>Sarah Smith</td>
                    <td>05/11/25</td>
                    <td>Clôturé</td>
                </tr>
            </table>
        </section>
        <section class="validate-form__section">
            <div class="validate-form__header">
                <h2 class="validate-form__title">Fiche à valider</h2>
                <span class="validate-form__notif notif__badge">1</span>
            </div>
            <div class="validate-form__container">
            <div class="validate-form__list">
                <span class="validate-form__item">Fiche de Moka (envoyé par Adrien)</span>
                <span class="validate-form__item">Fiche de Moka (envoyé par Adrien)</span>
            </div>
            <div class="validate-form__footer">
                <a href="#" class="cta-admin__btn">Voir toutes les fiches</a>
            </div>
            </div>
        </section>
    </div>
    <div class="notif-message__container">
        <section class="notification__section">
            <div class="notification__header">
                <h2 class="notification__title">Notifications</h2>
                <span class="notification__notif notif__badge">3</span>
            </div>
            <div class="notification__list">
                <span class="notification__list__item">Nouvelle demande d’adoption pour Moka 🐶</span>
                <span class="notification__list__item">Tâche en attente : valider la fiche de Sarah 🐱</span>
            </div>
        </section>
        <section class="recent-message__section">
            <div class="recent-message__header">
                <h2 class="recent-message__title">Messages récents</h2>
                <div class="cta-admin__btn"><a href="#">Nouveau message</a></div>
            </div>
            <div class="recent-message__list">
                <div class="recent-message__list__item">
                    <p class="recent-message__user">Adrien</p>
                    <p class="recent-message__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget eros eget magna
                        accumsan mollis.</p>
                    <small class="recent-message__date">Il y a 5 min</small>
                </div>
                <div class="recent-message__list__item">
                    <p class="recent-message__user">Adrien</p>
                    <p class="recent-message__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget eros eget magna
                        accumsan mollis.</p>
                    <small class="recent-message__date">Il y a 5 min</small>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>
</main>
</body>
</html>
