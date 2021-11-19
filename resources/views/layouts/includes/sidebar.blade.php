<?php
    $path_url = Requests::path();
?>
<div class="sidebar">
    <div class="sidebar__logo">
        <i class="fab fa-centos"></i>
        <span class="logo__name">SYSTEM</span>
    </div>
    <ul class="nav-links">
        
        <li>
            <a href="/admin/dashboards" class="<?=$path_url == 'admin/dashboards' ? 'active' : ''?>">
                <i class="bx bx-grid-alt"></i>
                <span class="links__name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/admin/managers" class="<?=$path_url == 'admin/managers' ? 'active' : ''?>">
                <i class="fas fa-user-tie"></i>
                <span class="links__name">Manager</span>
            </a>
        </li>
        <li>
            <a href="/admin/users" class="<?=$path_url == 'admin/users' ? 'active' : ''?>">
                <i class="fas fa-user-tie"></i>
                <span class="links__name">User</span>
            </a>
        </li>
        <li>
            <a href="/admin/reports" class="<?=$path_url == 'admin/reports' ? 'active' : ''?>">
                <i class="bx bx-box"></i>
                <span class="links__name">Report</span>
            </a>
        </li>
        <li>
            <a href="/admin/requests" class="<?=$path_url == 'admin/requests' ? 'active' : ''?>">
                <i class="bx bx-list-ul"></i>
                <span class="links__name">Request</span>
            </a>
        </li>
        <li>
            <a href="/admin/divisions" class="<?=$path_url == 'admin/divisions' ? 'active' : ''?>">
                <i class="fas fa-map-marker-alt"></i>
                <span class="links__name">Division</span>
            </a>
        </li>
        <li>
            <a href="/admin/positions" class="<?=$path_url == 'admin/positions' ? 'active' : ''?>">
                <i class="fas fa-book-open"></i>
                <span class="links__name">Position</span>
            </a>
        </li>
        <li>
            <a href="/admin/skills" class="<?=$path_url == 'admin/skills' ? 'active' : ''?>">
                <i class="fas fa-book-open"></i>
                <span class="links__name">Skill</span>
            </a>
        </li>
       
    </ul>
</div>