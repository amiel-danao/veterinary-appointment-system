<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
    integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
let loc = location.pathname.split('/');
let locNum = loc.length;
if (
    loc[locNum - 1] == 'invItem.php' ||
    loc[locNum - 1] == 'invPurchase.php' ||
    loc[locNum - 1] == 'invVendor.php' ||
    loc[locNum - 1] == 'invSale.php' ||
    loc[locNum - 1] == 'invSearch.php' ||
    loc[locNum - 1] == 'invReports.php'
) {
    const dropdownToggleEl = $('.dropdown')[0];
    const myDropdown = new bootstrap.Dropdown(dropdownToggleEl);
    myDropdown.show();
}
</script>