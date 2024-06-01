export const submitCreateSectionForm = () => {
    const form = document.querySelector('#form-create-section');
    const btnSubmit = document.querySelector('#create-section-submit');
    btnSubmit.addEventListener('click', (event) => {
        event.preventDefault();
        form.submit();
    });
}