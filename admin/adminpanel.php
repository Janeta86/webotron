<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt=""> 
            </div>

            <span class="logo_name">GOLIKETA</span> 
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../index.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Главный экран</span>
                </a></li>
                <li><a href="#z1">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Заявки</span>
                </a></li>
                <li><a href="#z_propan">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Заявки пропан</span>
                </a></li>
                </a></li>
                <li><a href="#z_metan">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Заявки метан</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href='validate.php?logout=1'>
                    <i class="uil uil-signout"></i>
                    <span class="link-name" >Выйти</span>
                    
                    
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Сменить тему</span>
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
        </div>
   
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-files-landscapes" id="z1"></i>
                    <span class="text">Заявки</span>
                </div>
                     <?php
                    require 'db.php'; 
                    ?>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-files-landscapes" id="z_propan"></i>
                    <span  class="text">Заявки пропан</span>
                </div>
            </div>     
                    <?php
                    require 'dbpropan.php'; 
                    ?>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-files-landscapes" id="z_metan"></i>
                    <span  class="text">Заявки метан</span>
                </div>
            </div>    

                    <?php
                    require 'dbmetan.php'; 
                    ?>
            <!-- <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

            </div> -->
<!-- <?php 
//require 'dppropan.php'
?>             
      -->           
        </div>
        

    </section>
<!-- 
    <script src="script.js"></script> -->
</body>
</html>