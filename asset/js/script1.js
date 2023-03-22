const menuIcon = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');
const burger = document.getElementById('burger');
const croix = document.getElementById('croix');

menuIcon.addEventListener('click', () => {
  menu.classList.toggle('hidden');
  burger.classList.toggle('hidden');
  croix.classList.toggle('hidden');
});