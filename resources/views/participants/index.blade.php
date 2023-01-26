@extends('layouts.main')

@section('content')
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des candidats</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom et prénoms</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Niveau scolaire</th>
                                    <th>Formation souhaitée</th>
                                    <th>Statut</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($candidats as $candidat)
                                    <tr>
                                        <td>{{$loop->iteration}} </td>

                                        <td>
                                            {{$candidat->nom ." ".$candidat->prenom}}
                                        </td>
                                        <td>
                                            {{$candidat->email}}
                                        </td>
                                        <td>
                                            {{$candidat->contact}}
                                        </td>
                                        <td>
                                            {{$candidat->niveau->name ?? ""}}
                                        </td>
                                        <td>
                                            {{$candidat->formation->libelle ?? ""}}
                                        </td>
                                        <td>
                                            @if ($candidat->valide == 1)
                                                <span class="badge bg-success">
                                                        Validé
                                                </span>

                                            @else
                                                <span class="badge bg-warning">
                                                    En attente
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($candidat->valide != 1)
                                                <a href="{{route('candidat.validate',$candidat->id)}}" class="btn btn-success me-2">Accepter</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
