<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('/css/movimento.css') }}" rel="stylesheet">
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

            <div class="col d-flex align-items-center" style="background-color: rgb(49, 187, 172)" id="content-1-text">
                <div>
                    <div class="row" id="content-1-title">
                        O MOVIMENTO
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

        <div class="row p-0 m-0" style="width: 100vw">
            <div class="col-auto" id="content-2" style="width:94vw; padding-top: 80px; box-shadow: 0px 0px 10px -4px #000;">
                <div class="row">
                    <h1 class="mb-4" id="content-2-title-1">O que é um movimento cívico?</h1>
                    <p class="mb-5" id="content-2-text-1">
                        A possibilidade de grupos de cidadãos apresentarem listas a órgãos autárquicos representa uma mudança no panorama do poder local. 
                        Um movimento cívico como o <span style="font-weight: 800">Unidos por Torres Vedras</span> abre-se à participação de todos, formalizando-se numa lista composta por cidadãos livres 
                        e independentes. Um pouco por todo o país, listas independentes têm apresentado resposta às necessidades e ambições das populações, 
                        alargando o debate público, reforçando a cidadania e permitindo a participação ativa dos cidadãos nos órgãos de poder.
                    </p>
                </div>

                <div class="row">
                    <h1 class="mb-4" id="content-2-title-1">O Nosso Movimento.</h1>
                    <p class="mb-5" id="content-2-text-1">
                        Torres Vedras é ponto central na produção agrícola do país, no cruzamento de rotas económicas, turísticas e culturais, 
                        com uma linha marítima de excelência, riquezas naturais únicas, um potencial enorme para ser referência na qualidade de vida.
                    </p>

                    <p class="mb-5" id="content-2-text-1">
                        A identidade de Torres Vedras faz-se dessa ambição constante de querer mais e melhor, nessa confiança de quem sabe ser capaz, 
                        que tem a competência para aproveitar todas as suas potencialidades e reúne a credibilidade para unir à sua volta quem queira abrir 
                        novos caminhos para o futuro do nosso concelho.  
                    </p>

                    <p class="mb-5" id="content-2-text-1">
                        No entanto, a gestão da nossa autarquia tem ficado para trás na resposta aos desafios colocados pelos novos tempos que vivemos. 
                        Os partidos não apresentam alternativas, afastados das pessoas e presos a interesses próprios. A população precisa de uma ideia de 
                        esperança no futuro.
                    </p>

                    <p class="mb-5" id="content-2-text-1">
                        Unidos por Torres Vedras é um movimento cívico que responde à necessidade coletiva de mudança na sociedade, 
                        caracterizando-se por servir e proteger os interesses das populações do concelho. Uma ação transformadora que envolva os cidadãos, 
                        que lhes permita a participação e envolvimento, que seja transparente e inovadora na forma de estar no serviço público.
                    </p>

                    <p class="mb-5" id="content-2-text-1">
                        Os desafios são enormes mas também muito estimulantes.  É tempo de nos unirmos, de ouvirmos quem sabe, reunir consenso e transformar. 
                        Criar uma visão de confiança, competência e credibilidade para que se possa ver, de forma planeada, o caminho a seguir. 
                        Somos um movimento aberto à participação de todos os cidadãos se queiram unir, de forma a, juntos, construirmos um futuro que é, 
                        de facto, possível!
                    </p>

                    <p class="mb-5" id="content-2-text-1">
                        Hoje em vez de partidos, seguimos unidos.
                    </p>
                    
                </div>
            </div>

            <div class="col" style="background-color: rgb(49, 187, 172);">
            </div>
        </div>

        <div class="row-auto m-0 d-flex justify-content-center align-self-center" id="content-3" style="width: 100vw;">
            <div class="row-auto h-100 p-4 d-flex align-self-center">
                <img src="{{ url('/svg/content/semitransparentLogo.svg') }}" alt="Menu" class="me-3" style="position:absolute;left:0px;">
                <div class="col align-self-center">
                    <div class="row">
                        <p id="content-3-title" class="d-flex justify-content-center text-center mb-0" style="z-index:100">Junte-se a nós.</p>
                        <p id="content-3-title" class="d-flex justify-content-center text-center mt-0" style="z-index:100">Unidos somos mais fortes!</p>

                    </div>

                    <div class="row">
                        <p id="content-3-text" class="text-center lh-lg" style="z-index:100"><span style="font-weight: 800">Porquê?</span> Porque Unidos participamos no futuro do nosso concelho. 
                            A construção do programa baseia-se numa ação transformadora que integra os cidadãos, que lhes permite a participação e envolvimento, 
                            de uma maneira transparente e inovadora na forma de estar no serviço público.  As suas ideias, ambições e projetos, vão fazer parte 
                            do futuro do concelho, integrando-se no debate que construirá em Torres Vedras um lugar melhor para todos os que aqui vivem.
                        </p>
                    </div>
                </div>  
            </div>            
        </div>
        
        <div class="row d-flex justify-content-center" style="background-color: rgb(245,245,245);">
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
                            <input type="email" class="form-control" id="content-4-inputtext" placeholder="unidos@gmail.com">
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
</body>