React.render(
    <CommentBox id="day1" url="comments.json" pollInterval={2000} />,
    document.getElementById('day-one')
);

React.render(
    <CommentBox id="day2" url="comments.json" pollInterval={2000} />,
    document.getElementById('day-two')
);

React.render(
    <CommentBox id="day3" url="comments.json" pollInterval={2000} />,
    document.getElementById('day-three')
);