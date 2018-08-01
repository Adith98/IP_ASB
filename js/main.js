var slideIndex = 0;
var slides = document.getElementsByClassName("mySlides");

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
  if(newslideIndex < 4 && newslideIndex > 0){
     currentSlide(newslideIndex);
  }
}

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
var number = document.getElementsByClassName("mySlides");

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
    document.getElementById("chgpad").style.marginTop = "15%";
    document.getElementById("nav").style.display = "block";
    document.getElementById("some").style.backgroundColor = "rgba(27, 2, 2, 0.493)";
} else {
    header.classList.remove("sticky");
    document.getElementById("chgpad").style.marginTop = "5%";
    document.getElementById("some").style.backgroundColor = "";
  }
}