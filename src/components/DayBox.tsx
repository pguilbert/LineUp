import React, { useState } from 'react';
import ArtistInput from './ArtistInput';
import ArtistList from './ArtistList';

function DayBox() {
  const [artistNames, setArtistNames] = useState([] as string[]);
  return (
    <>
      <ArtistInput onSubmit={artist => setArtistNames([...artistNames, artist])}/>
      <ArtistList artistNames={artistNames} />
    </>
  );
}

export default DayBox;
