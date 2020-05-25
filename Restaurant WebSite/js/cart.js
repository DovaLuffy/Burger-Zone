let itemInfo;

// calling add to cart because as soon as we reach this page it means that user has added item to cart
addToCart();

function addToCart() {
  let itemsArr = [];
  console.log(`add to cart got called`);

  let existingItems = JSON.parse(localStorage.getItem("item"));
  let newItem = JSON.parse(localStorage.getItem("new-item"));

  if (newItem) {
    // checking if existing items are there
    if (existingItems === null) {
      itemsArr.push(newItem);
      localStorage.setItem("item", JSON.stringify(itemsArr));
    } else {
      // pushing items to array then putting it back at local storage
      itemsArr = existingItems;
      itemsArr.push(newItem);
      localStorage.setItem("item", JSON.stringify(itemsArr));
    }
    localStorage.removeItem("new-item");
  }

  // calling that function which returns the new list of items
  getItemInfo();
}

function getItemInfo() {
  console.log(`get item info got called`);
  itemInfo = JSON.parse(localStorage.getItem("item"));
  // passing new list of items to UI to display
  addToUI(itemInfo);
}

function addToUI(items) {
  const leftSide = document.querySelector(".right-side");
  let UI_Items = items;
  let numOfItems;
  // num of items is determined by using the object indexes

  if (UI_Items[1]) {
    // if there is item at index 1 then items are 2
    numOfItems = 2;
  } else if (!UI_Items[0]) {
    //   checking if there are items at all
    numOfItems = 0;
  } else {
    //   if there are items and they are not 2 then they are 1
    numOfItems = 1;
  }

  let totalPrice = 0;
  for (let i = 0; i < numOfItems; i++) {
    // parsing the price to float bcs it was initially string
    totalPrice += parseFloat(UI_Items[i].price);
    const newDiv = document.createElement("div");
    // new element html
    let output = ``;
    output += `<div class="item-card">
        <img class="item-picture" src="${UI_Items[i].image}
        "<br>
        <p class="item-content"> <span class="item-name">Item Name: ${UI_Items[i].name}</span> <br> <span class="item-price">Item Price: ${UI_Items[i].price}</span> </p>
        </div>`;

    newDiv.innerHTML = output;
    newDiv.className = "item";
    leftSide.appendChild(newDiv);
  }
  let totalSpan = `Total Price : ${totalPrice}`;
  const newSpan = document.createElement("span");
  newSpan.innerHTML = totalSpan;
  newSpan.className = "total-price";
  document.querySelector(".right-side").appendChild(newSpan);

  // making sure that there are items before displaying the checkout button
  if (numOfItems !== 0) {
    setTimeout(() => {
      document.querySelector(".check-out").classList.add("show");
    }, 3000);
  }
}

// add more cart funcionality
document.querySelector(".cart-add-btn").addEventListener("click", () => {
  let numberOfItems = document.querySelectorAll(".item").length;

  if (numberOfItems < 2) {
    // object containing the next page href
    const next = {
      href: "menu.html",
    };

    localStorage.setItem("next", JSON.stringify(next));

    setTimeout(() => (window.location.href = "loading.html"), 500);
  } else {
    document.querySelector(".alert").classList.add("pop");
    setTimeout(() => {
      document.querySelector(".alert").classList.add("un-pop");
    }, 2000);
  }
});

// checkout button funcionality
document.querySelector(".check-out").addEventListener("click", () => {
  const next = {
    href: "index.html",
  };

  localStorage.setItem("next", JSON.stringify(next));
  localStorage.removeItem("item");
  setTimeout(() => (window.location.href = "loading.html"), 500);
});
