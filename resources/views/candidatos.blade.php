<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('/css/candidatos.css') }}" rel="stylesheet">
    <link href="{{ url('/css/navbar.css') }}" rel="stylesheet">


    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light p-0" id="navbar">
        <div class="w-100">
            <div class="row m-0" style="height:80px; width:100vw">
                <a href="{{ route('main-page') }}" class="col-auto d-flex justify-content-center align-self-center ps-4 pe-4 border-end h-100" id="navbar-logo">
                   <img src="{{ url('/svg/navbar/navbar-brand.svg') }}" alt="Logo">
                </a>

                <div class="col-auto ms-2 d-flex justify-content-center align-self-center d-none d-lg-block">
                    <img src="{{ url('/svg/navbar/navbar-socials.svg') }}" alt="Socials" class="d-inline-block align-middle">
                </div>

                <div class="col pe-0 d-flex justify-content-end align-self-center">
                    <div class="row p-0 m-0 ">
                        <div class="col pe-3 d-flex text-align d-none d-md-block">
                            <span style="line-height:80px"> AUTÁRQUICAS⠀2021 </span>
                        </div>

                        <a href="{{ route('menu-page') }}" class="col p-0 m-0 ms-3 ps-4 pe-4 border-start h-100 d-flex align-self-center" id="menu-button" style="height:80px; line-height:80px" onclick=""> 
                            <img src="{{ url('/svg/navbar/navbar-menu.svg') }}" alt="Menu" class="d-inline-block align-middle me-3">
                            <span> MENU </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="row d-flex align-self-center h-100 m-0" id="content-1" style="width:100vw; height: 600px !important; padding-top: 80px !important;">
            <a href="{{ route('main-page') }}" class="col-auto d-none d-xl-flex align-self-center justify-content-center" style="height: 100%; padding-top: 50px; padding-bottom: 50px; width: 38vw">
                <img src="{{ url('/svg/content/mediumLogo.svg') }}" style="object-fit: contain !important;">
            </a>

            <div class="col d-flex align-items-center" style="background-color: rgb(243, 243, 243)" id="content-1-text">
                <div>
                    <div class="row" id="content-1-title">
                        CANDIDATOS
                    </div>

                    <div class="row" id="content-1-subtitle">
                        Câmara Municipal de Torres Vedras
                    </div>

                    <div class="row align-items-center mt-3" id="content-1-socials">
                        <div class="col-auto" style="width: 100px !important">
                            <hr style="border: 1px solid black">
                        </div>

                        <div class="col-auto">
                            PARTILHA
                        </div>

                        <div class="col-auto">
                            <img src="{{ url('/svg/navbar/navbar-socials.svg') }}" alt="Socials" class="d-inline-block align-middle">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-auto d-flex align-self-center m-0" id="content-2" style="width:100vw;">
            <div class="col-auto" id="content-2" style="width:94vw; box-shadow: 0px 0px 10px -4px #000;">
                <div id="candidato-card" style="background-color: #fff; width:50%; height:340px">
                    <div class="row m-0" style="height:100% !important">
                        <div class="col p-0 d-flex justify-content-center" style="height:100%; box-shadow: inset 0px 0px 90px -60px #000">
                            <img src="{{ url('/svg/content/mediumLogo.svg') }}" style="height:100%; object-fit:cover !important;">
                        </div>

                        <div class="col p-0 align-self-center">
                            <div style="padding-left: 15%;">
                                <h1 id="candidato-card-title">Nome do candidato</h1>
                                <p id="candidato-card-cargo">Cargo do candidato</p>

                                <div>
                                    <img src="{{ url('/svg/candidatos/arrow.svg') }}" alt="Socials" class="d-inline-block align-middle">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="col" style="background-color: rgb(243, 243, 243);">
            </div>
        </div>
    </div>
</body>