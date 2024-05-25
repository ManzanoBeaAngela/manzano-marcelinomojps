
        <div class="sidebar">
            <img src="../../img/admin.png" alt="Admin Image" class="profile-img"> <!-- Replace with actual profile image path -->
            <div class="role">
                <h5><?php echo htmlspecialchars(ucfirst($user_role)); ?></h5>
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
            <a class="nav-link <?php if ($currentFile === 'users.php') echo 'active'; ?>" href="users.php">Users</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentFile === 'settings.php') echo 'active'; ?>" href="settings.php">Settings</a>
        </li>
    </ul>
</div>
