let score = "33"

// console.log(typeof score);  //output will be string because value is inside double quote 

let valueInNumber = Number(score)   // converting into number using Number()
// console.log(typeof valueInNumber);   // output will be number
// console.log(valueInNumber);           // value of output

// "33" => 33
// "33abc" => NaN
// true => 1; false => 0

let isLoggedIn = "ukiyo"

let booleanIsLoggedIn = Boolean(isLoggedIn)
// console.log(booleanIsLoggedIn);

// 1 => true; 0 => false
// "" => false
// "ukiyo" => true

let someNumber = 33

let stringNumber = String(someNumber)  // converts into string
// console.log(stringNumber);
// console.log(typeof stringNumber);     // output string


// OPERATIONS

let value = 3;
let negValue = -value
// console.log(negValue);     //output -3

// console.log(2+2);
// console.log(2-2);
// console.log(2*2);
// console.log(2**3);        // 2 raised to power 3
// console.log(2/3);
// console.log(2%3);

let str1 = "hello"
let str2 = "world"
let str3 = str1 + str2
console.log(str3)            // ouput helloworld

let gameCounter = 100
++gameCounter;
console.log(gameCounter);


// link to study
// https://tc39.es/ecma262/multipage/abstract-operations.html#sec-type-conversion