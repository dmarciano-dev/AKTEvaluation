var phoneForm = document.getElementById("phone-form");
var formError = document.getElementById("form-error");

document.getElementById("submit-form").classList.remove("disabled");

phoneForm.addEventListener("submit", function (event) {

    formError.innerHTML = "";

    var firstName = phoneForm["first-name"].value;
    var lastName = phoneForm["last-name"].value;
    var phoneNumber = phoneForm["phone"].value;

    var errorMessage = "";
    if (firstName.length === 0) {
        errorMessage = "Missing First Name";
    }
    else if (lastName.length === 0) {
        errorMessage = "Missing Last Name";
    }
    else if (phoneNumber.length === 0) {
        errorMessage = "Missing Phone";
    }
    else
    {
        // normalize the input into a format we can store in a database
        phoneNumber = phoneNumber.replace(/[^\d]/g, "");

        if (phoneNumber.length === 10 || phoneNumber.length === 11 || phoneNumber.length === 7) {
            if (phoneNumber.length === 11 && phoneNumber.charAt(0) !== '1') {
                errorMessage = "Country Code must be 1";
            } else if (phoneNumber.length === 11 && phoneNumber.charAt(0) === '1') {
                phoneNumber = phoneNumber.substr(1);
            }
        } else {
            errorMessage = "Invalid Phone";
        }
    }

    if(errorMessage)
    {
        formError.innerHTML = errorMessage;
        event.preventDefault();
    }
    else
    {
        phoneForm["phone"].value = phoneNumber;
    }
});
