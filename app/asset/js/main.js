let login = document.getElementById('Login')
let daftar = document.getElementById('Daftar')
    function ubahHalaman(el){
        if (el === '../asset/html/loginpage.html'){
           login.classList.add('onClickKelas')
           daftar.classList.remove('onClickKelas')
        }else if(el === '../asset/html/signuppage.html') {
            daftar.classList.add('onClickKelas')
            login.classList.remove('onClickKelas')
        }
        fetch(el)
        .then(response => {
                if (!response.ok) {
                    throw new Error("HTTP error! Status: " + response.status);
                }
                return response.text();
            })
            .then(html => {
                    console.log("HTML Loaded:", html);
                    document.querySelector('.loginpage').innerHTML = html;
                })
                .catch(error => {
                    console.error("Gagal memuat halaman:", error);
                });
    }