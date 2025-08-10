  function togglePassword() {
    const passwordField = document.getElementById('password');
    const passwordToggle = document.querySelector('.toggle-password span');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggle.textContent = '🙈'; // Change icon to indicate password is visible
    } else {
        passwordField.type = 'password';
        passwordToggle.textContent = '👁️'; // Change icon to indicate password is hidden
    }
}