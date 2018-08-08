var brandIndex = 0;
var brands = document.getElementsByClassName("brand");
var slideIndex = 0;
var slides = document.getElementsByClassName("mySlides");
var slideIndex1 = 0;
var slides1 = document.getElementsByClassName("mySlides1");
var slideIndex2 = 0;
var slides2 = document.getElementsByClassName("mySlides2");

showSlides();

function showSlides() {    
    var i;    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        brands[i].style.display = "none";  
    }
    slideIndex++;
    brandIndex++;
    if (slideIndex> slides.length && brandIndex> brands.length) {slideIndex = 1;brandIndex = 1;} 
    slides[slideIndex-1].style.display = "block";
    brands[brandIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000); // Change image every 5 seconds
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
  if(newslideIndex1 == -1 || newslideIndex1 == 0){
    newslideIndex1 = 3;
    currentSlide1(newslideIndex1);
  }
  else if(newslideIndex1 < 4 && newslideIndex1 > 0){
   currentSlide1(newslideIndex1);
  }
  else if(newslideIndex1=4){
    newslideIndex1 = 1;
    currentSlide1(newslideIndex1);
  }  
}

function currentSlide2(no) {
    var i;    
    for (i = 0; i < slides2.length; i++) {
        slides2[i].style.display = "none"; 
    }
    slideIndex2 = no;
    slides2[no-1].style.display = "block";
}

function plusSlides2(n) {
  var newslideIndex2 = slideIndex2 + n;
  if(newslideIndex2 == -1 || newslideIndex2 == 0){
      newslideIndex2 = 3;
      currentSlide2(newslideIndex2);
  }
  else if(newslideIndex2 < 4 && newslideIndex2 > 0){
     currentSlide2(newslideIndex2);
  }
  else if(newslideIndex2=4){
      newslideIndex2 = 1;
      currentSlide2(newslideIndex2);
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
