import FingerprintJS from '@fingerprintjs/fingerprintjs';
import './login.js';
import './register.js';
let visitorId = '';

document.addEventListener('DOMContentLoaded', async () => {
    await loadFingerprint();
});
async function loadFingerprint() {
    try {
        const fp = await FingerprintJS.load();
        const result = await fp.get();
        visitorId = result.visitorId;
        document.getElementById('visitor_id').textContent = visitorId;
    } catch (error) {
        console.error('Error loading FingerprintJS:', error);
    }
}
