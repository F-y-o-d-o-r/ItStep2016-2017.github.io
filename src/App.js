import React, { Component } from 'react';
import './App.css';
import Header from './components/Header';

class App extends Component {
  state = {
    one: 'rtr'
  };
  render() {
    return (
      <React.Fragment>
        <Header />
      </React.Fragment>
    );
  }
}

export default App;
