import './bootstrap';
setTimeout(() => {
    const alert = document.getElementById('confirm');
    if (alert) {
        const bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
    }
}, 3000); // 3 segundos