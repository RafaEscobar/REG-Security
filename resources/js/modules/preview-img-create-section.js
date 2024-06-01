export const previewImgCreateSection = () => {
    const temporalyImg = document.querySelector('#input-section-img');
    const previewArea = document.querySelector('#previewArea');
    console.log(temporalyImg);
    console.log(previewArea);
    temporalyImg.addEventListener('change', () => {
        if (temporalyImg.isDefaultNamespace.length == 0 || !temporalyImg.isDefaultNamespace) {
            previewArea.src = '';
            return;
        }
        previewArea.src = URL.createObjectURL(temporalyImg.files[0]);
    });
}