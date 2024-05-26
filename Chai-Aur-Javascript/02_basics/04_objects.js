// const tinderUser = new Object()
const tinderUser = {}

tinderUser.id = "123abc"
tinderUser.name = "ukiyo"
tinderUser.isLoggedIn = false

// console.log(tinderUser)

const regularUser = {
    email : "some@gmail.com",
    fullname: {
        userfullname : {
            firstname : "ukiyo",
            lastname : "stone"
        }
    }
}

// console.log(regularUser.fullname.userfullname.firstname) //output ukiyo

const obj1 = {1: "a", 2: "b"}
const obj2 = {3: "a", 4: "b"}

const obj3 = {obj1 , obj2}
console.log(obj3)   //output  { obj1: { '1': 'a', '2': 'b' }, obj2: { '3': 'a', '4': 'b' } }

// const obj4 = Object.assign(obj1,obj2)
// console.log(obj4)

const obj4 = {...obj1,...obj2}
console.log(obj4)


// Object destructure
const course = {
    coursename : "web dev bootcamp",
    price: "499",
    courseInstructor: "hitesh"
}

const {courseInstructor : instructor} = course
console.log(instructor) //output hitesh