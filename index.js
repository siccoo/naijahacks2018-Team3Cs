
// function for login page 
$('.message a').click(function () {
    $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
});

// login page functionality
// Validating the data for registration

function registeredParticipant() {
    let username = document.getElementById('username')
    let password = document.getElementById('password')
    let emailaddress = document.getElementById('emailaddress')
    const inputs = document.querySelectorAll('input');

    const patterns = {
        username: /^[a-z\d]{5,12}$/i
        phoneNumber: /^\d{11}$/,
        password: /^[\w@_]{8,20}$/,
        email-address: /^ []$/
};

var phonenumber = prompt("Please enter a phone number.", "");
if (isValidTelephoneNumber(phonenumber)) {
    alert("Valid Phone Number");
} else {
    alert("Invalid Phone Number");
}
var password = prompt("Please enter a password.", "");
if (isValidPostalCode(password)) {
    alert("Valid Password");
} else {
    alert("Invalid Password");
}

var emailaddress = prompt("Please enter an email address.", "");

if (isValidEmail(emailaddress)) {
    alert("Valid Email Address");
} else {
    alert("Invalid Email Address");
}

// Validation function
let username = (username.id);
let password = (password.id);
let emailaddress = (emailaddress.id)

// Validation of inputs

if (username === "" || password === "" || emailaddress "") {
    alert("Please enter your email address");
    return;
}

// // Validation function
function validate(field, regex) {
    // console.log(regex.test(field));
    if (regex.test(field)) {
        field.className = 'valid';
    } else {
        field.className = 'invalid';
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', (e) => {
        //console.log(e.target.attributes.name.value );
        validate(e.target.value, patterns[e.target.attributes.name.value])
    });

});
