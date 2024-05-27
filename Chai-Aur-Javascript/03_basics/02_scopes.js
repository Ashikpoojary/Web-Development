//var c = 300
let a = 300
if (true) {
    let a = 10
    const b = 20
    // console.log("INNER: ", a);
    
}

// console.log(a);
// console.log(b);
// console.log(c);

function one(){
    const username = "ukiyo"

    function two(){
        const website = "youtube"
        console.log(username);     // child function can access parent function's variables
    }
    // console.log(website);  // parent function cannot access child's variable
    two()
}
one()


// Making function using variable        // Mini hoisting
const addTwo = function(num){
    return num + 2
}

addTwo(5)