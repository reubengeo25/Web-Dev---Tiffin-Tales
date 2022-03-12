/*function gotoPage() {
			window.location.href = "../PHP/register.php";
		}*/

function validate() {
    if (document.form2.Name.value == "") {
        alert("Please Provide Name To Register")
        document.form2.Name.focus();
        return false;
    }

    if (document.form2.Email.value == "") {
        alert("Please Provide Email To Register")
        document.form2.Email.focus();
        return false;
    }

    var x = document.form2.Email.value;
    var atr = x.indexOf("@");
    var dot = x.lastIndexOf(".");
    if (atr < 1 || dot < atr + 2 || dot + 2 >= x.length) {
        alert("Please Enter Valid Email ID");
        return false;
    }

    if (document.form2.username.value == "") {
        alert("Please Provide Username To Register")
        document.form2.username.focus();
        return false;
    }

    var usr = document.getElementById("t3").value;
    var illegalChars = /\W/;
    if ((usr.length < 5) || (usr.length > 15)) {
        alert("Username must have 5-15 characters");
    } else if (illegalChars.test(usr)) {
        alert("Please enter valid Username. Use only numbers and alphabets and underscores");
    }


    if (document.form2.password.value == "") {
        alert("Please Provide Password To Register")
        document.form2.password.focus();
        return false;
    }

    var inputtxt = document.getElementById("t4");
    var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if (inputtxt.value.match(decimal)) {

    } else {
        alert('Incorrect Password!\n The password should between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character')
        return false;
    }

    if (document.form2.conf_password.value == "") {
        alert("Please Re-Enter Password To Register")
        document.form2.password.focus();
        return false;
    }

    var firstpass = document.form2.password.value;
    var secondpass = document.form2.conf_password.value;
    if (firstpass == secondpass) {
        return true;
    } else {
        alert("password must be same!");
        return false;
    }
}
