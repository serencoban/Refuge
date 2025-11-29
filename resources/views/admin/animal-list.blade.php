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
            <h1 class="admin__header__left">Liste des animaux</h1>
            <div class="admin__header__right">
                <div class="admin__header_notification-icon">
                    <span class="admin__header__notification-badge">1</span>
                </div>
                <div class="admin__user-avatar">SC</div>
                <div class="admin__user-name">Seren<br>Coban</div>
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
                    <tr class="animals__row animals__row--head">
                        <th class="animals__cell animals__cell--header">Image</th>
                        <th class="animals__cell animals__cell--header">Nom</th>
                        <th class="animals__cell animals__cell--header">Animal</th>
                        <th class="animals__cell animals__cell--header">Status</th>
                        <th class="animals__cell animals__cell--header">Dernière modification</th>
                        <th class="animals__cell animals__cell--header">Actions</th>
                    </tr>

                    <tr class="animals__row">
                        <td class="animals__cell animals__cell--image">
                            <img src="" alt="" class="animals__img">
                        </td>
                        <td class="animals__cell animals__cell--name">Moka</td>
                        <td class="animals__cell animals__cell--type">Chien</td>
                        <td class="animals__cell animals__cell--status">En cours d'adoption</td>
                        <td class="animals__cell animals__cell--date">02/11/25</td>
                        <td class="animals__cell animals__cell--date">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M8.125 1.25H11.875C12.2202 1.25 12.5 1.52982 12.5 1.875V3.125H7.5V1.875C7.5 1.52982 7.77982 1.25 8.125 1.25ZM13.75 3.125V1.875C13.75 0.839466 12.9105 0 11.875 0H8.125C7.08947 0 6.25 0.839466 6.25 1.875V3.125H3.13207C3.12782 3.12496 3.12356 3.12496 3.1193 3.125H1.875C1.52982 3.125 1.25 3.40482 1.25 3.75C1.25 4.09518 1.52982 4.375 1.875 4.375H2.548L3.61395 17.6994C3.71789 18.9986 4.80259 20 6.10599 20H13.894C15.1974 20 16.2821 18.9986 16.386 17.6994L17.452 4.375H18.125C18.4702 4.375 18.75 4.09518 18.75 3.75C18.75 3.40482 18.4702 3.125 18.125 3.125H16.8807C16.8764 3.12496 16.8722 3.12496 16.8679 3.125H13.75ZM16.198 4.375L15.14 17.5997C15.0881 18.2493 14.5457 18.75 13.894 18.75H6.10599C5.45429 18.75 4.91194 18.2493 4.85997 17.5997L3.802 4.375H16.198ZM6.8383 5.62608C7.18288 5.60581 7.47865 5.86872 7.49892 6.2133L8.12392 16.8383C8.14419 17.1829 7.88128 17.4787 7.5367 17.4989C7.19212 17.5192 6.89635 17.2563 6.87608 16.9117L6.25108 6.2867C6.23081 5.94212 6.49372 5.64635 6.8383 5.62608ZM13.1617 5.62608C13.5063 5.64635 13.7692 5.94212 13.7489 6.2867L13.1239 16.9117C13.1037 17.2563 12.8079 17.5192 12.4633 17.4989C12.1187 17.4787 11.8558 17.1829 11.8761 16.8383L12.5011 6.2133C12.5213 5.86872 12.8171 5.60581 13.1617 5.62608ZM10 5.625C10.3452 5.625 10.625 5.90482 10.625 6.25V16.875C10.625 17.2202 10.3452 17.5 10 17.5C9.65482 17.5 9.375 17.2202 9.375 16.875V6.25C9.375 5.90482 9.65482 5.625 10 5.625Z"
                                        fill="black"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M19.377 2.42418C19.6211 2.66825 19.6211 3.06398 19.377 3.30806L18.0734 4.61166L15.5734 2.11166L16.877 0.808058C17.1211 0.56398 17.5168 0.563981 17.7609 0.808058L19.377 2.42418Z"
                                        fill="black"/>
                                    <path
                                        d="M17.1895 5.49554L14.6895 2.99554L6.17326 11.5118C6.10465 11.5804 6.05296 11.664 6.02228 11.7561L5.01658 14.7732C4.93514 15.0175 5.16756 15.2499 5.41186 15.1685L8.42896 14.1628C8.52101 14.1321 8.60465 14.0804 8.67326 14.0118L17.1895 5.49554Z"
                                        fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.25 16.875C1.25 17.9105 2.08947 18.75 3.125 18.75H16.875C17.9105 18.75 18.75 17.9105 18.75 16.875V9.375C18.75 9.02982 18.4702 8.75 18.125 8.75C17.7798 8.75 17.5 9.02982 17.5 9.375V16.875C17.5 17.2202 17.2202 17.5 16.875 17.5H3.125C2.77982 17.5 2.5 17.2202 2.5 16.875V3.125C2.5 2.77982 2.77982 2.5 3.125 2.5H11.25C11.5952 2.5 11.875 2.22018 11.875 1.875C11.875 1.52982 11.5952 1.25 11.25 1.25H3.125C2.08947 1.25 1.25 2.08947 1.25 3.125V16.875Z"
                                          fill="black"/>
                                </svg>
                            </span>
                        </td>
                    </tr>

                    <tr class="animals__row">
                        <td class="animals__cell animals__cell--image">
                            <img src="" alt="" class="animals__img">
                        </td>
                        <td class="animals__cell animals__cell--name">Moka</td>
                        <td class="animals__cell animals__cell--type">Chien</td>
                        <td class="animals__cell animals__cell--status">En cours d'adoption</td>
                        <td class="animals__cell animals__cell--date">02/11/25</td>
                        <td class="animals__cell animals__cell--date">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M8.125 1.25H11.875C12.2202 1.25 12.5 1.52982 12.5 1.875V3.125H7.5V1.875C7.5 1.52982 7.77982 1.25 8.125 1.25ZM13.75 3.125V1.875C13.75 0.839466 12.9105 0 11.875 0H8.125C7.08947 0 6.25 0.839466 6.25 1.875V3.125H3.13207C3.12782 3.12496 3.12356 3.12496 3.1193 3.125H1.875C1.52982 3.125 1.25 3.40482 1.25 3.75C1.25 4.09518 1.52982 4.375 1.875 4.375H2.548L3.61395 17.6994C3.71789 18.9986 4.80259 20 6.10599 20H13.894C15.1974 20 16.2821 18.9986 16.386 17.6994L17.452 4.375H18.125C18.4702 4.375 18.75 4.09518 18.75 3.75C18.75 3.40482 18.4702 3.125 18.125 3.125H16.8807C16.8764 3.12496 16.8722 3.12496 16.8679 3.125H13.75ZM16.198 4.375L15.14 17.5997C15.0881 18.2493 14.5457 18.75 13.894 18.75H6.10599C5.45429 18.75 4.91194 18.2493 4.85997 17.5997L3.802 4.375H16.198ZM6.8383 5.62608C7.18288 5.60581 7.47865 5.86872 7.49892 6.2133L8.12392 16.8383C8.14419 17.1829 7.88128 17.4787 7.5367 17.4989C7.19212 17.5192 6.89635 17.2563 6.87608 16.9117L6.25108 6.2867C6.23081 5.94212 6.49372 5.64635 6.8383 5.62608ZM13.1617 5.62608C13.5063 5.64635 13.7692 5.94212 13.7489 6.2867L13.1239 16.9117C13.1037 17.2563 12.8079 17.5192 12.4633 17.4989C12.1187 17.4787 11.8558 17.1829 11.8761 16.8383L12.5011 6.2133C12.5213 5.86872 12.8171 5.60581 13.1617 5.62608ZM10 5.625C10.3452 5.625 10.625 5.90482 10.625 6.25V16.875C10.625 17.2202 10.3452 17.5 10 17.5C9.65482 17.5 9.375 17.2202 9.375 16.875V6.25C9.375 5.90482 9.65482 5.625 10 5.625Z"
                                        fill="black"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M19.377 2.42418C19.6211 2.66825 19.6211 3.06398 19.377 3.30806L18.0734 4.61166L15.5734 2.11166L16.877 0.808058C17.1211 0.56398 17.5168 0.563981 17.7609 0.808058L19.377 2.42418Z"
                                        fill="black"/>
                                    <path
                                        d="M17.1895 5.49554L14.6895 2.99554L6.17326 11.5118C6.10465 11.5804 6.05296 11.664 6.02228 11.7561L5.01658 14.7732C4.93514 15.0175 5.16756 15.2499 5.41186 15.1685L8.42896 14.1628C8.52101 14.1321 8.60465 14.0804 8.67326 14.0118L17.1895 5.49554Z"
                                        fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.25 16.875C1.25 17.9105 2.08947 18.75 3.125 18.75H16.875C17.9105 18.75 18.75 17.9105 18.75 16.875V9.375C18.75 9.02982 18.4702 8.75 18.125 8.75C17.7798 8.75 17.5 9.02982 17.5 9.375V16.875C17.5 17.2202 17.2202 17.5 16.875 17.5H3.125C2.77982 17.5 2.5 17.2202 2.5 16.875V3.125C2.5 2.77982 2.77982 2.5 3.125 2.5H11.25C11.5952 2.5 11.875 2.22018 11.875 1.875C11.875 1.52982 11.5952 1.25 11.25 1.25H3.125C2.08947 1.25 1.25 2.08947 1.25 3.125V16.875Z"
                                          fill="black"/>
                                </svg>
                            </span>
                        </td>
                    </tr>

                    <tr class="animals__row">
                        <td class="animals__cell animals__cell--image">
                            <img src="" alt="" class="animals__img">
                        </td>
                        <td class="animals__cell animals__cell--name">Moka</td>
                        <td class="animals__cell animals__cell--type">Chien</td>
                        <td class="animals__cell animals__cell--status">En cours d'adoption</td>
                        <td class="animals__cell animals__cell--date">02/11/25</td>
                        <td class="animals__cell animals__cell--date">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M8.125 1.25H11.875C12.2202 1.25 12.5 1.52982 12.5 1.875V3.125H7.5V1.875C7.5 1.52982 7.77982 1.25 8.125 1.25ZM13.75 3.125V1.875C13.75 0.839466 12.9105 0 11.875 0H8.125C7.08947 0 6.25 0.839466 6.25 1.875V3.125H3.13207C3.12782 3.12496 3.12356 3.12496 3.1193 3.125H1.875C1.52982 3.125 1.25 3.40482 1.25 3.75C1.25 4.09518 1.52982 4.375 1.875 4.375H2.548L3.61395 17.6994C3.71789 18.9986 4.80259 20 6.10599 20H13.894C15.1974 20 16.2821 18.9986 16.386 17.6994L17.452 4.375H18.125C18.4702 4.375 18.75 4.09518 18.75 3.75C18.75 3.40482 18.4702 3.125 18.125 3.125H16.8807C16.8764 3.12496 16.8722 3.12496 16.8679 3.125H13.75ZM16.198 4.375L15.14 17.5997C15.0881 18.2493 14.5457 18.75 13.894 18.75H6.10599C5.45429 18.75 4.91194 18.2493 4.85997 17.5997L3.802 4.375H16.198ZM6.8383 5.62608C7.18288 5.60581 7.47865 5.86872 7.49892 6.2133L8.12392 16.8383C8.14419 17.1829 7.88128 17.4787 7.5367 17.4989C7.19212 17.5192 6.89635 17.2563 6.87608 16.9117L6.25108 6.2867C6.23081 5.94212 6.49372 5.64635 6.8383 5.62608ZM13.1617 5.62608C13.5063 5.64635 13.7692 5.94212 13.7489 6.2867L13.1239 16.9117C13.1037 17.2563 12.8079 17.5192 12.4633 17.4989C12.1187 17.4787 11.8558 17.1829 11.8761 16.8383L12.5011 6.2133C12.5213 5.86872 12.8171 5.60581 13.1617 5.62608ZM10 5.625C10.3452 5.625 10.625 5.90482 10.625 6.25V16.875C10.625 17.2202 10.3452 17.5 10 17.5C9.65482 17.5 9.375 17.2202 9.375 16.875V6.25C9.375 5.90482 9.65482 5.625 10 5.625Z"
                                        fill="black"/>
                                </svg>
                            </span>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                     fill="none">
                                    <path
                                        d="M19.377 2.42418C19.6211 2.66825 19.6211 3.06398 19.377 3.30806L18.0734 4.61166L15.5734 2.11166L16.877 0.808058C17.1211 0.56398 17.5168 0.563981 17.7609 0.808058L19.377 2.42418Z"
                                        fill="black"/>
                                    <path
                                        d="M17.1895 5.49554L14.6895 2.99554L6.17326 11.5118C6.10465 11.5804 6.05296 11.664 6.02228 11.7561L5.01658 14.7732C4.93514 15.0175 5.16756 15.2499 5.41186 15.1685L8.42896 14.1628C8.52101 14.1321 8.60465 14.0804 8.67326 14.0118L17.1895 5.49554Z"
                                        fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M1.25 16.875C1.25 17.9105 2.08947 18.75 3.125 18.75H16.875C17.9105 18.75 18.75 17.9105 18.75 16.875V9.375C18.75 9.02982 18.4702 8.75 18.125 8.75C17.7798 8.75 17.5 9.02982 17.5 9.375V16.875C17.5 17.2202 17.2202 17.5 16.875 17.5H3.125C2.77982 17.5 2.5 17.2202 2.5 16.875V3.125C2.5 2.77982 2.77982 2.5 3.125 2.5H11.25C11.5952 2.5 11.875 2.22018 11.875 1.875C11.875 1.52982 11.5952 1.25 11.25 1.25H3.125C2.08947 1.25 1.25 2.08947 1.25 3.125V16.875Z"
                                          fill="black"/>
                                </svg>
                            </span>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</main>
</body>
</html>
