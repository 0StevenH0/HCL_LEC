
function clearAll(){
    const genresList=['rpg','4x','simulation','single-player','multiplayer'];
    for(let i=0;i<genresList.length;i++){
        genre=document.getElementById(genresList[i]);
        genre.style.display="none";
        genreToggle=document.getElementById(genresList[i]+'-toggle');
        genreToggle.style.border= "3px solid #4d4d4d";
    }
}

function topGenreRanking(genreId){
    clearAll();
    genre=document.getElementById(genreId);
    genre.style.display="table";
    genreToggle=document.getElementById(genreId+'-toggle');
    genreToggle.style.border= "3px solid #2196f3";
}

// popup
var body = document.querySelector('body');
var popup=false;

function togglePopup(){
    if(!popup){
        showPopup();
        popup=true;
    }else{
        closePopup();
        popup=false;
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
    popup=false;
}

function toggleRegister()
{
    document.getElementById("popup-overlay").style.display = "none";
    document.getElementById("popup-overlay2").style.display= "block";
}

function toggleSignin(){
    document.getElementById("popup-overlay2").style.display = "none";
    document.getElementById("popup-overlay").style.display= "block";
}

function togglePopup3(){
    document.getElementById("popup-overlay3").style.display = "block";
    document.getElementById("popup-overlay").style.display= "none";
}

function closePopup3(){
    document.getElementById("popup-overlay").style.display = "block";
    document.getElementById("popup-overlay3").style.display= "none";
}

function updateAvatar(newImage,name){
    if(newImage==='avatar.png'){
        var cur=document.getElementById('signin-container');
        var prev=document.getElementById('welcome-container');
        prev.style.display='none';
        cur.style.display='block';
        document.getElementById('avatar').src = 'Assets/'+newImage;
    }else{
        document.getElementById('avatar').src = 'Assets/'+newImage;
        var prev=document.getElementById('signin-container');
        var cur=document.getElementById('welcome-container');
        var welcomeText=document.getElementById('welcome-text');
        prev.style.display='none';
        cur.style.display='block';
        welcomeText.innerText='Welcome back '+name;
    }
}

function createTable(){
    fetch('rpg.csv')
  .then(response => response.text())
  .then(data => {
    // Parse CSV data into array of rows and columns
    const rows = data.split('\n').map(row => row.split(','));
    // Create the table dynamically
    const table = document.createElement('table');

    // Iterate over CSV data and populate the table
    rows.forEach(rowData => {
      const row = document.createElement('tr');
      rowData.forEach(cellData => {
        const cell = document.createElement('td');
        cell.textContent = cellData;
        row.appendChild(cell);
      });
      table.appendChild(row);
      console.log(row);
    });

    // Add the table to the document
    document.body.appendChild(table);
  })
  .catch(error => {
    console.log('Error:', error);
  });
}