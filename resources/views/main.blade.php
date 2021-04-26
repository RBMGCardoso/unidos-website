<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('/css/main.css') }}" rel="stylesheet">


    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<script>
    function closeCookies()
    {
        var cookieDiv = document.getElementById('cookies');

        cookieDiv.style.opacity = "0%";
    }
</script>

<body style="padding:0; margin:0">
    <nav class="navbar navbar-light bg-light p-0" id="navbar">
        <div class="w-100">
            <div class="row" style="height:80px; width:100vw">
                <a href="#" class="col-auto d-flex justify-content-center align-self-center ps-4 pe-4 border-end h-100" id="navbar-logo">
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

                        <a href="#" class="col p-0 m-0 ms-3 ps-4 pe-4 border-start h-100 d-flex align-self-center" id="menu-button" style="height:80px; line-height:80px" onclick=""> 
                            <img src="{{ url('/svg/navbar/navbar-menu.svg') }}" alt="Menu" class="d-inline-block align-middle me-3">
                            <span> MENU </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="content p-0 m-0" style="background-color: rgb(255,255,255); padding-top:80px !important;">
            <div class="row m-0" id="content-1" style="min-height: 600px; width: 100vw">
                <div class="col d-flex align-self-center justify-content-center">
                    <div class="row-auto">
                        <div class="row d-flex align-self-center justify-content-center">
                            <div class="col ms-5 me-5 d-flex align-self-center justify-content-center">
                                <img src="{{ url('/svg/content/largeLogo.svg') }}" class="d-none d-sm-none d-lg-block">
                                <img src="{{ url('/svg/content/mediumLogo.svg') }}" class="d-none d-xs-block d-sm-block d-lg-none">
                            </div>

                            <div class="col-auto ms-2 d-flex align-self-center justify-content-center" id="content-1-text">
                                <div class="col-auto">
                                    <div class="row-auto">
                                        <span style="color: black">Hoje, em vez de</span>
                                    </div>

                                    <div class="row-auto">
                                        <span style="color: black">partidos, seguimos </span>
                                    </div>

                                    <div class="row-auto">
                                        <span style="color: rgb(255,80,80)"> Unidos. </span>
                                    </div>

                                    <div class="row-auto mt-2">
                                        <span id="button1-content-1" class="border border-2 p-4 pe-4 ps-4" style="margin-bottom: 100px !important">Junte-se a nós</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="col-auto d-flex justify-content-end d-none d-lg-block" style="padding: 0px;">
                    <img src="{{ url('/imgs/content/faixasColoridas.png') }}" style="width: 390px; height: 600px">
                </div>
            </div>

            <div class="row-auto m-0 d-flex justify-content-center align-self-center" id="content-2" style="width: 100vw;">
                <div class="col align-self-center">
                    <div class="row">
                        <p id="content-2-title" class="d-flex justify-content-center text-nowrap">O MOVIMENTO</p>
                    </div>

                    <div class="row">
                        <p id="content-2-text" class="text-center lh-lg"> Hoje, Torres Vedras precisa de mais. Mais liderança, mais visão de futuro, estratégica, inteligível, geradora de emprego e de esperança.  Com coragem e liberdade, respondemos afirmativamente, fundando um movimento cívico que exige um melhor futuro para o concelho de Torres Vedras, com uma Câmara Municipal que tenha como referência servir e proteger.</p>
                    </div>

                    <div class="row-auto d-flex justify-content-center">
                        <span id="button1-content-2" class="border border-2 p-4 pe-5 ps-5 mt-3 text-center" style="min-width: 300px">Conheça o Movimento</span>
                    </div>
                </div>              
            </div>

            <div class="row-auto m-0 d-flex justify-content-center align-self-center" id="content-3" style="width: 100vw;">
                <div class="row-auto h-100 p-4 d-flex align-self-center">
                    <img src="{{ url('/svg/content/semitransparentLogo.svg') }}" alt="Menu" class="me-3" style="position:absolute;left:0px;">
                    <div class="col align-self-center">
                        <div class="row">
                            <p id="content-3-title" class="d-flex justify-content-center text-center" style="z-index:100">O nosso programa baseia-se numa ação transformadora que integra os cidadãos, que lhes permite a participação e envolvimento, transparente e inovador na forma de estar no serviço público.</p>
                        </div>

                        <div class="row">
                            <p id="content-3-text" class="text-center lh-lg" style="z-index:100">Preencha no formulário aquilo que quer ver e o que não quer ver no nosso concelho, freguesia, bairro ou rua. Unidos, saberemos responder ao desafio.</p>
                        </div>
                    </div>  
                </div>            
            </div>

            <div class="row-auto m-0 d-flex justify-content-center align-self-center" id="content-4" style="width: 100vw;">
                <div id="content-4-box">
                    <div class="row m-0 p-0">
                        <div class="col d-flex justify-content-center align-self-center" id="content-4-text"  style="line-height:100px">
                            <div>
                                O que <span style="color: rgb(49, 187, 172)">quero ver</span> na minha freguesia
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center align-self-center" id="content-4-text" style="background-color: rgb(49, 187, 172); line-height:100px">
                            <div class="d-none d-xl-block" style="opacity: 70%">
                                O que <span style="color:white">não quero ver</span> na minha freguesia
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="content-4-container">
                            <form>
                                <div class="row">
                                    <div class="col-sm mt-4">
                                        <label class="form-label">Nome (opcional)</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" id="content-4-inputtext" placeholder="Primeiro e último nome">
                                    </div>

                                    <div class="col-sm mt-4">
                                        <label class="form-label">Data de Nascimento (opcional)</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" id="content-4-inputtext" placeholder="DD/MM/AAAA">
                                    </div>  
                                </div>

                                <div class="row">
                                    <div class="col-sm mt-4">
                                        <label class="form-label">Freguesia</label>
                                        <select class="form-control">
                                            <option>Silveira</option>
                                        </select>
                                    </div>

                                    <div class="col-sm mt-4">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="content-4-inputtext" placeholder="name@example.com">
                                    </div>  
                                </div>

                                <div class="row">
                                    <div class="col mt-4">
                                        <label class="form-label">Mensagem</label>
                                        <textarea class="form-control" style="height:200px; resize: none" placeholder="Escreva aqui o que quer ver na sua freguesia..."></textarea>
                                    </div>                                  
                                </div>
                                
                                <div class="row mt-5">
                                    <div class="col d-flex align-self-center" id="content-4-checkbox-termos">
                                        <input type="checkbox" class="me-2">
                                            <p>Li e aceito a <span>Política de Privacidade</span></p>                                         
                                        </input>
                                    </div>    

                                    <div class="col-auto">
                                       <button class="btn p-4 pe-5 ps-5 shadow-none" id="content-4-btn">Enviar</button>
                                    </div>                                 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>

            <div class="row-auto m-0 d-flex justify-content-center align-self-center" id="content-5" style="width: 100vw;">
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

            <div class="row-auto m-0 d-flex justify-content-end align-self-center" id="content-6" style="width:100vw">
                <img src="{{ url('/imgs/content/smallFaixasColoridas.png') }}" class="m-0 p-0" alt="Menu" style="width: 390px">
            </div>
    </div>

    <div class="row-auto d-flex align-self-center ps-5 pe-5" id="cookies" style="line-height:80px; width:100vw !important; z-index:100">
        <div class="col ps-5">
            <p><span style="font-weight: bolder">Este site utiliza cookies. </span><span style="font-weight: normal"> Estará a consentir a sua utilização. </span><span style="font-weight: normal; text-decoration: underline">Saber mais</span></p>
        </div>

        <div class="col me-5 d-flex justify-content-end">        
            <button class="btn p-3 pe-5 ps-5 shadow-none" id="cookies-btn" onclick="closeCookies()">Enviar</button>      
        </div>        
    </div>
</body>
</html>