function validate() {
    if (document.form11.P_name.value == "") {
        alert("Please Provide Name")
        document.form11.P_name.focus();
        return false;
    }

    if (document.form11.city.value == "option-0") {
        alert("Please Select from Dropdown Menu");
        return false;
    }

    if (document.form11.addr.value == "") {
        alert("Please Provide Detailed Address");
        return false;
    }

    if (document.form11.meals.value == "option-0") {
        alert("Please Select from Dropdown Menu");
        return false;
    }

    if (document.form11.meal_options.value == "") {
        alert("Please Selct The Meal Time!");
        return false;
    }

    var form_data = new FormData(document.querySelector("form"));
    if (!form_data.has("tnc")) {
        document.getElementById("chk_option_error").style.visibility = "visible";
        return false;
    } else {
        document.getElementById("chk_option_error").style.visibility = "hidden";
        return true;
    }

}