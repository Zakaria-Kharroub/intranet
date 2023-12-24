<!-- Sidebar -->
<nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo isset($_GET['action']) && $_GET['action'] == 'listFormateurs' ? 'active' : ''; ?>" href="?action=listFormateurs">
                    Liste Formateur
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo isset($_GET['action']) && $_GET['action'] == 'listUsers' ? 'active' : ''; ?>" href="?action=listUsers">
                    Liste Apprenant
                </a>
            </li>
        </ul>
    </div>
</nav>