@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card-content white-text">
                <div style="margin-left:100px;margin-top:60px;background-color:#FFF;width:1000px">
                <div class="panel-heading" style="color:#FFF;background-color:#003366" align="center"><H3>HISTORIQUE DES PAIEMENTS ENREGISTRES</H3></div>
                    <table align="center" border=1 width="100%" bordercolordark="green" cellspacing="1" style="color:#000;margin-top:-10px;" >
                        <tr style="background-color:#003366; color:#FFF">
                        <td>Etalissement / Ecole</td>
                        <td>Numéro de paiement</td>
                        <td>Nom et Prenoms de l'Etudiant</td>
                        <td>Montant Quitus</td>
                        <td>Date de Paiement</td>
                        <td>Heure</td>
                        <td>Agence</td>
                        <td>Téléphone</td>
                        </tr>
                        @php
                        $couleurs = array('#BBD2E1', '#FFF');
                        $nb = count($couleurs);
                        $i = 0;
                        @endphp
                        @foreach(json_decode(file_get_contents('https://afrikpay.com/univ-dschang/listAll.php'), true) as $v)
                            @php $i++; @endphp
                    <tr style="background-color:{{$couleurs[$i%$nb]}}">
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

