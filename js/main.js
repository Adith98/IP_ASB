var slideIndex = 0;
var slides = document.getElementsByClassName("mySlides");
var slideIndex1 = 0;
var slides1 = document.getElementsByClassName("mySlides1");

showSlides();

function showSlides() {    
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function currentSlide(no) {
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex = no;
    slides[no-1].style.display = "block";
}

function plusSlides(n) {
  var newslideIndex = slideIndex + n;
  if(newslideIndex< 4 && newslideIndex > 0){
     currentSlide(newslideIndex);
  }
}

function currentSlide1(no) {
    var i;    
    for (i = 0; i < slides1.length; i++) {
        slides1[i].style.display = "none"; 
    }
    slideIndex1 = no;
    slides1[no-1].style.display = "block";
}

function plusSlides1(n) {
  var newslideIndex1 = slideIndex1 + n;
  if(newslideIndex1 < 4 && newslideIndex1 > 0){
     currentSlide1(newslideIndex1);
  }
}








window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;


function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementById("slider").style.marginTop = "12.2%";
    document.getElementById("nav").style.display = "block";
    document.getElementById("some").style.display = "none";
} else {
    header.classList.remove("sticky");
    document.getElementById("some").style.display = "";
    document.getElementById("slider").style.marginTop = "2%";
    document.getElementById("some").style.backgroundColor = "";
  }
}
