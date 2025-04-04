import axios from 'axios';

document.getElementById("loginProcessAct").addEventListener("click", function() {
    let btnLogin = document.getElementById('loginProcessAct');
    btnLogin.disabled = true;
    btnLogin.innerHTML = '<i class="fa-thin fa-spinner-scale fa-spin-pulse"></i> Proses Autentikasi...';
    axios.get('/generate-csrf-token')
        .then(response => {
            if (!response.data.csrf_token) {
                throw new Error("CSRF token tidak ditemukan");
            }
            return axios.post(baseurlapi + '/auth/login', {
                _token: response.data.csrf_token,
                username: document.getElementById("username").value,
                password: document.getElementById("password").value,
                device_id: document.getElementById("visitor_id").textContent,
                access_form: "web_login_erakaunting"
            }, {
                withCredentials: true,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            });
        })
        .then(response => {
            btnLogin.disabled = false;
            btnLogin.innerHTML = '<i class="fa-solid fa-person-to-door"></i> Masuk Ke Panel Admin';
            if (response.data.success) {
                return window.location.href = baseurl+"/dashboard";
            }
        })
        .catch(e => {
            btnLogin.disabled = false;
            btnLogin.innerHTML = '<i class="fa-solid fa-person-to-door"></i> Masuk Ke Panel Admin';
            if (e.response?.status == 401) {
                return createToast(e.message, 'top-right', e.response.data.message, 'error', 3000);
            }
            const errorMessage = e.response?.data?.error_messages || e.error_messages;
            return createToast('Kesalahan Proses Login', 'top-right', errorMessage, 'error', 3000);
        });
});
const element = document.getElementById("show-hide");
element.addEventListener("click", function() {
    let password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
        element.innerHTML = '<i class="fas fa-eye">';
    } else {
        password.type = "password";
        element.innerHTML = '<i class="fas fa-eye-slash">';
    }
});

