<head>
    <?php 
    $pageTitle = "Login";
    include "commonPHP/head.php";
    ?>
</head>
<body>
    <div class="container-md ">
        <div class="row col-md-6 ms-auto me-auto">
            <div class="row">
                <div class="card mt-3">
                    <div class="card-body">
                        <h1 class="card-title text-center">Make-It-All Helpdesk</h1>
                        <p class="card-subtitle text-center">Login</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <form class="card mt-3">
                    <div class="card-body">
                        <div class="mb-3 mt-2">
                            <label for="username">Username: </label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Username Here">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password Here">
                        </div>
                        <div class="alert d-none" id="loginAlertBox">
                            This is just a placeholder, show and hide this as needed
                        </div>
                    </div> 
                </form>
                <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    <?php include "commonPHP/footer.php"?>
    <script src="loginpassword.js"></script>
    </script>
</body>