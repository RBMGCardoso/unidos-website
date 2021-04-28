<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('/css/menu.css') }}" rel="stylesheet">
    <link href="{{ url('/css/navbar.css') }}" rel="stylesheet">


    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light p-0" id="navbar" style="transform: TranslateY(-1px)">
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

                        <a href="{{ route('main-page') }}" class="col p-0 m-0 ms-3 ps-4 pe-4 border-start h-100 d-flex align-self-center" id="menu-button" style="height:80px; line-height:80px" onclick=""> 
                            <span><span style="font-weight:100; font-size: 1.3em; color: #444">x</span> FECHAR </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="content" style="height:96vh">
        <div class="row d-flex align-self-center h-100 m-0" id="content-1" style="width:100vw">
            <a href="{{ route('main-page') }}" class="col-auto d-none d-xl-flex align-self-center justify-content-center" style="height: 100%; padding-top: 250px; padding-bottom: 250px; width: 38vw">
                <img src="{{ url('/svg/content/mediumLogo.svg') }}" style="object-fit: contain !important;">
            </a>

            <div class="col d-flex align-items-center" style="background-color: rgb(245,245,245); height:100%;">
                <div>
                    <div class="row menu-tag">
                        <div class="col-auto m-0" style="width:100px">
                            <hr style="border: 1px solid black">
                        </div>

                        <div class="col-auto m-0 ms-3 d-flex align-self-center">
                            <div class="row ">MENU</div>
                        </div>
                    </div>

                    <a href="{{ route('movimento-page') }}" class="row menu-opt">O MOVIMENTO</a>
                    <a class="row menu-opt">PROGRAMA ELEITORAL</a>
                    <a href="{{ route('candidatos-page') }}" class="row menu-opt">CANDIDATOS</a>
                    <a class="row menu-opt">AGENDA</a>
                    <a href="{{ route('movimento-page') }}" class="row-auto mt-5">
                            <span id="button1-content-1" class="border border-2 p-4 pe-4 ps-4" style="margin-bottom: 100px !important; width:">Junte-se a nós</span>                  
                    </a >
                </div>
            </div>
        </div>

        <div class="row-auto m-0 d-flex justify-content-center align-self-center" id="content-2" style="width: 100vw;">
                <div style="width: 85vw;">
                    <div class="row">
                        <div class="col-auto">Política de Proteção de Dados e Privacidade</div>
                        <div class="col-auto">▪</div>
                        <div class="col-auto">Termos e Condições Gerais de Utilização</div>
                        <div class="col-auto">▪</div>
                        <div class="col-auto">Política de Cookies</div>

                        <div class="col d-flex justify-content-end">
                            <span>Por não Slingshot 2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row-auto m-0 d-flex justify-content-end align-self-center" id="content-3" style="width:100vw">
                <img src="{{ url('/imgs/content/smallFaixasColoridas.png') }}" class="m-0 p-0" alt="Menu" style="width: 390px">
            </div>
    </div>
</body>
</html>