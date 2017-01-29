window.onload = function () {
var letter1 = "";
var letter2 = "";
var letter3 = "";
var count = 0;

var btn = document.getElementById('go');
btn.addEventListener('click', function(){
  myFunction();
})

function myFunction() {
  //document.getElementById("letter1").innerHTML = letter1;
  //document.getElementById("letter2").innerHTML = letter2;
  //document.getElementById("letter3").innerHTML = letter3;

  var userInput = document.getElementById("userInput").value;

  console.log(count);
  //var person = prompt("Choose a letter", "");

  if (userInput == "K") {
    letter1 = "K";
    document.getElementById("letter1").innerHTML = "K";
    count++;
    checkResult();
    return;
  }
  if (userInput == "O") {
    letter2 = "O";
    document.getElementById("letter2").innerHTML = "O";
    count++;
    checkResult();
    return;
  }
  if (userInput == "D") {
    letter3 = "D";
    document.getElementById("letter3").innerHTML = "D";
    count++;
    checkResult();
    return;
  }
  if (userInput == "KOD"){
    count = 0;
    document.getElementById("letter1").innerHTML = "K";
    document.getElementById("letter2").innerHTML = "O";
    document.getElementById("letter3").innerHTML = "D";
    alert("Congratulations!");
    return;
  }
  if(count >= 3) {
    alert("Game over.");
    var gameDiv = document.getElementById('game');
    gameDiv.style.display = "none";
    gameBtn.style.display = "none";
    count = 0;
    document.getElementById("letter1").innerHTML = "";
    document.getElementById("letter2").innerHTML = "";
    document.getElementById("letter3").innerHTML = "";
  }

  else {
    alert("No match! Try again!");
    count++;
  }
}
function checkResult(){
  if(letter1 == "K" && letter2 == "O" && letter3 == "D"){
    alert("Congratulations!");
    count = 0;
    document.getElementById("letter1").innerHTML = "K";
    document.getElementById("letter2").innerHTML = "O";
    document.getElementById("letter3").innerHTML = "D";
    return;
  }else{
    return;
  }
}



  $(document).on('keydown', function ( e ) {
  // You may replace `c` with whatever key you want
  if ((e.metaKey || e.ctrlKey) && ( String.fromCharCode(e.which).toLowerCase() === 'c') ) {
      var gameDiv = document.getElementById('game');
      var gameBtn = document.getElementById('gameBtn');
      gameDiv.style.display = "block";
      gameBtn.style.display = "block";
      alert("Hänga gubbe-spel, du har 4 gissningar.");
    }
  });
}
