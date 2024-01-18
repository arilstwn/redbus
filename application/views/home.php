
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
nav {
    position: fixed;
    background: #1085cd;
    width: 100%;
    z-index: 12;
}
nav .menu {
    max-width: 1250px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
}
.menu .logo a {
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
}
.menu ul {
    display: inline-flex;
}
.menu ul li {
    list-style: none;
    margin-left: 7px;
}
.menu ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: all 0.3s ease;
}
.menu ul li a:hover {
    background: #fff;
    color: #000;
}
.img {
    background: url(images.jpeg) no-repeat;
    height: 100vh;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: relative;
}
.img::before {
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #1e6674;
}
.center {
    position: absolute;
    top: 52%;
    left: 50%;
    width: 100%;
    transform: translate(-50% , -50%);
    padding: 0 20px;
    text-align: center;
}
.center .title {
    color: #fff;
    font-size: 55px;
    font-weight: 600;
}
.center .sub_title {
    color: #fff;
    font-size: 52px;
    font-weight: 600;
}
.center .btns {
    margin-top: 20px;
}
.center .btns a {
    height: 55px;
    width: 170px;
    border-radius: 5px;
    border: none;
    margin: 0 10px;
    border: 2px solid #fff;
    font-size: 20px;
    font-weight: 500;
    padding: 0 10px;
    cursor: pointer;
    outline: none;
    transition: all 0.3s ease;
}
.center .btns a:first-child {
    color: #fff;
    background: none;
}
.center .btns a:first-child:hover {
    background: #fff;
    color: #000;
}



.a {
    border: none;
    color: blue;
    padding: 8px;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    transition-duration: 0.45;
    cursor: pointer;
}

.a1 {
    background-color: #008CBA;
    color: white;
}

.a1:hover {
    background-color: white;
    color: black;
    border: 2px solid red;
}


.h2 {
            font-size: 46px;
            line-height: 1.3380952381;
        }

   </style>
<body>
   <nav>
    <div class="menu">
        <div class="logo">
            <a href="">Bluebus</a>
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Feedback</a></li>
        </ul>
    </div>
   </nav>
   <div class="img"></div>
   <div class="center">
    <div class="title">Create Amazing Website</div>
    <div class="sub_title">BlueBus</div>
    <div class="btns">
    <a href="auth/login" style="border-radius: 8px; 10%;" class="a a1">Log In</a>
    <a href="auth/register" style="border-radius: 8px; 10%;" class="a a1">Register</a>
     
    </div>
   </div>
</body>
</html>