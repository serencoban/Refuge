@include('admin.layouts.header')
<main class="admin-main">
    @include('admin.layouts.aside')

    <div class="admin__main">

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

    <div class="main-content">
        <div class="stats__container">
        <section class="stats-number__section">
            <div class="stats-number__filter">
                <h2 class="stats-number__title">Bonjour Elise</h2>
                <div class="animals-filters__container">
                <div class="animals-filters__group">
                    <label for="filter">Filter</label>
                    <select id="filter">
                        <option value="today">Aujourd'hui</option>
                        <option value="week">Cette semaine</option>
                        <option value="month">Ce mois-ci</option>
                        <option value="three-month">Les 3 derniers mois</option>
                        <option value="year">Cette année</option>
                    </select>
                </div>
                <div class="animals-filters__group">
                    <a href="#">
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
            <div class="stats-number__one">
                <strong class="stats-number__icon">20</strong>
                <p class="stats-number__text">Animaux accueillis</p>
            </div>
            <div class="stats-number__two">
                <strong class="stats-number__icon">20</strong>
                <p class="stats-number__text">Animaux accueillis</p>
            </div>
            <div class="stats-number__three">
                <strong class="stats-number__icon">20</strong>
                <p class="stats-number__text">Animaux accueillis</p>
            </div>
        </section>
    </div>
    <div class="adopt-fiche__container">
        <section class="adoption-application__section">
            <h2>Demande d'adoption</h2>
            <table>
                <tr>
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
            <div>
                <h2>Fiche à valider</h2>
                <span>1</span>
            </div>
            <div>
                <span>Fiche de Moka (envoyé par Adrien)</span>
                <span>Fiche de Moka (envoyé par Adrien)</span>
            </div>
            <div>
                Voir toutes les fiches
            </div>
        </section>
    </div>
    <div class="notif-message__container">
        <section class="notification__section">
            <div>
                <h2>Notifications</h2>
                <span>3</span>
            </div>
            <div>
                <span>Nouvelle demande d’adoption pour Moka 🐶</span>
                <span>Tâche en attente : valider la fiche de Sarah 🐱</span>
            </div>
            <div>
                Voir toutes les fiches
            </div>
        </section>
        <section class="recent-message__section">
            <div>
                <h2>Messages récents</h2>
                <div>Nouveau message</div>
            </div>
            <div>
                <div>
                    <p>Adrien</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget eros eget magna
                        accumsan mollis.</p>
                    <small>Il y a 5 min</small>
                </div>
                <div>
                    <p>Adrien</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget eros eget magna
                        accumsan mollis.</p>
                    <small>Il y a 5 min</small>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et nibh eget libero semper accumsan. Vestibulum est turpis, bibendum a est pretium, facilisis pulvinar lacus. Integer bibendum, libero nec laoreet molestie, elit massa pretium neque, congue feugiat est magna eget ex. Vivamus nulla quam, lobortis sed magna vel, volutpat aliquet lacus. Sed sed augue arcu. Proin malesuada magna vitae sagittis pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec eget est mi. Maecenas vel mi eros. Phasellus pellentesque urna justo, non porta sem elementum non. Maecenas non posuere tellus, nec tempor turpis. Etiam ultrices pretium sapien, a interdum eros commodo vel. Duis bibendum lobortis eleifend. Vestibulum rutrum consectetur finibus. Curabitur cursus leo ipsum, quis accumsan neque faucibus at. Morbi maximus purus neque, non commodo quam vehicula eget.

                    Mauris cursus sit amet tortor tincidunt suscipit. Donec convallis lorem et bibendum laoreet. Vestibulum semper leo dui, ac lacinia sapien facilisis vitae. Proin dictum ante sed congue viverra. Proin vehicula commodo leo sit amet sodales. Aliquam ut libero auctor, ultrices nunc id, dictum nisl. Mauris ac ipsum augue. Aliquam erat volutpat. Maecenas ac mauris vitae neque hendrerit ultrices ac a erat. Cras non auctor sapien. Vivamus aliquam fermentum odio, quis ultricies ipsum mollis dapibus. Sed ac justo sit amet enim dictum placerat. Maecenas ac tortor accumsan, luctus velit vitae, luctus odio. Quisque et magna ut mauris rutrum ornare.

                    Phasellus ultrices, diam sit amet aliquet bibendum, dolor nisl consectetur nunc, a rhoncus nisl arcu nec sapien. Quisque ac dui ac dui cursus interdum. Proin interdum consequat imperdiet. Praesent volutpat leo quis ornare malesuada. Proin sit amet viverra diam. Vestibulum ut tellus dapibus, tempus urna in, ultricies enim. Sed ut dapibus orci, tincidunt sodales augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce hendrerit dapibus suscipit. Quisque facilisis quis lorem eget aliquam. Integer ac nulla elit. Proin convallis ut lacus id accumsan. Integer malesuada posuere dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum a nulla tortor. Maecenas eget volutpat lectus, eget viverra odio.

                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean cursus elit mauris, sed pharetra ante pretium id. Curabitur consectetur odio at elit fringilla, nec luctus urna euismod. Nam tempor sodales nunc. In condimentum nec urna ut vulputate. Vestibulum sit amet vehicula mauris, id gravida mauris. Nullam sodales magna vitae sodales volutpat. Fusce vitae elementum neque, vel hendrerit quam. Vivamus malesuada efficitur lacus nec gravida. Nulla ultrices dapibus velit quis facilisis.

                    Curabitur nisi lorem, venenatis eget eros quis, viverra hendrerit leo. Duis cursus felis quis nunc tristique varius. Sed vitae accumsan tortor. Cras eleifend viverra metus. Quisque felis purus, vehicula sit amet purus nec, laoreet rutrum orci. Aliquam tincidunt ante quis neque efficitur, nec semper leo imperdiet. Donec metus lectus, bibendum ornare tincidunt at, tincidunt at mauris. Vestibulum et maximus erat. Donec bibendum venenatis turpis, vel sagittis nisl scelerisque viverra. Etiam volutpat augue elit, eu commodo lorem mollis sit amet. Sed et sagittis est. Nulla facilisi. Suspendisse vel ligula sit amet est commodo imperdiet. Nunc ut sem dolor.

                    Ut ipsum quam, dapibus ut nisl auctor, elementum dapibus nulla. Ut eleifend felis id consequat porta. Sed turpis turpis, maximus id ex eu, lacinia aliquam ante. Aliquam nec consequat ex. Vestibulum ac sem et quam pretium blandit. Quisque dignissim enim ut turpis tristique imperdiet. Maecenas et quam sit amet augue pharetra gravida. Sed massa nisi, varius ornare ullamcorper in, condimentum at augue. Donec vel elementum ex, eget vestibulum elit. Morbi aliquam commodo justo ut tempor.

                    Praesent eget est vel quam ornare sollicitudin porttitor ut nunc. Quisque vulputate sollicitudin elit quis ultricies. Mauris viverra efficitur feugiat. Mauris dolor nisi, blandit ac tincidunt nec, vulputate sed enim. Duis aliquam accumsan tortor non mattis. Donec ex diam, imperdiet sit amet leo quis, ultricies interdum arcu. Maecenas sapien enim, imperdiet a auctor id, luctus in neque. Donec sit amet nulla ultricies, tempus tellus sed, tempus justo. Duis eget felis vitae tellus imperdiet bibendum a et ante. Vivamus consequat dolor mi, id volutpat nisi malesuada sed. Fusce maximus arcu non porttitor dapibus. In vehicula odio et tellus condimentum congue. Aenean vel nisl orci. Etiam dapibus at nisl eu tincidunt.

                    Aenean vitae euismod orci. Maecenas tristique pulvinar augue, in dapibus tortor posuere vel. Pellentesque justo leo, tempor hendrerit dui eget, malesuada viverra turpis. Sed ex mi, vulputate mattis ex quis, scelerisque lacinia justo. Duis ultricies justo et justo aliquet, vel placerat nisi viverra. Fusce sit amet lacus cursus, rhoncus eros ut, aliquet mauris. Cras id rutrum risus, vitae sollicitudin leo. Aliquam sagittis nunc eget eros tristique, euismod scelerisque lacus tempor. Cras nec vehicula velit. Aenean cursus purus nisl, in eleifend mi rhoncus id. Integer ornare leo vel nisl lacinia finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;

                    Nullam eget suscipit nisi, vitae cursus leo. Nam tincidunt facilisis tortor, in volutpat dolor fermentum et. Donec ligula ipsum, suscipit in leo nec, scelerisque cursus metus. Morbi mollis condimentum lorem eget pharetra. Morbi fringilla lacinia augue, eu lacinia velit iaculis vel. Sed sit amet nisi eget erat ullamcorper rutrum et sed augue. Donec eu elementum est, et aliquam dolor. Pellentesque facilisis pretium metus, ac molestie lorem fringilla quis. Nunc vitae ante non velit ultricies fringilla. Donec ornare diam in volutpat pretium. Duis iaculis felis vel justo mattis, quis fermentum dolor suscipit.

                    Maecenas at pretium sem, ac iaculis purus. Vivamus fermentum faucibus nibh non efficitur. Quisque quis mattis nibh, vitae commodo mauris. Mauris lacinia lectus sit amet urna ullamcorper interdum. Pellentesque nec ornare neque. Vivamus dignissim nisl lacus, in pulvinar est laoreet ut. Nullam in sapien consectetur, venenatis elit vel, rhoncus felis. Donec congue id dui quis fringilla. Ut molestie dui ac turpis suscipit, a imperdiet justo vehicula.</p>
            </div>
        </section>
    </div>
    </div>
    </div>

</main>
</body>
</html>
