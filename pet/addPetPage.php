<!DOCTYPE html>
<html>

<head>
    <title>Add Pets</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">
    <?php include('../inc/header.php') ?>


</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION["user"])) {
        if (($_SESSION["user"]) == "" or $_SESSION['usertype'] != 'p') {
            header("location: ../login.php");
        } else {
            $useremail = $_SESSION["user"];
        }

    } else {
        header("location: ../login.php");
    }

    include("../connection.php");

    $sqlmain = "select * from patient where pemail=?";
    $stmt = $database->prepare($sqlmain);
    $stmt->bind_param("s", $useremail);
    $stmt->execute();
    $userrow = $stmt->get_result();
    $userfetch = $userrow->fetch_assoc();

    $userid = $userfetch["pid"];
    $username = $userfetch["pname"];

    ?>
    <div class="container">
        <div class="menu">
            <?php include('../inc/patientSidebar.php') ?>
        </div>
        <div class="dash-body" style="margin-top: 15px; padding-left:40px">
            <a href="#" onclick="goBack()" class="btn btn-primary mt-3">Back</a>
            <h1 class="mt-4">Add Pet</h1>
            <form id="petForm" class="row g-3" method="post" action="addPetCheck.php">
                <div class="col-md-6">
                    <label for="petName" class="form-label">Name</label>
                    <input type="text" name="petName" class="form-control" id="petName" placeholder="Enter pet name..."
                        required>
                </div>
                <div class="col-md-3">
                    <label for="birthdate">Select your birthdate:</label>
                    <input type="date" name="birthdate" id="birthdate" name="birthdate" min="2000-01-01"
                        max="2050-12-31" required>
                </div>
                <div class="col-md-6">
                    <label for="specieSelect" class="form-label">Specie</label>
                    <select id="specieSelect" name="specie" class="form-select">
                        <?php
                        $stmt = $database->query("SELECT * FROM species");
                        while ($specieDetails = $stmt->fetch_assoc()) {
                            $specieName = $specieDetails['name'];
                            $specieId = $specieDetails['speId'];
                            echo "<option id='$specieId' value='$specieId'>" . ucwords($specieName) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="breedSelect" class="form-label">Breed</label>
                    <select id="breedSelect" name="breed" class="form-select">
                        <?php
                        $stmt = $database->query("SELECT * FROM breed WHERE speId=1");
                        while ($specieDetails = $stmt->fetch_assoc()) {
                            $breedName = $specieDetails['name'];
                            $breedId = $specieDetails['breedId'];
                            echo "<option id='$breedId' value='$breedId'>" . ucwords($breedName) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <input type="hidden" name="pid" value="<?php echo htmlspecialchars($userid); ?>">
                <br>
                <div>
                    <button type="submit" class="btn btn-primary add-pet">Add New Pet</button>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <?php include('../inc/scripts.php') ?>
</body>

</html>