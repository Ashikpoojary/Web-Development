function sayMyName() { // function
    console.log("Ukiyo")
}

// sayMyName();    // function call


function addTwoNumbers(num1, num2){  //parameters
    console.log(num1 + num2)
}

addTwoNumbers(1, 11);   // arguments

function loginUserMessage(username){
    if(username === undefined){
        console.log("Please enter a username")
        return 
    }
    return `${username} just logged in`
}

// console.log(loginUserMessage())   //output:  Please enter a username
console.log(loginUserMessage("ukiyo"))  //output: ukiyo just logged in

function calculateCartPrice(...num1){
    return num1
}

console.log(calculateCartPrice(200, 400, 500))  // [200, 400, 500]


// *******  OBJECTS IN FUNCTION *******

const user = {
    itemname : "Donut",
    price: 100
}

function handleObject(anyobject){
    console.log(`Ordered food is ${anyobject.itemname} and price is ${anyobject.price}`)
}

handleObject(user)


// *******  ARRAY IN FUNCTION *******

const myNewArray = [200, 400, 100, 600]

function returnSecondValue(getArray){
    return getArray[1]
}

// console.log(returnSecondValue(myNewArray));
console.log(returnSecondValue([200, 400, 500, 1000]));