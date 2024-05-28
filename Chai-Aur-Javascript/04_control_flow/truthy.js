const userEmail = "ukiyo@gmail.com"

if(userEmail){       // we don't have to use operator to check if there is value or not
    // if there is a value in variable it will return true, else false
    console.log("Got user email");
}
else{
    console.log("Don't have user email")
}

// falsy values

// false, 0, -0, BigInt 0n, "", null, undefined, NaN

//truthy values
// "0", 'false', " ", [], {}, function(){}

// if (userEmail.length === 0) {
//     console.log("Array is empty");
// }

if(userEmail.length === 0){
    console.log("Array is empty");
}

const emptyObj = {}

if(Object.keys(emptyObj).length === 0){
    console.log("Object is empty")
}


// NULLISH COALESCING OPERATOR (??) : null undefined

/* The nullish coalescing (??) operator is a logical operator
  that returns its right-hand side operand when its left-hand side operand is 
  null or undefined, and otherwise returns its left-hand side operand. */

let val1;
val1 = 5 ?? 10
val1 = null ?? 10