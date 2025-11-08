const draggableElements = document.querySelectorAll('.draggable');
const canvas = document.getElementById('editor-canvas');

draggableElements.forEach(el => {
    el.addEventListener('dragstart', (e) => {
        e.dataTransfer.setData('text/plain', e.target.dataset.type);
    });
});

canvas.addEventListener('dragover', (e) => {
    e.preventDefault();
});

canvas.addEventListener('drop', (e) => {
    e.preventDefault();
    const type = e.dataTransfer.getData('text/plain');
    const newElement = document.createElement(type);
    newElement.textContent = `New ${type.charAt(0).toUpperCase() + type.slice(1)}`;
    if (type === 'button') {
        newElement.classList.add('btn');
    }
    canvas.appendChild(newElement);
});
