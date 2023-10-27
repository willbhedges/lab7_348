function validate() {
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;


    if (pass1.length < 8) {
        alert("The length of the first password needs to be more than 8 letters")
    } else if (pass2.length < 8) {
        alert("The length of the second password needs to be more than 8 letters")
    } else if (pass1 != pass2) {
        alert("The Two Passwords are not matching")
    } else {
        alert("These password combinations are matched. Good work.")
    }
}
