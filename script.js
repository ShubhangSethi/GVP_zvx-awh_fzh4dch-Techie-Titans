document.addEventListener("DOMContentLoaded", function() {
    const editNameButton = document.getElementById("edit-name");
    const editEmailButton = document.getElementById("edit-email");
    const editPhoneButton = document.getElementById("edit-phone");
  
    editNameButton.addEventListener("click", function() {
      const newName = prompt("Enter your new name:");
      if (newName) {
        document.getElementById("username").textContent = newName;
      }
    });
  
    editEmailButton.addEventListener("click", function() {
      const newEmail = prompt("Enter your new email:");
      if (newEmail) {
        document.getElementById("email").textContent = "Email: " + newEmail;
      }
    });
  
    editPhoneButton.addEventListener("click", function() {
      const newPhone = prompt("Enter your new phone number:");
      if (newPhone) {
        document.getElementById("phone").textContent = "Phone: " + newPhone;
      }
    });
  });