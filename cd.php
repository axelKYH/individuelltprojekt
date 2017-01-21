<!DOCTYPE html>
<html>
<head>
<title>Timer</title>
</head>
<body>

  <section id="countdown_graduation">
          <div id="clockdiv">
              <p>Tid kvar till examen:</p>
              <div>
                  <span class="days"></span>
                  <div class="smalltext">Dagar</div>
              </div>
              <div>
                  <span class="hours"></span>
                  <div class="smalltext">Timmar</div>
              </div>
              <div style="display:none">
                  <span class="minutes"></span>
                  <div class="smalltext">Minutes</div>
              </div>
              <div style="display:none">
                  <span class="seconds"></span>
                  <div class="smalltext">Seconds</div>
              </div>
          </div>
      </section>
      <section id="countdown_LIA">
          <div id="clockdiv2" class="clock2">
              <p>Tid kvar till LIA:</p>
              <div class="clock2">
                  <span class="days"></span>
                  <div class="smalltext">Dagar</div>
              </div>
              <div class="clock2">
                  <span class="hours"></span>
                  <div class="smalltext">Timmar</div>
              </div>
              <div class="clock2" style="display:none">
                  <span class="minutes"></span>
                  <div class="smalltext">Minutes</div>
              </div>
              <div class="clock2" style="display:none">
                  <span class="seconds"></span>
                  <div class="smalltext">Seconds</div>
              </div>
          </div>
      </section>

<script>
//Anropar funktionen två gånger med två olika uppsättningar argument för att få två timers
//window.onload behövde användas för att browsern ska kunna identifiera elementen innan scriptet körs
window.onload = function () {
var deadline = 'May 31 2018';
initializeClock('clockdiv', deadline);
var deadline2 = 'Januari 15 2018';
initializeClock('clockdiv2', deadline2);
}

//Färdigt stycke kod som jag hittade på codepen
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
      'total': t,
      'days': days,
      'hours': hours,
      'minutes': minutes,
      'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
      var t = getTimeRemaining(endtime);

      daysSpan.innerHTML = t.days;
      hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

      if (t.total <= 0) {
          clearInterval(timeinterval);
      }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
</script>

</body>
</html>
