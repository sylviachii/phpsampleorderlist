<section class="headermenu">
    <div></div>
    <div class="logo">
        <h5 class="mt-2"><a href="index.php">拉個群吧</a></h5>
    </div>
    <div class="mb-2"><div class="menu-icon">&#9776;</div></div>
</section>

    <div class="sidebar">
        <ul><li><div class="menu-icon">&#10006;</div></li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">首頁</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="acont.php">統計金額</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add.php">新增訂單</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addproduct.php">新增產品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detal.php">產品清單</a>
                </li>
             
            <!-- Add more menu items as needed -->
        </ul>
    </div>
<style>
    @media(max-width:1024px) {
        body {
            margin: 0;
            padding: 0;
           
        }

        .sidebar {
            width: 100px;
            display: none;
        }

        .menu {
            padding-top: 80px;
        }
    }
    
    @media(max-width:767px){
.logo{
 border-radius: 8rem;
    height: 100px;
    width: 160px;
    background-color: #E9C9CE;
        margin: auto;
        position: relative;
    top: -24px;
    left: 18px;
}
}

.logo h5 {
    position: relative;
    top: 25%;
    margin: auto;
}
.sidebar {
    width: 250px;
    background-color: #35b4ba;
    color: white;
    padding: 20px;
    box-sizing: border-box;
    position: fixed;
    height: 100vh;
    top: 0;
    right: 0;
    z-index:99;
}

    .sidebar a {
        text-decoration: none;
        color: white;
        display: block;
        margin-bottom: 10px;
    }


    .sidebar.active {
        display: block;
    }

    .sidebar.open {
        display: block;
    }

    .menu-icon {
        font-size: 42px;
    }
    
    
    .sidebar ul li{
            list-style: none;
    text-align: left;
    }
</style>