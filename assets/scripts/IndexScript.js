document.addEventListener("DOMContentLoaded", function () {
    var presentationIndex = document.querySelector(".presentationIndex");
    var content = document.querySelector(".content");
    setTimeout(function () {
      presentationIndex.classList.add("translateYAnimation");
      content.classList.remove("hidden");
      content.classList.add("contenttranslateYAnimation2");
    }, 800);
    setTimeout(function () {
      presentationIndex.style.display = "none";
    }, 1500);
});