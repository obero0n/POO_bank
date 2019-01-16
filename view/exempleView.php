<?php
include "view/template/header.php";
?>

<?php echo $message; ?>
<a <?php setHref("login") ?>>Autre page</a>



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
        <th scope="row"><?php echo $value->getid();?></th>
        <td><?php echo $value->getName();?></td>
        <td><?php echo $value->getMoney();?></td>
        <td><a href="<?php  setHref("deleteAccount",["id" => $value['id']]); ?>" ><i class="fas fa-trash-alt"></i> </a> </td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>

<?php var_dump($value); ?>



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

<?php
include "view/template/footer.php"
?>
