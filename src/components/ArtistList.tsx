import React from 'react';

function ArtistList(props : ArtistListProps) {
  return (
    <ul>
      {props.artistNames.map(name => <li>{name}</li>)}
    </ul>);
}

interface ArtistListProps {
  artistNames : string[];
}

export default ArtistList;
