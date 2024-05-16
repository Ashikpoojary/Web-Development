import { useState, useCallback, useEffect, useRef } from 'react'

function App() {
  const [length,setLength] = useState(8)
  const [numberAllowed,setNumberAllowed] = useState(false)
  const [charAllowed,setCharAllowed] = useState(false)
  const [password,setPassword] = useState("")

  //useRef hook 
  const passwordRef = useRef(null) 

  const passwordGenerator = useCallback(()=>{
    let pass = ""
    let str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"
    if(numberAllowed) str += "0123456789"
    if(charAllowed) str += "!@#$%^&*-=+[]{}~`"

    for (let i = 1; i <= length; i++) {
       let char = Math.floor(Math.random() * str.length + 1)
       pass += str.charAt(char)
      
    }

    setPassword(pass)


  },[length,numberAllowed,charAllowed,setPassword])

  const copyPasswordToClipboard = useCallback(()=>{
    passwordRef.current?.select();
    // passwordRef.current?.setSelectionRange()
    window.navigator.clipboard.writeText(password)
  },[password])

  useEffect(()=>{
    passwordGenerator()
  },[length,numberAllowed,charAllowed,passwordGenerator])

  return (
    <>  
    <div className="w-full max-w-md mx-auto rounded-lg px-4 my-8 text-orange-500 bg-gray-800 ">
      <h1 className="text-white text-center my-3">Password Generator</h1>
      <div className="flex shadow rounded-lg overflow-hidden mb-4 ">
        <input 
        type="text"
        value={password}
        className='outline-none w-full py-1 px-3 rounded-lg my-6'
        placeholder='password'
        readOnly
        ref={passwordRef}  />
        <button
         onClick={copyPasswordToClipboard}
         className='bg-cyan-700 rounded-lg mb-6 mt-6 mx-2 px-3 py-0 text-white'>copy</button>
      </div>
      <div className='flex text-sm gap-x-2'>
        <div className='flex items-center gap-x-1 mb-4'>
          <input 
          type="range"
          min={8}
          max={100}
          value={length}
          className='cursor-pointer'
          onChange={(e)=>{setLength(e.target.value)}}
           />
           <label htmlFor="">Length:{length}</label>
        </div>
        <div className="flex items-center gap-x-1 mb-4">
          <input 
          type="checkbox"
          defaultChecked={numberAllowed}
          id="numberInput"
          onChange={()=>{
            setNumberAllowed((prev)=>!prev);  // switches false to true   (vice versa)
          }}
          />
           <label htmlFor="">Numbers</label>
        </div>
        <div className="flex items-center gap-x-1 mb-4">
          <input 
          type="checkbox"
          defaultChecked={charAllowed}
          id="characterInput"
          onChange={()=>{
            setCharAllowed((prev)=>!prev);  // switches false to true   (vice versa)
          }}
          />
           <label htmlFor="">Character</label>
        </div>
      </div>
    </div>
    </>
  )
}

export default App
