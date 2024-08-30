<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/basketball-glossy-ball-png-18.png">
    <title>GamePulse</title>
    <script src="https://kit.fontawesome.com/50575b88b4.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<style>
    *{
        padding: 0;
    margin: 0;
    outline: none;
    border: none;
    box-sizing: border-box;
    }
    a{
    text-decoration: none;
    
}
body{
    font-family: 'poppins', 'sans-serif';
    background: #dddddd;
    scroll-behavior: smooth;

}


    nav{
    font-size: 12px;
    max-width: 1500;
    margin-top: 2.5rem;
    padding: 0rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    width: 46.5%;
    z-index: 1100;
    position: absolute;
    backdrop-filter: blur(2px);
    margin-left: 24rem;
    border-radius: 15px;
 
}
.nav-links{
    list-style: none;
    display: flex;
    align-items: center;
    gap: 2.5rem;
    font-weight: 700;
    margin-left: 1rem;
    font-family: Noto Sans Georgian,sans-serif;

    


}

.nav-links a:hover{
    color: #575757;
    transition: all 0.2s ease;
    font-weight: bold;
}

.link a,.fa-circle-user{
    position: relative;
    padding: 0.75rem;
    color: #000000;


}
.fa-circle-user{
    font-size: 0.75rem;
}


    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 100vh;
    }

    .container {
        padding-left: 2rem;
        background-image: url("jordan-three-point-shot-nba-desktop-2ig8k2t860t39w6b.jpg");
        background-size: cover;
        background-position: center;
        clip-path: polygon(0 100%, 70% 0, 100% 0, 100% 100%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contain {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #dddddd;
        margin-right: 0rem;
    }
    .contain h2 {
        margin:  0;
        font-size: 60PX;
        font-family: "Oswald", sans-serif;
        font-weight: 900;
        padding: 0px;
        
    }
    .contain .first{
        margin-right: 10rem;
    }
    .contain .second{
        margin: 0rem;
        padding-top: 0px;
    }
    .contain .third{
        font-family: Arial, sans-serif;
        font-size: 17px;
        color: #444;
        margin-left: 8rem;
    }
    .subsbtn {
        padding: 0.75rem 1.5rem;
        background-color: #000;
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-bottom: 8rem;
        margin-right: 9rem;
    }
    .subsbtn:hover {
        background-color: #B32C1A;
    }
    .offers-container {
        grid-template-columns: 1fr 1fr;
        position: absolute;
        top: 70vh;
        left: 50%;
        transform: translateX(-50%);
        width: 70%;
        display: flex;
        justify-content: space-between;
        background-color: rgba(221, 221, 221, 0.3); /* Use semi-transparent background */
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
        box-shadow: 5px 5px 5px 5px rgba(0.2, 0.2, 0.2, 0.2); 
        border-radius: 5px;
    }
    .offers {
    width: 100%; 
    max-width: 300px;
    margin: 20px ; 
    padding: 20px; 
    border-radius: 5px;
    background-color: #dddddd;;
    display: grid;
    grid-template-columns: auto 1fr;
    display: flex;
            align-items: center;
            justify-content: center; /* Center content horizontally */
            text-align: center; 
            color: #000;

}

.offers .boxes-basket {
    padding: 0rem; 
    align-items: center; /* Center content vertically */
    justify-content: center;
    display: flex;
    flex-direction: column;
}
.offers .boxes-foot,
.boxes-ph {
    padding: 0rem; 
    align-items: center; /* Center content vertically */
    justify-content: center;
    display: flex;
    flex-direction: column;
}

.offers .boxes-basket h1,
.boxes-ph h1{
    font-weight: 800;
    margin-bottom: 0.7rem;
    font-size: 17px;
    font-family: Arial, sans-serif;

}
.offers .boxes-foot h1 {
    font-weight: 800;
    margin-bottom: 0.7rem;
    font-size: 17px;
    font-family: Arial, sans-serif;

}

.offers .icon {
    color: #ffffff;
    margin-right: 0;
    background-color: #C9D8DD;
    padding: 0;
    margin-right: 0rem;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 1rem;
    height: 3rem;
    border: 1px solid #3B5A64;
    border-radius: 14px;

}
span{
    font-family:  Arial, sans-serif;
    font-weight: 600;
    font-size: 13px;
    color: #2e2e2e;
    
}
span:hover{
    color: #dddddd;
}

.offers:hover{
    background-color: #B32C1A;
    transition: all ease-in-out 0.4s;
}

.offers:hover h1,
.offers:hover span {
    color: #dddddd; 
}

.offers h1,
.offers span {
    transition: color ease-in-out 0.4s;
}

::-webkit-scrollbar{
    width: 6px;
}
::-webkit-scrollbar-thumb{
    background-color: #000;
    border-radius: 0px 0px 0px 0px;
}
#news{
    margin-bottom: 50rem;
}
.boundary{
    padding-top: 5px;
    width: 100%;
    background-color: #B32C1A;
}
.contents-grid{
    grid-template-columns: 250px 1fr;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
}
.nav2{
    padding-right: 3rem;
    padding-left: 3rem;
    padding-bottom: 10rem;
    margin-left: 0px;
    height: 100vh;
    background-color: #ffffff;
    margin-right: 0rem;
    position: sticky;
            top: 0;
            z-index: 1;
    align-items: center;
    display: flex;
    flex-direction: column;
    

}
.nav2 h3{
    padding-top: 5rem;
    font-family: "Oswald", sans-serif;
    font-weight: 800;
    font-size: 25px;
    padding-bottom: 7rem;
    cursor: pointer;
}
.nav2 .scoresbtn,.storiesbtn,.podcastbtn,.watchbtn,.homebtn{
    padding: 5px;
    margin: 10px;
    font-family: Arial, sans-serif;
    font-weight: 800;
    background-color: #fff;
    color: #575757;
    font-size: 11px;
    cursor: pointer;
}
.nav2 .scoresbtn:hover,.storiesbtn:hover,.podcastbtn:hover,.watchbtn:hover
,.homebtn:hover{
    color: #000;
}
.nav2::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(221, 221, 221, 0) 90%, rgba(221, 221, 221, 1) 99%);
    pointer-events: none; /* Allow clicks to pass through */
    z-index: -1;
}
.infobtn{
    margin-top: 5rem;
    color: #fff;
    background-color: #000;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 5px;
    font-weight: 900;

}
.infobtn:hover{
    background-color: #B32C1A;
    transition: all ease 0.4s;
}

