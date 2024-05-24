const name = "ukiyo"
const repoCount = 50

console.log(`Hello my name is ${name} and my repo count is ${repoCount}`);

const gameName = new String('hello')
console.log(gameName[0]);
console.log(gameName.length);
console.log(gameName.toUpperCase());

const newString = gameName.substring(0, 4)
console.log(newString);

const anotherString = gameName.slice(-8, 4)
console.log(anotherString);

const url = "https://serenity.com/serenity%20peak"

console.log(url.replace('%20', '-'))  // output https://serenity.com/serenity-peak