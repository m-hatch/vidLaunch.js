function vidLaunch(hours, minutes, seconds) {
    var now = new Date();
    var target = new Date();
    var video = document.getElementById('video');
        
    console.log('start');
    console.log('video ', video);

    if(now.getHours() > hours ||
      (now.getHours() == hours && now.getMinutes() > minutes) ||
      now.getHours() == hours && now.getMinutes() == minutes && 
      now.getSeconds() >= seconds) {

        target.setDate(now.getDate() + 1);

    }

    target.setHours(hours);
    target.setMinutes(minutes);
    target.setSeconds(seconds);

    var timeout = (target.getTime() - now.getTime());

    setTimeout(function() {

      video.play(); console.log('video init');
  
      var timerId = setInterval( function() {

        video.play(); console.log('video loop');

      }, 38000); // video length

    }, timeout);

}

// initialize function
$(document).ready(function() {

  //optional variables to set relative start time
  var timeNow = new Date(),
  h = timeNow.getHours(),
  m = timeNow.getMinutes(),
  s = timeNow.getSeconds() + 5;

  // set play time (h, m, s)
  vidLaunch(h, m, s);

});