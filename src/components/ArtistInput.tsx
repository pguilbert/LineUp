import React, { useState } from 'react';

function ArtistInput(props: ArtistInputProps) {
  const [name, setName] = useState('');

  const handleArtistSubmit = (se: React.FormEvent<HTMLFormElement>) => {
    props.onSubmit(name);
    setName('');
    se.preventDefault();
  };

  return (
  <form action="#" onSubmit={handleArtistSubmit}>
    <input type="text" value={name} onChange={(c => setName(c.target.value))} />
  </form>);
}

interface ArtistInputProps {
  onSubmit : (artistName: string) => void;
}

export default ArtistInput;
