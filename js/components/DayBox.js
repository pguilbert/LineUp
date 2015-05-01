var DayBox = React.createClass({
    handleArtistSubmit: function(Artist) {
        var artists = this.state.data;
        artists.push(Artist);
        this.setState({data: artists}, function() {

        });
    },
    getInitialState: function() {
        return {data: []};
    },
    componentDidMount: function() {
    },
    render: function() {
        return (
            <div className="dayBox">
                <ArtistForm id={this.props.id} onArtistSubmit={this.handleArtistSubmit} />
                <ArtistList data={this.state.data} />
            </div>
        );
    }
});