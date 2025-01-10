const username = document.getElementById("username");
const password = document.getElementById("password");
const masuk = document.getElementById("button");

masuk.addEventListener("click", function(event) {
    if (username.value == "" || password.value == "") {
        alert("Tolong masukkan username dan password");
        event.preventDefault();
    } else {
        alert("Anda Sudah Login");
    }
});
