<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/CSS/template.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar1">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">
                <img src="/Assets/logo.png" alt="logo" style="width: 70px; height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> 
    
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item mx-2">
                <a class="nav-link text-light {{($title === '') ? 'text-info' : '' }}" aria-current="page" href="/work">Work</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link text-light{{($title === '') ? 'text-info' : '' }}"  href="/about">About</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link text-light {{($title === '') ? 'text-info' : '' }}" aria-current="page" href="/service">Service</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link {{$title === 'ideas' ? 'text-light border-bottom border-light' : 'text-light' }}" aria-current="page" href="/ideas">Ideas</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link text-light {{($title === '') ? 'text-info' : '' }}" aria-current="page" href="/careers">Careers</a>
                </li>
                <li class="nav-item mx-2">
                <a class="nav-link text-light {{($title === '') ? 'text-info' : '' }}" aria-current="page" href="/contact">Contact</a>
                </li>
            </ul>
            </div>
    </nav>
    <script type="text/javascript">
        var lastScrollTop = 0;
            navbar = document.getElementById("navbar1");
        window.addEventListener("scroll", function(){
            var scrollTop = window.pageYOfsset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop){
                navbar.style.top="-80px";
            }else {
                navbar.style.top="0";
            }
            lastScrollTop
        })
    </script>

    <div>
        @yield('isi')
    </div>

    

</body>
</html>