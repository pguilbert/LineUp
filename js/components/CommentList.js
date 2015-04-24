var CommentList = React.createClass({
    render: function() {
        var commentNodes = this.props.data.map(function(comment, index) {
            return (
                <Comment key={index}>
                    {comment.text}
                </Comment>
            );
        });
        return (
            <ul className="day-detail">
                {commentNodes}
            </ul>
        );
    }
});