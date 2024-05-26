const marvel_heroes = ["thor", "Ironman", "Spiderman"]
const dc_heroes = ["superman", "flash", "batman"]

// marvel_heroes.push(dc_heroes)
// console.log(marvel_heroes)  //output [ 'thor', 'Ironman', 'Spiderman', [ 'superman', 'flash', 'batman' ] ]

const comic_hero = marvel_heroes.concat(dc_heroes)
console.log(comic_hero)    //output [ 'thor', 'Ironman', 'Spiderman', 'superman', 'flash', 'batman' ]

// Spread operator
const all_new_heroes = [...marvel_heroes, ...dc_heroes]   // now it is not array, all element have become individual with spread operator
console.log(all_new_heroes)



const another_array = [1,2,3, [4,5,6], 7 , [6,7,[4,5]]]
const real_another_array = another_array.flat(Infinity)
console.log(real_another_array)

console.log(Array.isArray("Hitesh"))
console.log(Array.from("Hitesh"))
console.log(Array.from({name: "hitesh"})) // interesting

let score1 = 100
let score2 = 200
let score3 = 300

console.log(Array.of(score1, score2, score3));     // make a array from multiple variable's value