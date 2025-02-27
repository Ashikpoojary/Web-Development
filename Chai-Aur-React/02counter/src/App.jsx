import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {

  let [counter, setCounter] = useState(17)

  // let counter = 25;

  const addValue = () => {
    console.log("clicked",counter);
   // counter = counter + 1
   if(counter < 20){
     setCounter(counter + 1)
   }
  }
  
  const removeValue = () => {
    if(counter > 0){                    // assignment : not to decrement if less than 0
      setCounter(counter - 1)
    }
  }

  return (
    <>
     <h1>Chai aur React</h1>
     <h2>Counter value: {counter}</h2>

     <button
     onClick={addValue}
     >Add value</button>
     <br></br>
     <button
     onClick={removeValue}
     >Remove value</button>
     <p>footer: {counter}</p>
    </>
  )
}

export default App
