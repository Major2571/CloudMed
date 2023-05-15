const vacinaSelect = document.getElementById('vacinaSelect');
const newVacinaInputContainer = document.getElementById('newVacinaInputContainer');
const nomeVacinaInput = document.getElementById('newNomeVacinaInput');

vacinaSelect.addEventListener('change', () => {
    if (vacinaSelect.value === '0') {
        nomeVacinaInput.disabled = false;
        newVacinaInputContainer.classList.remove('hidden');
    } else {
        nomeVacinaInput.disabled = true;
        newVacinaInputContainer.classList.add('hidden');
    }
});