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
                <a class="card-link" style="text-decoration:none;" href="editarLista.php?id='.$lista['id'].'" >Editar</a>
                <a class="card-link" style="text-decoration:none; color: #f00;" href= "excluirLista.php?id='.$lista['id'].'">Excluir</a>
            </div>    
            </div>';
        }
    
         ?>
    </div>

    
