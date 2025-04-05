let navbar = document.getElementById('nav');
window.addEventListener('scroll',function(){
    if (scrollY > 100){
        navbar.classList.add('nav-bg')
    }else (
        navbar.classList.remove('nav-bg')
    )
})
    
let btnLogin = document.getElementById('btnLogin')
    btnLogin.addEventListener('click',function(){
     window.location.href = "http://sewakaset.test/app/view/login.php"})