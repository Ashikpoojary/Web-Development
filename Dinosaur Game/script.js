//board
let board;
let boardWidth = 750;
let boardHeight = 250;
let context;          // used for drawing on canvas

//dinosaur
let dinoWidth=88;
let dinoHeight=94;
let dinoX = 50;
// dino's height is half of board to avoid collision while jumping 
let dinoY = boardHeight - dinoHeight;  
let dinoImg;

let dino = {
    x : dinoX,
    y : dinoY,
    width: dinoWidth,
    height: dinoHeight
}

//cactus
let cactusArray =[];

let cactus1Width = 34;
let cactus2Width = 69;
let cactus3Width = 102;

let cactusHeight = 70;
let cactusX = 700;
let cactusY = boardHeight - cactusHeight;

let cactus1Img;
let cactus2Img;
let cactus3Img;

window.onload= function(){
    board = document.getElementById("board");
    board.height = boardHeight;
    board.width = boardWidth;

    context = board.getContext("2d"); //used for drawing on the board

    dinoImg = new Image();           //a new Image object to hold the dinosaur image
    dinoImg.src = "./img/dino.png"
    dinoImg.onload = function(){  // Assign a function to be executed when the image has fully loaded
    context.drawImage(dinoImg, dino.x,dino.y,dino.width,dino.height); // Specify the position and dimensions of the image

    cactus1Img = new Image();
    cactus1Img.src = "./img/cactus1.png"

    cactus2Img = new Image();
    cactus2Img.src = "./img/cactus2.png"

    cactus3Img = new Image();
    cactus3Img.src = "./img/cactus3.png"

    requestAnimationFrame(update);
    setInterval(placeCactus,1000);
    }
}

// After every jump dino is going to be drawn again to Y axis
function update(){ 
    requestAnimationFrame(update);
    context.drawImage(dinoImg, dino.x,dino.y,dino.width,dino.height);
}

function placeCactus(){
    let cactus ={
        img : null,
        x : cactusX,
        y : cactusY,
        width : null,
        height : cactusHeight
    }
}