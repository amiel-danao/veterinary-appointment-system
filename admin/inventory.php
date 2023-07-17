<?php
session_start();
// Redirect the user to login page if the user is not logged in.
if (!isset($_SESSION['loggedIn'])) {
	header('Location: login.php');
	exit();
}
require_once('../inc/config/constants.php');
require_once('../inc/config/db.php');
require_once('../inc/header.html');

// <link rel="stylesheet" href="../css/animations.css">  
// <link rel="stylesheet" href="../css/main.css">  
// <link rel="stylesheet" href="../css/admin.css">
?>

<head>

</head>

<body>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <h1 class="my-4"></h1>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
				if($_SESSION['usertype'] == 'a'){ ?>
                    <table class="menu-container" border="0">
                        <tr>
                            <td style="padding:10px" colspan="2">
                                <table border="0" class="profile-container">
                                    <tr>
                                        <td width="30%" style="padding-left:20px">
                                            <img src="../img/user.png" alt="" width="100%" style="border-radius:50%">
                                        </td>
                                        <td style="padding:0px;margin:0px;">
                                            <p class="profile-title">Administrator</p>
                                            <p class="profile-subtitle">admin@edoc.com</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a href="../logout.php"><input type="button" value="Log out"
                                                    class="logout-btn btn-primary-soft btn"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr class="menu-row">
                            <td class="menu-btn menu-icon-dashbord">
                                <a href="index.php" class="non-style-link-menu">
                                    <div>
                                        <p class="menu-text">Dashboard</p>
                                </a>
                </div>
                </a>
                </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-doctor ">
                        <a href="doctors.php" class="non-style-link-menu ">
                            <div>
                                <p class="menu-text">Doctors</p>
                        </a>
            </div>
            </td>
            </tr>
            <tr class="menu-row">
                <td class="menu-btn menu-icon-schedule">
                    <a href="schedule.php" class="non-style-link-menu">
                        <div>
                            <p class="menu-text">Schedule</p>
                        </div>
                    </a>
                </td>
            </tr>
            <tr class="menu-row">
                <td class="menu-btn menu-icon-appoinment">
                    <a href="appointment.php" class="non-style-link-menu">
                        <div>
                            <p class="menu-text">Appointment</p>
                    </a>
        </div>
        </td>
        </tr>
        <tr class="menu-row">
            <td class="menu-btn menu-icon-patient">
                <a href="patient.php" class="non-style-link-menu">
                    <div>
                        <p class="menu-text">Patients</p>
                </a>
    </div>
    </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a href="inventory.php" class="on-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Inventory</p>
            </a></div>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-item" role="tab" aria-controls="v-pills-item" aria-selected="true"
                class=" non-style-link-menu
                non-style-link-menu-active">
                <div>
                    <p class="menu-text">Item</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-purchase" role="tab" data-toggle="pill" href="#v-pills-purchase"
                role="tab" aria-controls="v-pills-purchase" aria-selected="false"
                class="non-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Purchase</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-vendor" role="tab" aria-controls="v-pills-vendor" aria-selected="false"
                class="non-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Vendor</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-sale" role="tab" aria-controls="v-pills-sale" aria-selected="false"
                class="non-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Sale</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer"
                aria-selected="false" class="non-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Customer</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-search" role="tab" aria-controls="v-pills-search" aria-selected="false"
                class="non-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Search</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    <tr class="menu-row">
        <td class="menu-btn menu-icon-dashbord menu-active menu-icon-dashbord-active">
            <a data-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports"
                aria-selected="false" class="non-style-link-menu non-style-link-menu-active">
                <div>
                    <p class="menu-text">Reports</p>
            </a>
            </div>
            </a>
        </td>
    </tr>
    </table>


    <a class="nav-link active" id="v-pills-item-tab" data-toggle="pill" href="#v-pills-item" role="tab"
        aria-controls="v-pills-item" aria-selected="true">Item</a>
    <a class="nav-link" id="v-pills-purchase-tab" data-toggle="pill" href="#v-pills-purchase" role="tab"
        aria-controls="v-pills-purchase" aria-selected="false">Purchase</a>
    <a class="nav-link" id="v-pills-vendor-tab" data-toggle="pill" href="#v-pills-vendor" role="tab"
        aria-controls="v-pills-vendor" aria-selected="false">Vendor</a>
    <a class="nav-link" id="v-pills-sale-tab" data-toggle="pill" href="#v-pills-sale" role="tab"
        aria-controls="v-pills-sale" aria-selected="false">Sale</a>
    <a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab"
        aria-controls="v-pills-customer" aria-selected="false">Customer</a>
    <a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#v-pills-search" role="tab"
        aria-controls="v-pills-search" aria-selected="false">Search</a>
    <a class="nav-link" id="v-pills-reports-tab" data-toggle="pill" href="#v-pills-reports" role="tab"
        aria-controls="v-pills-reports" aria-selected="false">Reports</a>
    <?php
				} 
				?>
    </div>
    </div>


    <?php if ($_SESSION['usertype'] == 'a') { ?>
    <div class="col-lg-10">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-item" role="tabpanel" aria-labelledby="v-pills-item-tab">
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">Item Details</div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#itemDetailsTab">Item</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#itemImageTab">Upload Image</a>
                            </li>
                        </ul>

                        <!-- Tab panes for item details and image sections -->
                        <div class="tab-content">
                            <div id="itemDetailsTab" class="container-fluid tab-pane active">
                                <br>
                                <!-- Div to show the ajax message from validations/db submission -->
                                <div id="itemDetailsMessage"></div>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="display:inline-block">
                                            <label for="itemDetailsItemNumber">Item Number<span
                                                    class="requiredIcon">*</span></label>
                                            <input type="text" class="form-control" name="itemDetailsItemNumber"
                                                id="itemDetailsItemNumber" autocomplete="off">
                                            <div id="itemDetailsItemNumberSuggestionsDiv" class="customListDivWidth">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="itemDetailsProductID">Product ID</label>
                                            <input class="form-control invTooltip" type="number" readonly
                                                id="itemDetailsProductID" name="itemDetailsProductID"
                                                title="This will be auto-generated when you add a new item">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="itemDetailsItemName">Item Name<span
                                                    class="requiredIcon">*</span></label>
                                            <input type="text" class="form-control" name="itemDetailsItemName"
                                                id="itemDetailsItemName" autocomplete="off">
                                            <div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="itemDetailsStatus">Status</label>
                                            <select id="itemDetailsStatus" name="itemDetailsStatus"
                                                class="form-control chosenSelect">
                                                <?php include('inc/statusList.html'); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" style="display:inline-block">
                                            <!-- <label for="itemDetailsDescription">Description</label> -->
                                            <textarea rows="4" class="form-control" placeholder="Description"
                                                name="itemDetailsDescription" id="itemDetailsDescription"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="itemDetailsDiscount">Discount %</label>
                                            <input type="text" class="form-control" value="0" name="itemDetailsDiscount"
                                                id="itemDetailsDiscount">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="itemDetailsQuantity">Quantity<span
                                                    class="requiredIcon">*</span></label>
                                            <input type="number" class="form-control" value="0"
                                                name="itemDetailsQuantity" id="itemDetailsQuantity">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="itemDetailsUnitPrice">Unit Price<span
                                                    class="requiredIcon">*</span></label>
                                            <input type="text" class="form-control" value="0"
                                                name="itemDetailsUnitPrice" id="itemDetailsUnitPrice">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="itemDetailsTotalStock">Total Stock</label>
                                            <input type="text" class="form-control" name="itemDetailsTotalStock"
                                                id="itemDetailsTotalStock" readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div id="imageContainer"></div>
                                        </div>
                                    </div>
                                    <button type="button" id="addItem" class="btn btn-success">Add Item</button>
                                    <button type="button" id="updateItemDetailsButton"
                                        class="btn btn-primary">Update</button>
                                    <button type="button" id="deleteItem" class="btn btn-danger">Delete</button>
                                    <button type="reset" class="btn" id="itemClear">Clear</button>
                                </form>
                            </div>
                            <div id="itemImageTab" class="container-fluid tab-pane fade">
                                <br>
                                <div id="itemImageMessage"></div>
                                <p>You can upload an image for a particular item using this section.</p>
                                <p>Please make sure the item is already added to database before uploading the
                                    image.</p>
                                <br>
                                <form name="imageForm" id="imageForm" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-3" style="display:inline-block">
                                            <label for="itemImageItemNumber">Item Number<span
                                                    class="requiredIcon">*</span></label>
                                            <input type="text" class="form-control" name="itemImageItemNumber"
                                                id="itemImageItemNumber" autocomplete="off">
                                            <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="itemImageItemName">Item Name</label>
                                            <input type="text" class="form-control" name="itemImageItemName"
                                                id="itemImageItemName" readonly>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-7">
                                            <label for="itemImageFile">Select Image ( <span class="blueText">jpg</span>,
                                                <span class="blueText">jpeg</span>, <span class="blueText">gif</span>,
                                                <span class="blueText">png</span> only )</label>
                                            <input type="file" class="form-control-file btn btn-dark" id="itemImageFile"
                                                name="itemImageFile">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="button" id="updateImageButton" class="btn btn-primary">Upload
                                        Image</button>
                                    <button type="button" id="deleteImageButton" class="btn btn-danger">Delete
                                        Image</button>
                                    <button type="reset" class="btn">Clear</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-purchase" role="tabpanel" aria-labelledby="v-pills-purchase-tab">
                <div class="card card-outline-secondary my-4">
                    <div class="card-header">Purchase Details</div>
                    <div class="card-body">
                        <div id="purchaseDetailsMessage"></div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="purchaseDetailsItemNumber">Item Number<span
                                            class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" id="purchaseDetailsItemNumber"
                                        name="purchaseDetailsItemNumber" autocomplete="off">
                                    <div id="purchaseDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="purchaseDetailsPurchaseDate">Purchase Date<span
                                            class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control datepicker" id="purchaseDetailsPurchaseDate"
                                        name="purchaseDetailsPurchaseDate" readonly value="2018-05-24">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="purchaseDetailsPurchaseID">Purchase ID</label>
                                    <input type="text" class="form-control invTooltip" id="purchaseDetailsPurchaseID"
                                        name="purchaseDetailsPurchaseID"
                                        title="This will be auto-generated when you add a new record"
                                        autocomplete="off">
                                    <div id="purchaseDetailsPurchaseIDSuggestionsDiv" class="customListDivWidth"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="purchaseDetailsItemName">Item Name<span
                                            class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control invTooltip" id="purchaseDetailsItemName"
                                        name="purchaseDetailsItemName" readonly
                                        title="This will be auto-filled when you enter the item number above">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="purchaseDetailsCurrentStock">Current Stock</label>
                                    <input type="text" class="form-control" id="purchaseDetailsCurrentStock"
                                        name="purchaseDetailsCurrentStock" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="purchaseDetailsVendorName">Vendor Name<span
                                            class="requiredIcon">*</span></label>
                                    <select id="purchaseDetailsVendorName" name="purchaseDetailsVendorName"
                                        class="form-control chosenSelect">
                                        <?php
								require('model/vendor/getVendorNames.php');
								?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="purchaseDetailsQuantity">Quantity<span
                                            class="requiredIcon">*</span></label>
                                    <input type="number" class="form-control" id="purchaseDetailsQuantity"
                                        name="purchaseDetailsQuantity" value="0">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="purchaseDetailsUnitPrice">Unit Price<span
                                            class="requiredIcon">*</span></label>
                                    <input type="text" class="form-control" id="purchaseDetailsUnitPrice"
                                        name="purchaseDetailsUnitPrice" value="0">

                                </div>
                                <div class="form-group col-md-2">
                                    <label for="purchaseDetailsTotal">Total Cost</label>
                                    <input type="text" class="form-control" id="purchaseDetailsTotal"
                                        name="purchaseDetailsTotal" readonly>
                                </div>
                            </div>
                            <button type="button" id="addPurchase" class="btn btn-success">Add Purchase</button>
                            <button type="button" id="updatePurchaseDetailsButton"
                                class="btn btn-primary">Update</button>
                            <button type="reset" class="btn">Clear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php
	}
	?>
    </div>
    </div>
    <?php
	require_once('../inc/footer.php');
	?>
</body>

</html>