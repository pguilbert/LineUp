var ArtistList = React.createClass({
    render: function() {
        var artistNodes = this.props.data.map(function(artist, index) {
            return (
                <Artist key={index}>
                    {artist.text}
                </Artist>
            );
        });
        return (
            <ul className="day-detail">
                {artistNodes}
            </ul>
        );
    }
});