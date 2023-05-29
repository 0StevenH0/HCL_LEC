<?php
$login = false;
$popup = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <script src="script.js"></script>
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="#" class="logo-link">
                    <img src="Assets/game2.png" alt="Logo" class="logo-image">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Store</a></li>
                <li><a href="#">Community</a></li>
            </ul>
            <form action="#" method="get" class="search-form">
                <input type="text" name="search" placeholder="Search" class="search-input">
                <button type="submit" class="search-button">Search</button>
            </form>
            <div class="user-menu">
                <a href="#">
                    <?php
                    if (!$login) {
                        echo '<img src="Assets/avatar.png" alt="User Avatar" class="avatar-image">';
                    } else {
                        // i don't really wanna add database here, sorry
                        echo '<img src="Assets/Kim.jpg" alt="User Avatar" class="avatar-image">';
                    }
                    ?>
                </a>
                <div class="dropdown">
                    <a href="#">nama</a>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- welcome to unity learn -->
        <div class="signin-container">
            <div class="singin-background"></div>
            <div class="signin-container-text">
                <div class="signin-text">
                    <div>
                        <h1 class="singin-text-title">
                            Welcome to qonzol
                        </h1>
                        <p class="text-base">
                            Attention, gamers! Prepare to level up your gaming experience with Game Store Pages, the ultimate hub for all your gaming needs. Whether you're a hardcore enthusiast or a casual player, we've got you covered with an unmatched selection of thrilling games, jaw-dropping deals, and a community that shares your passion for gaming that are available for various OS.
                        </p>
                        <button label="Sign in" class="singin-button" onclick="togglePopup()">
                            Sign in
                        </button>
                        <!-- Login -->
                        <div id="popup-overlay" style="display:none" class="popup-overlay">
                            <div class="signin-title">
                                <h2> SIGN IN </h2>
                                <div class="signin-close" onclick="togglePopup()">X</div>
                            </div>
                            <hr class="small-divider">
                            <div class="form-group">
                                <p class="goto-register">Dont have an account? <span class="forgot-pass" onclick="toggleRegister()">Create one.</span></p>
                                <input type="text" placeholder="Username" class="form-item"><br>
                                <input type="password" placeholder="Password" class="form-item"><br>
                                <p class="forgot-pass" onclick="togglePopup3()">Forgot your password?</p>
                                <input type="checkbox" id="rememberme">
                                <label for="rememberMe" onclick="toggleRememberMe()" class="rememberme">Remember Me</label>
                                <br><br>
                                <input type="submit" value="Sign in" onclick="togglePopup()">
                                <div class="line-container">
                                    <div></div>
                                    <span class="or-text">OR</span>
                                    <div></div>
                                </div>
                                <div class="quick-sign-in">
                                    <img class="signin-item" id="signin-google" src="Assets/google.png" alt="google">
                                    <img class="signin-item" id="signin-twitter" src="Assets/twitter.png" alt="twitter">
                                    <img class="signin-item" id="signin-facebook" src="Assets/facebook.png" alt="facebook">
                                </div>
                            </div>
                        </div>

                        <!-- Register -->
                        <div id="popup-overlay2" style="display:none" class="popup-overlay">
                            <div class="signin-title">
                                <h2> CREATE ID </h2>
                                <div class="signin-close" onclick="togglePopup2()">X</div>
                            </div>
                            <hr class="small-divider">
                            <div class="form-group">
                                <p class="goto-register">Already have an account? <span class="forgot-pass" onclick="toggleSignin()">Sign in.</span></p>
                                <input type="text" placeholder="Email" class="form-item"><br>
                                <input type="text" placeholder="Username" class="form-item"><br>
                                <input type="password" placeholder="Password" class="form-item"><br>
                                <input type="password" placeholder="Confirm Password" class="form-item"><br>
                                <input type="checkbox" id="rememberme2">
                                <label for="rememberMe" onclick="toggleRememberMe2()" class="rememberme">I have read <a href="terms.html" class="forgot-pass">terms and conditions</a></label>
                                <br><br>
                                <input type="submit" value="Create Account" onclick="togglePopup()">
                                <div class="line-container">
                                    <div></div>
                                    <span class="or-text">OR</span>
                                    <div></div>
                                </div>
                                <div class="quick-sign-in">
                                    <img class="signin-item" id="signin-google" src="Assets/google.png" alt="google">
                                    <img class="signin-item" id="signin-twitter" src="Assets/twitter.png" alt="twitter">
                                    <img class="signin-item" id="signin-facebook" src="Assets/facebook.png" alt="facebook">
                                </div>
                            </div>
                        </div>

                        <!-- forget password -->
                        <div id="popup-overlay3" style="display:none" class="popup-overlay">
                            <div class="signin-title">
                                <h2> CREATE ID </h2>
                                <div class="signin-close" onclick="closePopup3()">X</div>
                            </div>
                            <hr class="small-divider">
                            <div class="form-group">
                                <input type="text" placeholder="Email" class="form-item"><br>
                                <input type="submit" value="Send verification link" onclick="togglePopup()" style="width:180px">
                                <div class="line-container">
                                    <div></div>
                                    <span class="or-text">OR</span>
                                    <div></div>
                                </div>
                                <div class="quick-sign-in">
                                    <img class="signin-item" id="signin-google" src="Assets/google.png" alt="google">
                                    <img class="signin-item" id="signin-twitter" src="Assets/twitter.png" alt="twitter">
                                    <img class="signin-item" id="signin-facebook" src="Assets/facebook.png" alt="facebook">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-left: 20px;">
            <h1 class="singin-text-title">
                Explore games by genres
            </h1>
            <p class="text-desc">
                Unlock Limitless Fun: Explore, Discover, Play!
            </p>
            <h3 class="text-desc">
                Search by genre
            </h3>
            <div class="genres">
                <div class="genre" id="rpg-toggle" onclick="topGenreRanking('rpg')" style="border: 3px solid #2196f3;">
                    RPG
                </div>
                <div class="genre" id="4x-toggle" onclick="topGenreRanking('4x')">
                    Arcade
                </div>
                <div class="genre" id="simulation-toggle" onclick="topGenreRanking('simulation')">
                    Action
                </div>
                <div class="genre" id="single-player-toggle" onclick="topGenreRanking('single-player')">
                    Adventure
                </div>
                <div class="genre" id="multiplayer-toggle" onclick="topGenreRanking('multiplayer')">
                    Fighting
                </div>
                <button class="genre more-or-less">
                    More
                </button>
            </div>
        </div>


        <div class="genre-ranking-charts" style="padding-left: 10px;">
            <!-- genre rpg -->
            <table class="genre-ranking-table" id="rpg" style="display: table;">
                <tr>
                    <th>rank</th>
                    <th>image</th>
                    <th>name</th>
                    <th>publishers</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1st</td>
                    <td> <img src="Assets/app/SealM.jpeg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Seal M</td>
                    <td>PLAYWITH Inc.</td>
                    <td>Android,Ios,Windows <br>2.8★</td>
                </tr>
                <tr>
                    <td>2nd</td>
                    <td> <img src="Assets/app/ROGlobal.jpeg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Ragnarok Origin Global</td>
                    <td>Gravity Game Hub</td>
                    <td>Android,Ios,Windows<br>4.8★</td>
                </tr>
                <tr>
                    <td>3rd</td>
                    <td> <img src="Assets/app/LineageW.jpeg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Lineage W</td>
                    <td>INCSOFT</td>
                    <td>Android,Ios<br>4.6★</td>
                </tr>
                <tr>
                    <td>4th</td>
                    <td> <img src="Assets/app/GodsnDemons.jpeg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Gods and Demons : Legend</td>
                    <td>Tianzong information technology</td>
                    <td>Android<br>4.0★</td>
                </tr>
                <tr>
                    <td>5th</td>
                    <td> <img src="Assets/app/KingsChoice.jpeg" alt="cover photos" class="genre-app-image" /></td>
                    <td>king`s choice</td>
                    <td>ONEMT</td>
                    <td>Android,Ios<br>4.9★</td>
                </tr>
            </table>
            <!-- genre Action -->
            <table class="genre-ranking-table" id="simulation" style="display: none;">
                <tr>
                    <th>rank</th>
                    <th>image</th>
                    <th>name</th>
                    <th>publishers</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1st</td>
                    <td> <img src="Assets/action/pubg.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>pubg mobile</td>
                    <td>level infinite</td>
                    <td>android,ios,windows <br>4.6★</td>
                </tr>
                <tr>
                    <td>2nd</td>
                    <td> <img src="Assets/action/mole.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>mlbb</td>
                    <td>Moonton</td>
                    <td>android,ios,windows<br>4.5★</td>
                </tr>
                <tr>
                    <td>3rd</td>
                    <td> <img src="Assets/action/aov.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Garena AOV</td>
                    <td>MOBA Games Private Limited</td>
                    <td>android,ios,windows<br>4.2★</td>
                </tr>
                <tr>
                    <td>4th</td>
                    <td> <img src="Assets/action/mecharena.jpg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Mech Arena</td>
                    <td>Plarium Global Ltd</td>
                    <td>android,ios,windows<br>3.2★</td>
                </tr>
                <tr>
                    <td>5th</td>
                    <td> <img src="Assets/action/stickman.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Stickman Warriors</td>
                    <td>SkySoft Studio</td>
                    <td>android,ios ,windows<br>4.6★</td>
                </tr>
            </table>
            <!-- genre adventure -->
            <table class="genre-ranking-table" id="single-player" style="display: none;">
                <tr>
                    <th>rank</th>
                    <th>image</th>
                    <th>name</th>
                    <th>publishers</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1st</td>
                    <td> <img src="Assets/adventure/honkaistarrail.jpg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Honkai : Star-rail</td>
                    <td>cognosphere pte,ltd.</td>
                    <td>android,ios,windows <br>4.4★</td>
                </tr>
                <tr>
                    <td>2nd</td>
                    <td> <img src="Assets/adventure/roblox.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Roblox</td>
                    <td>Roblox Corporation</td>
                    <td>android,ios,windows<br>3.8★</td>
                </tr>
                <tr>
                    <td>3rd</td>
                    <td> <img src="Assets/adventure/genshin.jpg" alt="cover photos" class="genre-app-image" /></td>
                    <td> Genshin impact</td>
                    <td>COGNOSPHERE PTE, Ltd</td>
                    <td>android,ios,windows<br>4.4★</td>
                </tr>
                <tr>
                    <td>4th</td>
                    <td> <img src="Assets/adventure/ninjaArashi.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Ninja Arashi</td>
                    <td>Black Panther</td>
                    <td>android,ios,windows<br>4.6★</td>
                </tr>
                <tr>
                    <td>5th</td>
                    <td> <img src="Assets/adventure/gtactm.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>GTA Craft Theft Mod for MCPE</td>
                    <td>OjalaGames Studio</td>
                    <td>android,ios,windows<br>3.0★</td>
                </tr>
            </table>
            <!-- genre Arcade -->
            <table class="genre-ranking-table" id="4x" style="display: none;">
                <tr>
                    <th>rank</th>
                    <th>image</th>
                    <th>name</th>
                    <th>publishers</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1st</td>
                    <td> <img src="Assets/arcade/subway.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>subway surfer</td>
                    <td>SYBO games</td>
                    <td>android,ios,windows <br>4.6★</td>
                </tr>
                <tr>
                    <td>2nd</td>
                    <td> <img src="Assets/arcade/templeRun.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Temple Run</td>
                    <td>Imangi Studios</td>
                    <td>android,ios,windows<br>4.7★</td>
                </tr>
                <tr>
                    <td>3rd</td>
                    <td> <img src="Assets/arcade/fruitNinja.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Fruit Ninja</td>
                    <td>Halfbrick Studios</td>
                    <td>android,ios,windows<br>4.7★</td>
                </tr>
                <tr>
                    <td>4th</td>
                    <td> <img src="Assets/arcade/sonic.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Sonic dash - endless running</td>
                    <td>SEGA</td>
                    <td>android,ios,windows<br>4.6★</td>
                </tr>
                <tr>
                    <td>5th</td>
                    <td> <img src="Assets/arcade/slendrina.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Slendrina:The Cellar</td>
                    <td>DVlopers</td>
                    <td>android,ios,windows<br>4.1★</td>
                </tr>
            </table>
            <!-- genre fighting -->
            <table class="genre-ranking-table" id="multiplayer" style="display: none;">
                <tr>
                    <th>rank</th>
                    <th>image</th>
                    <th>name</th>
                    <th>publishers</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1st</td>
                    <td> <img src="Assets/fighting/shadowfight.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Shadow Fight 3</td>
                    <td>NEKKI</td>
                    <td>iOS,Android <br>4.5★</td>
                </tr>
                <tr>
                    <td>2nd</td>
                    <td> <img src="Assets/fighting/injustice.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Injustice 2</td>
                    <td>Warner Bros. International Enterprises</td>
                    <td>iOS,Android<br>4.4★</td>
                </tr>
                <tr>
                    <td>3rd</td>
                    <td> <img src="Assets/fighting/mkmobile.jpg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Mortal Kombat Mobile</td>
                    <td>Warner Bros. International Enterprises</td>
                    <td>iOS,Android<br>4.5★</td>
                </tr>
                <tr>
                    <td>4th</td>
                    <td> <img src="Assets/fighting/punchhero.jpg" alt="cover photos" class="genre-app-image" /></td>
                    <td>Punch Hero</td>
                    <td>GAMEVIL</td>
                    <td>iOS,Android<br>4.2★</td>
                </tr>
                <tr>
                    <td>5th</td>
                    <td> <img src="Assets/fighting/mcoc.png" alt="cover photos" class="genre-app-image" /></td>
                    <td>Marvel Contest of Champions</td>
                    <td>Kabam Games, Inc.</td>
                    <td>iOS,Android<br>4.3★</td>
                </tr>
            </table>
            <div class="view-more">view more</div>
        </div>

    </main>
    <footer>
        <hr class="divider">
        <div class="footer-container">
            <div class="footer-text">
                logo © 2023
            </div>
            <div class="footer-links">
                <a href="https://www.youtube.com/">
                    <img class="footer-item" id="youtube" src="Assets/youtube.png" alt="youtube">
                </a>
                <a href="https://twitter.com/">
                    <img class="footer-item" id="twitter" src="Assets/twitter.png" alt="twitter">
                </a>
                <div>
                    <a href="https://web.facebook.com/">
                        <img class="footer-item" id="instagram" src="Assets/instagram.png" alt="instagram">
                    </a>
                    <div>
                    </div>
    </footer>
</body>

</html>