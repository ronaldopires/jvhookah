<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{$PAG_HOME}"><i class="fa fa-home"></i> Home</a>
                    <span>Favoritos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
<div class="row no-gutters justify-content-center mt-4 my-4">
    <div class="col-lg-8 col-md-6 col-sm-auto">
        <h4 class="text-center">MEUS FAVORITOS</h4>
        <hr>
        <div class="col">
            <div class="card-group">
                {foreach $FAVORITOS item=F}
                <div class="card">
                    <form action="" method="POST">
                        <input type="hidden" name="pro_id" value="{$F.ID}">
                        <h4 class="card-header text-right"><button class="btn btn-default" name="removerFavorito" title="Remover Favorito"><i class="ti-close"></i></button></h4>
                    </form>
                    <div class="card-body">
                        <div class="row no-gutters">
                            <div class="col-3 mr-3">
                                <img class="card-img" src="{$F.IMG}" alt="{$F.IMG}">
                            </div>
                            <div class="col">
                                <h5 class="card-title"><b>{$F.NOME}</b></h5>
                                <h5 class="card-text mb-2">Categoria: {$F.CATE_NOME}</h5>
                                <h5 class="card-text mb-2">Sub Categoria: {$F.SUB_NOME}</h5>
                                <p class="card-text">{$F.DESC}</p>
                                <p class="card-text">Valor <span style="color: #e7ab3c; font-weight: bold;">R$ {$F.VALOR}</span> <span class="float-right"><button class="site-btn">Comprar</button></span></p>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Adicionado em {$F.DATA_FAVORITO}</small>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>