<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-commerce Website</title>
<style>
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

.modal-content {
    background-color: #fff;
    margin: 5% auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 80%;
    max-width: 400px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

form {
    padding-top: 20px;
}

label {
    color: #000;
}

input[type="text"],
input[type="password"],
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #f65dd3;
    color: #fff;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #d64862;
}

p {
    color: #000;
}

a {
    color: #f65dd3;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>



<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="toggleLogin()">&times;</span>
    <h2>Login</h2>
    <form action="#">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Login">
      <p>Not registered? <a href="#" onclick="showRegisterForm()">Register here</a></p>
    </form>
  </div>
</div>

<script>
function toggleLogin() {
    var modal = document.getElementById("loginModal");
    modal.style.display = (modal.style.display === "block") ? "none" : "block";
}

function showRegisterForm() {
    var loginForm = document.querySelector("#loginModal form");
    var registerLink = document.querySelector("#loginModal p");
    loginForm.style.display = "none";
    registerLink.style.display = "none";
    var registerForm = document.createElement("form");
    registerForm.innerHTML = `
      <label for="username">Username:</label><br>
      <input type="text" id="regUsername" name="regUsername"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="regPassword" name="regPassword"><br><br>
      <input type="submit" value="Register">
    `;
    document.querySelector("#loginModal .modal-content").appendChild(registerForm);
}

window.onclick = function(event) {
    var modal = document.getElementById("loginModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
