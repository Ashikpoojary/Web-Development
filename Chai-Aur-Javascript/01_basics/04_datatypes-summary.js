// Primitive
// 7 types : String, Number, Boolean, null, undefined, Symbol, BigInt
const name = "ukiyo";
const scoreValue = 100;
const isLoggedIn = false;
const outsideTemp = null
let userEmail;

const id = Symbol('123')
const anotherId = Symbol('123')
console.log(id === anotherId);       // output false


// Reference (Non-primitive)
// Array, Objects, Functions
const heroesArray = ["shaktiman", "krrish", "hanuman"]  

const myObj = {
    name:"ukiyo",
    age: 22
}

const myFunction = function(){
    console.log("Hello World");
}