/*countdown function*/
var countDownDate = new Date("Jan 30, 2023 0:0:0").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);


/*slideshow function*/
var myIndex = 1;
carousel(myIndex);
function plusSlides(n) {
  carousel(myIndex += n);
}

function currentSlide(n) {
  carousel(myIndex = n);
}


function carousel(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {myIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  dots[myIndex-1].className += " active";
}


/*refresh page for user pick the lucky drinks*/
function refreshPage(){
    window.location.reload();
}




/* use to prompt message the user is insert the right email format or not*/
function isEmpty(str) { return (str.length === 0 || !str.trim()); }


function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}


function subscribeForm() {
if ((isEmpty(document.getElementById('data_5').value.trim())) || (!validateEmail(document.getElementById('data_5').value.trim()))) {
alert('Email must be a valid email address!');
return false;
}
alert("Subscribe Successfully");
return true;
}
