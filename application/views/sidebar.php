<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="style.css">

    <!--Boxicons css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
    /* ===== colors ====== */
    --body-color: #E4E9F7;
    --sidebar-color: #FFF;
    --primary-color: #695CFE;
    --primary-color-light: #F6F5FF;
    --toggle-color: #DDD;
    --text-color: #707070;

    /* ===== transition ===== */
    --tran-02: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.4s ease;
    --tran-05: all 0.5s ease;
}

body {
    height: 100vh;
    background: var(--body-color);
    transition: var(--tran-05);
}

body.drak {
    --body-color: #18191A;
    --sidebar-color: #242526;
    --primary-color: #3A3B3C;
    --primary-color-light: #3A3B3C;
    --toggle-color: #FFF;
    --text-color: #CCC;
}

/* ===== sidebar ===== */

.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background: var(--sidebar-color);
    transition: var(--tran-05);
    z-index: 100;
}

.sidebar.close {
    width: 88px;
}

/* ===== resuable css ===== */
.sidebar .text {
    font-size: 16px;
    font-weight: 500;
    color: var(--text-color);
    transition: var(--tran-04);
    white-space: nowrap;
    opacity: 1;
}
 
.sidebar.close .text {
    opacity: 0;
}

.sidebar .image {
    min-width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.sidebar li {
    height: 50px;
    margin-top: 10px;
    list-style: none;
    display: flex;
    align-items: center;
}

.sidebar li .icon {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    font-size: 20px;
}

.sidebar li .icon,
.sidebar li .text {
    color: var(--text-color);
    transition: var(--tran-02);
}

.sidebar header {
    position: relative;
}

.sidebar .image-text img {
    width: 40px;
    border-radius: 6px;
}

.sidebar header .image-text {
    display: flex;
    align-items: center;
}

header .image-text .header-text {
    display: flex;
    flex-direction: column;
}

.header-text .name {
    font-weight: 600;

}
.header-text .profession {
    margin-top: -2px;
}

.sidebar header .toggle {
    position: absolute;
    top: 50px;
    right: -25px;
    transform: translate(-50%) rotate(180deg);
    height: 25px;
    width: 25px;
    background: var(--primary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: var(--sidebar-color);
    font-size: 22px;
    transition: var(--tran-03);
}
.sidebar.close header .toggle {
    transform: translateY(-50%);
}

body.drak .sidebar header .toggle {
    color: var(--text-color);
}

.sidebar .search-box {
    background: var(--primary-color-light);
    border-radius: 6px;
}

.sidebar .menu {
    margin-top: 35px;
}

.search-box input {
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 500;
    background: var(--primary-color-light);
    transition: var(--tran-05);
}

.sidebar li a {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 6px;
    transform: var(--tran-04);
}

.sidebar li a:hover {
    background: var(--primary-color);
}

.sidebar li a:hover .icon,
.sidebar li a:hover .text {
    color: var(--sidebar-color);
}

body.drak .sidebar li a:hover .icon,
body.drak .sidebar li a:hover .text {
    color: var(--text-color);
}

.sidebar .menu-bar {
    height: calc(100% - 50px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.menu-bar .mode {
    position: relative;
    border-radius: 6px;
    background: var(--primary-color-light);
}

.menu-bar .mode .moon-sun {
    height: 50px;
    width: 60px;
    display: flex;
    align-items: center;
}

.menu-bar .mode i {
    position: absolute;
    transition: var(--tran-03);
}

.menu-bar .mode i.sun {
    opacity: 0;
}

body.drak .menu-bar .mode i.sun {
    opacity: 1;
}

body.drak .menu-bar .mode i.moon {
    opacity: 0;
}

.menu-bar .mode .toggle-switch {
    position: absolute;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    min-width: 60px;
    cursor: pointer;
    border-radius: 6px;
    background: var(--primary-color-light);
    transition: var(--tran-05);
}

.toggle-switch .switch {
    position: relative;
    height: 22px;
    width: 44px;
    border-radius: 25px;
    background: var(--toggle-color);
}

.switch::before {
    content: '';
    position: absolute;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    background: var(--sidebar-color);
    transition: var(--tran-03);
}

body.drak .switch::before {
    left: 24px;
}

.home {
    position: relative;
    height: 100vh;
    left: 250px;
    width: calc(100% - 250px);
    background: var(--body-color);
    transition: var(--tran-05);
}

.home .text {
    font-size: 30px;
    font-weight: 500;
    color: var(--text-color);
    padding: 8px 40px;
}

.sidebar.close ~ .home {
    left: 88px;
    width: calc(100% - 88px);
}
    </style>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="elen.webp" alt="elen">
                </span>

                <div class="text header-text">
                    <span class="name">codinglab</span>
                    <span class="profession">web deloper</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <a href="">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder="Search....">
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Revenue</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notifications</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                        <i class='bx bx-user-circle icon' ></i>
                            <span class="text nav-text">Akun</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i> 
                        <i class='bx bx-sun icon sun'></i> 
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text">Dasboard</div>
    </section>

    <script src="script.js"></script>
    <script>
        const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwtich = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");

      toggle.addEventListener("click", () =>{
        sidebar.classList.toggle("close");
      })
      searchBtn.addEventListener("click", () =>{
        sidebar.classList.remove("close");
      })


      modeSwtich.addEventListener("click", () =>{
        body.classList.toggle("drak");

        if(body.classList.contains("drak")){
            modeText.innerText = "Light Mode"
        }else{
            modeText.innerText = "Drak Mode"
        }
      })
    </script>

</body>
</html>