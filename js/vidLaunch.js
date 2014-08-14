function vidLaunch(hours, minutes, seconds, loop) {
    var now = new Date(),
        target = new Date(),
        video = document.getElementById('video'),
        duration;

    //console.log('start');
    //console.log('video ', video);

    video.addEventListener('loadedmetadata', function() {
      duration = Math.ceil(video.duration);
        //console.log(duration);
    });

    if(now.getHours() > hours || (now.getHours() == hours && now.getMinutes() > minutes) ||
      now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {

        target.setDate(now.getDate() + 1);

    }

    target.setHours(hours);
    target.setMinutes(minutes);
    target.setSeconds(seconds);

    var timeout = (target.getTime() - now.getTime());

    setTimeout(function() {

      video.play(); console.log('video init');

      if(loop == true) {

        var intervalId = setInterval( function() {
          video.play(); //console.log('video loop');
        }, duration);

      }

    }, timeout);

}

// initialize function
$(document).ready(function() {

  //optional variables to set relative start time
  var timeNow = new Date(),
  h = timeNow.getHours(),
  m = timeNow.getMinutes(),
  s = timeNow.getSeconds() + 5;

  // set play time (h, m, s, loop[boolean])
  vidLaunch(h, m, s, true);

});