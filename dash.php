<head>
    <?php 
    $pageTitle = "Dashboard";
    include "commonPHP/head.php";
    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex">
            <nav id="sideMenu" class="col-md-4 col-lg-3 d-md-block bg-light  sidebar collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">Lookup</h6>
                        <li class="nav-item">Employee Lookup</li>
                        <li class="nav-item">Hardware Lookup</li>
                        <li class="nav-item">Software Lookup</li>
                        <li class="nav-item">Specialist Lookup</li>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">Logs</h6>
                        <li class="nav-item">Problem Log</li>
                        <li class="nav-item">Call Log</li>
                    </ul>
                </div>

            </nav>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        </div>
    </div>
    <?php include "commonPHP/footer.php"?>
</body>