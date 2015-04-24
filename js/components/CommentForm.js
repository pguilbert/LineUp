var CommentForm = React.createClass({
    handleSubmit: function(e) {
        e.preventDefault();
        var text = React.findDOMNode(this.refs.text).value.trim();
        if (!text) {
            return;
        }
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
    }
});