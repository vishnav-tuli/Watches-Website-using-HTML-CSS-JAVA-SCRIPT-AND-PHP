function validateForm() {
  var pattern = new RegExp(
    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[1-9])(?=.*[!@#$%^&*+-?.,]).+$"
  );

  let emailField = document.getElementById("gmail").value;

  if (emailField == "") {
    alert("Email field cannot be left empty");
    return false;
  } else if (
    !emailField.includes("@gmail.com") &&
    !emailField.includes("@yahoo.com") &&
    !emailField.includes("@somaiya.edu")
  ) {
    alert("Please enter a valid email!");
    return false;
  }

  let passwordField = document.getElementById("password").value;

  if (passwordField == "") {
    console.log("Password field cannot be empty");
    return false;
  } else if (!pattern.test(passwordField)) {
    alert("The password is not strong enough!");
    return false;
  }

  // if the form validation is successful, redirect the user to the desired URL
  window.location.href = "../Home/Home.html";
  return true;
}
