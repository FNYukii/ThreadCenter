// Add Comment Modal Value Check
// Elements
const displayNameInput = document.getElementById('displayNameInput');
displayNameInput.addEventListener('input', (event) => {
  check()
});

const textInput = document.getElementById('textInput');
textInput.addEventListener('input', (event) => {
  check();
});

function check() {
  const displayName = displayNameInput.value;
  const text = textInput.value;
  
  const submitButton = document.getElementById('submitButton');

  if (displayName !== "" && displayName.length <= 50 && text !== "" && text.length <= 500) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}