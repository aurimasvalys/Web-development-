// hamburger button scriptas

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


// what clients say scriptas 
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("feedback-content");

  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  

}

//hero scriptas :))

var slideIndexa = 1;
showSlidesa(slideIndexa);

function plusSlidesa(v) {
  showSlidesa(slideIndexa += v);
}

function currentSlidea(v) {
  showSlidesa(slideIndexa = v);
}

function showSlidesa(v) {
  var p;
  var slidesa = document.getElementsByClassName("hero-content");

  if (v > slidesa.length) {slideIndexa = 1}    
  if (v < 1) {slideIndexa = slidesa.length}
  for (p = 0; p < slidesa.length; p++) {
      slidesa[p].style.display = "none";  
  }

  slidesa[slideIndexa-1].style.display = "block";  

}