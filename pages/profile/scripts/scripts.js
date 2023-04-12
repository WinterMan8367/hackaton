"use strict"

function card_otclick() {
  document.querySelector(".portfolio_item").style.scale = "0.98";
  document.querySelector(".portfolio_item").style.boxShadow = "none";
}

function card_otclick_2() {
  document.querySelector(".portfolio_item").style.scale = "1";
  document.querySelector(".portfolio_item").style.boxShadow = "0px 0px 16px rgba(0, 0, 0, 0.25)";
}
  

document.querySelector(".portfolio_item").addEventListener("mouseover", card_otclick);
document.querySelector(".portfolio_item").addEventListener("mouseout", card_otclick_2);