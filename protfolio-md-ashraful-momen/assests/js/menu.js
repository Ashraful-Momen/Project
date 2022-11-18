var mobileWidth = window.matchMedia("(max-width: 760px)");


function myFunction(x) {
  if (x.matches) { // If media query matches
    document.getElementById('nav-g').style.display = "none";
    document.getElementById('nav-h').style.display = "block";
  } else {
    document.getElementById('nav-g').style.display = "block";
    document.getElementById('nav-h').style.display = "none";
  }
}


myFunction(mobileWidth); // Call listener function at run time
mobileWidth.addListener(myFunction); // Attach listener function on state changes
