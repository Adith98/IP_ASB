function show1(){
    document.getElementById("image").src = "Cloth Samples\\sample1.jpg";
    document.getElementById("img1").style.border="2px solid black";
    document.getElementById("img2").style.border="3px red";
    document.getElementById("img3").style.border="3px red";
    document.getElementById("img4").style.border="3px red";
    document.getElementById("img5").style.border="3px red";
    
}
function show2(){
    document.getElementById("image").src = "Cloth Samples\\sample2.jpg";
    document.getElementById("img2").style.border="2px solid black";
    document.getElementById("img1").style.border="3px red";
    document.getElementById("img3").style.border="3px red";
    document.getElementById("img4").style.border="3px red";
    document.getElementById("img5").style.border="3px red";
}
function show3(){
    document.getElementById("image").src = "Cloth Samples\\sample3.jpg";
    document.getElementById("img3").style.border="2px solid black";
    document.getElementById("img2").style.border="3px red";
    document.getElementById("img1").style.border="3px red";
    document.getElementById("img4").style.border="3px red";
    document.getElementById("img5").style.border="3px red";
}
function show4(){
    document.getElementById("image").src = "Cloth Samples\\sample4.jpg";
    document.getElementById("img4").style.border="2px solid black";
    document.getElementById("img2").style.border="3px red";
    document.getElementById("img3").style.border="3px red";
    document.getElementById("img1").style.border="3px red";
    document.getElementById("img5").style.border="3px red";
}
function show5(){
    document.getElementById("image").src = "Cloth Samples\\sample5.jpg";
    document.getElementById("img5").style.border="2px solid black";
    document.getElementById("img2").style.border="3px red";
    document.getElementById("img3").style.border="3px red";
    document.getElementById("img4").style.border="3px red";
    document.getElementById("img1").style.border="3px red";
}

var inputs = document.getElementById('atc');
for (var i = 0, il = inputs.length; i < il; i++) {
  if (inputs[i].type.toLowerCase() == 'submit') {
    inputs[i].value = 'nice' + inputs[i].value;
  }
}