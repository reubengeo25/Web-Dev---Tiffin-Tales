function validate() {
    if (document.form4.Name.value == "") {
        alert("Please Provide Name To Register")
        document.form4.Name.focus();
        return false;
    }

    if (document.form4.subs.value == "") {
        alert("Please Select If You Are A Subscriber Or Not!");
        return false;
    }

    if (document.form4.rate.value == "") {
        alert("Please Rate the Service!");
        return false;
    }

    if (document.form4.selection.value == "option-0") {
        alert("Please Select from Dropdown Menu");
        return false;
    }

    if (document.form4.Tell.value == "") {
        alert("Please Provide Detailed Feedback \n So That We Can Improve Our Services");
        return false;
    }
}
