var CommentForm = React.createClass({
    handleSubmit: function(e) {
        e.preventDefault();
        /* var text = React.findDOMNode(this.refs.text).value.trim();
        if (!text) {
            return;
        }
        this.addItem(text); */
    },
    addItem: function(text) {
        this.props.onCommentSubmit( { text: text } );
        React.findDOMNode(this.refs.text).value = '';
    },
    render: function() {
        return (
            <form className="commentForm" onSubmit={this.handleSubmit}>
                <input className="form-control" type="text"
                    placeholder="Your favourite artist here..." ref="text" id={this.props.id}/>
            </form>
        );
    },
    componentDidMount: function() {
        var that = this;
        $(React.findDOMNode(this.refs.text)).autocomplete({
            source : function(request, response){ 
            $.ajax({
                    url : 'proxy.php',
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
                        
                        response($.map(data.results.artistmatches.artist, function(object){
                            return object.name;
                        }));
                    }
                });
            },
            select: function( event, ui ) {
                event.preventDefault();
                that.addItem(ui.item.value);
            }
        });
    }
});