<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <?php include('inc/header.php') ?>
    <title>eDoc</title>
    <style>
    table {
        animation: transitionIn-Y-bottom 0.5s;
    }
    </style>

</head>

<body>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-light bg-opacity-25">
        <header class="mb-auto ">
            <div>
                <h3 class="float-md-start mb-0">Veterinary Appoinment &
                    Inventory System</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-2 text-uppercase text-dark" href="login.php">Log in</a>
                    <a class="nav-link fw-bold py-1 px-2 text-uppercase text-dark" href="signup.php">Register</a>
                </nav>
            </div>
        </header>
        <main class="p-3 d-flex flex-column align-items-center text-center bg-dark bg-opacity-50 text-white">
            <h1>Avoid Hassles & Delays.</h1>
            <p class="lead">How is your pet's health today, Sounds like not good!<br>Don't worry. Find your veterinary
                online.</p>
            <p class="lead">
                <a href="login.php" class="btn btn-lg btn-light fw-bold border-white bg-primary">Make Appointment</a>
            </p>
        </main>
        <footer class="text-center mt-auto">
            <div class="container">
                <p>&copy;
                    <?php echo date("Y"); ?> Veterinary Appointment & Inventory System. All rights reserved.
                </p>
            </div>
        </footer>
    </div>



    <?php include('inc/scripts.php') ?>
</body>

</html>