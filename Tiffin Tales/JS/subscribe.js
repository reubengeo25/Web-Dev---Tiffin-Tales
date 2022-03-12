function validate() {
    if (document.form10.Name.value == "") {
        alert("Please Provide Name")
        document.form10.Name.focus();
        return false;
    }

    if (document.form10.addr.value == "") {
        alert("Please Provide Detailed Address");
        return false;
    }

    if (document.form10.Prov.value == "") {
        alert("Please Enter Provider ID")
        document.form10.Prov.focus();
        return false;
    }

    if (document.form10.preferences.value == "option-0") {
        alert("Please Select from Dropdown Menu");
        return false;
    }

    if (document.form10.subs_plan.value == "") {
        alert("Please Select The Plan!");
        return false;
    }

    var form_data = new FormData(document.querySelector("form"));
    if (!form_data.has("meals")) {
        document.getElementById("chk_option_error").style.visibility = "visible";
        return false;
    } else {
        document.getElementById("chk_option_error").style.visibility = "hidden";
        return true;
    }
}