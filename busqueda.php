<?php
  $nombre = $_POST['busqueda'];
  include "Conexion.php";
?>

<?php
            $select_especifico="SELECT * FROM libros where nombre='$nombre'";
            $result1=mysqli_query($conn,$select_especifico);
            
            ?>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" />
    
<body>
<div class="field" id="searchform">
<form action="busqueda.php" method="POST">
  <input type="text" name="busqueda" id="searchterm" placeholder="what are you searching for?" />
  
  <button type="sumbit" id="search">Find!</button>
  </form>
</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <div class="page-content">

            <?php
            $sql="SELECT * from libros";
            $result=mysqli_query($conn,$sql);
            while($mostrar=mysqli_fetch_array($result1)){
            ?>
            <div  class="product-container">
                <h3><?php echo $mostrar['nombre'] ?></h3>
                <img class="foto" src="<?php echo $mostrar['portada'] ?>"/>
                        <p></p><h1 aling="left"><?php echo $mostrar['reseña'] ?></h1>  </p>
                <button class="button-add" >Comprar</button>                  
                    
                </div>
                <?php
            
        }
        
        ?>
        </div>
        
        
        


    </body>
