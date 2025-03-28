@include('layaut.heat')
    <body>
        <div>
            @include('componentes.menu')
        </div>
        <section class="tips seccion-text">
            <div>
                <a href="{{route('batasIgnifugasMangasDes')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">BATAS IGNIFUGAS CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Batas-ignifugas-con-mangas-desprendibles/Bata-ignifuga-con-mangas-desprendibles-frente.png" alt="BATAS-IGNIFUGAS-CON-MANGAS-DESPRENDIBLES">
                    </div>
                </a>
            </div>
            <div>
                <a href="{{route('camisolasMangasDes')}}" class="tarjeta-rectangular-0">
                    <h2 class="color-grey">CAMISOLAS CON MANGAS DESPRENDIBLES</h2>
                    <div class="color-greys tam-ch-t">
                        <img class="" src="../img/productos/Pagina-Uniformes/Camisola-de-trabajo-manga-desprendible/Camisola-mangas-desprendibles-flotando.png" alt="CAMISOLAS-CON-MANGAS-DESPRENDIBLES" >
                    </div>
                </a>
            </div>
        </section>
        <section>
            <div class='fond-color tips'>
                <div class='tip-grips'>
                    <div class="sobreado tam-grand">
                        <picture>
                            <img class="tam-grand-img" src='../img/productos/Pagina-Uniformes/Camisola-de-trabajo/Camisola-ginda-frente.png' alt="img grande" />
                        </picture>
                    </div>
                    <div class="tips">
                        <div class="sobreado tam-ch">
                            <picture>
                                <img src='../img/productos/Pagina-Uniformes/Camisola-de-trabajo/Camisola-ginda-frente-primer-plano.png' alt="img pequeña 1" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisola-de-trabajo/Camisola-ginda-frente-lateral.png' alt="img pequeña 2" />
                            </picture>
                        </div>
                        <div class="sobreado tam-ch">
                            <picture >
                                <img src='../img/productos/Pagina-Uniformes/Camisola-de-trabajo/Camisola-ginda-trasera.png' alt="img pequeña 3" />
                            </picture>
                        </div>
                    </div>
                </div>
                <div class='seccion-text espas'>
                    <div class='esp-centr'>
                        <h1 class='titulos-prod colors-narj'>
                            <strong>B2B CAMISOLAS DE TRABAJO</strong>
                        </h1>
                        <p class='fond-color-text acomm'>
                            Las Camisolas de Trabajo están diseñadas para 
                            ofrecer comodidad, durabilidad y protección a 
                            tus colaboradores. Confeccionadas con tela 
                            resistente y duradera, son ideales para un 
                            uso intensivo. Estas camisolas cuentan con 
                            dos prácticas bolsas en el pecho, perfectas 
                            para llevar lo necesario. Son la elección 
                            ideal para desempeñar el trabajo de forma 
                            cómoda y segura, disponibles en una variedad 
                            de colores.
                        </p>
                        <div class='position-info-color tip-flex'>
                            <div class='divv'>
                                <h3><strong>Composición</strong></h3>
                                <ul>
                                    <li>100% Algodón</li>
                                    <li>65% Algodón 35% Poliéster</li>
                                    <li>20% Algodón 80% Poliéster</li>
                                </ul>
                            </div>
                            <div class='divv'>
                                <h3><strong>Colores:</strong></h3>
                                <div class='tip-flex tip-flexes'>
                                    <div class='circle blue'></div>
                                    <div class='circle redd'></div>
                                    <div class='circle purple'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section>
            @include('componentes.form')
        </section>
        <div>
            <div>
                @include('componentes.whatsButon')
                @include('componentes.foter')
            </div>
        </div>
    </body>
</html>