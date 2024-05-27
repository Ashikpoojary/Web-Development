// This keyword
const user = {
    username: "ukiyo",
    age: 20,

    welcomeMessage: function() {
        console.log(`${this.username}, welcome to website`);
    }
}
user.welcomeMessage()          //output : ukiyo
user.username = "sammy"
user.welcomeMessage()          //output : sammy


function chai(){
    let username = "ukiyo"
    console.log(this.username)   //output : "undefined" because it only shows output from object not function
}
chai()


//   *****    ARROW FUNCTION   ******

const hello = () => {
    let message = "Hello world"
    console.log(message);
}
hello()