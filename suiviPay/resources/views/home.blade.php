@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card-content white-text">
                <div style="margin-left:150px;margin-top:40px;background-color:#457DBB">
                <div class="panel-heading">Historique des transactions</div>
                    <table align="center" border=2 width="100%" cellpadding="10" cellspacing="1" style="color:#FFF" >
                    <caption align="center" style="color:#FFF">
                    <h4>Liste des transactions</h4>
                    </caption>
                        <tr>
                        <th>Etalissement</th>
                        <th>Numéro de paiement</th>
                        <th>Nom et Prenoms de l'Etudiant</th>
                        <th>Montant Quitus</th>
                        <th>Date de Paiement</th>
                        <th>Heure</th>
                        <th>Agence</th>
                        <th>Téléphone</th>
                        </tr>
                        @foreach(json_decode(file_get_contents('https://afrikpay.com/univ-dschang/listAll.php'), true) as $v)
                    <tr class="success" >
                            <td>{{ $v['etablissement']}}</td>
                            <td>{{ $v['numquitus']}}</td>
                            <td>{{ $v['nometudiant']}}</td>
                            <td>{{ $v['montant']}}</td>
                            <td>{{ $v['datepaie']}}</td>
                            <td>{{ $v['heurepaie']}}</td>
                            <td>{{ $v['agence']}}</td>
                            <td>{{ $v['telephone']}}</td>
                        </tr>
                        @endforeach  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
