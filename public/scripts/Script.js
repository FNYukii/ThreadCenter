// Creation Modal Switch
// Elements
const modalShadow = document.getElementById('modalShadow');
const modal = document.getElementById('modal');

const openButton = document.getElementById('openButton');

// Open modal
openButton.addEventListener('click', () => {
  modalShadow.style.display = 'block';
  modal.style.display = 'block';
})

// Close modal
modalShadow.addEventListener('click', () => {
  modalShadow.style.display = 'none';
  modal.style.display = 'none';
});

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