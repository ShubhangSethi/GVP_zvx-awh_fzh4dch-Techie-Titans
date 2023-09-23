// Get references to elements
const editProfileButton = document.getElementById('edit-profile');
const editProfileModal = document.getElementById('edit-profile-modal');
const cancelEditButton = document.getElementById('cancel-edit');
const profileForm = document.getElementById('profile-form');
const usernameElement = document.getElementById('username');
const emailElement = document.getElementById('email');
const phoneElement = document.getElementById('phone');
const newUsernameInput = document.getElementById('new-username');
const newEmailInput = document.getElementById('new-email');
const newPhoneInput = document.getElementById('new-phone');
const earnCreditsButton = document.getElementById('earn-credits');
const redeemCreditsButton = document.getElementById('redeem-credits');
const lifetimeCreditsElement = document.getElementById('lifetime-credits');
const redeemedCreditsElement = document.getElementById('redeemed-credits');
const availableCreditsElement = document.getElementById('available-credits');

// Initialize credits
let lifetimeCredits = 0;
let redeemedCredits = 0;
let availableCredits = 0;

// Open the Edit Profile modal
editProfileButton.addEventListener('click', () => {
    editProfileModal.style.display = 'block';
});

// Close the Edit Profile modal
cancelEditButton.addEventListener('click', () => {
    editProfileModal.style.display = 'none';
});

// Save changes when the profile form is submitted
profileForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const newUsername = newUsernameInput.value;
    const newEmail = newEmailInput.value;
    const newPhone = newPhoneInput.value;

    // Update the profile information
    usernameElement.textContent = newUsername;
    emailElement.textContent = newEmail;
    phoneElement.textContent = newPhone;

    // Close the Edit Profile modal
    editProfileModal.style.display = 'none';
});

// Earn Credits button functionality
earnCreditsButton.addEventListener('click', () => {
    // Increment the available credits when Earn Credits is clicked
    availableCredits++;
    lifetimeCredits++;

    // Update the displayed credits
    updateCredits();
});

// Redeem Credits button functionality
redeemCreditsButton.addEventListener('click', () => {
    // Decrease available credits when Redeem Credits is clicked
    if (availableCredits > 0) {
        availableCredits--;
        redeemedCredits++;
    }

    // Update the displayed credits
    updateCredits();
});

// Update the displayed credits
function updateCredits() {
    lifetimeCreditsElement.textContent = lifetimeCredits;
    redeemedCreditsElement.textContent = redeemedCredits;
    availableCreditsElement.textContent = availableCredits;
}

