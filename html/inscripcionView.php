<!DOCTYPE html>
<html>
<head>
<title>Inscripcion</title>
</head>
<p>Inscripcion </p>
<body>
  <?php
  if (isset($_materias)){

  <form action="/inscripcionController.php" method="post">
   <br><select name="materia" form="carform"> ?>
     <?php
      $y = count($this->materias);
     for ($i=0;$i<$y;$i++){
       ?>
       <option value=<?=$this->materias[$i]["id"]?>><?= $this->materias[$i]["nombre"] ?></option>
   <?php } ?>

  </select>
   <input type="submit" value="Submit">

 </form>
}


</body>
</html>
