<div style="overflow-y:scroll;" class="col-md-ofset-3 col-xm-9 col-sm-9 col-md-9 col-lg-9">
            <div class="card-content white-text">
                <div style="margin-left:0px;margin-top:0px;background-color:#FFF;width:950px;position:fixed(right);overflow:scroll;height:550px;">
                    <table id="table1" cellspacing="0"  style="height:550px;width:950px " align="center"  class="table table-bordered table-striped table-condensed">
                        <tr style="background-color:#003366; color:#FFF">
                        <td>Etalissement / Ecole</td>
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
                           ?>
                    <tr style="background-color:<?php $couleurs[$i%$nb];?>">
                            <td><?php echo $v['etablissement'];?></td>
                            <td><?php echo $v['numquitus'];?></td>
                            <td><?php echo $v['nometudiant'];?></td>
                            <td><?php echo $v['montant'];?></td>
                            <td><?php echo $v['datepaie'];?></td>
                           <td><?php echo $v['telephone'];?></td>
                        </tr>
                        <?php 
                     } ?>
                    </table>
                    <script type="text/javascript" language="javascript" src="../TableFilter/src/tablefilter.js"></script>  
                    <script language="javascript" type="text/javascript"> 
                            var TF = setFilterGrid("table1");   
                            var tf01 = new TF('table1');  
                            tf01.AddGrid();  
                    </script>   
                </div>
            </div>
</div>