const myNums = [1,2,3]

const myTotal = myNums.reduce(function(acc, currentval){
    console.log(`acc: ${acc} and currval: ${currentval}`)
    return acc + currentval
}, 0)

console.log(myTotal);