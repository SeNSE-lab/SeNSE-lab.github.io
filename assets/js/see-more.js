

function toggleContent() {
    var additionalContent = document.getElementById('see-more-content');
    var toggleButton = document.getElementById('toggle-btn');
  
    if (additionalContent.style.display === 'none' || additionalContent.style.display === '') {
      additionalContent.style.display = 'block';
      toggleButton.textContent = 'Less News';
    } else {
      additionalContent.style.display = 'none';
      toggleButton.textContent = 'More News';
    }
  }