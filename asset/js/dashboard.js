// Live clock
function updateClock() {
    const now = new Date();
    const time = now.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
    document.querySelector('.admin-info:last-child span').textContent = `⏰ ${time}`;
}
updateClock();
setInterval(updateClock, 1000 * 60); // Update every minute