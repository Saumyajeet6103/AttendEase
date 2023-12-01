function validateForm() {
    alert("Form submitted successfully!");
    return true;
}

function validateToken() {
    const tokenInput = document.getElementById('token');
    const submitBtn = document.getElementById('submitBtn');

    const isValidToken = /^\d{6}$/.test(tokenInput.value);
    submitBtn.disabled = !isValidToken;
}
