// page loading event
document.addEventListener("DOMContentLoaded", () =>
  document.querySelector(".row").classList.add("loaded")
);
// scroll event
document.addEventListener("scroll", () =>
  document.querySelector(".item3").classList.add("scrolled")
);

const AddtoCart = document.querySelectorAll(".add-button");

AddtoCart.forEach((button) => {
  button.addEventListener("click", (x) => {
    if (x.target.classList.contains("add-button")) {
      // capturing item info including name price and img href
      let target = x.target;
      let price = target.parentElement.previousElementSibling.textContent;
      let itemName =
        target.parentElement.previousElementSibling.previousElementSibling
          .textContent;
      let picture =
        target.parentElement.parentElement.parentElement.parentElement
          .parentElement.previousElementSibling.firstElementChild.src; // this is me gettig the picture  source of the item

      //   creating an object with items info
      let itemInfo = {
        image: `${picture}`,
        price: `${price}`,
        name: `${itemName}`,
      };

      localStorage.setItem("new-item", JSON.stringify(itemInfo));

      const container = document.querySelector(".container");
      const cart = document.createElement("div");

      //   setting next page href
      const next = {
        href: "cart.html",
      };

      localStorage.setItem("next", JSON.stringify(next));

      setTimeout(() => (window.location.href = "loading.html"), 500);
      // body.appendChild(cart);
    }
  });
});

// clicking logo returns user to homepage
const backToHomePage = document.querySelector(".homepage");

backToHomePage.addEventListener("click", returnToHome);

function returnToHome() {
  const next = {
    href: "index.html",
  };

  localStorage.setItem("next", JSON.stringify(next));

  setTimeout(() => (window.location.href = "loading.html"), 500);
}
