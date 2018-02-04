function revealMessage(){
  document.getElementbyId("hiddenMessage").style.display = "block";
}

function countDown() {
  var currentVal = document.getElementbyId("countDownButton").innerHTML;
  var newVal = 0;
  if (currentVal > 0){
    newVal = currenVal - 1;
  }

  document.getElementById("countDownButton").innerHTML = newVal;
}
