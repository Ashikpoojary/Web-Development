// for

// for (let index = 0; index < 10; index++) {
//     const element = index;
//     console.log(element);
// }

for (let index = 0; index <= 10; index++) {
    console.log(`Outer loop value : ${index}`)
    for (let j = 0; j < 10; j++) {
        // console.log(`Inner loop value : ${j}`)
        console.log(index + '*' + j + ' = ' + index*j)
    }
}

let myArray = ["flash", "batman", "superman"]
//console.log(myArray.length);
for (let index = 0; index < myArray.length; index++) {
    const element = myArray[index];
    //console.log(element);
    
}


// BREAK & CONTINUE
for (let i = 0; i <= 20; i++) {
    if(i == 7){
        console.log("Detected 7");
        break
    }
    console.log(`Value of i is ${i}`);
}

for (let i = 0; i <= 20; i++) {
    if(i == 7){
        console.log("Detected 7");
        continue
    }
    console.log(`Value of i is ${i}`);
}