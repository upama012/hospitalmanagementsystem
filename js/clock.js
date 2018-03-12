function startTime() {
  var today = new Date();
  var hours = today.getHours();
  var minutes = today.getMinutes();
  var seconds = today.getSeconds();
  minutes = checkTime(minutes);
  seconds = checkTime(seconds);
  document.getElementById('a1').innerHTML = hours + ":" + minutes + ":" + seconds;
  var t = setTimeout(startTime, 100);
}
function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}
