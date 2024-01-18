<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sidebar With Bootstrap</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*,
::after,
::before {
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background-image: url("https://codzsword.github.io/bootstrap-sidebar/background-image.jpg");
    background-repeat: no-repeat;
    background-position: center bottom;
    background-size: cover;
}

h3 {
    font-size: 1.2375rem;
    color: #FFF;
}

a {
    cursor: pointer;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
}

li {
    list-style: none;
}

/* Layout skeleton */

.wrapper {
    align-items: stretch;
    display: flex;
    width: 100%;
}

#sidebar {
    max-width: 264px;
    min-width: 264px;
    transition: all 0.35s ease-in-out;
    box-shadow: 0 0 555px 0 rgba(39, 68, 100, 0.5);
    z-index: 1111;
}

/* Sidebar collapse */

#sidebar.collapsed {
    margin-left: -264px;
}

.main {
    display: flex;
    flex-direction: column;
    min-height: 200vh;
    width: 100%;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
}

.sidebar-logo {
    padding: 1.15rem 1.5rem;
}

.sidebar-logo a {
    color: #e9ecef;
    font-size: 1.25rem;
    font-weight: 600;
}

.sidebar-nav {
    padding: 0;
}

.sidebar-header {
    color: #e9ecef;
    font-size: .75rem;
    padding: 1.5rem 1.5rem .375rem;
}

a.sidebar-link {
    padding: .625rem 1.625rem;
    color: #e9ecef;
    position: relative;
    display: block;
    font-size: 1rem;
}

.sidebar-link[data-bs-toggle="collapse"]::after {
    border: solid;
    border-width: 0 .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
}

.sidebar-link[data-bs-toggle="collapse"].collapsed::after {
    transform: rotate(45deg);
    transition: all .2s ease-out;
}

.content {
    flex: 1;
    max-width: 100vw;
    width: 100vw;
}

/* Responsive */

@media (min-width:768px) {
    .content {
        width: auto;
    }
}




 
main.table {
   
   box-shadow: 0 .4rem .8rem #0005;
 
   overflow: hidden;
}

.container {
    position: relative;
   
    background: transparent;
  
    border-radius: 20px;
 
    display: flex;
   
    align-items: center;

}

.container .form {
    padding: 30px;
    
}

.title {
    font-size: 1.2375rem;
    color: #FFF;
}

.container .form .title {
    position: relative;
    font-size: 27px;
    text: #fff;
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
    height: 45px;
    width: 260%;
    margin-top: 20px;
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
    border-bottom-color: #4070F4;
}

.input-field i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 27px;
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
    background-color: #008CBA;
}

.form .login-signup {
    margin-top: 30px;
    text-align: center;
}

.wkwkwkw {
  width: 80%;
  height: 6vh;
  border-radius: 100px;
  outline: none;
  border: none;
  background-color: #008CBA;
  color: white;
  font-size: 1.2rem;
  font-weight: 700;
  margin: 7% 10%;
  
  
}

.wkwkwkw:hover {
  scale: 0.99;
}

    </style>
</head>

<body class="relative min-h-screen overflow-hidden">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">BlueBus</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Tools & Components
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-house pe-2"></i>
                           Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#pages"
                            aria-expanded="false" aria-controls="pages">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Pages
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="kelas" class="sidebar-link">Kelas</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="jadwal" class="sidebar-link">Jadwal</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="pesanan" class="sidebar-link">Pesanan</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="tiket" class="sidebar-link">Tiket</a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                            aria-expanded="false" aria-controls="auth">
                            <i class="fa-regular fa-user pe-2"></i>
                            Akun
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Profile</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Multi Level Nav
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi"
                            aria-expanded="false" aria-controls="multi">
                            <i class="fa-solid fa-share-nodes pe-2"></i>
                            Multi Level
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                    Two Links
                                </a>
                                <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Link 1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Link 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3>Tambah Tiket Bus</h3>
                        
                        <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Tambah Tiket Bus</span>

              <!-- ... (previous HTML code) ... -->

   <form action="<?php echo base_url('admin/aksi_tambah_tiket') ?>" method="post">
    <div class="input-field">
    <input type="text" id="nama_tiket" name="nama_tiket" placeholder="Nama Tiket Bus" required>
    <i class="uil uil-edit-alt"></i>
    </div>

    <div class="input-field">
    <input type="text" id="kelas" name="kelas" placeholder="Kelas Bus" required>
    <i class="uil uil-edit-alt"></i>
    </div>

    <div class="input-field">
    <input type="text" id="tujuan" name="tujuan" placeholder="Tujuan Bus" required>
    <i class="uil uil-edit-alt"></i>
    </div>

    <div class="input-field">
    <input type="text" id="harga" name="harga" placeholder="Harga Tiket Bus" required>
    <i class="uil uil-edit-alt"></i>
    </div>


    <div class="input-field button my-12">
      <button class="wkwkwkw">Tambah</button>
    </div>
</form>


            
        </div>
    </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        const toggler = document.querySelector(".btn");
toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});
    </script>
</body>

</html>