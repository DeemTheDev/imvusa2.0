function showPopup() {
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
  }

  function hidePopup() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
  }

  function sendEmail() {
    // Implement your email sending logic here
    alert("Sending email...");
    hidePopup();
  }

  function openWhatsApp() {
    // Implement your WhatsApp logic here
    alert("Opening WhatsApp...");
    hidePopup();
  }

 