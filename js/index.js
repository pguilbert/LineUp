$('document').ready(function() {
    
    var videos = [ 'UqLRqzTp6Rk',  'jvipPYFebWc', 'AOPMlIIg_38'];
	var options = { videoId: videos[Math.floor(Math.random()*videos.length)] };
	$('.youtube-video').tubular(options);
	// f-UGhWj1xww cool sepia hd
	// 49SKbS7Xwf4 beautiful barn sepia
});