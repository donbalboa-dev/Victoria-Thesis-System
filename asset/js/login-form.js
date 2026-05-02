 // Show popups from URL params
 const urlParams = new URLSearchParams(window.location.search);
 if(urlParams.get('error')) {
    document.getElementById('errorPopup').style.display = 'flex';
} else if(urlParams.get('success')) {
    document.getElementById('successPopup').style.display = 'flex';
}

 function closePopup(type) {
     document.getElementById(type + 'Popup').style.display = 'none';
     document.querySelector('input[name="username"]').value = '';
     document.querySelector('input[name="password"]').value = '';
 }

 function goToDashboard() {
    window.location.href = 'dashboard.php';
}

 // Close on outside click or ESC
 document.addEventListener('click', function(e) {
     if(e.target.classList.contains('popup-overlay')) {
         closePopup('error');
     }
 });
 document.addEventListener('keydown', function(e) {
     if(e.key === 'Escape') {
         document.querySelectorAll('.popup-overlay').forEach(p => p.style.display = 'none');
     }
 });