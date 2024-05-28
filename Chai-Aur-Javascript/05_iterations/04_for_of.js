// for of 
// used for directly executes all elements from array & object without condition

const arr = [1,2,3,4,5]

for(const num of arr){
    console.log(num)
}


// Maps
const map = new Map()
map.set('IN', "India")
map.set('USA', "United States of America")

console.log(map);

for (const [key, value] of map) {
    console.log(key, ':-', value);
}
//output 
// IN :- India
// USA :- United States of America