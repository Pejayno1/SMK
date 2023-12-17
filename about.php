<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!--CssLinks -->
        <link rel="stylesheet" href="assets/Css/ViewerCss/about.css">
        <link rel="stylesheet" href="assets/Css/AA/font.css">
        <link rel="stylesheet" href="assets/Css/AA/header.css">
        <link rel="stylesheet" href="assets/Css/AA/UIselect.css">
        <link rel="stylesheet" href="assets/Css/BuyerCss/mainpage.css">
        <link rel="stylesheet" href="assets/Css/BuyerCss/mainstyle.css">
        <link rel="stylesheet" href="assets/Css/BuyerCss/minigames.css">
        <link rel="stylesheet" href="/Viewer/assets/Css/BuyerCss/profiletorture.css">
    
        
    
    
        <title>ShopMarketKey</title>
        <link rel="icon" href="/Viewer/favicon.png" type="image/x-icon">
        
    </head>
    <body>
        <header>
            <div id="sidebar" class="sidebar">
                <button id="close-btn" class="close-btn">&times;</button>
                <div class="sidebar-menu">
    
                    <div id="profile" class="profile">
                        <div class="card">
                            <div class="card__img"></div>
                            <div class="card__avatar"><img src="/Viewer/assets/img/Emptypic.png" alt="Addprofile"></img></div>
                            <div class="card__title">You must Login First.</div>
                            <div class="card__subtitle"></div>
                            <div class="card__wrapper">
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li id="dashboard">
                            <button class="holero" onclick="navigate('A-A dashboardview.html')">
                              <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                              </svg>
                              HOME
                            </button>
                        </li>
                        <li id="about">
                            <button class="holero" onclick="navigate('A-B aboutview.html')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" fill="currentColor" class="bi bi-file-earmark-person" viewBox="0 0 16 16">
                                    <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2v9.255S12 12 8 12s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h5.5z"/>
                                  </svg>
                              ABOUT
                            </button>
                        </li>
                        <li id="login">
                            <button class="holero" onclick="navigate('registerlogin.html')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                  </svg>
                              SIGN IN
                            </button>
                        </li>
                    </ul>
    
                </div>
            </div>
            <div class="navbar">
                <div class="navbar">
                    <div class="logo-container"><img src="C-A logo.png" alt="SMK Logo" class="logo"></div>
                    <button id="open-btn" class="open-btn">SMK</button>
                </div>
                
            </div>
            <input placeholder="Search ShopMarketKey..." type="text" name="text" class="input">
    
            
    
    
            <div class="button-container">
                Sign up First.
            </div>
        </header>
    
    <main>
        <section class="about">
            <div class="aboutustext">About US</div>
            <p>SMK is an Online Shopping Website..</p>
            <div class="about-info">
                <div class="about-img">
                    <img src="C-A logo.png" alt="Company A Logo">
                </div>                
                <div>
         <div class="aboutussub">ShopMarketKey, a specialized, tailored platform poised to provide the essential resources, 
            tools, and strategies that align with the distinctive needs of students and young entrepreneurs.
             ShopMarketKey seeks to redefine the entrepreneurial landscape by facilitating the maximization 
             of earning potential within the constraints of limited budgets</p>
                </div>
            </div>
        </section>
     
        <section class="team">
            <div class="aboutustext">Members</div>
            <div class="team-cards">
                <!-- Member 1 -->
                <div class="members">
                    <div class="mem-img">
                        <img src="/Viewer/assets/img/Shin.jpg" alt="User 3">
                    </div>
                    <div class="mem-info">
                        <h2 class="mem-name">Ashley Margarette Q. Callano</h2>
                        <p class="mem-role">Research Leader</p>
                        <p class="mem-email">jane@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
        
                <!-- Member 2 -->
                <div class="members">
                    <div class="mem-img">
                        <img src="/Viewer/assets/img/Shin.jpg" alt="User 3">
                    </div>
                    <div class="mem-info">
                        <h2 class="mem-name">Lea Alagao</h2>
                        <p class="mem-role">Member</p>
                        <p class="mem-email">jane@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
        
                <!-- Member 3 -->
                <div class="members">
                    <div class="mem-img">
                        <img src="/Viewer/assets/img/Shin.jpg" alt="User 3">
                    </div>
                    <div class="mem-info">
                        <h2 class="mem-name">Jen Bautista</h2>
                        <p class="mem-role">Member</p>
                        <p class="mem-email">jane@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
        
                <!-- Member 4 -->
                <div class="members">
                    <div class="mem-img">
                        <img src="/Viewer/assets/img/Shin.jpg" alt="User 3">
                    </div>
                    <div class="mem-info">
                        <h2 class="mem-name">Clarence Borja</h2>
                        <p class="mem-role">Member</p>
                        <p class="mem-email">Miller@example.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
        
                <!-- Member 5 -->
                <div class="members">
                    <div class="mem-img">
                        <img src="/Viewer/assets/img/Shin.jpg" alt="User 3">
                    </div>
                    <div class="mem-info">
                        <h2 class="mem-name">Rian Ram Alejandre</h2>
                        <p class="mem-role">Member</p>
                        <p class="mem-email">jhaninamalabs@gmail.com</p>
                        <p><button class="button">Contact</button></p>
                    </div>
                </div>
            </div>
        </section>        
    </main>
    <section>
        <label for="themeSelector">Select Theme Color:</label>
        <input type="color" id="themeSelector" name="themeColor">
    </section>
        <footer>
            <p>&copy; 2023 ShopMarketKey. All rights reserved.</p>
        </footer>
        <script src="assets/Js/AA/body.js"></script>
        <script src="assets/Js/AA/notif.js"></script>
        <script src="assets/Js/AA/pic.js"></script>
        <script src="assets/Js/AA/picB.js"></script>
        <script src="assets/Js/AA/searchbar.js"></script>
        <script src="assets/Js/AA/sortingsystem.js"></script>
        <script src="assets/Js/AA/uiselect.js"></script>
        <script src="assets/Js/BuyerJs/proftorture.js"></script>

</body>
</html>
