// Add Comment Modal Value Check
// Elements
const displayNameInput = document.getElementById('displayNameInput');
const textInput = document.getElementById('textInput');
const submitButton = document.getElementById('submitButton');

// 値が入力されたらCheck
displayNameInput.addEventListener('input', check);
textInput.addEventListener('input', check);

function check() {
  const displayName = displayNameInput.value;
  const text = textInput.value;
  
  if (displayName !== "" && displayName.length <= 50 && text !== "" && text.length <= 500) {
    submitButton.disabled = false;
  } else {
    submitButton.disabled = true;
  }
}