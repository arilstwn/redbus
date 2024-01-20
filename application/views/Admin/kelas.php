<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----CSS-->
    <link rel="stylesheet" href="style.css">

    <!--Icons css-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;;
}

:root{
    /* ===== colors ====== */
   --primary-color: #0E4BF1;
   --panel-color: #FFF;
   --text-color: #000;
   --black-light-color:#707070;
   --border-color: #e6e5e5;
   --toggle-color: #DDD;
   --box1-color: #4DA3FF;
   --box2-color: #FFE6AC;
   --box3-color: #E7D1FC;
   --title-icon-color: #fff;


    /* ===== transition ===== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
   
}

body {
    min-height: 100vh;
}

body.drak {
    --primary-color: #3A3B3C;
    --panel-color: #242526;
    --text-color: #CCC;
    --black-light-color:#CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
    --box2-color: #3A3B3C;
    --box3-color: #3A3B3C;
    --title-icon-color: #CCC;
}

nav {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}

nav.close {
    width: 73px;
}

nav .logo-name{
    display: flex;
    align-items: center;
   
}
nav .logo-image {
    display: flex;
    justify-content: center;
    min-width: 45px;
}
nav .logo-image img {
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name {
    font-size: 22px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
}

nav.close .logo_name {
    opacity: 0;
    pointer-events: none;
}

nav .menu-items {
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.menu-items li {
    list-style: none;
}

.menu-items li a {
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}
.nav-links li a:hover:before {
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}

body.dark li a:hover:before {
    background-color: var(--text-color);
}

.menu-items li a i {
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}

.menu-items li a .link-name {
    font-size: 18px;
    font-weight: 400;
    color: var(--black-light-color);
    transition: var(--tran-05);
}

nav.close li a .link-name {
    opacity: 0;
    pointer-events: none;
}

.nav-links li a:hover i,
.nav-links li a:hover .link-name {
    color: var(--primary-color);
}

.body.dark li a:hover i,
.body.dark li a:hover .link-name {
    color: var(--text-color);
}

.menu-items .logout-mode {
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}

.menu-items .mode {
    display: flex;
    align-items: center;
    white-space: nowrap;
}

.menu-items .mode-toggle {
    position: absolute;
    right: 14px;
    height: 50px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.mode-toggle .switch {
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}

.switch::before {
    content: "";
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 15px;
    width: 15px;
    background-color: var(--panel-color);
    border-radius: 50%;
    transition: var(--tran-03);
}

body.drak .switch::before {
    left: 20px;
}

.dashboard {
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    height: 100vh;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}

nav.close ~ .dashboard {
    left: 73px;
    width: calc(100% - 73px);
}

.dashboard .top {
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}

nav.close ~ .dashboard .top {
    left: 73px;
    width: calc(100% - 73px);
}

.dashboard .top .sidebar-toggle {
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}

.dashboard .top .search-box {
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}

.top .search-box input {
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}

.top .search-box i{
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}

.top img {
    width: 40px;
    border-radius: 50%;
}

.container {
    padding: 50px;
}

.dashboard .dash-content {
    padding: 50px;
}

.dash-content .title {
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}

.dash-content .title i {
    position: relative;
    height: 35px;
    width: 35px;
    background-color: var(--primary-color);
    border-radius: 6px;
    color: var(--title-icon-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
} 
 
.dash-content .title .text {
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}

.dash-content .boxes {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.dash-content .boxes .box {
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    width: calc(100% / 3 - 15px);
    padding: 15px 20px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
}

.boxes .box i {
    font-size: 35px;
    color: var(--text-color);
}

.boxes .box .text {
    white-space: nowrap;
    font-size: 18px;
    font-weight: 500;
    color: var(--text-color);
}

.boxes .box .number {
    font-size: 40px;
    font-weight: 500;
    color: var(--text-color);
}

.boxes .box.box2 {
    background-color: var(--box2-color);
}

.boxes .box.box3 {
    background-color: var(--box3-color);
}


.dash-content .activity .activity-data {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.activity .activity-data {
    display: flex;
}

.activity-data .data {
    display: flex;
    flex-direction: column;
    margin: 0 15px;
}

.activity-data .data-title {
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
}

.activity-data .data .data-list {
    font-size: 18px;
    font-weight: 400;
    margin-top: 20px;
    white-space: nowrap;
    color: var(--text-color);
}

@media (max-width: 1000px) {
    nav {
        width: 73px;
    }
    nav.close {
        width: 250px;
    }
    nav .logo_name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name {
        opacity: 1;
        pointer-events: auto;
    }
    nav li a .link-name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name {
        opacity: 1;
        pointer-events: auto;
    }
    nav ~ .dashboard {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard {
        left: 250px;
        width: calc(100% - 250px);
    }
    nav ~ .dashboard .top {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard .top {
        left: 250px;
        width: calc(100% - 250px);
    }
    .activity .activity-data {
        overflow-X: scroll;
    }
}

@media (max-width: 780px) {
    .dash-content .boxes .box {
        width: calc(100% / 2 - 15px);
        margin-top: 15px;
    }
}

@media (max-width: 560px) {
    .dash-content .boxes .box {
        width: 100%;
    }
}

@media (max-widht: 500px) {
    nav {
        width: 73px;
    }
    nav.close {
        width: 250px;
    }
    nav .logo_name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name {
        opacity: 0;
        pointer-events: auto;
    }
    nav li a .link-name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name {
        opacity: 0;
        pointer-events: auto;
    }
    nav ~ .dashboard {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav ~ .dashboard .top {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard .top {
        left: 250px;
        width: calc(100% - 250px);
    }
    .dashboard .top .sidebar-toggle {
        display: none;
    }
}




/* * {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}
 
body {
    min-height: 100vh;
    background: url(main.jpeg) center / cover;
    display:flex;
    justify-content: center;
    align-items: center;
} */

main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;
    
    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;
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

    </style>
</head>
<body>
    <nav>
        <div class="logo-name">
          <div class="logo-image">
            <img src="ayang.jpg" alt="">
          </div>

          <span class="logo_name">BlueBus</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="jadwal">
                <i class="uil uil-file-bookmark-alt"></i>
                    <span class="link-name">Jadwal</span>
                </a></li>
                <li><a href="kelas">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Kelas</span>
                </a></li>
                <li><a href="tiket">
                <i class="uil uil-pricetag-alt"></i>
                    <span class="link-name">Tiket</span>
                </a></li>
                <li><a href="pesanan">
                <i class="uil uil-notes"></i>
                    <span class="link-name">Pesanan</span>
                </a></li>
                <li><a href="akun">
                <i class="uil uil-user"></i>
                    <span class="link-name">Akun</span>
                </a></li>
            </ul>

            <ul class="logout-mod">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Drak mode</span>
                </a>

                <div class="mode-toggle">
                <span class="switch"></span>
            </div>
            </li>
            </ul>
        </div>
    </nav>
    
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here.....">
            </div>

            <img src="umika.jpeg" alt="">
        </div>

        <!-- <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                    <i class="uil uil-notes"></i>
                        <span class="text">Total Pesanan Tiket</span>
                        <span class="number">1</span>
                    </div>
               
                    <div class="box box2">
                    <i class="uil uil-pricetag-alt"></i>
                        <span class="text">Jumlah Tiket</span>
                        <span class="number">1</span>
                    </div>
              
                    <div class="box box3">
                    <i class="uil uil-envelope"></i>
                        <span class="text">Email Pelanggan</span>
                        <span class="number">1</span>
                    </div>
                </div>
            </div> -->

    <main class="table">
        <section class="table__header">
            
        </section>
        <section class="table__body">
            <table >
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nama</th>
                        <th>makan</th>
                        <th>tidur</th>
                        <th>tepar</th>
                        <th>status</th>
                        <th>males</th>
                    </tr>
                </thead>
                <body>
                    <tr class="text-center px-3 py-3">
                        <td> 1 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p class="status delivered">delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 2 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p class="status cancelled">cancelled</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 3 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p class="status shipped">shipped</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 4 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 5 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 6 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 7 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 8 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 9 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                    <tr class="text-center px-3 py-3">
                        <td> 10 </td>
                        <td> <img src="elen.png">Elaina Chan </td>
                        <td> seoul </td>
                        <td> 17, 2023 </td>
                        <td> desemmber </td>
                        <td>
                            <p>delivered</p>
                        </td>
                        <td> <strong>10000</strong> </td>
                    </tr>
                </body>
            </table>
        </section>
    </main>
    
      
    </section>
    <script src="script.js"></script>
    <script>
        const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");



let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="drak");{
   body.classList.toggle("drak");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close");{
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () => {
    body.classList.toggle("drak");
    if(body.classList.contains("drak")){
        localStorage.setItem("mode", "drak")
    }else{
        localStorage.setItem("mode", "light")
    }
});      

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close")
    }else{
        localStorage.setItem("status", "open")
    }
})
    </script>
</body>
</html>