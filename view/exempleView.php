<?php
include "view/template/header.php";
?>

<?php echo $message; ?>
<a <?php setHref("login"); ?>>Autre page</a>



  <table class="table container">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">money</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
<<<<<<< HEAD

=======
>>>>>>> 60dc6cd24599fc5cb8407e925a0044c5d3323934
<?php foreach ($list as $key => $value): ?>
    <tbody>
      <tr>
        <th scope="row"><?php echo $value->getId();?></th>
        <td><a href="single?id=<?php echo $value->getId();?>"><?php echo $value->getName();?></a></td>
        <td><?php echo $value->getMoney();?></td>
<<<<<<< HEAD
        <td><a href="deleteAccount?id=<?php echo $value->getid();?>" ><i class="fas fa-trash-alt"></i> </a> </td>
=======
        <td><a href="deleteAccount?id=<?php echo $value->getId(); ?>"><i class="fas fa-trash-alt"></i> </a> </td>
>>>>>>> 60dc6cd24599fc5cb8407e925a0044c5d3323934
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>





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
