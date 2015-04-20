var Comment = React.createClass({
    render: function() {
        var rawMarkup = marked(this.props.children.toString(), {sanitize: true});
        return (
            <li className="comment">
                <span dangerouslySetInnerHTML={{__html: rawMarkup}} />
            </li>
        );
    }
});