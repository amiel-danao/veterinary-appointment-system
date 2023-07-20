<div class="card card-outline-secondary my-4">
    <div class="card-header">Report<button id="reportsTablesRefresh" name="reportsTablesRefresh"
            class="btn btn-warning float-right btn-sm">Refresh</button></div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-item-tab" data-bs-toggle="tab" data-bs-target="#nav-item"
                type="button" role="tab" aria-controls="nav-item" aria-selected="true">Item</button>
            <button class="nav-link" id="nav-customer-tab" data-bs-toggle="tab" data-bs-target="#nav-customer"
                type="button" role="tab" aria-controls="nav-customer" aria-selected="false">Customer</button>
            <button class="nav-link" id="nav-sale-tab" data-bs-toggle="tab" data-bs-target="#nav-sale" type="button"
                role="tab" aria-controls="nav-sale" aria-selected="false">Sale</button>
            <button class="nav-link" id="nav-purchase-tab" data-bs-toggle="tab" data-bs-target="#nav-purchase"
                type="button" role="tab" aria-controls="nav-purchase" aria-selected="false">Purchase</button>
            <button class="nav-link" id="nav-vendor-tab" data-bs-toggle="tab" data-bs-target="#nav-vendor" type="button"
                role="tab" aria-controls="nav-vendor" aria-selected="false">Vendor</button>

        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab"
            tabindex="0">
            <br>
            <p>Use the grid below to get reports for items</p>
            <div class="table-responsive" id="itemReportsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab" tabindex="0">
            <br>
            <p>Use the grid below to get reports for customers</p>
            <div class="table-responsive" id="customerReportsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-sale" role="tabpanel" aria-labelledby="nav-sale-tab" tabindex="0">
            <br>
            <!-- <p>Use the grid below to get reports for sales</p> -->
            <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="saleReportStartDate">Start Date</label>
                        <input type="text" class="form-control datepicker" id="saleReportStartDate" value="2018-05-24"
                            name="saleReportStartDate" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="saleReportEndDate">End Date</label>
                        <input type="text" class="form-control datepicker" id="saleReportEndDate" value="2018-05-24"
                            name="saleReportEndDate" readonly>
                    </div>
                </div>
                <button type="button" id="showSaleReport" class="btn btn-dark">Show
                    Report</button>
                <button type="reset" id="saleFilterClear" class="btn">Clear</button>
            </form>
            <br><br>
            <div class="table-responsive" id="saleReportsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-purchase" role="tabpanel" aria-labelledby="nav-purchase-tab" tabindex="0">
            <br>
            <!-- <p>Use the grid below to get reports for purchases</p> -->
            <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="purchaseReportStartDate">Start Date</label>
                        <input type="text" class="form-control datepicker" id="purchaseReportStartDate"
                            value="2018-05-24" name="purchaseReportStartDate" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="purchaseReportEndDate">End Date</label>
                        <input type="text" class="form-control datepicker" id="purchaseReportEndDate" value="2018-05-24"
                            name="purchaseReportEndDate" readonly>
                    </div>
                </div>
                <button type="button" id="showPurchaseReport" class="btn btn-dark">Show
                    Report</button>
                <button type="reset" id="purchaseFilterClear" class="btn">Clear</button>
            </form>
            <br><br>
            <div class="table-responsive" id="purchaseReportsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-vendor" role="tabpanel" aria-labelledby="nav-vendor-tab" tabindex="0">
            <br>
            <p>Use the grid below to get reports for vendors</p>
            <div class="table-responsive" id="vendorReportsTableDiv"></div>
        </div>
    </div>
</div>