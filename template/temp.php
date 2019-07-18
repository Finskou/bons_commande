<main>
  <table>
    <tr>
      <th> Commande</th>
      <th> Date Commande</th>
      <th> Date Livraison </th>
      <th> Statut</th>
    </tr>
    <?php foreach ($listCde  as $key => $value) : ?>
      <tr>
        <td>
          <a href="temp2.phtml?numcde=<?= $value['orderNumber']; ?>" target="temp2.phtml"> <?= $value['orderNumber']; ?> </a>
        </td>
        <td><a href=""> <?= $value['orderDate']; ?></a> </td>
        <td><a href=""> <?= $value['shippedDate']; ?></a> </td>
        <td><a href=""> <?= $value['status']; ?></a> </td>
      </tr>

    <?php endforeach; ?>
  </table>
</main>