export const submitCreateSectionForm = () => {
    const form = document.querySelector('#form-create-section');
    const btnSubmit = document.querySelector('#create-section-submit');
    btnSubmit.addEventListener('click', (event) => {
        form.querySelector("button[type='submit']").click();
        /*
        event.preventDefault();
        ( form.checkValidity() ) ??  form.submit();
        */
    });
}
