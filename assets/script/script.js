// banner swiper

var swiper = new Swiper(".banSwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// book us modal

var modal = document.getElementById("bookModal");

var btn = document.getElementById("bookBtn");

var span = document.getElementsByClassName("modalclose")[0];

btn.onclick = function () {
  modal.style.display = "block";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// sidebar

function openSideBar() {
  $(".sidebarSection").fadeIn(200);
  document.querySelector(".innerSidebar").style.cssText +=
    "transform: translate(0, 0);";
}

function closeSideBar() {
  $(".sidebarSection").fadeOut(400);
  document.querySelector(".innerSidebar").style.cssText +=
    "transform: translate(-300px, 0);";
}

// connect with us tab

$('#tabs-nav li:first-child').addClass('active');
$('.connecttab-content').hide();
$('.connecttab-content:first-child').show();

$('#tabs-nav li').click(function () {
  $('#tabs-nav li').removeClass('active');
  $(this).addClass('active');
  $('.connecttab-content').hide();

  let activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});


