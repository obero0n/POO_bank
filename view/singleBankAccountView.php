<?php
require("template/header.php");
$id = $_GET["id"];
$manager = new bankAccountsManager;
$singleAccount = $manager->getAccount($id);

?>
<div class="card-deck m-0 d-flex">
<table class="table bg-light">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Montant</th>
        <th scope="col">Versement</th>
        <th scope="col">Retrait</th>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php echo $singleAccount->getName();?>
        </td>
        <td>
          <?php echo $singleAccount->getMoney();?>
        </td>
        <!-- <td class="warningMoney">
          <?php echo $singleAccount->getMoney();?> <i class="fas fa-exclamation-triangle"></i>
        </td> -->
        <td><a href="versement?id=<?php echo $singleAccount->getId();?>" class="card-link"><i class="far fa-credit-card"></i></a></td>
        <td><a href="retrait?id=<?php echo $singleAccount->getId();?>" class="card-link"><i class="far fa-credit-card"></i></a></td>
       </tr>
    </tbody>
  </table>
</div>
<?php
require("template/footer.php");
?>
