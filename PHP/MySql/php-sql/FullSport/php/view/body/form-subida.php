<?php 
if($subsec=="upload" && isset($_POST['uploading'])){
	if(uploadFiles($_POST['deportes'])==true){ echo "File OK uploaded ";} 
	else{ echo "File NoT uploaded ";} 
}elseif ($subsec=="experience" && isset($_POST['uploading-Exp'])) {
   if(uploadFiles($_POST['deportes'])==true){ echo "File OK uploaded ";} 
	else{ echo "File NoT uploaded ";} 
}
else{
    if (($_SESSION['usuario']['tipo']=='admin') && ($_POST['seccio']=='upload')) {?>
       <div class="form-subida">
            <form action="index.php" method="post" class="form" enctype="multipart/form-data">
                <label for="estaciones"> ELEGIR TIPO DE DEPORTE</label>
                <br>
                <div class="radios">
                    <input type="radio" name="sec" value="pelis" CHECKED>AGUA
                    <input type="radio" name="sec" value="series">AIRE
                    <input type="radio" name="sec" value="libros">MONTAÑA
                </div>
                <br>
                <label for="archivo"> ARCHIVO : </label>
                <input type="file" name="archivo" id="archivo" required>
                <br>
                <label for="imagen"> IMAGEN : </label>
                <input type="file" name="imagen" id="imagen" required>
                <br>
                <input type="submit" name="uploading">
            </form>
        </div>  
    <?php } elseif (($_SESSION['usuario']['tipo']=='admin') && ($_POST['seccio']=="experience")) {?>
        <div class="form-subida">
            <form action="index.php" method="post" class="form" enctype="multipart/form-data">
                <label for="experiencia"> Tu Experiencia</label>
                <br>
                <textarea name="des_experiencia" id="experiencia" cols="100" rows="20"></textarea><br>
                <input type="submit" name="uploading-Exp">
            </form>
        </div>  
    <?php } elseif (($_SESSION['usuario']['tipo']=='standard') && ($_POST['seccio']=="experience")) {?>
        <div class="form-subida">
            <form action="index.php" method="post" class="form" enctype="multipart/form-data">
                <label for="experiencia"> Tu Experiencia</label>
                <br>
                <textarea name="des_experiencia" id="experiencia" cols="50" rows="50"></textarea>
                <input type="submit" name="uploading-Exp">
            </form>
        </div> 
    <?php } ?>     
<?php } ?>