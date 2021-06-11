'use strict'


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
  document.getElementById("myBtn").style.display = "block";
} else {
  document.getElementById("myBtn").style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

document.getElementById("desktop_light_mode").addEventListener('click', darkMode);
document.getElementById("mobile_light_mode").addEventListener('click', darkMode);

function darkMode() {
  //Body Background//
  const belem = document.querySelector("body");
  belem.classList.toggle("light_mode");
  //Parrafos //
  const pelem = document.querySelectorAll("p");
  pelem[0].classList.toggle("p_light_mode");
  pelem[1].classList.toggle("p_light_mode");
  pelem[2].classList.toggle("p_light_mode");
  pelem[3].classList.toggle("p_light_mode");
  // Main Title //
  const title = document.getElementById("hey_there");
  title.classList.toggle("text-white");
  // Cards Titles //
  const cards_title = document.querySelectorAll("h5");
  cards_title[0].classList.toggle("text-white");
  cards_title[0].classList.toggle("p_light_mode");
  cards_title[1].classList.toggle("text-white");
  cards_title[1].classList.toggle("p_light_mode");
  // Title Name Twoleftpaws //
  const name_twoleftpaws = document.getElementById("name_twoleftpaws");
  name_twoleftpaws.classList.toggle("text-white");
  //Nav bar menu //
  const nav_bar_menu = document.querySelector("nav");
  nav_bar_menu.classList.toggle("navbar-dark");
  // Footer User //
  const mail_footer_user = document.getElementById("mail_footer_user");
  mail_footer_user.classList.toggle("text-white");
  mail_footer_user.classList.toggle("titles_red")
  const ig_footer_user = document.getElementById("ig_footer_user");
  ig_footer_user.classList.toggle("text-white");
  ig_footer_user.classList.toggle("titles_red");
  //Contact Form//
  const nameuser_label = document.getElementById("name_label");
  const emailuser_label = document.getElementById("email_label");
  const subjectuser_label = document.getElementById("subject_label");
  const textareauser_label = document.getElementById("textarea_label");
  console.log(nameuser_label);
  nameuser_label.classList.toggle('text-white');
  nameuser_label.classList.toggle('p_light_mode');
  emailuser_label.classList.toggle('text-white');
  emailuser_label.classList.toggle('p_light_mode');
  subjectuser_label.classList.toggle('text-white');
  subjectuser_label.classList.toggle('p_light_mode');
  textareauser_label.classList.toggle('text-white');
  textareauser_label.classList.toggle('p_light_mode');
}

document.querySelector('#myBtn').addEventListener('click', topFunction);