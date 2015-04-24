var CommentBox = React.createClass({
    loadCommentsFromServer: function() {

    },
    handleCommentSubmit: function(comment) {
        var comments = this.state.data;
        comments.push(comment);
        this.setState({data: comments}, function() {

        });
    },
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
        this.loadCommentsFromServer();
        setInterval(this.loadCommentsFromServer, this.props.pollInterval);
    },
    render: function() {
        return (
            <div className="commentBox">
                <CommentForm id={this.props.id} onCommentSubmit={this.handleCommentSubmit} />
                <CommentList data={this.state.data} />
            </div>
        );
    }
});