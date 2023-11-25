// Prevent the form from submitting if the fields are empty
const form = document.querySelector('form');
form.addEventListener('submit', event => {
  const id = form.querySelector('input[name="id"]').value;
  const password = form.querySelector('input[name="password"]').value;

  if (!id || !password) {
    event.preventDefault();
    alert('Please enter both your ID and password.');
  }
});
