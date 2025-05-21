<?php
    include('conn.php');
    include('protect.php');
    $id = $_SESSION['id'];
    $postagem_id = $_POST['postagem_id'];
    $sql = "SELECT * from like_postagem WHERE usuario_id = $id AND postagem_id = $postagem_id";
    $result = $conn->query($sql);
    if($result->num_rows == 0 ){

    $stmt = $conn->prepare("INSERT INTO like_postagem(usuario_id,postagem_id)values (?,?)");
    $stmt->bind_param('ii',$id,$postagem_id);
    $stmt->execute();
    $stmt2 = $conn->prepare("UPDATE postagem SET num_like = num_like + 1 WHERE postagem_id = ?");
    $stmt2->bind_param("i", $postagem_id); 
    $stmt2->execute();
    }

    $sqlE = "SELECT especialista_id from especialistas WHERE usuarios_id = '$id'";  
    $resultE = $conn->query($sqlE);
    $sqlA = "SELECT admin_id from admin WHERE usuarios_id = '$id'";  
    $resultA = $conn->query($sqlA);
    $valorA = $resultA->num_rows;
    $valorE = $resultE->num_rows;
    if($valorA > 0 ){
        header('location: feedadmin.php');
    }
    else if($valorE > 0 ){
        header('location: feedespecialista.php');
    }else{
        header('location: feed.php');
    }

?>