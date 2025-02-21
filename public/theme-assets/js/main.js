
var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

const divs = {
  original: document.getElementById("originalDiv"),
  new1: document.getElementById("newDiv1"),
  new2: document.getElementById("newDiv2"),
};

const buttons = {
  change1: document.getElementById("changeBtn1"),
  change2: document.getElementById("changeBtn2"),
  close1: document.getElementById("closeBtn1"),
  close2: document.getElementById("closeBtn2"),
};

// Function to show only the selected div
function toggleDiv(showDiv) {
  Object.values(divs).forEach(div => div.classList.add("hidden"));
  divs[showDiv].classList.remove("hidden");
}

// Event listeners
buttons.change1.addEventListener("click", () => toggleDiv("new1"));
buttons.change2.addEventListener("click", () => toggleDiv("new2"));
buttons.close1.addEventListener("click", () => toggleDiv("original"));
buttons.close2.addEventListener("click", () => toggleDiv("original"));