.nba{
    background-color: #B32C1A;
    padding-right: 15rem;
    padding-left: 1rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    width: 100%;    
    color: #fff;
    font-family: "Oswald", sans-serif;
    font-size: larger;
    border-radius: 3px;
    cursor: pointer;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            z-index: 2;
}
.nba h1{
    margin-right: 0rem;
    margin-left: 1rem;
    z-index: 2;
  
}
.nba:hover{
    background-color: #000000;
    transition: all ease 0.3s;
}
.nba .icon{
    margin-left: 1rem;
}
.icon{
    margin: 0rem;
}
.nba .fa-angle-right{
    margin-left: 28rem;
    margin-right: 0rem;
    font-size: 15px;
}
.football .fa-angle-right{
    margin-right: 0rem;
    margin-left: 23rem;
    font-size: 15px;
}


.football{
    background-color: #B32C1A;
    padding-right: 1rem;
    padding-left: 1rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    width: 100%;
    color: #fff;
    font-family: "Oswald", sans-serif;
    font-size: larger;
    border-radius: 3px;
    cursor: pointer;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            z-index: 2;
}
.football h1{
    margin-left: 0rem;
    z-index: 2;

}
.football:hover{
    background-color: #000000;
    transition: all ease 0.3s;
}
.nba-content, .laliga-content {
    position: relative;
    width: 65%;
    max-width: 800px;
    margin-right: 35rem;
    overflow: hidden;
    z-index: 2;
    height: 400px;
    width: 100%;


        }




.nba-content h1, .laliga-content h1{
    font-family: "Oswald", sans-serif;
    font-weight: 800;
    font-size: 17px;
    margin: 10px;
    width: 100%;
    z-index: 2;
    color: white;
    
}
.nba-content p, .laliga-content p{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #a6a6a6;
    font-size: 14px;
  
    margin-left: 0.7rem;
}
.slider {
    display: flex;
    transition: transform 0.5s ease-in-out;
    flex-basis: 100%;
    text-align: center;
    height: 350px;
    
}
.slider-container {
            position: relative;
            overflow: hidden;
            border-radius: 7px;
            width: 100%;
        }
        .slider-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .slider-nav button {
            background: rgba(0, 0, 0, 0.5);
            border: none;
            color: #fff;
            font-size: 18px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 15px;
            padding-right: 15px;
            cursor: pointer;
            border-radius: 10px;
            background-color: 	#202020;
            margin: 5px;
        
        }
        .slider-nav button:hover {
            background: rgba(0, 0, 0, 0.7);
        }

