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
        <th scope="col">update</th>

      </tr>
    </thead>
<?php foreach ($list as $key => $value): ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $value->getId();?></th>
        <td><a href="single?id=<?php echo $value->getId();?>"><?php echo $value->getName();?></a></td>
        <td><?php echo $value->getMoney();?></td>
        <td><a href="deleteAccount?id=<?php echo $value->getId(); ?>"><i class="fas fa-trash-alt"></i> </a> </td>
        <td> <a href="#"><i class="fas fa-pen-nib"></i></a> </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>

<<<<<<< HEAD



<h2>Add ACCOUNT</h2>
<form class="container" method="post" action="">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>money</label>
    <input type="number" class="form-control" name="money">
  </div>
  <input type="submit" name="" value="Valide">
</form>



=======
>>>>>>> 649b4f85affb27f83e4c1f2131d814d023bcaf4c
<?php
require "form/exempleForm.php";
include "template/footer.php";
?>
