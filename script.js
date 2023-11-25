// Form validation
const form = document.querySelector("form");
form.addEventListener("submit", (event) => {
  event.preventDefault();

  // Validate first name
  const firstName = form.querySelector("input[name='fname']");
  if (firstName.value === "") {
    alert("Please enter your first name.");
    firstName.focus();
    return;
  }

  // Validate last name
  const lastName = form.querySelector("input[name='lname']");
  if (lastName.value === "") {
    alert("Please enter your last name.");
    lastName.focus();
    return;
  }

  // Validate roll number
  const rollNo = form.querySelector("input[name='id']");
  if (rollNo.value === "") {
    alert("Please enter your roll number.");
    rollNo.focus();
    return;
  }

  // Password validation
  const password = form.querySelector("input[name='password']");
  if (password.value.length < 8) {
    alert("Password must be at least 8 characters long.");
    password.focus();
    return;
  }

  // Phone number validation
  const contactNumber = form.querySelector("input[name='phone']");
  if (contactNumber.value.length !== 10) {
    alert("Phone number must be exactly 10 digits long.");
    contactNumber.focus();
    return;
  }

  // Confirm password validation
  const confirmPassword = form.querySelector("input[name='confirmPassword']");
  if (confirmPassword.value !== password.value) {
    alert("Password and confirm password must match.");
    confirmPassword.focus();
    return;
  }

  // Submit the form
  form.submit();
});
