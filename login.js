
const regisButton = document.getElementById("regis");

regisButton.addEventListener("click", function() {
    window.location.href = "regis.html"; 
});


const loginButton = document.getElementById("login");
loginButton.addEventListener("click", function(event) {
    event.preventDefault(); 
    alert("Login button clicked!"); 
});