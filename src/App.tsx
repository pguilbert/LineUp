import React from 'react';
import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import DayBox from './components/DayBox';

function App() {
  return (
    <div className="App container">
      <div className="row">
        <div className="col-sm"> <DayBox /> </div>
        <div className="col-sm"> <DayBox /> </div>
        <div className="col-sm"> <DayBox /> </div>
      </div>
    </div>

  );
}

export default App;
