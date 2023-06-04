const togglerButton = document.querySelector('.button-toggler');

// button to change classes
const secondNavbar = document.querySelector('.second-navbar');
const sidebar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main-content');

togglerButton.addEventListener('click', () => {
    secondNavbar.classList.toggle('secondNavbarMenuMinimized');
    sidebar.classList.toggle('sidebarMinimized');
    sidebar.classList.toggle('sidebarMaximized');
    mainContent.classList.toggle('mainContentMenuMinimized');
})

// all button that an event listener is added
const dashBoardButton = document.querySelector('.dashboardButton');
const innovatorsButton = document.querySelector('.innovatorButton');
const mentorsButton = document.querySelector('.mentorsButton');
const adminsButton = document.querySelector('.adminsButton');
const registrationsButton = document.querySelector('.registrationsButton');
const settingsButton = document.querySelector('.settingsButton');
const profileButton = document.querySelector('.profileButton');
const logoutButton = document.querySelector('.logoutButton');
const addPatentButton = document.querySelector('.addPatentButton');

// all Html element that class attribute will be changed
const dashBoardContent = document.querySelector('.dashboard-content');
const innovatorsPage = document.querySelector('.innovatorsPage');
const mentorsPage = document.querySelector('.mentorsPage');
const adminsPage = document.querySelector('.adminsPage');
const registrationsPage = document.querySelector('.registrationsPage');
const settingsPage = document.querySelector('.settingsPage');
const profilePage = document.querySelector('.profilePage');
const patentContent = document.querySelector('.patentContent');


dashBoardButton.addEventListener('click', (event)=> {
    event.preventDefault();
    dashBoardContent.classList.remove('d-none');
    innovatorsPage.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    profilePage.classList.add('d-none');
    settingsPage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

innovatorsButton.addEventListener('click', (event)=> {
    event.preventDefault();
    innovatorsPage.classList.remove('d-none');
    dashBoardContent.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    profilePage.classList.add('d-none');
    settingsPage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

mentorsButton.addEventListener('click', (event)=>{
    event.preventDefault();
    mentorsPage.classList.remove('d-none');
    dashBoardContent.classList.add('d-none');
    innovatorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    profilePage.classList.add('d-none');
    settingsPage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

adminsButton.addEventListener('click', (event)=>{
    event.preventDefault();
    adminsPage.classList.remove('d-none')
    dashBoardContent.classList.add('d-none');
    innovatorsPage.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    profilePage.classList.add('d-none');
    settingsPage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

registrationsButton.addEventListener('click', (event)=>{
    event.preventDefault();
    registrationsPage.classList.remove('d-none');
    dashBoardContent.classList.add('d-none');
    innovatorsPage.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    profilePage.classList.add('d-none');
    settingsPage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

settingsButton.addEventListener('click', (event)=>{
    event.preventDefault();
    settingsPage.classList.remove('d-none');
    dashBoardContent.classList.add('d-none');
    innovatorsPage.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    profilePage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

profileButton.addEventListener('click', (event)=> {
    event.preventDefault();
    profilePage.classList.remove('d-none');
    dashBoardContent.classList.add('d-none');
    innovatorsPage.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    settingsPage.classList.add('d-none');
    patentContent.classList.add('d-none');
})

addPatentButton.addEventListener('click', (event)=> {
    event.preventDefault();
    patentContent.classList.remove('d-none');
    profilePage.classList.add('d-none');
    dashBoardContent.classList.add('d-none');
    innovatorsPage.classList.add('d-none');
    mentorsPage.classList.add('d-none');
    adminsPage.classList.add('d-none');
    registrationsPage.classList.add('d-none');
    settingsPage.classList.add('d-none');
})


