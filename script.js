
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