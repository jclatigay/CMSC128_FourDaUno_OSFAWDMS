let userBox = document.querySelector('.header .flex .account-box');

document.querySelector('#user-btn').onclick = () =>{
    userBox.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    userBox.classList.remove('active');
}

window.onscroll = () =>{
    userBox.classList.remove('active');
    navbar.classList.remove('active');
}

function cancel(){
	document.location ='update-page.php';
}

function back(){
    document.location ='dashboard.php';
}

function home(){
    document.location = 'home.php';
}

function insert(){
    document.location = 'insert.php';
}

function view(){
    document.location = 'view-page.php';
}
function search_back(){
    document.location = 'search.php';
}