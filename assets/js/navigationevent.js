
var isShown = true;

// function executeEvent() {
//     console.log(isShown)
//     if(isShown) {
//         document.getElementById("first").style.width = '0%'
//         document.getElementById("first").style.display = 'none'
//         document.getElementById("second").style.width = '100%'
//     } else {
//         document.getElementById("first").style.width = '41.66%'
//         document.getElementById("first").style.display = 'flex'
//         document.getElementById("second").style.width = '58.33%'

//     }

//     isShown = !isShown

// }

window.onscroll = function() {
    var height = document.getElementById("navbar").style.height;
    scrollFunction(height);
};

function scrollFunction(height) {
  if (document.body.scrollTop > height || document.documentElement.scrollTop > height) {
    document.getElementById("navbar").style.top = "0";
    document.getElementById("navbar").style.backgroundColor = "#2d3339";
    document.getElementById("nav_logo").style.display = "block";

  } else {
    document.getElementById("navbar").style.top = "0px";
    document.getElementById("navbar").style.backgroundColor = "transparent";
    document.getElementById("nav_logo").style.display = "none";
  }
}
