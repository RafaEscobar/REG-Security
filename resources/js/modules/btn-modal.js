let btn = document.querySelector('#btn-modal');
let closeBtn = document.querySelector('#close-btn');
let modal = document.querySelector('#modal');
let floatingBtnModal = document.querySelector('#floating-btn-modal');

export const buildModalEvents = () => {
    //* Abrir modal y desaparecer floatingBtn
    btn.addEventListener('click', () => _addActionsToTheEvent('open-modal'));
    //* Cerrar modal y abrir floatingBtn
    closeBtn.addEventListener('click', () => _addActionsToTheEvent('close-modal') );
}

const _addActionsToTheEvent = (type) => {
    floatingBtnModal.classList.remove(type == 'open-modal' ? 'element-show' : 'element-hidden');
    floatingBtnModal.classList.add(type == 'open-modal' ? 'element-hidden' : 'element-show');
    (type == 'open-modal') ?
        modal.classList.add('scale-100') :
        modal.classList.remove('scale-100');
}