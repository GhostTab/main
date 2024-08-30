
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
.contents-grid{
    grid-template-columns: 250px 1fr;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        margin: 0 auto;
        gap: 20px;
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

</style>

<body>





    
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
           
        </section>
    </div>
    




</body>