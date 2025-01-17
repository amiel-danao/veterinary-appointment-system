<div class="card card-outline-secondary my-4">
    <div class="card-header">Sale Details</div>
    <div class="card-body">
        <div id="saleDetailsMessage"></div>
        <form>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="saleDetailsItemNumber">Item Number<span class="requiredIcon">*</span></label>
                    <input type="text" class="form-control" id="saleDetailsItemNumber" name="saleDetailsItemNumber"
                        autocomplete="off">
                    <div id="saleDetailsItemNumberSuggestionsDiv" class="customListDivWidth">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="saleDetailsCustomerID">Customer ID<span class="requiredIcon">*</span></label>
                    <input type="text" class="form-control" id="saleDetailsCustomerID" name="saleDetailsCustomerID"
                        autocomplete="off">
                    <div id="saleDetailsCustomerIDSuggestionsDiv" class="customListDivWidth">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="saleDetailsCustomerName">Customer Name</label>
                    <input type="text" class="form-control" id="saleDetailsCustomerName" name="saleDetailsCustomerName"
                        readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="saleDetailsSaleID">Sale ID</label>
                    <input type="text" class="form-control invTooltip" id="saleDetailsSaleID" name="saleDetailsSaleID"
                        title="This will be auto-generated when you add a new record" autocomplete="off">
                    <div id="saleDetailsSaleIDSuggestionsDiv" class="customListDivWidth"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="saleDetailsItemName">Item Name</label>
                    <!--<select id="saleDetailsItemNames" name="saleDetailsItemNames" class="form-control chosenSelect"> -->
                    <?php
                        //require('model/item/getItemDetails.php');
                        ?>
                    <!-- </select> -->
                    <input type="text" class="form-control invTooltip" id="saleDetailsItemName"
                        name="saleDetailsItemName" readonly
                        title="This will be auto-filled when you enter the item number above">
                </div>
                <div class="form-group col-md-3">
                    <label for="saleDetailsSaleDate">Sale Date<span class="requiredIcon">*</span></label>
                    <input type="text" class="form-control datepicker" id="saleDetailsSaleDate" value="2018-05-24"
                        name="saleDetailsSaleDate" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="saleDetailsTotalStock">Total Stock</label>
                    <input type="text" class="form-control" name="saleDetailsTotalStock" id="saleDetailsTotalStock"
                        readonly>
                </div>
                <div class="form-group col-md-2">
                    <label for="saleDetailsDiscount">Discount %</label>
                    <input type="text" class="form-control" id="saleDetailsDiscount" name="saleDetailsDiscount"
                        value="0">
                </div>
                <div class="form-group col-md-2">
                    <label for="saleDetailsQuantity">Quantity<span class="requiredIcon">*</span></label>
                    <input type="number" class="form-control" id="saleDetailsQuantity" name="saleDetailsQuantity"
                        value="0">
                </div>
                <div class="form-group col-md-2">
                    <label for="saleDetailsUnitPrice">Unit Price<span class="requiredIcon">*</span></label>
                    <input type="text" class="form-control" id="saleDetailsUnitPrice" name="saleDetailsUnitPrice"
                        value="0">
                </div>
                <div class="form-group col-md-3">
                    <label for="saleDetailsTotal">Total</label>
                    <input type="text" class="form-control" id="saleDetailsTotal" name="saleDetailsTotal">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <div id="saleDetailsImageContainer"></div>
                </div>
            </div>
            <button type="button" id="addSaleButton" class="btn btn-success">Add Sale</button>
            <button type="button" id="updateSaleDetailsButton" class="btn btn-primary">Update</button>
            <button type="reset" id="saleClear" class="btn">Clear</button>
        </form>
    </div>
</div>