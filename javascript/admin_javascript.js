
const sidebar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main-content');

const toggleButton = document.querySelector('#toggle');

toggleButton.addEventListener('click', () => {
    sidebar.classList.toggle('menuMinimized'),
        mainContent.classList.toggle('menuMinimizedLayout');
})



const innovatorButton = document.querySelector('#innovatorButton');
const InnovatorContent = document.querySelector('#innovatorContent');

innovatorButton.addEventListener('click', (event) => {
    event.preventDefault();
    InnovatorContent.classList.add('InnovatorContentDisplayed');
})
