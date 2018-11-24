var driverForm = document.getElementById('driver-form');
var userForm = document.getElementById('user-form');

userForm.style.display = "none";

document.getElementById('driver-btn').addEventListener("click", function(){
  userForm.style.display = "none";
  driverForm.style.display = "flex";
});

document.getElementById('user-btn').addEventListener("click", function(){
  driverForm.style.display = "none";
  userForm.style.display = "flex";
});
