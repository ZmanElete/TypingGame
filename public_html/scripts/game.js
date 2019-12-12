var textObjects = [];
var speed = 6;
var time = 0;
var timer = null;
var words = [];
var end_pos = 800;
var num_words = 2000;
var timer_speed = 100
var game_over = false;
//Params 

function init(){
    game_over = false;
    //Get Words
    words = JSON.parse(localStorage.getItem('words'));

    //Setup onkeydown event
    document.addEventListener("keydown", keyPressed);

    //init timer
    timer = setInterval(OnInterval, timer_speed);

    //init objects
    textObjects = [
        {
            box:"first",
            text: "",
            position: 0,
            falling: false,
            typingPos: 0,
        },
        {
            box:"second",
            text: "",
            position: 0,
            falling: false,
            typingPos: 0,
        },
        {
            box:"third",
            text: "",
            position: 0,
            falling: false,
            typingPos: 0,
        },
        {
            box:"fourth",
            text: "",
            position: 0,
            falling: false,
            typingPos: 0,
        },
        {
            box:"fifth",
            text: "",
            position: 0,
            falling: false,
            typingPos: 0,
        },
    ]
    
    textObjects.forEach((object) =>{
        newWord(object);
        object.falling = true;
    });
    
}

function newWord(object){
    //get a random index
    var temp = Math.floor(Math.random() * (num_words - 1));
    //set the word
    object.text = words[temp]['word'];
    document.getElementById(object.box).children[1].innerHTML= object.text;
}

function OnInterval(){
    //iterate timer
    time += 1;
    document.getElementById('timer').innerHTML = formatTime();
    //move each object
    textObjects.forEach((object) =>{
        moveText(object);
    })
}

function moveText(object){
    //if the object is falling and the position is less than the end position
    if(object.falling && object.position < end_pos){
        //move object according to speed
        object.position += speed;
        document.getElementById(object.box).style.top = object.position + "px";
    }
    //if position has gone past end position
    else if(object.position >= end_pos){
        //end game
        end();
    }
}

function end(){
    if(!game_over){
        game_over = true;
        clearInterval(timer);
        fetch("../commands/cmdNewScore.php?score="+formatTime(), { 
            method: 'GET',
        }).then(() => {
            location.href='./commands/cmdLeaderboard.php';
        });
    }
}

function keyPressed(e){
    //Check objects to see if the keypress relates to them.
    textObjects.forEach((object) => {
        if(e.key == object.text[object.typingPos]){
            letterExists(object);
        }
        else{
            letterDoesNotExist(object);
        }
    });
}

function letterExists(object){
    //get children
    var children = document.getElementById(object.box).children;

    //move typing position
    ++object.typingPos;
    children[0].innerHTML = object.text.substring(0,object.typingPos);
    children[1].innerHTML = object.text.substring(object.typingPos, object.text.length);

    //Check for a typed word
    if(object.text.length == object.typingPos){
        wordTyped(object);
    }
}

function wordTyped(object){
    //make it so you can't lose
    object.falling = false;

    //Get the element
    var elem = document.getElementById(object.box);;

    //hide the element
    object.text = "";
    Array.prototype.forEach.call(elem.children,(child) =>{
        child.innerHTML = "";
    });

    //Reset Pos
    object.position = 0;
    elem.style.top = object.position + "px";

    //reset typing pos
    object.typingPos = 0;

    //get a new word
    newWord(object);

    textObjects.forEach((object) =>{
        //remove all typed letters
        letterDoesNotExist(object);
    })

    //start again
    object.falling = true;
}

function letterDoesNotExist(object){
    //get child
    var children = document.getElementById(object.box).children;

    //reset typing pos
    object.typingPos = 0;
    children[0].innerHTML = "";
    children[1].innerHTML = object.text;
}

function formatTime(){
    min = Math.floor(time / 600);
    sec = Math.floor(time % 600 / 10);
    mili = time % 10;
    return min + "." + (sec/10 >= 1 ? sec : "0"+sec) + "." + mili;
}
