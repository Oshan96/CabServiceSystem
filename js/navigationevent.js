
var isShown = true;

function executeEvent() {
    console.log(isShown)
    // if(isShown) {
    //     document.getElementById("first").style.width = '0%'
    //     document.getElementById("first").style.display = 'none'
    //     document.getElementById("second").style.width = '100%'
    // } else {
    //     document.getElementById("first").style.width = '41.66%'
    //     document.getElementById("first").style.display = 'flex'
    //     document.getElementById("second").style.width = '58.33%'

    // }

    isShown = !isShown

}