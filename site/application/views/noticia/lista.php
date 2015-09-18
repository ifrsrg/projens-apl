<div class="conceitual intern">
            <div class="conceitual-carousel-container intern">
                <img src="{live}/media/front/img/01-interna.jpg">
            </div>
        </div>
        <section>
            <div class="col">
                <h1><b>Notícias</b></h1>                
                {texto_subtitulo_noticia}
            </div>
        </section>

        <section class="expanded nopadding projects">
            <div class="col">
                <ul class="projects-list">
                    <!-- BEGIN NOTICIAS -->
                    <li class="col-2 center">
                        <a href="{live}/noticias/acao/detalhe/id/{noticia_id}">
                            <img src="{noticia_marca}">
                            <h3>{noticia_nome}</h3>
                            <p>{noticia_texto}</p>
                        </a>
                    </li>
                    <!-- BEGIN NOTICIA_BREAK -->
                    <div class="clearfix"></div>
                    <!-- END NOTICIA_BREAK -->
                    <!-- END NOTICIAS -->
                </ul>
                <div class="clearfix"></div>                
            </div>
        </section>

        <!-- BEGIN MORE_NEWS -->
        <a class="bt-more-news" offset="6" href="#"><span>mais notícia</span></a>
        <!-- END MORE_NEWS -->