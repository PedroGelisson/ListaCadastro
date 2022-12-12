<div id="pessoas"> 
    <?php
        require_once "dataBase.php";
        $sql="SELECT * FROM lista";
        $resultado=$conexao->query($sql);
        
        while($lista=$resultado->fetch_array()){
            echo '<div class="card" >
            <img class="card-img-top" src="'.$lista['foto'].'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">'.$lista['nome'].'</h5>
                <p class="card-text">'.$lista['email'].'</p>
                <a href="#" class="card-link" style="text-decoration:none;">Editar</a>
                <a href="#" class="card-link" style="text-decoration:none; color:#f00;">Excluir</a>
            </div>    
            </div>';
        }
    ?>
    </div>