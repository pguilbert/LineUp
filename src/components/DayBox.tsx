import React from 'react';
import ArtistInput from "./ArtistInput";
import ArtistList from "./ArtistList";
import { useState } from "react";

function DayBox() {
  const [artistNames, setArtistNames] = useState(new Array<string>());
  return (
    <>
      <ArtistInput onSubmit={(artist) => setArtistNames( [ ...artistNames, artist])}/>
      <ArtistList artistNames={artistNames} />
    </>
  );
}

export default DayBox;