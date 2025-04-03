 
   let Login = document.getElementById('Login')
   let Daftar = document.getElementById('Daftar')
   Login.addEventListener('click',function(){
      document.querySelector('.login').classList.remove('hidden'); 
      document.querySelector('.daftar').classList.add('hidden')
      Login.classList.add('isSelected')
      Daftar.classList.remove('isSelected')
    });
    Daftar.addEventListener('click',function(){
        document.querySelector('.login').classList.add('hidden')
        document.querySelector('.daftar').classList.remove('hidden')
        Login.classList.remove('isSelected')
        Daftar.classList.add('isSelected')
    })