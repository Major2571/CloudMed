let uploadButton = document.getElementById('arquivo');
let previewContainer = document.getElementById('preview-container');
let chosenImage = document.getElementById('chosen-image');
let fileName = document.getElementById('file-name');
let fileInfo = document.getElementById('file-info');

uploadButton.onchange = () => {
    let file = uploadButton.files[0];
    if (file) {


        if (file.type === 'application/pdf') {
            let newEmbed = document.createElement('embed');
            newEmbed.setAttribute('src', URL.createObjectURL(file));
            newEmbed.setAttribute('type', file.type);
            newEmbed.setAttribute('width', '100%');
            newEmbed.setAttribute('height', '600px');
            previewContainer.innerHTML = '';
            previewContainer.appendChild(newEmbed);

            fileName.textContent = file.name;
            previewContainer.style.display = 'block';

            fileInfo.textContent = '';
            fileInfo.style.display = 'none';

            console.log('passei aqui 1')
        }

        else if (file.type.includes('image/')) {
            let reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => {
                let newImage = document.createElement('img');
                newImage.setAttribute('src', reader.result);
                previewContainer.innerHTML = '';
                previewContainer.appendChild(newImage);
            }
            fileName.textContent = 'Arquivo: ' + file.name;
            previewContainer.style.display = 'block';

            fileInfo.textContent = file.name;
            fileInfo.style.display = 'none';

            console.log('passei aqui 2')
        }

        else {
            previewContainer.style.display = 'none';
            fileInfo.textContent = 'Arquivo selecionado: ' + file.name;
            fileInfo.style.display = 'block';

            console.log('passei aqui 3')
        }


    } else {
        console.log('passei aqui 4')
        previewContainer.style.display = 'none';
        fileInfo.textContent = '';
        fileInfo.style.display = 'none';
    }
}
