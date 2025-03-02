document.getElementById("registrationForm").addEventListener("submit", function(event) {
   

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let dob = document.getElementById("dob").value.trim();
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    
    let errorMessage = "";

    // Name validation
    if (name === "") {
        errorMessage += "Name is required.\n";
    }

    // Email validation
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        errorMessage += "Enter a valid email address.\n";
    }

    // DOB validation (should not be a future date)
    let today = new Date();
    let dobDate = new Date(dob);
    if (dob === "" || dobDate >= today) {
        errorMessage += "Enter a valid Date of Birth.\n";
    }

    // Password validation
    if (password.length < 6) {
        errorMessage += "Password must be at least 6 characters long.\n";
    }

    // Confirm password validation
    if (password !== confirmPassword) {
        errorMessage += "Passwords do not match.\n";
    }

    // Show errors or submit the form
    if (errorMessage) {
        alert(errorMessage);
    } else {
        alert("Form submitted successfully!");
        document.getElementById("registrationForm").submit(); // Submit the form
    }
}