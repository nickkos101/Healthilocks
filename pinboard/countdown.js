// set the date we're counting down to
var target_date = new Date("Jul 28, 2014").getTime();

// variables for time units
var days, hours, minutes, seconds;

// get tag element
var countdown = document.getElementById("countdown");

// update the tag with id "countdown" every 1 second
setInterval(function () {

    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;

    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
    
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
    
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);

    if (days < 10) {
      days = '0'+days;
    }
    if (hours < 10) {
      hours = '0'+hours;
    }
    if (minutes < 10) {
      minutes = '0'+minutes;
    }
    if (seconds < 10) {
      seconds = '0'+seconds;
    }

    
    $('.days h2').html(days);
      $('.hrs h2').html(hours+':');
        $('.mins h2').html(minutes+':');
          $('.secs h2').html(seconds);

}, 1000);