function getDetail(link){
    fetch(link)
    .then(respone => respone.text())
    .then ( html =>
         document.querySelector('.main').innerHTML = html
    )
    .catch(error => alert('errornih ' + error))
}
//onclick="getDetail('app/view/detail.php')"