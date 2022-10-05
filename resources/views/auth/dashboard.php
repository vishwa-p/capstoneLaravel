<?= view('layout.header') ?>

    <section class="w3-padding">

        <ul id="dashboard">           
            <li>
                <a href="/console/users/list">
                    <div class="dashboard-item">
                        Manage Users
                    </div>
                </a>
            </li>
            <li>
                <a href="/shoes/list">
                    <div class="dashboard-item">
                        Manage Shoes
                    </div>
                </a>
            </li>
            <li>
                <a href="/auth/logout">
                    <div class="dashboard-item">
                        Logout
                    </div>
                </a>
            </li>
        </ul>

    </section>

</body>

</html>