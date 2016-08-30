    <div class="sidebar" data-color="purple" data-image="<?php print base_url() ?>assets/dashboard/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php print base_url() ?>dosen/dashboard/" class="simple-text">
                    Dashboard Dosen
                </a>
            </div>

            <ul class="nav">
                <li <?php if(isset($active_dashboard)){ echo 'class="active"'; }?>>
                    <a href="<?php print base_url() ?>dosen/dashboard/">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if(isset($active_profile)){ echo 'class="active"'; }?>>
                    <a href="<?php print base_url() ?>dosen/profile/">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="<?php print base_url() ?>dosen/dashboard/logout/">
                        <i class="pe-7s-power"></i>
                        <p>Logout System</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>