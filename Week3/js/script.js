function validateUsername() {
    const username = document.getElementById("username").value;
    const error = document.getElementById("usernameError");
    if (username.length < 3) {
        error.textContent = "Username must be at least 3 characters.";
    } else {
        error.textContent = "";
    }
}

function validateEmail() {
    const email = document.getElementById("email").value;
    const error = document.getElementById("emailError");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        error.textContent = "Please enter a valid email address.";
    } else {
        error.textContent = "";
    }
}

function checkPassword() {
    const password = document.getElementById("password").value;
    const strength = document.getElementById("passwordStrength");
    if (password.length < 6) {
        strength.textContent = "Strength: Weak";
        strength.className = "strength weak";
    } else if (password.length < 10) {
        strength.textContent = "Strength: Medium";
        strength.className = "strength medium";
    } else {
        strength.textContent = "Strength: Strong";
        strength.className = "strength strong";
    }
}

function submitForm() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const formError = document.getElementById("formError");

    if (username === "" || email === "" || password === "") {
        formError.textContent = "All fields are required.";
    } else {
        formError.textContent = "";
        alert("Registration successful! Welcome to Blackline Supply.");
    }
}