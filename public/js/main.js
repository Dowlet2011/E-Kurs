document.addEventListener('DOMContentLoaded', function () {
  const wrapper = document.getElementById('wrapper');
  const eElement = document.getElementById('e');

  setTimeout(() => {
    wrapper.classList.add('activated');
  }, 2000)

  setInterval(() => {
    wrapper.classList.toggle('activated');
  }, 9000);
});