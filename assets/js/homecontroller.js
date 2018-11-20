var count = 0;
var text = "Pick a ride. Save Time. Enjoy.";
var typing_speed = 100;

function typewrite() {
    if(count < text.length) {
        document.getElementById("typing").innerHTML += text.charAt(count);
        count++;
        setTimeout(typewrite, typing_speed);
    }
    
}
