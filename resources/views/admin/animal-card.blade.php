<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Refuge">
    <meta name="author" content="Coban Seren">
    <title>Refuge - Accueil</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="main-content">
    <div class="admin__header">
        <h1 class="admin__header__left">Dashboard</h1>
        <div class="admin__header__right">
            <div class="admin__header_notification-icon">
                <span class="admin__header__notification-badge">1</span>
            </div>
            <div class="admin__user-avatar">SC</div>
            <div class="admin__user-name">Seren<br>Coban</div>
        </div>
    </div>
</header>
<nav class="admin__sidebar">
    <h2 class="admin__logo">LES PATTES HEUREUSES</h2>
    <div class="admin__menu-item">
        <svg class="admin__menu-logo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M7.5 1.25V5H1.25L1.25 1.25H7.5ZM1.25 0C0.559644 0 0 0.559644 0 1.25V5C0 5.69036 0.559644 6.25 1.25 6.25H7.5C8.19036 6.25 8.75 5.69036 8.75 5V1.25C8.75 0.559644 8.19036 0 7.5 0H1.25Z" fill="#414833"/>
            <path d="M18.75 15V18.75H12.5V15H18.75ZM12.5 13.75C11.8096 13.75 11.25 14.3096 11.25 15V18.75C11.25 19.4404 11.8096 20 12.5 20H18.75C19.4404 20 20 19.4404 20 18.75V15C20 14.3096 19.4404 13.75 18.75 13.75H12.5Z" fill="#414833"/>
            <path d="M7.5 10V18.75H1.25L1.25 10H7.5ZM1.25 8.75C0.559644 8.75 0 9.30964 0 10V18.75C0 19.4404 0.559644 20 1.25 20H7.5C8.19036 20 8.75 19.4404 8.75 18.75V10C8.75 9.30964 8.19036 8.75 7.5 8.75H1.25Z" fill="#414833"/>
            <path d="M18.75 1.25V10H12.5V1.25H18.75ZM12.5 0C11.8096 0 11.25 0.559644 11.25 1.25V10C11.25 10.6904 11.8096 11.25 12.5 11.25H18.75C19.4404 11.25 20 10.6904 20 10V1.25C20 0.559644 19.4404 0 18.75 0H12.5Z" fill="#414833"/>
        </svg>
        Dashboard
    </div>
    <div class="admin__menu-item">
        <svg class="admin__menu-logo" xmlns="http://www.w3.org/2000/svg" width="20" height="23" viewBox="0 0 20 23" fill="none">
            <path d="M18.125 4.3125C18.4702 4.3125 18.75 4.6343 18.75 5.03125V17.9688C18.75 18.3657 18.4702 18.6875 18.125 18.6875H1.875C1.52982 18.6875 1.25 18.3657 1.25 17.9688V5.03125C1.25 4.6343 1.52982 4.3125 1.875 4.3125H18.125ZM1.875 2.875C0.839466 2.875 0 3.84039 0 5.03125V17.9688C0 19.1596 0.839466 20.125 1.875 20.125H18.125C19.1605 20.125 20 19.1596 20 17.9688V5.03125C20 3.84039 19.1605 2.875 18.125 2.875H1.875Z" fill="#363636"/>
            <path d="M6.25 11.5C6.25 11.103 6.52982 10.7812 6.875 10.7812H15.625C15.9702 10.7812 16.25 11.103 16.25 11.5C16.25 11.897 15.9702 12.2188 15.625 12.2188H6.875C6.52982 12.2188 6.25 11.897 6.25 11.5Z" fill="#363636"/>
            <path d="M6.25 7.90625C6.25 7.5093 6.52982 7.1875 6.875 7.1875H15.625C15.9702 7.1875 16.25 7.5093 16.25 7.90625C16.25 8.3032 15.9702 8.625 15.625 8.625H6.875C6.52982 8.625 6.25 8.3032 6.25 7.90625Z" fill="#363636"/>
            <path d="M6.25 15.0938C6.25 14.6968 6.52982 14.375 6.875 14.375H15.625C15.9702 14.375 16.25 14.6968 16.25 15.0938C16.25 15.4907 15.9702 15.8125 15.625 15.8125H6.875C6.52982 15.8125 6.25 15.4907 6.25 15.0938Z" fill="#363636"/>
            <path d="M5 7.90625C5 8.3032 4.72018 8.625 4.375 8.625C4.02982 8.625 3.75 8.3032 3.75 7.90625C3.75 7.5093 4.02982 7.1875 4.375 7.1875C4.72018 7.1875 5 7.5093 5 7.90625Z" fill="#363636"/>
            <path d="M5 11.5C5 11.897 4.72018 12.2188 4.375 12.2188C4.02982 12.2188 3.75 11.897 3.75 11.5C3.75 11.103 4.02982 10.7812 4.375 10.7812C4.72018 10.7812 5 11.103 5 11.5Z" fill="#363636"/>
            <path d="M5 15.0938C5 15.4907 4.72018 15.8125 4.375 15.8125C4.02982 15.8125 3.75 15.4907 3.75 15.0938C3.75 14.6968 4.02982 14.375 4.375 14.375C4.72018 14.375 5 14.6968 5 15.0938Z" fill="#363636"/>
        </svg>
        Animaux
    </div>
    <div class="admin__menu-item active">
        <svg class="admin__menu-logo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M18.75 17.5C18.75 17.5 20 17.5 20 16.25C20 15 18.75 11.25 13.75 11.25C8.75 11.25 7.5 15 7.5 16.25C7.5 17.5 8.75 17.5 8.75 17.5H18.75ZM8.77793 16.25C8.7736 16.2495 8.76754 16.2487 8.76019 16.2475C8.75672 16.2469 8.75333 16.2463 8.75001 16.2456C8.75182 15.9156 8.95859 14.9586 9.69907 14.0947C10.3917 13.2867 11.6034 12.5 13.75 12.5C15.8966 12.5 17.1083 13.2867 17.8009 14.0947C18.5414 14.9586 18.7482 15.9156 18.75 16.2456C18.7467 16.2463 18.7433 16.2469 18.7398 16.2475C18.7325 16.2487 18.7264 16.2495 18.7221 16.25H8.77793Z" fill="#363636"/>
            <path d="M13.75 8.75C15.1307 8.75 16.25 7.63071 16.25 6.25C16.25 4.86929 15.1307 3.75 13.75 3.75C12.3693 3.75 11.25 4.86929 11.25 6.25C11.25 7.63071 12.3693 8.75 13.75 8.75ZM17.5 6.25C17.5 8.32107 15.8211 10 13.75 10C11.6789 10 10 8.32107 10 6.25C10 4.17893 11.6789 2.5 13.75 2.5C15.8211 2.5 17.5 4.17893 17.5 6.25Z" fill="#363636"/>
            <path d="M8.66991 11.6C8.21017 11.4529 7.69942 11.346 7.13285 11.2913C6.85244 11.2643 6.55835 11.25 6.25 11.25C1.25 11.25 0 15 0 16.25C0 17.0833 0.416667 17.5 1.25 17.5H6.52045C6.34445 17.1449 6.25 16.7239 6.25 16.25C6.25 14.9871 6.72156 13.6975 7.61227 12.6202C7.91659 12.2522 8.26983 11.9089 8.66991 11.6ZM6.15005 12.5006C5.40319 13.642 5 14.9434 5 16.25H1.25C1.25 15.9241 1.45531 14.9625 2.19907 14.0947C2.88086 13.2993 4.06562 12.5246 6.15005 12.5006Z" fill="#363636"/>
            <path d="M1.875 6.875C1.875 4.80393 3.55393 3.125 5.625 3.125C7.69607 3.125 9.375 4.80393 9.375 6.875C9.375 8.94607 7.69607 10.625 5.625 10.625C3.55393 10.625 1.875 8.94607 1.875 6.875ZM5.625 4.375C4.24429 4.375 3.125 5.49429 3.125 6.875C3.125 8.25571 4.24429 9.375 5.625 9.375C7.00571 9.375 8.125 8.25571 8.125 6.875C8.125 5.49429 7.00571 4.375 5.625 4.375Z" fill="#363636"/>
        </svg>
        Bénévoles
    </div>
    <div class="admin__menu-item">
        <svg class="admin__menu-logo" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M0 5C0 3.61929 1.11929 2.5 2.5 2.5H17.5C18.8807 2.5 20 3.61929 20 5V15C20 16.3807 18.8807 17.5 17.5 17.5H2.5C1.11929 17.5 0 16.3807 0 15V5ZM2.5 3.75C1.80964 3.75 1.25 4.30964 1.25 5V5.27113L10 10.5211L18.75 5.27113V5C18.75 4.30964 18.1904 3.75 17.5 3.75H2.5ZM18.75 6.72887L12.8649 10.2599L18.75 13.8815V6.72887ZM18.7078 15.3233L11.6573 10.9845L10 11.9789L8.34272 10.9845L1.29221 15.3233C1.43468 15.8569 1.92144 16.25 2.5 16.25H17.5C18.0786 16.25 18.5653 15.8569 18.7078 15.3233ZM1.25 13.8815L7.1351 10.2599L1.25 6.72887V13.8815Z" fill="#363636"/>
        </svg>
        Messages
    </div>
    <div class="logout">Déconnexion</div>
</nav>
<div>
    <div>
        <a href="">Tous les animaux</a>
        <span>1</span>
    </div>
    <div class="animals-filters">
        <p class="animals-filters__label">Filtrer par:</p>
        <a href="#" class="cta__btn">Voir tous les animaux</a>
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
        <a href="" class="cta__btn">Filtrer</a>
    </div>
    <table>
        <tr>
            <th>Image</th>
            <th>Nom</th>
            <th>Animal</th>
            <th>Status</th>
            <th>Dernière modification</th>
        </tr>
        <tr>
            <td><img src="" alt=""></td>
            <td>Moka</td>
            <td>Chien</td>
            <td>En cours d'adoption</td>
            <td>02/11/25</td>
        </tr>
    </table>

</div>
</body>
</html>
