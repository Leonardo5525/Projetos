const value = document.querySelector("#value");
const input = document.querySelector("#pi_input");
value.textContent = input.value;
input.addEventListener("input", (event) => {
  value.textContent = event.target.value;
});

const heart = document.getElementById("like")
heart.addEventListener("click", () => {
    if (heart.className === 'bx bx-heart') {
      heart.classList.remove("bx-heart")
      heart.classList.add("bxs-heart")
    }else {
      heart.classList.add("bx-heart")
      heart.classList.remove("bxs-heart")
    }
})