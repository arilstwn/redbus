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
    box-shadow: 0 0 35px 0 rgba(49, 57, 66, 0.5);
    z-index: 1111;
}

/* Sidebar collapse */

#sidebar.collapsed {
    margin-left: -264px;
}

.main {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
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



* {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}
 
body {
    
    display:flex;
   
}

main.table {
   
    box-shadow: 0 .4rem .8rem #0005;
  
    overflow: hidden;
}


.table__body {
    width: 95%;
    max-height: calc(89% - .8rem);
    background: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
}

.table__body::-webkit-scrollbar-thumb {
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover:-webkit-scrollbar-thumb {
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align:left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5dedefe;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr:hover {
    background-color: #fff6;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893e3;
    color: #b30021;
}

.status.shipped {
    background-color: #6fcaea;  
}

@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

.button {
    border: none;
    color: blue;
    padding: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    transition-duration: 0.45;
    cursor: pointer;
}


.button1 {
    background-color: #c02413;
    color: white;
}

.button1:hover {
    background-color: #c02413;
    color: black;
  
}
.a {
    border: none;
    color: blue;
    padding: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    transition-duration: 0.45;
    cursor: pointer;
}

.a:hover {
    background-color: #008CBA;
    color: black;
  
}

.a1 {
    background-color: #008CBA;
    color: white;
}



.h2 {
            font-size: 46px;
            line-height: 1.3380952381;
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
                        <h3>Tiket Bus</h3>
                        
  <main class="table">
      <!-- Area konten utama -->
      <div class="flex-1 p-4 w-full">
      
        <section class="table__header">
            <h2></h2>
            
            <div class="text">
                
                                <a href="tambah_tiket" style="border-radius: 8px; 10%;" class="a a1">Tambah</a>
                                </div>
        </section>
        
                                
  
        <section class="table__body">
            <table >
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Tiket</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Tujuan</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($tiket as $row) :
                                                $no++
                                            ?>
                                                <tr>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $no ?>
                                                    </td>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $row->nama_tiket ?>
                                                    </td>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $row->kelas ?>
                                                    </td>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $row->tujuan ?>
                                                    </td>
                                                    <td class="whitespace-nowrap px-4 py-2 text-center text-gray-700">
                                                        <?php echo $row->harga ?>
                                                    </td>                             
                                                    <td data-cell="Aksi" class="justify-content-center px-3 py-4 flex text-center">
                                                    <a href="ubah_kelas" style="border-radius: 8px;margin-top: 10%;" class="a a1">Ubah</a>

                                                    <button style="border-radius: 8px;margin-top: 10%;" class="button button1">Hapus</button> 
                                                    </td>                                             
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
            </table>
        </section>
    </main>
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