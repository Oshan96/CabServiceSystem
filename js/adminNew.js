
/* ------------ Toggle Button---------*/

var togglesmall = document.getElementById('left-toggle');
var togglelarge = document.getElementById('left');
var right = document.getElementById('right');

togglesmall.style.display = "none";

document.getElementById('toggle-icon').addEventListener("click", function(){
    togglelarge.style.display = "none";
    togglesmall.style.display = "block";
    right.style.width= "97.25%";
});

document.getElementById('togglesmall').addEventListener("click", function(){
    togglelarge.style.display = "block";
    togglesmall.style.display = "none";
    right.style.width= "85%"
});
