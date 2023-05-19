let uploadButton = document.getElementById('arquivo');
let previewContainer = document.getElementById('preview-container');
let chosenImage = document.getElementById('chosen-image');
let fileName = document.getElementById('file-name');
let fileInfo = document.getElementById('file-info');

uploadButton.onchange = () => {
    let file = uploadButton.files[0];
    if (file) {
        if (file.type.includes('image/')) {
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => {
                chosenImage.setAttribute('src', reader.result);
            }
            fileName.textContent = file.name;
            previewContainer.style.display = 'block';

            fileInfo.textContent = '';
            fileInfo.style.display = 'none';

        } else {
            previewContainer.style.display = 'none'; 
            fileInfo.textContent = 'Arquivo selecionado: ' + file.name;
            fileInfo.style.display = 'block';
        }
        
    } else {
        previewContainer.style.display = 'none';
        fileInfo.textContent = '';
        fileInfo.style.display = 'none';
    }
}
