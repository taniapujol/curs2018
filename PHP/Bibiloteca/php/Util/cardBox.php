<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="obras/<?=$categoria?>/<?=$row[ 'caratula']?>" alt="Card image cap">
        <div class="card-body">
            <h3 class="card-title text-uppercase text-truncate">
                <?=$row['nombre']?>
            </h3>
            <h5 class="card-text">
                <?=$row['autor']?>
            </h5>
            <a href="#" class="btn btn-dark btn-block" onclick="Ver(<?=$row['id_obra']?>)">VER</a>
            <hr>
            <h6 class="text-center">Ejemplares disponibles
                <span class="badge badge-secondary text-right"><?=$row['copia']?></span>
            </h6>
        </div>
    </div>
</div>