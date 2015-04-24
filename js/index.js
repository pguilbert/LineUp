$('document').ready(function() {
    
    var videos = [ 'UqLRqzTp6Rk',  'jvipPYFebWc', 'AOPMlIIg_38'];
	var options = { videoId: videos[Math.floor(Math.random()*videos.length)] };
	//s$('.youtube-video').tubular(options);
	// f-UGhWj1xww cool sepia hd
	// 49SKbS7Xwf4 beautiful barn sepia
    
    $('#day1 , #day2 , #day3').autocomplete({
        source : function(request, response){ // les deux arguments représentent les données nécessaires au plugin
        $.ajax({
                url : 'proxy.php', // on appelle le script JSON
                crossDomain: true,
                dataType: 'json',
                data : {
                    csurl: 'http://ws.audioscrobbler.com/2.0/',
                    method : 'artist.search',
                    limit : 20,
                    format: 'json',
                    artist: request.term
                },
                success : function(data){
                    console.log(data["results"]);
                    response($.map(data.results.artistmatches.artist, function(object){
                        return object.name;
                    }));
                }
            });
        }
    });
});