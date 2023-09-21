let creditPoints = 0;

function disposeEwaste() {
    const ewasteWeight = parseFloat(document.getElementById("ewasteWeight").value);
    
    // Example formula: 1 credit point for every 1 kg of e-waste
    const earnedCredits = Math.floor(ewasteWeight);
    
    creditPoints += earnedCredits;
    document.getElementById("creditPoints").textContent = `Credit Points: ${creditPoints}`;
}

function redeemCoupon() {
    // Example: Implement the coupon redemption logic here
    // Deduct credit points and provide a coupon code
    if (creditPoints >= 10) {
        alert("Coupon code: COUPON10");
        creditPoints -= 10;
        document.getElementById("creditPoints").textContent = `Credit Points: ${creditPoints}`;
    } else {
        alert("Not enough credit points to redeem a coupon.");
    }
}
