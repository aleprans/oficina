<?php
include_once('connect.php');

if (isset($_GET['id_cliente'], $connect)) {
    echo retorna($_GET['id_cliente'], $connect);

}

function retorna($cliente, $connect){

    $sql = "SELECT cliente from produtos where cliente = '$cliente';";
    $verifprod = mysqli_query($connect, $sql);
    $row = mysqli_num_rows($verifprod);

    if ($row <= 0) {
        $sql = "DELETE FROM clientes WHERE id_cliente = '$cliente'";
        $resultado = mysqli_query($connect, $sql);

        if ($resultado) {
            echo json_encode(['status'=>true, 'msg'=>'Cliente excluido com Sucesso!']);
            mysqli_close($connect);
        }else {
            echo json_encode(['status'=>false, 'msg'=>'Conexão Falhou!']);
            mysqli_close($connect);
        }
    }else {
        echo json_encode(['status'=>false, 'msg'=>'Cliente não pode ser excluido! Há produtos vinculados a ele.']);
        mysqli_close($connect);
    }
}
?>