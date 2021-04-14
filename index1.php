<?php
    include 'index.php';
?>

<?php
    $fio = $_POST['fio'];
    $adres = $_POST['adres'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    
    ?>
    

<table border="1"  cellpadding="5">
   <tr>
    <th>ФИО</th>
    <td> <? echo $fio ?> </td>
   </tr>
   <tr>
    <th>Адрес</th>
    <td> <? echo $adres ?></td>
  </tr>
    <tr>
    <th>Телефон</th>
    <td><? echo $tel ?></td>
  </tr>
    <tr>
    <th>email</th>
    <td><? echo $email ?></td>
  </tr>
 </table>