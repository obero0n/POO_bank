<?php
include "template/header.php";
?>
<h1 class="m-5">Liste de tous les comptes</h1>
  <table class="table container">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">money</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
<?php foreach ($list as $key => $value): ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $value->getId();?></th>
        <td><a href="single?id=<?php echo $value->getId();?>"><?php echo $value->getName();?></a></td>
        <td><?php echo $value->getMoney();?></td>
        <td><a href="deleteAccount?id=<?php echo $value->getId(); ?>"><i class="fas fa-trash-alt"></i> </a> </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>

<?php
require "form/exempleForm.php";
include "template/footer.php";
?>
