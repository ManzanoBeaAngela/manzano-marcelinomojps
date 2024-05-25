
        <div class="sidebar">
            <img src="../../img/users.png" alt="User Image" class="profile-img">
            <div class="role">
                <h5><?php echo $user_fullname; ?></h5>
                <p></p>
            </div>
    <!-- Sidebar content -->
    <ul class="nav flex-column">
         <?php
        $currentFile = basename($_SERVER['PHP_SELF']);
        ?>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentFile === 'dashboard.php') echo 'active'; ?>" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentFile === 'search_job.php') echo 'active'; ?>" href="search_job.php">Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentFile === 'saved.php') echo 'active'; ?>" href="saved.php">Saved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentFile === 'application.php') echo 'active'; ?>" href="application.php">My Applications</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentFile === 'settings.php') echo 'active'; ?>" href="settings.php">Settings</a>
        </li>
    </ul>
</div>
