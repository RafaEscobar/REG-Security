import Lottie from "lottie-web";

export const loadLotties = () => {
    Lottie.loadAnimation({
        container: document.querySelector('#empty-state'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'storage/animations/empty-state-one.json'
    });
}