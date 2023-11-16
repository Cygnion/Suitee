document.getElementById("SubMenu").addEventListener("mouseenter", function(){ 
  var LinkSubMenu = document.querySelectorAll('.SubMenu > div > li > a');
  let cmpt = 1;
  LinkSubMenu.forEach(function(link) {
    link.classList.add("appearAnimation");
    link.style.animation = `appear ${cmpt}s ease forwards`;
    cmpt++;
  });
})


document.getElementById("SubMenu").addEventListener("mouseleave", function(){
  var LinkSubMenu = document.querySelectorAll('.SubMenu > div > li > a');
  LinkSubMenu.forEach(function(link) {
    link.classList.remove("appearAnimation");
  });
})
