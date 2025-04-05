function getDetail(link){
    fetch(link)
    .then(respone => respone.text())
    .then ( html =>{
         document.querySelector('.main').innerHTML = html;
         let navbarnya = document.getElementById('nav');
         if (navbarnya){
            navbarnya.classList.add('nav-bg')
         }else {
            alert('gagal')
         }
      }
    )
    .catch(error => alert('errornih ' + error))

}

//onclick="getDetail('app/view/detail.php')"