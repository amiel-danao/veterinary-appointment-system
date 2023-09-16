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
    <title>Ark</title>
    <style>
    table {
        animation: transitionIn-Y-bottom 0.5s;
    }
    body{
        background-image: url('img/home_bg.png');
        background-size: contain;
        background-repeat: repeat;
    }

    .slogan{
        font-family: 'Questrial', sans-serif;
        font-size: 45px;
        font-weight: 400;
    }

    .title{
        font-family: 'Inter', sans-serif;
        font-size: 45px;
        font-weight: 400;
    }

    .subtitle{
        font-family: 'Inter', sans-serif;
        font-size: 22px;
        font-weight: 300;
    }

    .login, .register{
        font-family: 'Inter', sans-serif;
        font-size: 28px;
        font-weight: 400;
    }
    </style>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Questrial&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col d-flex align-items-center justify-content-center">
                <div>
                    <div class="text-center">
                        <img src="img/logo.png" class="img-fluid"/>
                        <h3 class="slogan">
                        The Ark veterinary’s Appointment Scheduling
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col bg-white h-100">
                <div class="row">
                    <header class="mb-auto ">
                        <div>
                            <nav class="nav nav-masthead justify-content-center float-md-end">
                                <a class="nav-link fw-bold py-1 px-2 text-uppercase text-dark login" href="login.php">Log in</a>
                                <a class="nav-link fw-bold py-1 px-2 text-uppercase text-dark register" href="signup.php">Register</a>
                            </nav>
                        </div>
                    </header>
                    
                </div>
                <div class="row h-100">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="p-2">
                            <div class="bg-secondary-subtle p-3 mb-2">
                                <h1 class="title">Hello there!</h1>
                                <p class="lead subtitle">The Ark Veterinary Clinic is a 22-year old veterinary practice that specializes in the treatment of several species of animals. Our clinic hours are 9am to 5pm Mondays to Saturdays. 24/7 on call.</p>
                            </div>
                            <p class="lead text-center mx-auto">
                                <a href="login.php" class="btn btn-lg btn-light fw-bold border-white bg-primary border border-black">Make Appointment</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bg-light bg-opacity-25">
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
            <h1>Hello there!</h1>
            <p class="lead">The Ark Veterinary Clinic is a 22-year old veterinary practice that specializes in the treatment of several species of animals. Our clinic hours are 9am to 5pm Mondays to Saturdays. 24/7 on call.</p>
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
    </div> -->



    <?php include('inc/scripts.php') ?>
</body>

</html>