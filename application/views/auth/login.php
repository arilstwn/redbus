<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;;
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #4070f4;
}

.container {
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0, 0.1);
}

.container .form {
    padding: 30px;
}

.container .form .title {
    position: relative;
    font-size: 27px;
    font-weight: 600;
}


.form .title::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color: #4070f4;
    border-radius: 25px;
}

.form .input-field {
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}

.input-field input {
    position: absolute;
    height:  100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) {
    border-bottom-color: #4070f4;
}

.input-field i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
}

.input-field input:is(:focus, :valid) ~ i {
    border-bottom-color: #4070f4;
}

.input-field i.icon {
    left: 0;
}

.input-field i.showHidePw {
    right: 0;
    cursor: pointer;
    padding: 10px;
}

.form .checkbox-text {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.checkbox-text .checkbox-content {
    display: flex;
    align-items: center;
}

.checkbox-content input {
    margin:  0 8px -2px 4px;
    accent-color: #4070f4;
}

.form .text {
    color: #333;
    font-size: 14px;
}

.form a.text {
    color: #4070f4;
    text-decoration: none;
}

.form a:hover {
    text-decoration: underline;
}

.form .button {
    margin-top: 35px;
}

.form .button input {
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color: #4070f4;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input:hover {
    background-color: #265df2;
}

.form .login-signup {
    margin-top: 30px;
    text-align: center;
}

button {
  width: 80%;
  height: 6vh;
  border-radius: 100px;
  outline: none;
  border: none;
  background-color: #4070f4;
  color: white;
  font-size: 1.2rem;
  font-weight: 700;
  margin: 7% 10%;
  
}

button:hover {
  scale: 0.99;
}


    </style>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

              <!-- ... (previous HTML code) ... -->

   <form action="<?php echo base_url('auth/aksi_login') ?>" method="post">
    <div class="input-field">
        <input type="text" placeholder="Enter your email" required>
        <i class="uil uil-envelope icon"></i>
    </div>
    <div class="input-field">
        <input type="password" class="password" placeholder="Enter your password" required>
        <i class="uil uil-lock icon"></i>
        <i class="uil uil-eye-slash showHidePw"></i>
    </div>

    <div class="checkbox-text">
        <div class="checkbox-content">
            <input type="checkbox" id="logCheck">
            <label for="logCheck" class="text">Remember me</label>
        </div>
        <a href="" class="text">Forgot password</a>
    </div>

    <div class="input-field button">
      <button>Login New</button>
    </div>
</form>

<!-- ... (remaining HTML code) ... -->


                <div class="login-signup">
                    <span class="text">Not a member?</span>
                    <a href="#" class="text signup-text">Signup Now</a>
                </div>
            </div>

            
        </div>
    </div>
    <script src="script.js"></script>
    <script>
      const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password");

      // js code to show/hide password aand chage icon

    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click", ()=> {
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            })
        })
    })
    </script>
</body>
</html>