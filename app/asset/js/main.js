    


    document.querySelector('h1[onclick*="loginpage.html"]').addEventListener('click',function(){
        document.querySelector('.login').classList.remove('hidden')
        document.querySelector('.daftar').classList.add('hidden')
    });
    document.querySelector('h1[onclick*="signuppage.html"]').addEventListener('click',function(){
        document.querySelector('.login').classList.add('hidden')
        document.querySelector('.daftar').classList.remove('hidden')
    })
    function ubahHalaman(element){
        
    }