export function createToast(textheader = '', position = 'top-right', message = '', type = 'success', duration = 4000) {
    const toastContainer = document.createElement('div');
    toastContainer.className = `toast-container position-fixed p-3 toast-index`;
    toastContainer.style.zIndex = '1060';
    let toastColor = '';
    let toastPrefix = '';
    switch (type) {
        case 'success':
            toastColor = 'rgba(0, 172, 70, 0.3)';
            toastPrefix = 'Success: ';
            break;
        case 'warning':
            toastColor = 'rgba(255, 174, 26, 0.3)';
            toastPrefix = 'Warning: ';
            break;
        case 'error':
            toastColor = 'rgba(254, 106, 73, 0.3)';
            toastPrefix = 'Error: ';
            break;
        default:
            toastColor = 'rgba(0, 172, 70, 0.3)';
    }

    switch (position) {
        case 'top-right':
            toastContainer.classList.add('top-0', 'end-0');
            break;
        case 'bottom-right':
            toastContainer.classList.add('bottom-0', 'end-0');
            break;
        case 'top-left':
            toastContainer.classList.add('top-0', 'start-0');
            break;
        case 'bottom-left':
            toastContainer.classList.add('bottom-0', 'start-0');
            break;
        default:
            toastContainer.classList.add('top-0', 'end-0');
    }

    const toast = document.createElement('div');
    toast.className = `toast hide toast fade`;
    toast.setAttribute('role', 'alert');
    toast.setAttribute('aria-live', 'assertive');
    toast.setAttribute('aria-atomic', 'true');

    let toastContent = `
        <div class="toast-header" style="background-color:${toastColor}">
            <img class="rounded me-2" style="width:30px" src="template/riho/images/favicon.png" alt="profile">
            <strong class="me-auto">${textheader}</strong>
            <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body toast-dark">
           <i class="fa fa-bullhorn"></i> : ${message}
        </div>
    `;

    toast.innerHTML = toastContent;
    toastContainer.appendChild(toast);
    document.body.appendChild(toastContainer);

    const bsToast = new bootstrap.Toast(toast, { delay: duration });
    bsToast.show();
    toast.addEventListener('hidden.bs.toast', () => {
        toastContainer.remove();
    });
}

export default createToast;