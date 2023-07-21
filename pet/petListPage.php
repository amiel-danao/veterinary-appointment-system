<!DOCTYPE html>
<html>
<head>
    <title>Pet List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
  

</head>
<body>
    <div class="container">
        <h1 class="mt-4">Pet List</h1>

        <table id="petTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Breed</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Assuming you have already established a MySQL connection
                $patientId = $_GET['patientId']; // Assuming you pass patientId as a query parameter

                // Fetch the pets belonging to the patient from the "pet" table
                $sql = "SELECT * FROM pet WHERE patient_id = '$patientId'";
                $result = mysqli_query($connection, $sql);

                // Loop through the pet records and display them in the table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['species'] . "</td>";
                    echo "<td>" . $row['breed'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "</tr>";
                }

                // Close the MySQL connection
                mysqli_close($connection);
                ?>
            </tbody>
        </table>

        <a href="addPetPage.php?patientId=<?php echo $patientId; ?>" class="btn btn-primary mt-3">Add New Pet</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#petTable').DataTable();
        });
    </script>
</body>
</html>
