<?php
    $path_url = Request::path();
?>
<div class="sidebar">
    <div class="logo-details">
        <i class="fab fa-centos"></i>
        <span class="logo_name">SYSTEM</span>
    </div>
    <ul class="nav-links">
        
        <li>
            <a href="/admin/dashboard" class="<?=$path_url == 'admin/dashboard' ? 'active' : ''?>">
                <i class="bx bx-grid-alt"></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/admin/managers" class="<?=$path_url == 'admin/managers' ? 'active' : ''?>">
                <i class="fas fa-user-tie"></i>
                <span class="links_name">Managers</span>
            </a>
        </li>
        <li>
            <a href="/admin/users" class="<?=$path_url == 'admin/users' ? 'active' : ''?>">
                <i class="fas fa-user-tie"></i>
                <span class="links_name">User</span>
            </a>
        </li>
        <li>
            <a href="/admin/reports" class="<?=$path_url == 'admin/reports' ? 'active' : ''?>">
                <i class="bx bx-box"></i>
                <span class="links_name">Report</span>
            </a>
        </li>
        <li>
            <a href="/admin/requests" class="<?=$path_url == 'admin/requests' ? 'active' : ''?>">
                <i class="bx bx-list-ul"></i>
                <span class="links_name">Request</span>
            </a>
        </li>
        <li>
            <a href="/admin/divisions" class="<?=$path_url == 'admin/divisions' ? 'active' : ''?>">
                <i class="fas fa-map-marker-alt"></i>
                <span class="links_name">Division</span>
            </a>
        </li>
        <li>
            <a href="/admin/positions" class="<?=$path_url == 'admin/positions' ? 'active' : ''?>">
                <i class="fas fa-book-open"></i>
                <span class="links_name">Position</span>
            </a>
        </li>
        <li>
            <a href="/admin/skills" class="<?=$path_url == 'admin/skills' ? 'active' : ''?>">
                <i class="fas fa-book-open"></i>
                <span class="links_name">Skill</span>
            </a>
        </li>
       
    </ul>
</div>