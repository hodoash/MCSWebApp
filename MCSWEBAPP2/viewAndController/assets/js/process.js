var myVar;

function showNextCommment() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    //$("#demo").html(t); // display time on the page
    //do something
}

function stopFunction() {
    clearInterval(myVar); // stop the timer
}
$(document).ready(function() {
    myVar = setInterval("showNextComment()", 30000);
});