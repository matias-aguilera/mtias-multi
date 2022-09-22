<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="registro.php" method="POST" enctype="multipart/form-data">      
          <label>nombre:</label> 
          <input type="text" name="nombre">
          <br></br>
          <label>apellido:</label> 
          <input type="text" name="apellido">
          <br></br>
          <label>foto:</label>
          <br></br>
          <input type="file" name="imagen">
          <br></br>
          <input type="submit" name="guardar" value="guardar">
</body>
</html>