.slider h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.slider img {
    width: 100%;
    flex-shrink: 0;
    border-radius: 7px;
}
.nba-grid, .football-grid {
            margin-left: 8rem;
            background: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            width: 42rem; /* Set a fixed width */
            max-width: 42rem; /* Ensure the width does not exceed this value */
            min-width: 42rem; 
            z-index: 2;
            position: relative; 
            background-color: rgba(221, 221, 221, 0.3); /* Use semi-transparent background */
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
        }

.wow{
    padding: 1rem;
    margin-top: 2px;
    background: rgba(0, 0, 0, 0.7); /* Same black background with 70% opacity */
    display: block; /* Ensure the element is displayed */
    visibility: hidden;

}
.nba-grid H4,.football-grid H4{
    font-family: "Oswald", sans-serif;
    margin-top: 1rem;
    margin-bottom: 1rem;
    font-weight: 800;
    font-size: 1.5rem;
    color: white;

}

.sub-menu-wrap{
    position: absolute;
    top: 100%;
    right: 0rem;
    width: 200px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.5s;
}
.sub-menu-wrap.open-menu{
    max-height: 300px;
}
.sub-menu{
    background: #fff;
    padding: 20px;
    margin: 0px;
    border-radius: 5px;

}
.user{
    width: 2rem;
    border-radius: 50%;
    margin-right: 15px;
}
.user-info{
    display: flex;
    align-items: center;
}
.user-info h2{
    font-size: 0.9rem;
    font-weight: 600;
    font-family: Noto Sans Georgian,sans-serif;
    color: #474747;
}
.sub-menu hr{
    border: 0;
    height: 1px;
    width: 100%;
    background: #ccc;
    margin: 15px 0;
}
.sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #525252;
    margin: 12px 0;    
}
.sub-menu-link p{
    width: 100%;
    font-size: 11px;
}
.sub-menu-link img{
    width: 40px;
    background: #e5e5e5;
    border-radius: 50%;
    padding: 8px;
    margin-right: 15px;
}
.sub-menu-link span{
    font-size: 22px;

} 
.contents{
    margin-left: 0;
    flex-grow: 1;
    width: 10%;
    padding: 20px;
    height: 100%; /* Adjust height to 1 pixel */
    overflow: hidden;
    background: rgba(0, 0, 0, 0.9);
    border-top-left-radius: 15px;
    
}  
.contents::before {
    content: '';
    position: absolute;
    top: 15%; /* Center vertically, adjust as needed */
    left: 85%; /* Center horizontally, adjust as needed */
    width: 300px;/* Adjust the width of the circle */
    height: 300px; /* Adjust the height of the circle */
    background: rgba(128, 0, 128, 0.2); /* Red color with transparency */
    filter: blur(8px); /* Adjust the blur amount as needed */
    border-radius: 50%; /* Creates a circular shape */
    transform: translate(-50%, -50%); /* Centers the circle */
    z-index: -1;
    filter: blur(30px);
}
.sub-menu-link:hover span{
    transform: translateX(5px);

}
.sub-menu-link:hover p{
    font-weight: 600;
}
.sub-menu-link:hover img{
    background-color: #42617a;
}
.scores-container {
    background-color: #333;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
    margin: 20px;
    visibility: visible;
    z-index: 10;
    background-color: white;
    margin-top: 80rem;
}
#live-scores h2{
    color: #000;
    visibility: visible;
}


.match-line span {
    margin-right: 10px;
}



</style>
<body>

    <div class="boundary">
    </div>

    <nav>     
        <ul class="nav-links">
            <li id="link4" class="link"><i class="fa-solid"><a href="#grid">HOME</a></i></li>
            <li id="link1" class="link"><i class="fa-solid"><a href="#nav2">COMMUNITY</a></i></li>
            <a href="home.html" class="logo">
                <img src="img/basketball-glossy-ball-png-18.png" width="50" height="50">
            </a>
            <li id="link2" class="link"><i class="fa-solid"><a href="#contents">NEWS</a></li>
            <?php


