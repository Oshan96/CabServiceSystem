var title = document.getElementById('navigation-left-title');

document.getElementById('toggle').addEventListener("click", function(){
        if(title.style.display === "none"){
          title.style.display = "block";
        }
        else {
            title.style.display = "none";
        }
});
