<?php
include "view/template/header.php";
?>

<?php echo $message; ?>
<a <?php setHref("login") ?>>Autre page</a>

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
