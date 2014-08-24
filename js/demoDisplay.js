var displaySeconds = setInterval('startTime()', 1000);

var count = 4;
function startTime() {

	if(count < 0){
		clearInterval(displaySeconds);
	} else{
		document.getElementById('launch-count').innerHTML = count;
		count--;
	}
}