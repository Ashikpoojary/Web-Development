const score = 400
console.log(score)                   //output 400

const balance = new Number(100)
console.log(balance);                //output [Number: 100]

console.log(balance.toString());    // coverts to string
console.log(balance.toFixed(2));    // output 100.00

const otherNumber = 23.9443

console.log(otherNumber.toPrecision(2)); // output 24 (round of the number 23.9443)

const hundreds = 1000000
console.log(hundreds.toLocaleString()); //output 1,000,000



// MATHS 
console.log(Math.abs(-4));  // to get absolute value i.e 4
console.log(Math.ceil(4.2));  // return top value  i.e 5 
console.log(Math.floor(4.2));  // return floor value  i.e 4 
console.log(Math.sqrt(9));      // return square root of 9 i.e 3

console.log(Math.random()); // returns random values
console.log((Math.random()*10 + 1)); // random numbers max is 10 , min is 1