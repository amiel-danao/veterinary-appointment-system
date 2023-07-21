<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
    integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"
    integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw=="
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

<script>
    const addButtons = $(".specie-edit");
    addButtons.on("click", function () {
        var id = $(this).attr('id');
        bootbox.prompt('Replace the specie chosen below: ', function (result) {
            if (!(result === null || result === undefined || result.trim() === '')) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        bootbox.alert(this.responseText);
                        if (this.responseText == "Update Success!") {
                            $(`#name-${id}`).text(` ${result}`);
                        }
                    }
                };
                xhttp.open("POST", "editSpecie.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("data=" + result + "&speId=" + id);
            } else if (!(result === null)) {
                alert("Invalid Input!");
            }
        });
    });
</script>
<script>
    const delButtons = $(".specie-delete");
    delButtons.on("click", function () {
        var id = $(this).attr('id');
        bootbox.confirm({
            message: 'Are you sure on deleting this specie?',
            buttons: {
                confirm: {
                    label: 'Yes',
                    className: 'btn-success'
                },
                cancel: {
                    label: 'No',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            location.reload();
                        }
                    };
                    xhttp.open("POST", "deleteSpecie.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("speId=" + id);
                }
            }
        });
    });
</script>

<script>
    const addSpec = $(".add-specie");
    addSpec.on("click", function () {
        bootbox.prompt('Add a specie below: ', function (result) {
            if (!(result === null || result === undefined || result.trim() === '')) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        bootbox.alert(this.responseText);
                        if (this.responseText == "Specie successfully added!") {
                            location.reload();
                        }
                    }
                };
                xhttp.open("POST", "addSpecie.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("specName=" + result);
            } else if (!(result === null)) {
                alert("Invalid Input!");
            }
        });
    });
</script>