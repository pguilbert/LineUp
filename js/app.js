React.render(
    <DayBox id="day1" />,
    document.getElementById('day-one')
);

React.render(
    <DayBox id="day2" />,
    document.getElementById('day-two')
);

React.render(
    <DayBox id="day3" />,
    document.getElementById('day-three')
);


function generate() {
	var paramsFirst = getArtisteForId('#day-one');
	var paramsSecond = getArtisteForId('#day-two');;
	var paramsThird = getArtisteForId('#day-three');

	var uri = "./generate.php?day1=" + encodeURIComponent(paramsFirst) + "&day2=" + encodeURIComponent(paramsSecond) + "&day3=" + encodeURIComponent(paramsThird);
	console.log(uri);
	window.location = uri;
}


function getArtisteForId(id) {
	var params = '';
	$(id + ' .artist span').each(function(key, values) {
		console.log($(values).text());
		params += $(values).text() + '|';
	});
	return params;
}
