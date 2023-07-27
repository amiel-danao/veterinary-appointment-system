<div class="list-group">
    <table border="0" class="profile-container">
        <tr>
            <td width="30%" style="padding-left:20px">
                <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
            </td>
            <td style="padding:0px;margin:0px;">
                <p class="profile-title">
                    <?php echo substr($username, 0, 13) ?>
                </p>
                <p class="profile-subtitle">
                    <?php echo substr($useremail, 0, 22) ?>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="../logout.php"><input type="button" value="Log out"
                        class="logout-btn btn-primary-soft btn"></a>
            </td>
        </tr>
    </table>
</div>
<div class=" list-group">
    <a href="../patient/index.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
        echo 'active';
    } ?>" aria-current="true">
        <i class="bi bi-house-fill"></i> Home
    </a>
    <a href="../patient/doctors.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'doctors.php') {
        echo 'active';
    } ?>" aria-current="true">
        <i class="bi bi-heart-pulse-fill"></i> All Doctors
    </a>
    <a href="../pet/petListPage.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'petListPage.php' || basename($_SERVER['PHP_SELF']) == 'addPetPage.php' || basename($_SERVER['PHP_SELF']) == 'editPetPage.php') {
        echo 'active';
    } ?>" aria-current="true">
        <i class="bi bi-bookmark-heart-fill"></i> My Pets
    </a>
    <a href="../patient/schedule.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'schedule.php') {
        echo 'active';
    } ?>" aria-current="true">
        <i class="bi bi-journal-medical"></i> Scheduled Sessions
    </a>
    <a href="../patient/appointment.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'appointment.php') {
        echo 'active';
    } ?>" aria-current="true">
        <i class="bi bi-calendar2-check-fill"></i> My Bookings
    </a>
    <a href="../patient/settings.php" class="list-group-item list-group-item-action <?php if (basename($_SERVER['PHP_SELF']) == 'settings.php') {
        echo 'active';
    } ?>" aria-current="true">
        <i class="bi bi-gear-fill"></i> Settings
    </a>
</div>