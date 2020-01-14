document.getElementById("cupcake-form").onsubmit = validate;

function validate() {
    let $isValid = true;

    //Clear all error messages
    let errors = document.getElementsByClassName("err");

    for (var i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    var name = document.getElementById("name").value;
    if (name == "") {
        let errFirst = document.getElementById("err-name");
        errFirst.style.display = "block";
        $isValid = false;
    }

    //Check if flavors are checked
    var flavors = document.getElementsByName("flavors[]");
    var flavorsChecked = 0;

    for (i = 0; i < flavors.length; i++) {
        if (flavors[i].checked) {
            flavorsChecked++;
        }
    }

    if (flavorsChecked <= 0) {
        let errFirst = document.getElementById("err-flavors");
        errFirst.style.display = "block";
        $isValid = false;
    }

    console.log(flavorsChecked);

    return $isValid;
}
