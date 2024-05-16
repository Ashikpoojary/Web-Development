import {useState} from 'react'


function App() {
  const [color, setColor] = useState("gold")

  return (
    <div className='w-screen h-screen' style={{backgroundColor: color}}>
      <div className="fixed flex flex-wrap justify-center bottom-12 inset-x-0 px-2 text-black">
        <div className='flex flex-wrap justify-center gap-3 shadow-lg bg-white rounded-full'>
        <button className='outline-none px-4 py-1 rounded-full text-white shadow-lg' style={{backgroundColor:"red"}}
        onClick={()=> setColor("red")}>Red</button>
        <button className='outline-none px-4 py-1 rounded-full text-white shadow-lg' style={{backgroundColor:"green"}}
        onClick={()=> setColor("green")}>Green</button>
        <button className='outline-none px-4 py-1 rounded-full text-white shadow-lg' style={{backgroundColor:"blue"}}
        onClick={()=> setColor("blue")}>Blue</button>
        </div>
      </div>
    </div>
  )
}

export default App
