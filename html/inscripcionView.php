<!DOCTYPE html>
<html>
<head>
<title>Inscripcion</title>
</head>
<p>Inscripcion </p>
<body>



  <?php
  if (!isset($this->valor)) {
    ?>
    <h1>ELEGI UNA MATERIA FLACO  </h1>
    <form action="/alumno-inscripcion" method="post">
     <br><select name="catedra">
<?php
      $y = count($this->materias);
     for ($i=0;$i<$y;$i++){
       ?>
       <option value=<?=$this->materias[$i]["id"]?>><?= $this->materias[$i]["nombre"] ?></option>
   <?php } ?>

  </select>
   <input type="submit" value="Submit">

 </form>

<?php } ?>

<?php
if (isset($this->valor)){ ?>
  <form action="../controllers/inscripcionController.php" method="post">
   <br><select name="inscripcion">
     <?php
           $y = count($this->valor);
          for ($i=0;$i<$y;$i++){
            ?>
            <option value=<?=$this->valor[$i]["id"]?>><?= $this->valor[$i]["turno"] ?></option>
        <?php } ?>

       </select>
       <input type=hidden name=carrerita value=<?=$this->valor[0]["id_materia"]?>>
        <input type="submit" value="Submit">

      </form>



<?php
}
?>




</body>
</html>
