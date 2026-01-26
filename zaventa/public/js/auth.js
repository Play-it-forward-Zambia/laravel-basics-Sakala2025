// Zaventa Auth Page JS
// Example: Toggle password visibility

document.addEventListener('DOMContentLoaded', function () {
  const toggles = document.querySelectorAll('.toggle-password');
  toggles.forEach(function(toggle) {
    toggle.addEventListener('click', function() {
      const input = document.getElementById(this.dataset.target);
      if (input.type === 'password') {
        input.type = 'text';
        this.textContent = 'Hide';
      } else {
        input.type = 'password';
        this.textContent = 'Show';
      }
    });
  });
});
