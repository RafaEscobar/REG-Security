export const btnModal = () => {
    console.log('btnmodal excuteed');
    const btn = document.querySelector('#btn-modal');
    const closeBtn = document.querySelector('#close-btn');
    const modal = document.querySelector('#modal');
    const floatingBtnModal = document.querySelector('#floating-btn-modal');

    btn.addEventListener('click', () => {
        floatingBtnModal.classList.remove('element-show');
        floatingBtnModal.classList.add('element-hidden');
        modal.classList.add('scale-100');
    });
    closeBtn.addEventListener('click',() => {
        floatingBtnModal.classList.remove('element-hidden');
        floatingBtnModal.classList.add('element-show');
        modal.classList.remove('scale-100');
    });

}