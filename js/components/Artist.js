var Artist = React.createClass({
    render: function() {
        var rawMarkup = marked(this.props.children.toString(), {sanitize: true});
        return (
            <li className="artist">
                <span dangerouslySetInnerHTML={{__html: rawMarkup}} />
            </li>
        );
    }
});