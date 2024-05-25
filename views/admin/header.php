    <nav class="navbar navbar-expand-lg sticky-top navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="../../img/logos.png" alt="Logo"> <!-- Replace with your logo path -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notification.php"><i class="fas fa-bell"></i></a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Hello, <?php echo htmlspecialchars(ucfirst($user_role)); ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </div>
    </nav>