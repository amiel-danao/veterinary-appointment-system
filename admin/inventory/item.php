<div class="card card-outline-secondary my-4">
    <div class="card-header">Item Details</div>
    <div class="card-body">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-item-tab" data-bs-toggle="tab" data-bs-target="#nav-item"
                    type="button" role="tab" aria-controls="nav-item" aria-selected="true">Item</button>
                <button class="nav-link" id="nav-uploadImage-tab" data-bs-toggle="tab" data-bs-target="#nav-uploadImage"
                    type="button" role="tab" aria-controls="nav-uploadImage" aria-selected="false">Upload Image</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab"
                tabindex="0">
                <br>
                <!-- Div to show the ajax message from validations/db submission -->
                <div id="itemDetailsMessage"></div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3" style="display:inline-block">
                            <label for="itemDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
                            <input type="text" class="form-control" name="itemDetailsItemNumber"
                                id="itemDetailsItemNumber" autocomplete="off">
                            <div id="itemDetailsItemNumberSuggestionsDiv" class="customListDivWidth"></div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="itemDetailsProductID">Product ID</label>
                            <input class="form-control invTooltip" type="number" readonly id="itemDetailsProductID"
                                name="itemDetailsProductID" title="This will be auto-generated when you add a new item">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="itemDetailsItemName">Item Name<span class="requiredIcon">*</span></label>
                            <input type="text" class="form-control" name="itemDetailsItemName" id="itemDetailsItemName"
                                autocomplete="off">
                            <div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="itemDetailsStatus">Status</label>
                            <select id="itemDetailsStatus" name="itemDetailsStatus" class="form-control chosenSelect">
                                <?php include('../inc/statusList.html'); ?>
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
                            <label for="itemDetailsQuantity">Quantity<span class="requiredIcon">*</span></label>
                            <input type="number" class="form-control" value="0" name="itemDetailsQuantity"
                                id="itemDetailsQuantity">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="itemDetailsUnitPrice">Unit Price<span class="requiredIcon">*</span></label>
                            <input type="text" class="form-control" value="0" name="itemDetailsUnitPrice"
                                id="itemDetailsUnitPrice">
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
                    <button type="button" id="updateItemDetailsButton" class="btn btn-primary">Update</button>
                    <button type="button" id="deleteItem" class="btn btn-danger">Delete</button>
                    <button type="reset" class="btn" id="itemClear">Clear</button>
                </form>

            </div>

            <div class="tab-pane fade" id="nav-uploadImage" role="tabpanel" aria-labelledby="nav-uploadImage-tab"
                tabindex="0">
                <br>
                <div id="itemImageMessage"></div>
                <p>You can upload an image for a particular item using this section.</p>
                <p>Please make sure the item is already added to database before uploading the
                    image.</p>
                <br>
                <form name="imageForm" id="imageForm" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-3" style="display:inline-block">
                            <label for="itemImageItemNumber">Item Number<span class="requiredIcon">*</span></label>
                            <input type="text" class="form-control" name="itemImageItemNumber" id="itemImageItemNumber"
                                autocomplete="off">
                            <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="itemImageItemName">Item Name</label>
                            <input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName"
                                readonly>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="itemImageFile">Select Image ( <span class="blueText">jpg</span>, <span
                                    class="blueText">jpeg</span>, <span class="blueText">gif</span>, <span
                                    class="blueText">png</span> only )</label>
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