?>
<img src="<?php echo isset($_SESSION['profile_picture']) ? $_SESSION['profile_picture'] : 'img/icons8-male-user-24.png'; ?>" alt="Profile Picture" id="user-icon" onclick="toggleMenu()">

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                        if (isset($_SESSION['profile_picture'])) {
                            echo '<img src="' . $_SESSION['profile_picture'] . '" class="user">';
                        } else {
                            echo '<img src="img/icons8-male-user-24.png" class="user">';
                        }
                        echo '<h2>' . $_SESSION['fullname'] . '</h2>';
                    } else {
                        echo '<img src="img/icons8-male-user-24.png" class="user">';
                        echo '<h2>Guest</h2>';
                    }
                    ?>
                
                
                </div>
                <hr>

                <a href="bookings.php#openHeros" class="sub-menu-link">
                    <img src="img/icons8-male-user-24.png" alt="">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>
                <a href="bookings.php" class="sub-menu-link">
                    <img src="imgs/icons8-book-30.png" alt="">
                    <p>Favorites</p>
                    <span>></span>
                </a>
                <hr>
                <a href="#" class="sub-menu-link" onclick="logoutUser()">
                    <img src="imgs/icons8-logout-24.png" alt="">
                    <p>Logout</p>
                    <span>></span>
                </a>

            </div>
        </div>

    </nav>

    <div class="grid-container" id="grid">
        <section class="contain">
            <i class="fa-solid"><h2 class="first">SPORTS</h2></i>
            <i class="fa-solid"><h2 class="second">EXPERIENCE</h2></i>
            <h1 class="third">Welcome to your ultimate sports destination, where we bring you the 
                latest scores, in-depth analysis, and breaking news from the world of sports.</h1> 
            <br><br>  
            <button class="subsbtn">SUBSCRIBE</button>   
        </section>
        <section class="container"></section>
    </div>

    <div class="offers-container">
        <a href="#wow" class="offers">
            <div class="boxes-basket">
                <h1>Basketball</h1>
                <span>NBA Season 2024-2025</span>
            </div>
        </a>
        <a href="#wow2" class="offers">
            <div class="boxes-foot">
                <h1>Football</h1>
                <span>2026 FIFA World Cup</span>
            </div>
        </a>
        <a href="ph.php" class="offers">
            <div class="boxes-ph">
                <h1>Esports</h1>
                <span>Dota 2, CSGO, Valorant, MLBB</span>
            </div>
        </a>
    </div>


    <div class="contents-grid">
    <section class="nav2" id="nav2">
    <h3>GAMEPULSE</h3>
            <a href="home.php"><button class="homebtn">HOME</button></a>
            <button class="scoresbtn">SCORES</button>
            <button class="storiesbtn">STORIES</button> 
            <button class="podcastbtn">PODCASTS</button> 
            <button class="watchbtn">WATCH</button>
            <div class="socials">
                <button class="infobtn">INFO CENTER</button>
            </div>
    </section>
    
    
<section class="contents" id="contents">
    <div class="wow" id="wow"></div>
        <div class="nba-grid">
            
            <div class="nba" id="nba">
                <div class="icon">
                    <img src="img/nba-logo-transparent.png" width="50px" height="50px">
                </div>
                <h1>NBA</h1>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <h4>FEATURED STORIES</h4>
            <section class="nba-content">
                <div class="slider-container">
                    <div class="slider">
                        <img src="img/d8e81a6c0277a1a11b4b87e4c2bfddae.jpg" alt="">
                        <img src="img/jordan-background-r8nv2dy1yvcqkk5m.jpg" alt="">
                    </div>
                    <div class="slider-nav">
                        <button id="prevNBA"><i class="fa-solid fa-angle-left"></i></button>
                        <button id="nextNBA"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <h1>Who really is the GOAT of Basketball?</h1>
                <p>Fans often passionately debate whether Michael Jordan or LeBron James deserves the title of NBA GOAT (Greatest of All Time), each presenting compelling arguments about their careers, achievements, and impact on the game of basketball.</p>
            </section>
        </div>
        <div class="football-grid">
            <div class="football" id="football">
                <div class="icon">
                    <img src="img/Spanish-La-Liga-Logo-1993.png" width="80px" height="50px">
                </div>
                <h1>LA LIGA</h1>
                <i class="fa-solid fa-angle-right"></i>
            </div>
            <h4>FEATURED STORIES</h4>
            <div class="wow2" id="wow2"></div>
            <section class="laliga-content">
                <div class="slider-container">
                    <div class="slider">
                        <img src="img/80dfe04d600935955083525dab1c925127dc05201eaeb4c8328602f4d9be2689.webp" alt="">
                        <img src="img/HD-wallpaper-cristiano-ronaldo-real-madrid-traditional-celebration-of-goals-la-liga-spain-football-star-stadium-football-portuguese-footballer.jpg" alt="">
                    </div>
                    <div class="slider-nav">
                        <button id="prevFootball"><i class="fa-solid fa-angle-left"></i></button>
                        <button id="nextFootball"><i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
                <h1>La Liga's biggest moment in time</h1>
                <p>One of the most iconic moments in La Liga history came in 2012 when Lionel Messi broke Gerd Müller's record by scoring his 91st goal of the calendar year.</p>
            </section>
        </div>
    
    </div>
