// Define the correct username and password
const correctUsername = 'sumedh'; // Replace with actual username
const correctPassword = 'pimplikar'; // Replace with actual password

function authenticate() 
{
    // Get the values from the input fields
    const usernameInput = document.getElementById('username').value;
    const passwordInput = document.getElementById('password').value;
    
    // Check if the entered username and password are correct
    if (usernameInput === correctUsername && passwordInput === correctPassword) 
        {
        // Redirect to the main.html page if the credentials are correct
        window.location.href = 'game.html'; // Replace with the actual target page URL
    }
     else 
     {
        // Alert the user if the credentials are incorrect
        alert('Incorrect username or password. Please try again.');
    }
}

