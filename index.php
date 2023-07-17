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
        table{
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
        
</head>
<body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"></div>
        <main>
        <table border="0">
            <tr>
                <td width="80%">
                    <div class="edoc-logo-sub text-uppercase">| Veterinary Appoinment & Inventory System</div>
                </td>
                <td width="10%">
                   <a href="login.php"  class="non-style-link"><p class="nav-item">LOGIN</p></a>
                </td>
                <td  width="10%">
                    <a href="signup.php" class="non-style-link"><p class="nav-item" style="padding-right: 10px;">REGISTER</p></a>
                </td>
            </tr>
            
            <tr>
                <td  colspan="3">
                    <p class="heading-text">Avoid Hassles & Delays.</p>

                </td>
            </tr>
            <tr>
                <td  colspan="3">
                    <p class="sub-text2">How is health today, Sounds like not good!<br>Don't worry. Find your doctor online Book as you wish with eDoc. <br>
                    We offer you a free doctor channeling service, Make your appointment now.</p>
                </td>
            </tr>
            <tr>
                
                <td colspan="3">
                    <center>
                    <a href="login.php" >
                        <input type="button" value="Make Appointment" class="login-btn btn-primary btn" style="padding-left: 25px;padding-right: 25px;padding-top: 10px;padding-bottom: 10px;">
                    </a>
                </center>
                </td>
                
            </tr>
            <tr>
                <td colspan="3">
                   
                </td>
            </tr>
        </table>
    </main>
    </div>
    

    <footer class="text-center mt-auto">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Veterinary Appointment & Inventory System. All rights reserved.</p>
        </div>
    </footer>
    <?php include('inc/scripts.php') ?>
</body>
</html>