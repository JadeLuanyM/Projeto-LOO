<?php
        function insereUsuario(){
        if (sizeof($_POST) == 0) return; 
        $nome =  $_POST['nome']; 
        $datanasc =  $_POST['datanasc'];
        $rg =  $_POST['rg'];
        $cpf =  $_POST['cpf'];
        $endereco =  $_POST['endereco'];
        $numero =  $_POST['numero'];
        $cep =  $_POST['cep'];
        $bairro =  $_POST['bairro'];
        $cidade =  $_POST['cidade'];
        $estado =  $_POST['estado'];
        $tel =  $_POST['tel'];    
        $usuario =  $_POST['usuario'];
        $email =  $_POST['email'];
        $senha =  $_POST['senha'];
        
     $conbd = new mysqli ('localhost','root','', 'base_dados_loo');
     $ins = "INSERT INTO tabusuario (nome, datanasc, rg, cpf, endereco, numero, cep, bairro, cidade, estado, tel, email, usuario, senha) VALUES ('$nome','$datanasc','$rg','$cpf','$endereco','$numero','$cep','$bairro','$cidade','$estado','$tel','$email','$usuario','$senha')";
     $conbd -> query ($ins);
    
     /*  $conbd = new msqli ('localhost','root','', 'base_dados_loo');
        $ins = "INSERT INTO tabusuario1 (nome, numero, datanasc) VALUES ('Jade', 24576, 21032002)";    
        $conbd -> query ($ins);*/
    }
    function listaUsuario(){
        $conbd = new mysqli ('localhost','root','', 'base_dados_loo');
        $sel = "SELECT * FROM tabusuario";
        $rs = $conbd->query($sel);
        $html = '<table class="table">
         <thead>
         <tr>
         <th scope="col">Nome</th>
         <th scope="col">Data de Nascimento</th>
         <th scope="col">RG</th>
         <th scope="col">CPF</th>
         <th scope="col">Endereço</th>
         <th scope="col">Numero</th>
         <th scope="col">CEP</th>
         <th scope="col">Bairro</th>
         <th scope="col">Cidade</th>
         <th scope="col">Estado</th>
         <th scope="col">Telefone</th>
         <th scope="col">Email</th>
         <th scope="col">Usuário</th>
         <th scope="col">Senha</th>
         <th></th>
         </tr>
         </thead>
         <tbody>';
   while($row = $rs->fetch_assoc()){
     $html .= '<tr>';
     $html .= '<td>'.$row['nome'].'</td>';   
     $html .= '<td>'.$row['datanasc'].'</td>';   
     $html .= '<td>'.$row['rg'].'</td>';   
     $html .= '<td>'.$row['cpf'].'</td>';   
     $html .= '<td>'.$row['endereco'].'</td>';
     $html .= '<td>'.$row['numero'].'</td>';
     $html .= '<td>'.$row['cep'].'</td>';
     $html .= '<td>'.$row['bairro'].'</td>';
     $html .= '<td>'.$row['cidade'].'</td>';
     $html .= '<td>'.$row['estado'].'</td>';
     $html .= '<td>'.$row['tel'].'</td>';
     $html .= '<td>'.$row['email'].'</td>';  
     $html .= '<td>'.$row['usuario'].'</td>';
     $html .= '<td>'.$row['senha'].'</td>';  
     $html .='<td>'.getActionButtons($row['id']).'</td>';
     $html .= '<tr>';
    };
    $html .='</tbody></table>';
    return $html;    
    } 

function getActionButtons($id){
     $html = '<a href="'.BASEURL.'produtos/visualizar.php?id='.$id.'"><i class="fas fa-eye mr-3 text-primary"></i></a>';
     $html .='<a href="'.BASEURL.'produtos/editar.php?id='.$id.'"<i class="far fa-edit mr-3 text-warning"></i></a>';
     $html .='<a href="'.BASEURL.'produtos/deletar.php?id='.$id.'"<i class="fas fa-trash mr-3 text-danger"></i></a></td>';
    return $html;
}
function dadosProduto($id){
    $sel = "SELECT * FROM tabproduto WHERE id = $id";
    $conbd = new mysqli('localhost', 'root','', 'base_dados_loo2');
    $rs = $conbd->query($sel);
    $produto = $rs->fetch_assoc();
    return $produto;
    } 
function editarProduto($id){
    if (sizeof($_POST) > 0) {
     $nome = $_POST['nome'];
     $codigo = $_POST['codigo'];
     $marca = $_POST['marca'];
     $descricao = $_POST['descricao'];
     $preco = $_POST['preco'];


 $alt = "UPDATE tabproduto SET nome = '$nome', codigo= '$codigo', marca ='$marca', descricao='$descricao',
preco='$preco' WHERE id = $id";
 $conbd = new mysqli('localhost','root','','base_dados_loo2');
 $conbd -> query($alt);
    }
}
function removeProduto($id){
 $del = "DELETE FROM tabproduto where id = $id";
 $conbd = new mysqli ('localhost','root','','base_dados_loo2');
 $conbd -> query($del);

 //header('Location: '.BASEURL.'usuario');
}
    
    
?>