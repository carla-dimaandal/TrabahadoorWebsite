let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); 
}
var icon = document.getElementById("icon");
icon.onclick = function(){
    document.body.classList.toggle("dark-theme");
    if(document.body.classList.contains("dark-theme")){
        icon.src = "./Images/sun.png";
    }else{
        icon.src = "./Images/moon.png";
    }
}
function sendMail(){
    var params = {
        name: document.getElementById("name").value , 
        email: document.getElementById("email").value , 
        message: document.getElementById("message").value , 
    };
    const serviceID = "service_01xagwd";
    const templateID = "template_j0iai7r";

    emailjs.send(serviceID, templateID, params)
    .then(function (response) {
        console.log("SUCCESS!", response.status, response.text);
      },
      function (error) {
        console.log("FAILED...", error);
      }
    );
    document.getElementById("name").value= "";
    document.getElementById("email").value= "";
    document.getElementById("message").value="";
  };