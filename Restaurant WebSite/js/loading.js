

setTimeout(() => {
  // redirecting the user to the wished page

  next = JSON.parse(localStorage.getItem("next"));

  console.log(next);
  window.location.href = next.href;
}, 2000);

class Animation {
  // loading animation

  loadingAnimation() {
    const logo = document.querySelector("img");

    console.log(logo);
    setTimeout(() => {
      // logo.classList.toggle("in");
      // logo.classList.toggle("out");
      logo.classList.add("rotate1");

      setTimeout(() => {
        logo.classList.add("rotate2");
      }, 3000);
    }, 1000);
  }
}
//page  loading event

document.addEventListener("DOMContentLoaded", anim.loadingAnimation);
// class object

const anim = new Animation();