</section>
    

<div class="scores-container" id="scores-container">
        <h2>Live Scores</h2>
        <ul id="scores-list"></ul>
    </div>




<script type="module" src="livescores.js"></script>

    
<script>



    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });


 

    document.getElementById('nextNBA').addEventListener('click', () => {
      document.querySelector('.slider').style.transform = 'translateX(-100%)';
  });
  document.getElementById('prevNBA').addEventListener('click', () => {
      document.querySelector('.slider').style.transform = 'translateX(0)';
  });
  
  
      document.addEventListener('DOMContentLoaded', function() {
          function setupSlider(slider, prevBtn, nextBtn) {
              let currentIndex = 0;
              const images = slider.querySelectorAll('img');
  
              function showNextImage() {
                  currentIndex = (currentIndex + 1) % images.length;
                  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
              }
  
              function showPrevImage() {
                  currentIndex = (currentIndex - 1 + images.length) % images.length;
                  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
              }
  
              nextBtn.addEventListener('click', showNextImage);
              prevBtn.addEventListener('click', showPrevImage);
  
              setInterval(showNextImage, 3000);
          }
  
          const nbaSlider = document.querySelector('.nba-content .slider');
          const prevNBA = document.getElementById('prevNBA');
          const nextNBA = document.getElementById('nextNBA');
  
          const footballSlider = document.querySelector('.laliga-content .slider');
          const prevFootball = document.getElementById('prevFootball');
          const nextFootball = document.getElementById('nextFootball');
  
          setupSlider(nbaSlider, prevNBA, nextNBA);
          setupSlider(footballSlider, prevFootball, nextFootball);
      });
  
      const requestOptions = {
  method: 'GET',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer aMFouLkMjcxGopFBPmzjWGMKQCkVKPDMsghukTvPHaPWzsqALZZFfGRtpBgvEKVVLGDJjDBavveHcoVKhuqjovsRWhkgGEQiyRmX'  // Include your API key here
  }
};

const proxyUrl = 'https://cors-anywhere.herokuapp.com/';

const targetUrl = 'https://international-football-results-api.proxy-production.allthingsdev.co/api/v1/soccer/matches?year=2023&skip=0&limit=10';

document.addEventListener('DOMContentLoaded', function() {
  function fetchLiveScores() {
    fetch(targetUrl, requestOptions)
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
      })
      .then(data => {
        const scoresContainer = document.getElementById('scores-container');
        scoresContainer.innerHTML = '';  // Clear previous scores

        if (Array.isArray(data) && data.length > 0) {  // Check if data is an array and not empty
          data.forEach(score => {
            const scoreElement = document.createElement('div');
            scoreElement.classList.add('match-line');
            scoreElement.innerHTML = `<span>${score.team1} vs ${score.team2}</span><span>${score.score}</span>`;
            scoresContainer.appendChild(scoreElement);
          });
        } else {
          console.warn('No scores available or unexpected data format');
        }
      })
      .catch(error => console.error('Error fetching live scores:', error));
  }

  fetchLiveScores();  // Fetch scores when the page loads
  setInterval(fetchLiveScores, 60000);  // Update scores every minute
});




let subMenu = document.getElementById("subMenu");

function toggleMenu(){
    subMenu.classList.toggle("open-menu")
}


document.getElementById('user-icon').addEventListener('click', function(event) {
    // Prevent the default action of the click event
    event.preventDefault();

    // Create a new XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define the function to handle the response from the PHP file
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Debugging statement to check the response from the PHP file
            console.log("Response from PHP:", this.responseText.trim());

            // Check the response from the PHP file
            if (this.responseText.trim() === "loggedin") {
                // Debugging statement
                console.log("User is logged in");
            } else {
                // Debugging statement
                console.log("User is not logged in, redirecting to loginForm.php");
                // User is not logged in, redirect to login page
                window.location.href = "loginForm.php";
            }
        }
    };

    // Open a connection to the PHP file
    xhttp.open("POST", "login.php", true);

    // Set the content type header to send data through POST method and send the request
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
});



</script>
</body>



</html>
