function getval2() {
  var x = document.getElementById("UserName").value;
  let len = x.length;
  if (len < 12) {
    alert("User Id is incorrect. Please enter again");
    return false;
  } else {
    console.log(len);
  }

  var pattern = new RegExp(
    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[1-9])(?=.*[!@#$%^&*+-?.,]).+$"
  );
  let y = document.getElementById("Password").value;

  if (y == "") {
    console.log("Password field cannot be empty");
    return false;
  } else if (!pattern.test(y)) {
    alert("The password is not strong enough!");
    return false;
  }

  let p = document.getElementById("C-Password").value;
  if (y != p) {
    alert("The passwords you entered did not match");
    return false;
  } else if (y == p) {
    console.log(p);
  }

  let a = document.getElementById("email").value;

  if (a == "") {
    alert("Email field cannot be left empty");
  } else if (
    !a.includes("@gmail.com") &&
    !a.includes("@yahoo.com") &&
    !a.includes("@somaiya.edu")
  ) {
    alert("Please enter a valid email!");
    return false;
  }
  window.location.href = "../Login/login.html";
  return true;
}
