
                
                <div class="panel-heading" style="color:#FFF;background-color:#003366;;width:950px" align="center"><H3>FACULTE D'AGRONOMIE ET DES SCIENCES AGRICOLES</H3></div>
                    <table id="table1" cellspacing="0"  style="height:550px;width:950px " align="center"  class="table table-bordered table-striped table-condensed">
                        <tr style="background-color:#003366; color:#FFF">
                        <td>Numéro de paiement</td>
                        <td>Nom et Prenoms de l'Etudiant</td>
                        <td>Montant Quitus</td>
                        <td>Date de Paiement</td>

                        <td>Téléphone</td>
                        </tr>
                    <?php
                        $couleurs = array('#BBD2E1', '#FFF');
                        $nb = count($couleurs);
                        $i = 0;
                        $data=json_decode(file_get_contents('https://afrikpay.com/univ-dschang/listAll.php'), true);
                      
                        foreach($data as $v){ 
                            $i++;
                            if($v['etablissement']="Faculté d'Agronomie et
                            des Sciences Agricoles") {?>
                    <tr style="background-color:<?php $couleurs[$i%$nb];?>">
                            <td><?php echo $v['numquitus'];?></td>
                            <td><?php echo $v['nometudiant'];?></td>
                            <td><?php echo $v['montant'];?></td>
                            <td><?php echo $v['datepaie'];?></td>
                           <td><?php echo $v['telephone'];?></td>
                        </tr>
                        <?php }
                     } ?>
                    </table>
                    <script type="text/javascript" language="javascript" src="../TableFilter/src/tablefilter.js"></script>  
                    <script language="javascript" type="text/javascript"> 
                            var TF = setFilterGrid("table1");   
                            var tf01 = new TF('table1');  
                            tf01.AddGrid();  
                    </script>   
                
            