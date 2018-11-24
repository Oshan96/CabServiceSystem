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

// var sections = ['banner','section2','section3'];
// var sec_btns = ['banner','sec2','sec3'];
// var i = 0;

// window.onscroll = function() {
//     var element = document.getElementById(sections[i]);
//     // console.log("offsetHeight : ",element.offsetHeight,", scrollTop : ",document.documentElement.scrollTop, "scrollHeight : ",element.scrollHeight*1.5);
//     // console.log(element.offsetHeight + document.documentElement.scrollTop % element.offsetHeight > element.scrollHeight*1.5)
//     console.log(i);
//     if(element.offsetHeight + document.documentElement.scrollTop % element.offsetHeight > element.scrollHeight*1.5) {
//         document.getElementById(sec_btns[i]).classList.remove('active');
//         i=i+1;
//         element= document.getElementById(sections[i]);
//         document.getElementById(sec_btns[i]).classList.add('active');
//     }
// }
