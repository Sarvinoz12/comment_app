const commentIcon = document.querySelectorAll(".fa-comment");
const commentBox = document.querySelectorAll(".commentbox");
const commentList = document.querySelector(".commentList");
const userInput = document.querySelectorAll(".userInput");
const commentInput = document.querySelectorAll(".commentforInput");
const commentValue = commentInput.value;
const userValue = userInput.value;
const sentBtn = document.querySelectorAll(".commentSend");
let productcards = document.querySelectorAll(".productCard");

commentIcon.forEach((e, ind) => {
  e.addEventListener("click", () => {
    func(ind);
  });
});
const func = (ind) => {
  commentIcon.forEach((e, i) => {
    if (i == ind) {
      commentBox[i].style.display = "flex";
      sentBtn[i].addEventListener("click", function () {
        const now = new Date().toLocaleDateString();
        const userValue = userInput[i].value;
        const commentValue = commentInput[i].value;
        const commentList = document.querySelectorAll(".commentList");
        const listItem = document.createElement("li");
        listItem.classList.add("listBox")
        commentList[i].innerHTML = `
          <div class="listBox"> <span class="fontUser">${userValue}:</span> <span>${commentValue}</span> <span class="date">${now.toLocaleString()}</span></div>
        `;
      });
    
    } else {
      commentBox[i].style.display = "none";
    }
  });
};

document.querySelector('.navLink[href="#about-section"]').addEventListener('click', function (e) {
  e.preventDefault();
  document.getElementById('about-section').scrollIntoView({ behavior: 'smooth' });
});

document.querySelector('.navLink[href="#myProduct"]').addEventListener('click', function (e) {
  e.preventDefault();
  document.getElementById('myProduct').scrollIntoView({ behavior: 'smooth' });
});

document.querySelector('.navLink[href="#comments"]').addEventListener('click', function (e) {
  e.preventDefault();
  document.getElementById('myProduct').scrollIntoView({ behavior: 'smooth' });
});

document.querySelector('.navLink[href="#contactUs"]').addEventListener('click', function (e) {
  e.preventDefault();
  document.getElementById('contactUs').scrollIntoView({ behavior: 'smooth' });
});