<head>
    <?php
    $pageTitle = "Operator Dashboard";
    
    if (isset($_GET["content"])){
        $dashContent = htmlspecialchars($_GET["content"]); # use this to set what section should be shown
    }else{
        #default to problems page
        $dashContent = "logs/problems";
    }
    echo $dashContent;
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

                <div class="position-sticky fixed-top w-auto">
                    <ul class="nav flex-column">
                        <!-- Need to work out how best to navigate between panels which are currently accessed through ?content= in the URL -->
                        <h4 class="sidebar-heading text-center align-items-center px-3 mt-3 mb-3 text-muted">Logs</h4>
                        <li class="nav-item btn btn-outline-primary mb-1 <?php if ($dashContent == 'logs/problems') {
                                                                                echo 'disabled';
                                                                            }; ?>" onclick="location.replace('/operator-dash?content=logs/problems');">Problems</li>
                        <li class="nav-item btn btn-outline-primary mb-1 <?php if ($dashContent == 'logs/calls') {
                                                                                echo 'disabled';
                                                                            }; ?>" onclick="location.replace('/operator-dash?content=logs/calls');">Calls</li>

                        <h4 class="sidebar-heading text-center align-items-center px-3 mt-3 mb-3 text-muted">Databases</h4>
                        <li onclick="location.replace('/operator-dash?content=databases/emp');" class="nav-item btn btn-outline-primary mb-1 <?php if ($dashContent == 'databases/emp') {
                                                                                                                                                    echo 'disabled';
                                                                                                                                                }; ?>">Employee</li>
                        <li onclick="location.replace('/operator-dash?content=databases/hardware');" class="nav-item btn btn-outline-primary mb-1 <?php if ($dashContent == 'databases/hardware') {
                                                                                                                                                        echo 'disabled';
                                                                                                                                                    }; ?>">Hardware</li>
                        <li onclick="location.replace('/operator-dash?content=databases/software');" class="nav-item btn btn-outline-primary mb-1 <?php if ($dashContent == 'databases/software') {
                                                                                                                                                        echo 'disabled';
                                                                                                                                                    }; ?>">Software</li>
                        <li onclick="location.replace('/operator-dash?content=databases/specialists');" class="nav-item btn btn-outline-primary mb-1 <?php if ($dashContent == 'databases/specialists') {
                                                                                                                                                            echo 'disabled';
                                                                                                                                                        }; ?>">Specialist</li>
                        <br>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="btn btn-outline-primary col-12">Account Settings</div>
                            </a>
                            <ul class="dropdown-menu col-12" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" onclick="location.replace('/operator-dash?content=user-settings/change-password');">Change Password</a></li>
                                <li><a class="dropdown-item" onclick="location.replace('/operator-dash?content=user-settings/backups');">Manage Backups</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/login.php">Log Out</a></li>
                            </ul>
                        </li>

                        <br>
                        <button type="button" class="btn btn-primary d-none d-md-inline-block" id="topBtn" onclick="topFunction()">Return to Top</button>
                    </ul>
                </div>

            </nav>
            <div class="container-fluid flex-fill overflow-auto m-1 col-md-7" id="dashContent">
                <?php
                # import the selected panel
                include "dash-content/" . $dashContent . ".php";
                isset($GET["content"]) ? include "dash-content/" . $dashContent . ".php" : "did not find content"; # is content variable set? if so include that panel.
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
    <script>
        //Get the button:
        mybutton = $("#topbtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.fadeIn();
            } else {
                mybutton.fadeOut();
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    <?php include "commonPHP/footer.php" ?>
</body>