<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online MMORPG game">
    <meta name="keywords" content="MMORPG, Fantasy, Videogame, Medieval">
    <meta name="author" content="Erik Martiš">
    <title>Chromanite Online</title>
    <link rel="icon" href="./img/logo.png">
    <link rel="stylesheet" href="./CSS/Style.css">
    <script src="./JS/Scripts.js"></script>
</head>

<body>
    
    <header>
        <img src="./img/logo.png" alt="Logo">
        <h1>Chromanite Online</h1>
        <div class="navbar">
            <div class="dropbtn">Menu</div>
            <div class="dropdown-content">
                <a href="#download">Download</a>
                <a href="#shop">Shop</a>
                <a href="./FAQ.html">FAQ</a>
                <a href="#register">Register</a>
                <a href="#login">Login</a>
            </div>

            
            <div class="dropbtn-news">Community</div>
            <div class="dropdown-content-news">
                <a href="#forum">Forum</a>
                <a href="#wiki">Wiki</a>
                <a href="#creators-program">Creators Program</a>
                <a href="killboard">Killboard</a>
                <a href="drops">Twitch Drops</a>
                <a href="character-creator">Character Creator</a>
            </div>

            
            <div class="dropbtn-news2">News</div>
            <div class="dropbtn-discover">Discover</div>
            <div class="dropdown-content-discover">
                <a href="#guides">Guides</a>
                <a href="#basic-builds">Basic Builds</a>
                <a href="#videos">Videos</a>
                <a href="#lore">Lore</a>
                <a href="wallpapers">Wallpapers</a>
                <a href="jobs">Jobs</a>
            </div>

            
            <div class="dropbtn-updates">Updates</div>
            <div class="dropdown-content-updates">
                <a href="#patch-notes">Patch Notes</a>
                <a href="#events">Events</a>
                <a href="#community-updates">Community Updates</a>
            </div>
        </div>
    </header>

    <article class="allign">
        <div class="article_content">
            <h2>Experience the adventure!</h2>
        <br>
        <p>In the distant future, where technology and magic intertwine, immerse yourself in a captivating fantasy game
            like no other. Explore sprawling futuristic realms filled with mythical creatures, enchanted landscapes, and
            awe-inspiring cities that defy the laws of physics. Unleash your inner hero as you harness futuristic
            weapons infused with ancient spells, engaging in epic battles against formidable foes.</p>
        <br>
        <p>Embark on a journey to unlock ancient mysteries, as you navigate through a world where futuristic technology
            seamlessly merges with the fantastical elements of old. With each quest, forge alliances with mystical
            beings and unravel the secrets of a future where imagination knows no bounds.</p>
        <br>
        <p>Are you ready to embark on an extraordinary adventure, where the realms of fantasy and the wonders of the
            future collide? Enter the game and let your wildest dreams come to life.</p>
            <br>
            <img src="./img/screenshot10.png" alt="Screenshot 10" class="img">
            <img src="./img/screenshot6.png" alt="Screenshot 6" class="img">
            <img class="img" src="./img/screenshot9.png" alt="Screenshot 9">
            <br>
            
        </div>
    </article>

    <article id="yellow" class="allign">
        <h2>Play on everything and everywhere!</h2>
        <p>In the dynamic world of gaming, enthusiasts can immerse themselves in a plethora of experiences across various devices and operating systems. 
            The gaming landscape has evolved far beyond traditional consoles, with a wide range of options to suit different preferences and lifestyles.</p>
        <br>
        <img class="logo2" src="./img/dragon.gif" alt="">
        <h3>Our game is avaible on:</h3>
        <p>PC (Mac, Windows, Linux), Android and iOS, Xbox and Playstation, Nintendo Switch and even supports VR!</p>
        <a href="./Download.html" class="download-button" id="download">Download Now</a>
    </article>
    
    <!-- kreatívny bod -->
    <div class="gallery-container">
        <h2>Gallery</h2>
        <div class="gallery">
            <img src="./img/screenshot8.png" alt="Screenshot 8">
            <img src="./img/screenshot12.png" alt="Screenshot 12">
            <img src="./img/screenshot13.png" alt="Screenshot 13">
            <img src="./img/Screenshot14.png" alt="Screenshot 14">
            <img src="./img/screenshot5.png" alt="Screenshot 5">
            <img src="./img/screenshot6.png" alt="Screenshot 6">
            <img src="./img/screenshot7.png" alt="Screenshot 7">
            <img src="./img/screenshot11.png" alt="Screenshot 11">
            <img src="./img/screenshot9.png" alt="Screenshot 9">
            <img src="./img/screenshot10.png" alt="Screenshot 10">
        </div>
        <button class="scroll-btn next" onclick="scrollGallery(1)">Next</button>
        <button class="scroll-btn previous" onclick="scrollGallery(-1)">Previous</button>
    </div>

    <div class="login-form" id="login">
        <h2>Log in</h2>
        <form action="./Redirecting.html" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <div class="remember-me">
                <label for="remember">Remember Me</label>
                <input type="checkbox" id="remember" name="remember">
            </div>
            <br>
            <input class="login-button" type="submit" value="Login">
        </form>
    </div>

    <article class="allign">
        <div class="article_content2">
            <h2>An adventure like no other!</h2>
        <br>
        <p>IImmerse yourself in a fantastical realm where heroes clash and legends are born. 
            Our fantasy video game brings you into a world filled with epic battles and thrilling player versus player (PVP) challenges. 
            Choose your character, harness your unique abilities, and face off against players from around the globe in exhilarating PVP combat.</p>
        <br>
        <p>Engage in strategic duels, team-based skirmishes, or join massive battlegrounds where alliances are forged and rivalries unfold. 
            With stunning graphics, immersive gameplay, and a vast array of customizable options, our PVP-centric fantasy game will transport you to a realm where your skills will be put to the ultimate test.</p>
        <br>
        <p>Prepare for an adventure like no other as you rise through the ranks, earn legendary rewards, and etch your name in the annals of this unforgettable virtual realm. 
            Are you ready to prove yourself in the exhilarating PVP realms of our fantasy video game? The battle awaits!</p>
            <br>
            <img src="./img/screenshot11.png" alt="Screenshot13" class="img">
            <img src="./img/screenshot12.png" alt="Screenshot12" class="img">
            <img class="img" src="./img/screenshot13.png" alt="Screenshot13">
        </div>
    </article>

    <article id="yellow" class="allign">
        <h2>About the Game</h2>
        <h3>Open World Exploration:</h3>
        <p>"Chromanite Online" unveils a vast and seamless open world, teeming with diverse landscapes, ancient ruins, and mystical creatures. 
            From dense, enchanted forests to towering mountain ranges and floating islands in the sky, every corner of the realm invites exploration.</p>
        <br>
        <h3>Weapons of Otherworldly Power:</h3>
        <p>Arm yourself with an arsenal of otherworldly weapons forged in the heart of fantastical realms. From enchanted blades that harness the elements to mystical staffs that unleash arcane energies, the weapons in "Chromanite Online" are as diverse as the dimensions themselves. 
            Uncover legendary artifacts with unique abilities that evolve as you progress, offering endless possibilities for customization. 
            Engage in dynamic combat encounters with mythical creatures and rival factions, where your choice of weaponry can turn the tide of battle.</p>
        <br>
        <h3>Dynamic Gameplay:</h3>
        <p>"Chromatic Online" boasts dynamic gameplay that responds to your decisions, fostering a truly immersive experience. Engage in epic battles, solve intricate puzzles, and make choices that ripple across dimensions. 
            The game adapts to your playstyle, offering a unique adventure for every player. Whether you're a combat enthusiast, an avid explorer, or a lore seeker, "Chromatic Online" ensures that every moment is a captivating part of your personal narrative.</p>
    </article>

    <footer>
        <div>
            <p>&copy; 2024 Chromanite Online™ | Contact: support@chromanite.com | Follow us on social media</p>
            <nav>
                <ul class="column">
                    <li>
                        <p class="big">Contact Support at:</p>
                        <div class="centered-links">
                            <a href="mailto:chromanitesupportagent1@support.com" target="_blank">chromanitesupportagent1@support.com</a>
                            <a href="mailto:chromanitesupportagent2@support.com" target="_blank">chromanitesupportagent2@support.com</a>
                            <a href="mailto:chromanitesupportagent3@support.com" target="_blank">chromanitesupportagent3@support.com</a>
                        </div>
                    </li>
                    <li>
                        <p class="big">Share</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/" target="_blank">
                                <img src="./img/fb.png" alt="Facebook" class="social-icon">
                            </a>
                            <a href="https://twitter.com/" target="_blank">
                                <img src="./img/x.png" alt="Twitter" class="social-icon">
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <img src="./img/insta.png" alt="Instagram" class="social-icon">
                            </a>
                            <a href="https://discord.com/" target="_blank">
                                <img src="./img/discord.png" alt="Discord" class="social-icon">
                            </a>
                            <a href="https://www.twitch.tv/" target="_blank">
                                <img src="./img/twitch.png" alt="Twitch" class="social-icon">
                            </a>
                            <a href="https://www.reddit.com/" target="_blank">
                                <img src="./img/reddit.png" alt="Reddit" class="social-icon">
                            </a>
                        </div>
                    </li>
                    <li><a class="big" href="#terms-n-conditions">Terms & Conditions</a></li>
                    <li><a class="big" href="#more">More</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    
</body>

</html>