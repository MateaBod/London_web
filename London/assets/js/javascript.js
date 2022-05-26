
/** FUNCTION - for validating the form  */
function validateForm() {
    let x = document.forms["formm"]["email"].value;
    if (x == "") {
        alert("Email field must be filled");
        return false;
    }
    let y = document.forms["formm"]["question"].value;
    if (y == "") {
        alert("Question field must be filled");
        return false;
    }
}

/** FUNCTION - turning the text red on hover  */
function hoverRed(x) {
    x.style.color = "red";
}

/** FUNCTION - turning the text back to black after hover  */
function normalblack(x) {
    x.style.color = "black";
}



