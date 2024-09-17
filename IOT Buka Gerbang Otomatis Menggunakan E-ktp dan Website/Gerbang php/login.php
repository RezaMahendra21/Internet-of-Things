<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('desain.php'); ?>

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm border-0 rounded-0">
        <div class="container">
            <h2><a class="navbar-brand" href="index.php"><i class="fa fa-id-card"></i> RFID PAGAR OTOMATIS</a></h2>
    </nav>

    <div class="container col-md-3 mt-5">

        <div class="card border-0 shadow-sm p-md-3 rounded-0">
            <div class="card-body bg-white">
                <h1 class="h4 text-gray-900 mb-4 mt-3 text-center">Silakan Login ADMIN</h1>
                <form method="POST" action="login_proses.php" class="user">

                    <div class="input-group mb-3">
                    <input type="text" class="form-control rounded-0 border-0 bg-light" name="username" placeholder="Username">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0 border-0" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                    <input type="password" class="form-control rounded-0 border-0 bg-light" name="password" placeholder="Password">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0 border-0" id="basic-addon1"><i class="fa fa-lock"></i></i></span>
                        </div> 
                    </div>
                   
                    <button class="btn btn-success mb-4 rounded-0 border-0">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                    </button>
                </form>
            </div>
        </div>

    </div>
    
    
    <div class="container col-md-3 mt-5">

        <div class="card border-0 shadow-sm p-md-3 rounded-0">
            <div class="card-body bg-white">
                <h1 class="h4 text-gray-900 mb-4 mt-3 text-center">Silakan Login USER</h1>
                <form method="POST" action="login_proses.php" class="user">

                    <div class="input-group mb-3">
                    <input type="text" class="form-control rounded-0 border-0 bg-light" name="username" placeholder="Username">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0 border-0" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                    <input type="password" class="form-control rounded-0 border-0 bg-light" name="password" placeholder="Password">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0 border-0" id="basic-addon1"><i class="fa fa-lock"></i></i></span>
                        </div> 
                    </div>
                   
                    <button class="btn btn-success mb-4 rounded-0 border-0">
                        <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                    </button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>