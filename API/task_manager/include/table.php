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
                        @foreach(json_decode(file_get_contents('https://afrikpay.com/univ-dschang/listAll.php'), true) as $v)
                    <tr class="success" >
                            <td>{{ $v['idtrans']}}</td>
                            <td>{{ $v['numquitus']}}</td>
                            <td>{{ $v['nometudiant']}}</td>
                            <td>{{ $v['montant']}}</td>
                            <td>{{ $v['datepaie']}}</td>
                            <td>{{ $v['heurepaie']}}</td>
                            <td>{{ $v['agence']}}</td>
                            <td>{{ $v['telephone']}}</td>
                        </tr>
                        @endforeach  
                        </tbody>
                    </table>