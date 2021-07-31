document.querySelectorAll('[data-toggle="show"]').forEach(function(item) {
  let target = document.getElementById(item.dataset.target);

  item.addEventListener('click', function(event) {
    target.classList.toggle('show');
  });
});