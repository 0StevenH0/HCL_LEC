
function clearAll() {
    const genresList = ['rpg', '4x', 'simulation', 'single-player', 'multiplayer'];
    for (let i = 0; i < genresList.length; i++) {
        genre = document.getElementById(genresList[i]);
        genre.style.display = "none";
        genreToggle = document.getElementById(genresList[i] + '-toggle');
        genreToggle.style.border = "3px solid #4d4d4d";
    }
}

function clearAll1() {
    const genresList = ['rpg1', '4x1', 'simulation1', 'single-player1', 'multiplayer1'];
    for (let i = 0; i < genresList.length; i++) {
        genre = document.getElementById(genresList[i]);
        genre.style.display = "none";
        genreToggle = document.getElementById(genresList[i] + '-toggle');
        genreToggle.style.border = "3px solid #4d4d4d";
    }
}

function clearAll2() {
    const genresList = ['rpg2', '4x2', 'simulation2', 'single-player2'];
    for (let i = 0; i < genresList.length; i++) {
        genre = document.getElementById(genresList[i]);
        genre.style.display = "none";
        genreToggle = document.getElementById(genresList[i] + '-toggle');
        genreToggle.style.border = "3px solid #4d4d4d";
    }
}

function topGenreRanking(genreId) {
    if(genreId.includes('1')){
        clearAll1();
    }else if(genreId.includes('2')){
        clearAll2();
    }else{
        clearAll();
    }  
    genre = document.getElementById(genreId);
    genre.style.display = "table";
    genreToggle = document.getElementById(genreId + '-toggle');
    genreToggle.style.border = "3px solid #2196f3";
}

// popup
var body = document.querySelector('body');
var popup = false;

function togglePopup() {
    if (!popup) {
        showPopup();
        popup = true;
    } else {
        closePopup();
        popup = false;
    }
}
function showPopup() {
    document.getElementById("popup-overlay").style.display = "block";

}

function closePopup() {
    document.getElementById("popup-overlay").style.display = "none";
}

function toggleRememberMe() {
    var checkbox = document.getElementById("rememberme");
    checkbox.checked = !checkbox.checked;
}

function toggleRememberMe2() {
    var checkbox = document.getElementById("rememberme2");
    checkbox.checked = !checkbox.checked;
}

function togglePopup2() {
    document.getElementById("popup-overlay2").style.display = "none";
    popup = false;
}

function toggleRegister() {
    document.getElementById("popup-overlay").style.display = "none";
    document.getElementById("popup-overlay2").style.display = "block";
}

function toggleSignin() {
    document.getElementById("popup-overlay2").style.display = "none";
    document.getElementById("popup-overlay").style.display = "block";
}

function togglePopup3() {
    document.getElementById("popup-overlay3").style.display = "block";
    document.getElementById("popup-overlay").style.display = "none";
}

function closePopup3() {
    document.getElementById("popup-overlay").style.display = "block";
    document.getElementById("popup-overlay3").style.display = "none";
}

function updateAvatar(newImage, name) {
    if (newImage === 'avatar.png') {
        var cur = document.getElementById('signin-container');
        var prev = document.getElementById('welcome-container');
        prev.style.display = 'none';
        cur.style.display = 'block';
        document.getElementById('avatar').src = 'Assets/' + newImage;
    } else {
        document.getElementById('avatar').src = 'Assets/' + newImage;
        var prev = document.getElementById('signin-container');
        var cur = document.getElementById('welcome-container');
        var welcomeText = document.getElementById('welcome-text');
        prev.style.display = 'none';
        cur.style.display = 'block';
        welcomeText.innerText = 'Welcome back ' + name;
    }
}

var wishlistImage = document.getElementById("wishlist-image");
var imgind = false;
var imgsrc = ["wish_list_1.png", "wish_list_2.png"]

function toggleWishlist() {
    wishlistImage.classList.add("scale-out");
    setTimeout(function () {
        if (imgind) {
            wishlistImage.src = imgsrc[0];
            imgind = !imgind;
        } else {
            wishlistImage.src = imgsrc[1];
            imgind = !imgind;
        }
        wishlistImage.classList.remove("scale-out");
        wishlistImage.classList.add("scale-in");
        setTimeout(function () {
            wishlistImage.classList.remove("scale-in");
        }, 150);
    }, 150);
}

function move(link) {
    window.location.href = link;
}

function toggleAlert(text) {
    alert(text);
}


function togglePage(pageId){
    games=document.getElementById("games");
    apps=document.getElementById("apps");
    kids=document.getElementById("kids");
    gamesToggle=document.getElementById("games-toggle");
    appsToggle=document.getElementById("apps-toggle");
    kidsToggle=document.getElementById("kids-toggle");
    games.style.display="none";
    apps.style.display="none";
    kids.style.display="none";
    gamesToggle.style.color="white";
    appsToggle.style.color="white";
    kidsToggle.style.color="white";
    if(pageId==='games'){
        gamesToggle.style.color="blue";
        games.style.display="block";
    }else if(pageId==='apps'){
        appsToggle.style.color="blue";
        apps.style.display="block";
    }else if(pageId==='kids'){
        kidsToggle.style.color="blue";
        kids.style.display="block";
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var backButton = document.getElementById('back-button');
    if (document.referrer) {
      sessionStorage.setItem('sourcePage', document.referrer);
    }
    backButton.addEventListener('click', function() {
      var sourcePage = sessionStorage.getItem('sourcePage');
      if (sourcePage) {
        window.location.href = sourcePage;
      } else {
        window.history.back();
      }
    });
  });