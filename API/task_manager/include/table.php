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
					
					
					
					 <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle{{ currentRoute(route('category.create'))}}" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    @lang('Versement')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                    <a class="dropdown-item" href="{{ route('versement.create') }}">
                        <i class="fas fa-plus fa-lg"></i> @lang('Nouveau')
                    </a>
                    <a class="dropdown-item" href="{{ route('versement.listAll') }}">
                        <i class="fas fa-plus fa-lg"></i> @lang('Nouveau')
                    </a>
                </div>
            </li>
        </ul>
		
		// le 15/10/2018
		
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
					
					