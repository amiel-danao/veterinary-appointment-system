<div class="card card-outline-secondary my-4">

    <div class="card-header">Search Inventory<button id="searchTablesRefresh" name="searchTablesRefresh"
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
            <p>Use the grid below to search all details of items</p>
            <!-- <a href="#" class="itemDetailsHover" data-toggle="popover" id="10">wwwee</a> -->
            <div class="table-responsive" id="itemDetailsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-customer" role="tabpanel" aria-labelledby="nav-customer-tab" tabindex="0">
            <br>
            <p>Use the grid below to search all details of customers</p>
            <div class="table-responsive" id="customerDetailsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-sale" role="tabpanel" aria-labelledby="nav-sale-tab" tabindex="0">
            <br>
            <p>Use the grid below to search sale details</p>
            <div class="table-responsive" id="saleDetailsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-purchase" role="tabpanel" aria-labelledby="nav-purchase-tab" tabindex="0">
            <br>
            <p>Use the grid below to search purchase details</p>
            <div class="table-responsive" id="purchaseDetailsTableDiv"></div>
        </div>
        <div class="tab-pane fade" id="nav-vendor" role="tabpanel" aria-labelledby="nav-vendor-tab" tabindex="0">
            <br>
            <p>Use the grid below to search vendor details</p>
            <div class="table-responsive" id="vendorDetailsTableDiv"></div>
        </div>
    </div>
    <!--  -->

</div>