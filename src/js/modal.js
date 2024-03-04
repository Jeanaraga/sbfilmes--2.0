// Get the modal
const modal = document.getElementById('modal');

// Get the button that opens the modal
const commentBtn = document.querySelector('.coment-btn');

// Get the <span> element that closes the modal
const span = document.querySelector('.close');

// When the user clicks on the button, open the modal
commentBtn.onclick = function(e) {
   e.preventDefault();
  modal.style.display = 'block';
  // Add code here to populate modal with movie details
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = 'none';
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};

// You can also add an event listener to submit the form
document.getElementById('modal-form').addEventListener('submit', function(event) {
  event.preventDefault();
  // Add code here to handle form submission (AJAX to PHP and database)
  // You may want to close the modal after successful submission
  modal.style.display = 'none';
});
