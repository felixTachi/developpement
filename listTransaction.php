<?php


//On se connecte a la base de donnee

$result = file_get_contents('https://afrikpay.com/univ-dschang/listAll.php');
$json_data = json_decode($result, true);

//var_dump($books);
?>
<table align="center" >
  <caption align="center" style="color:#000">
  <h4>Liste des transactions</h4>
  </caption>
  <thead>
    <tr>
      <th>Tranche</th>
       <th>Numéro de paiement</th>
       <th>Nom et Prenoms de l'Etudiant</th>
       <th>Montant Quitus</th>
	   <th>Date de Paiement</th>

       <th>Heure</th>
       <th>Agence</th>
       <th>Téléphone</th>
    </tr>
  </thead>
    <tbody>
     <?php foreach($json_data as $v){?>
  <tr class="success" >
        <td><?php echo $v['idtrans'];?></td>
        <td><?php echo $v['numquitus'];?></td>
        <td><?php  echo  $v['nometudiant'];?></td>
        <td><?php  echo  $v['montant'];?></td>
		 <td><?php echo  $v['datepaie'];?></td>
         <td><?php  echo  $v['heurepaie'];?></td>
        <td><?php  echo  $v['agence'];?></td>
        <td><?php  echo  $v['telephone'];?></td>
      </tr>
    <?php }?>  
    </tbody>
</table>
 </div> 
</div>