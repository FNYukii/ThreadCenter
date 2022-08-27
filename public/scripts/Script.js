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