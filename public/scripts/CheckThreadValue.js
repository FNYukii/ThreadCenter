// Add Comment Modal Value Check
// Elements
const titleInput = document.getElementById('titleInput');
const submitButton = document.getElementById('submitButton');

titleInput.addEventListener('input', (event) => {
  const title = event.currentTarget.value;

  if(title !== "" && title.length <= 140) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
});