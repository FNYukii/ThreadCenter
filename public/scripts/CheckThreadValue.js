// Creation Modal Value Check
// Elements
const threadTitleInput = document.getElementById('threadTitleInput');
const submitButton = document.getElementById('submitButton');

threadTitleInput.addEventListener('input', (event) => {
  const title = event.currentTarget.value;

  if(title !== "" && title.length <= 140) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
});