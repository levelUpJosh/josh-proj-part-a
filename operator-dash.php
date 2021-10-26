<head>
    <?php 
    $pageTitle = "Operator Dashboard";
    $dashContent = htmlspecialchars($_GET["content"]); # use this to set what section should be shown
    include "commonPHP/head.php";
    ?>
</head>
<body>
    <div class="container-fluid vh-100 d-flex flex-column">
        <div class="row bg-dark text-light text-center">
            <h1>Make-It-All Helpdesk - Operator</h1>
        </div>
        <div class="row flex-grow-1">
        <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sideMenu" aria-expanded="false" aria-controls="sideMenu">
                Button that hides the sidebar
            </button> -->
            <nav id="sideMenu" class="col-md-4 col-lg-2 bg-light sidebar border collapse-horizontal">
            
                <div class="position-sticky w-auto">
                    <ul class="nav flex-column">
                        <h4 class="sidebar-heading text-center align-items-center px-3 mt-3 mb-3 text-muted">Lookup</h4>
                        <li onclick="location.reload()" class="nav-item btn btn-outline-primary mb-1">Employee Lookup</li>
                        <li onclick="location.reload()" class="nav-item btn btn-outline-primary mb-1">Hardware Lookup</li>
                        <li onclick="location.reload()" class="nav-item btn btn-outline-primary mb-1">Software Lookup</li>
                        <li onclick="location.reload()" class="nav-item btn btn-outline-primary mb-1">Specialist Lookup</li>

                        <h4 class="sidebar-heading text-center align-items-center px-3 mt-3 mb-3 text-muted">Logs</h4>
                        <li class="nav-item btn btn-outline-primary mb-1">Problem Log</li>
                        <li class="nav-item btn btn-outline-primary mb-1">Call Log</li>
                    </ul>
                </div>

            </nav>
            <div class="container-fluid flex-fill  col-md-8" id="dashContent">
                <?php 
                include "dash-content/".$dashContent.".php"
                ?>
            </div>
            <!-- <ul class="nav flex-column border">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul> -->
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        </div>
    </div>
    <?php include "commonPHP/footer.php"?>
</body>