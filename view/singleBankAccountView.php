<?php 
require("template/header.php");
$id = $_GET["id"];
$sigleAccount = getAccount($id);
?>
<div class="card-deck m-0 d-flex">
<table class="table bg-light">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Montant</th>
        <th scope="col">Retrait</th>
        <th scope="col">Virement</th>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php echo htmlspecialchars($sigleAccount["name"]);?>
        </td>
        <td>
          <?php echo htmlspecialchars($sigleAccount["money"]);?>
        </td>
        <td><a href="payment?id=<?php echo $sigleAccount["id"];?>" class="card-link"><i class="far fa-credit-card"></i></a></td>
        <td><a href="withdrawal?id=<?php echo $sigleAccount["id"];?>" class="card-link"><i class="far fa-credit-card"></i></a></td>
       </tr>
    </tbody>
  </table>
</div>
<?php 
require("template/footer.php");
?>