// Get all elements with the class "link-with-animation"
var LinkNavBar = document.querySelectorAll('.NavBar > ul > li > a');

// Add event listeners to each link
LinkNavBar.forEach(function(link) {
  link.addEventListener('mouseenter', function() {
    console.log(this.firstChild.children)
    console.log("bb")
  });

  link.addEventListener('mouseleave', function() {
    this.style.animation = "animation: TranslateLeftRight 0.8s ease reverse";
    console.log(this.style.animation)
    console.log("aaaaa")
  });
});