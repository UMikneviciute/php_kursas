function myFunction() {
    let x = document.getElementById("mMenu");
    if (x.style.display === "flex") {
        x.style.display = "none"
    } else {
        x.style.display = "flex"
    }
  }

function recipes() {
    let x = document.getElementById("mobile-flex");
    if (x.style.display === "flex") {
        x.style.display = "none"
    } else {
        x.style.display = "flex"
    }
  }

function toggleText(btnId, dotsId, moreId) {
    var dots = document.getElementById(dotsId);
    var moreText = document.getElementById(moreId);
    var btnText = document.getElementById(btnId);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}

document.getElementById("dots1").style.display = "inline";
document.getElementById("more1").style.display = "none";
document.getElementById("dots2").style.display = "inline";
document.getElementById("more2").style.display = "none";
document.getElementById("dots3").style.display = "inline";
document.getElementById("more3").style.display = "none";

function scrollToRecipes() {
    let formSection = document.querySelector('#recipes');
    let form = formSection.querySelector('h2')
    form.scrollIntoView({ behavior: 'smooth' });
}
