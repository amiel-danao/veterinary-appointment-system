<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
    integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"
    integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="../admin/vendor/chosen/chosen.jquery.min.js">
</script>
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
                            $(`#speName-${id}`).text(`${result}`);
                        }
                    }
                };
                xhttp.open("POST", "editSpecie.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("data=" + result.toLowerCase().trim() + "&speId=" + id);
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
                xhttp.send("specName=" + result.toLowerCase().trim());
            } else if (!(result === null)) {
                alert("Invalid Input!");
            }
        });
    });
</script>
<!-- Breed -->
<script>
    const editBreed = $(".breed-edit");
    editBreed.on("click", function () {
        var breedid = $(this).attr('id');
        bootbox.prompt('Replace the breed chosen below: ', function (result) {
            if (!(result === null || result === undefined || result.trim() === '')) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        bootbox.alert(this.responseText);
                        if (this.responseText == "Update Success!") {
                            $(`#breedName-${breedid}`).text(`${result}`);
                        }
                    }
                };
                xhttp.open("POST", "editBreed.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("data=" + result.toLowerCase().trim() + "&breedId=" + breedid);
            } else if (!(result === null)) {
                alert("Invalid Input!");
            }
        });
    });
</script>

<script>
    <?php include('../admin/getSpecieForBreedEdit.php'); ?>
    const editBreedSpecie = $(".specie-breed-edit");
    editBreedSpecie.on("click", function () {
        var breedSpecid = $(this).attr('id');
        var bsId = breedSpecid.split('_');
        var bId = bsId[0];
        var sId = bsId[1];
        var idArray = <?php echo $idArray ?>;
        var nameArray = <?php echo $nameArray ?>;
        var inputArray = [];
        for (let i = 0; i < idArray.length; ++i) {
            var origString = nameArray[i];
            var finalString = origString.charAt(0).toUpperCase() + origString.slice(1);
            inputArray.push({
                text: finalString,
                value: idArray[i],
            });
        }
        bootbox.prompt({
            title: 'Replace the Specie of the Breed below:',
            inputType: 'radio',
            inputOptions: inputArray,
            callback: function (result) {
                if (result != null) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            bootbox.alert(this.responseText);
                            if (this.responseText == "Update Success!") {
                                location.reload();
                            }
                        }
                    };
                    xhttp.open("POST", "editBreedSpec.php",
                        true); // Leave URL blank as it's the same file
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("specId=" + result + "&breedId=" + bId);
                }
            }
        });
    });
</script>
<script>
    const deleteBreed = $(".breed-delete");
    deleteBreed.on("click", function () {
        var id = $(this).attr('id');
        bootbox.confirm({
            message: 'Are you sure on deleting this breed?',
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
                    xhttp.open("POST", "deleteBreed.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("breedId=" + id);
                }
            }
        });
    });
</script>
<script>
    const addBreed = $(".add-breed");
    addBreed.on("click", function () {
        bootbox.prompt('Add a breed below: ', function (result) {
            if (!(result === null || result === undefined || result.trim() === '')) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        bootbox.alert(this.responseText);
                        if (this.responseText == "Breed successfully added!") {
                            location.reload();
                        }
                    }
                };
                xhttp.open("POST", "addBreed.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("breedName=" + result.toLowerCase().trim());
            } else if (!(result === null)) {
                alert("Invalid Input!");
            }
        });
    });
</script>
<script>
    var specie = $('#specieSelect').on('change', function (event) {
        console.log(event.currentTarget.selectedOptions[0].id);
        var specieId = event.currentTarget.selectedOptions[0].id;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let result = JSON.parse(this.responseText)
                console.log(result);
                $('#breedSelect').empty();
                Object.entries(result).forEach(([key, value]) => {
                    console.log(`${key}: ${value}`);
                    $('#breedSelect').append(`<option id='${key}' value='${key}'>${value}</option>`);
                });
            }
        };
        xhttp.open("POST", "addPet.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("specieId=" + specieId);
    });
</script>

<!-- <script>
const addPet = $(".add-pet");
addPet.on("click", function() {
    var petName = $("#petName").val();
    var bday = $("#birthdate").val();
    var specie = $("#specieSelect")[0].selectedOptions[0].id;
    var breed = $("#breedSelect")[0].selectedOptions[0].id;
    var pemail = '<?php echo $_SESSION['user'] ?>';
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "Insufficient Details!") {
                bootbox.alert(this.responseText);
            } else {
                bootbox.alert(this.responseText);
                location.reload();
                window.location.href = "../pet/petListPage.php";
            }
        }
    };
    xhttp.open("POST", "addPetCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("petName=" + petName.toLowerCase().trim() + "&bday=" + bday + "&specieId=" + specie +
        "&breedId=" + breed + "&pemail=" + pemail);
});
</script> -->

<script>
    function goBack() {
        // Go back to the previous page in the browser's history
        window.history.back();
    }
</script>
<script>
    $(document).ready(function () {
        // Attach click event handler to the links with class "pet-edit"
        $(".pet-edit").on("click", function (event) {
            // Prevent the default link behavior (navigation)
            event.preventDefault();
            // Get the id of the clicked link
            var clickedId = $(this).attr("id");
            // Redirect to editPetPage.php with the id as a URL parameter
            window.location.href = "editPetPage.php?id=" + clickedId;
        });
    });
</script>
<!-- <script>
const editPet = $(".edit-pet");
editPet.on("click", function(event) {
    var petId = $(this).attr('id');
    var petName = $("#petName").val();
    var bday = $("#birthdate").val();
    var specie = $("#specieSelect")[0].selectedOptions[0].id;
    var breed = $("#breedSelect")[0].selectedOptions[0].id;
    var pemail = '<?php // echo $_SESSION['user'] ?>';
    if (!(petName === null || petName === "" || bday === null || bday === "")) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "You did not changed anything!" || this.responseText ==
                    "Insufficient Details!") {
                    bootbox.alert(this.responseText);
                } else {
                    bootbox.alert(this.responseText);
                    window.location.href = "../pet/petListPage.php";
                }
            }
        };
        xhttp.open("POST", "editPetCheck.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("petName=" + petName.toLowerCase().trim() + "&bday=" + bday + "&specieId=" + specie +
            "&breedId=" + breed + "&pemail=" + pemail + "&petId=" + petId);
    } else {
        bootbox.alert("Insufficient details!");
    }

});
</script> -->
<script>
    const deletePet = $(".pet-delete");
    deletePet.on("click", function () {
        var id = $(this).attr('id');
        bootbox.confirm({
            message: 'Are you sure on deleting this breed?',
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
                    xhttp.open("POST", "deletePet.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("petId=" + id);
                }
            }
        });
    });
</script>