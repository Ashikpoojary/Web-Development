const JsUser = {
//  key : value
    name: "Ukiyo",
    age: 20,
    location : "mumbai"
}
// to access object 2 ways
console.log(JsUser.name)
console.log(JsUser["name"])


JsUser.greeting = function (){
    console.log("Hello world")
}

console.log(JsUser.greeting());