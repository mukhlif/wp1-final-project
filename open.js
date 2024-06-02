const bookContainers=[...document.querySelectorAll('.book-container')];
const nxtBtn=[...document.querySelectorAll('.next-btn')];
const preBtn=[...document.querySelectorAll('.pre-btn')];

bookContainers.forEach((item,i) => {
    let containerDimensions=item.getBoundingClientRect();
    let containerWidth=containerDimensions.width;

    nxtBtn[i].addEventListener('click',()=>{
        item.scrollLeft +=containerWidth * 30/100;
    })
    preBtn[i].addEventListener('click',()=>{
        item.scrollLeft -=containerWidth * 30/100;
    })
})

let mybutton = document.getElementById("myBtn");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}
const cards = document.querySelectorAll('.book-card');

cards.forEach((card) => {
  card.addEventListener('mouseover', () => {
    card.querySelector('img').style.transform = 'scale(1.1)';
  });

  card.addEventListener('mouseout', () => {
    card.querySelector('img').style.transform = 'scale(1)';
  });
});

