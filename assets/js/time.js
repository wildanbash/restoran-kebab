function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    document.getElementById('clock').innerHTML = "<i class='ik ik-clock mr-2'></i> <b>" + curr_hour + ":" + curr_minute + "</b>";
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
setInterval(showTime, 500);