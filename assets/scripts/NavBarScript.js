document.getElementById("header").addEventListener("mouseover", function(){
  document.getElementById("content").style.filter = "grayscale(80%)";
})

document.getElementById("header").addEventListener("mouseleave", function(){
  document.getElementById("content").style.filter = "grayscale(0%)";
})

let Profil_li = document.getElementById("Profil_li");
let Profil = document.getElementById("Profil");
let ProfilChild = document.getElementById("ProfilChild");
let AccountName = document.getElementById("AccountName");

if (window.innerWidth < 500) {
Profil.addEventListener("click", function(){

    this.style.position = "relative";
    this.style.left = "0";
    this.style.width = "80%";

    Profil_li.style.right = "0";
    Profil_li.style.width = "60vw";
    Profil_li.style.backgroundColor = "var(--redBetter)";

    ProfilChild.style.display = "block";

    AccountName.style.display = "block";
})

document.addEventListener('click', function(event) {
  if (!Profil_li.contains(event.target) && !ProfilChild.contains(event.target)) {
    Profil.style.width = "50px";
    ProfilChild.style.display = "none";
    Profil_li.style.right = "0";
    Profil_li.style.width = "auto";
    Profil_li.style.backgroundColor = "var(--black)";
    AccountName.style.display = "none";
  }
});
}