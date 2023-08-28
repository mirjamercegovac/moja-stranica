$(document).ready(function(){
    $('ul li a').click(function(){
      $('ul li a').removeClass('active');
      $(this).addClass('active');
    });
    $('.menu i').click(function(){
      $('header .navbar').slideToggle();
      $(this).toggleClass('far fa-times');
    });
  });

  let date = document.getElementById("date");
  let today = new Date();
  let day = `${today.getDate() < 10 ? "0" : ""}${today.getDate()}`;
  let month = `${(today.getMonth() +1) < 10 ? "0" : ""}${today.getMonth()+1}`;
  let year = today.getFullYear();
  date.textContent = `${day}.${month}.${year}.`;

  document.querySelectorAll('.image-gallery img').forEach(image =>{
    image.onclick = () => {
      document.querySelector('.popup-image').style.display = 'block';
      document.querySelector('.popup-image img').src = image.getAttribute('src');
    }
});
document.querySelector('.popup-image span').onclick = () => {
  document.querySelector('.popup-image').style.display = 'none';
}

function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
}

function togglePopupS(){
    document.getElementById("popup-2").classList.toggle("active");
}

