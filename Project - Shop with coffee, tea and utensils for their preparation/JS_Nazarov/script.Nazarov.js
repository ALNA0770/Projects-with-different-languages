function register() {
    let registration="";
    registration+= document.getElementById("AN_name").value;
    registration+= document.getElementById("AN_Surname").value;
    registration+= document.getElementById("AN_visitor").innerHTML = registration;
}

function playSound(color){
    let music = "sound_Nazarov\\"+color+".mp3";
    document.getElementById("music").src=music;
    document.getElementById("musicControl").load();
}
