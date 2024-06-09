import { buildModalEvents } from "./modules/btn-modal";
import { previewImgCreateSection } from "./modules/preview-img-create-section";
import Lottie from "lottie-web";

buildModalEvents();
previewImgCreateSection();

document.addEventListener('DOMContentLoaded', () => {
    const message = document.getElementById('session-message');

    if (message) {
        message.classList.remove('block');
        message.classList.add('hidden');
        setTimeout(() => {
            message.classList.remove('hidden');
            message.classList.add('flex');
            message.classList.add('block');
            message.classList.add('fade-in')
        }, 500);
        setTimeout(() => {
            message.classList.remove('block');
            message.classList.add('fade-out')
        }, 5000);
        setTimeout(() => {
            message.classList.add('hidden');
        }, 5500);
    }
});

Lottie.loadAnimation({
    container: document.querySelector('#empty-state'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'storage/animations/empty-state-one.json'
});