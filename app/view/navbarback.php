<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navBack</title>
    <link rel="stylesheet" href="../asset/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
     <nav class="w-full p-6 nav-bg">
            <i class="fa-solid fa-house text-2xl text-white " id="back" ></i>
     </nav>
     <script>
        let back = document.getElementById('back')
        back.addEventListener('click',function(){
            window.location.href = "http://sewakaset.test/";
            
        })
     </script>
</body>
</html>