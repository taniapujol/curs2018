<div class="col-sm">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="obras/<?=$categoria?>/<?=$row['caratula']?>" alt="Card image cap">
        <div class="card-body">
            <h3 class="card-title text-uppercase text-truncate">
                <?=$row['nombre']?>
            </h3>
            <h5 class="card-text">
                <?=$row['autor']?>
            </h5>
            <?php 
            switch ($_SESSION['usuario']['tipo']) {
                // El user tipo admin tiene los botones todos activados
                case 'admin': ?>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal" data-envio="<?=$row['id']?>" data-seccion="ver">VER</button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal" data-envio="<?=$row['id']?>" data-seccion="eliminar"><i class="material-icons">delete_outline</i></button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal" data-envio="<?=$row['id']?>" data-seccion="editar"><i class="material-icons">create</i></button>
                <?php break;
                case 'usuario': ?>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Modal" data-envio="<?=$row['id']?>" data-seccion="ver">VER</button>
                <?php break; 
            }?>
            <h6 class="text-center">Ejemplares disponibles
                <span class="badge badge-secondary text-right"><?=$row['copia']?></span>
            </h6>
        </div>
    </div>
</div>