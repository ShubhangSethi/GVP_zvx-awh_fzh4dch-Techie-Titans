// script.js
document.getElementById('calculate-btn').addEventListener('click', () => {
    // Get input values
    const gold = parseFloat(document.getElementById('gold').value) || 0;
    const copper = parseFloat(document.getElementById('copper').value) || 0;
    const silver = parseFloat(document.getElementById('silver').value) || 0;
    const nickel = parseFloat(document.getElementById('nickel').value) || 0;
    const palladium = parseFloat(document.getElementById('palladium').value) || 0;

    // Calculate credit score (customize this calculation as needed)
    const creditScore = (gold * 5 + copper * 2 + silver * 3 + nickel * 4 + palladium * 10)*50;

    // Display the credit score
    document.getElementById('credit-score').textContent = creditScore.toFixed(2);
});
