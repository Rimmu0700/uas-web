const regisForm = document.getElementById("regisForm");

regisForm.addEventListener("submit", function(event) {
    event.preventDefault(); 
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const email = document.getElementById("email").value;

    console.log("User  registered:", { username, password, email });
    localStorage.setItem("username", username);
    localStorage.setItem("isLoggedIn", "true");
    window.location.href = "index.html"; 
});