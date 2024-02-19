

async function main(){

let a = await fetch("#")
let response = await a.text();
console.log(response)
}

main()