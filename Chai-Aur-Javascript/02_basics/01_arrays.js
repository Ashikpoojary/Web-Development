// array

const myArr = [10, 99, 22, 53, 78, 35]
console.log(myArr);

const myArr1 = new Array(53, 78, 35)

// Array methods

myArr.push(6)            // adds data in end of array
myArr.pop()             // removes data from end of array
myArr.unshift(33)        // adds data in start of array
myArr.shift()           // removes data from start of array
// console.log(myArr)

console.log(myArr.includes(78))   // checks if that value is included in array | output true 

// slice , splice

console.log("A ", myArr);  // [10, 99, 22, 53, 78, 35]
const myn1 = myArr.slice(1,3)     // Returns a "copy" of a section of an array. Starts from 1st element and ignores all values from 3rd element
console.log(myn1)   // output [ 99, 22 ]


console.log("B ", myArr);  // [10, 99, 22, 53, 78, 35]
const myn2 = myArr.splice(1,3)    // Removes elements from an "original" array 
console.log(myn2)         // [ 99, 22, 53 ]