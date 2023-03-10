<?php
session_start();
header("Pragma: public");
header("Expires: 0");
$filename = "Lista de Usuarios.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
require "../seguridad.php";
require "../../mysql/Query.php";

function getUsuarios()
{
    $query = new Query();
    $rows = null;
    $sql = "SELECT * FROM `users` WHERE `band`= 1 ";
    $rows = $query->getAll($sql);
    return $rows;
}

$usuarios = getUsuarios();
?>
<table border="1">
    <tbody>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Fecha de Creacion </th>
        </tr>
        <?php 
            $i = 0;
            foreach($usuarios as $usuario){
                $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo strtoupper($usuario['name']) ?></td>
            <td><?php echo strtoupper($usuario['email']) ?></td>
            <td>
                <?php 
                if($usuario['role']){
                    echo "Administrador";
                }else{
                    echo utf8_decode("Atención al Ciudadano");
                }
                
                ?>
            </td>
            <td>
                <?php
                    $newDate = date("d-m-Y", strtotime($usuario['created_at']));
                    echo $newDate; 
                ?>
            </td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>