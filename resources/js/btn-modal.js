export const btnModal = () => {
    console.log('btnmodal excuteed');
    const btn = document.getElementById('btn-modal');
    const closeBtn = document.getElementById('close-btn');
    const modal = document.getElementById('modal');

    btn.addEventListener('click', () => modal.classList.add('scale-100') );
    closeBtn.addEventListener('click',() => modal.classList.remove('scale-100') );
}