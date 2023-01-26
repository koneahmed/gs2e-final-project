@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="card">
                <form action="{{route('niveau.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4>Ajout de formation</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Titre de la niveau</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Enregistrer" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>Liste des niveaux</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre du niveau</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($niveaux as $niveau)
                                    <tr>
                                        <td>{{$loop->iteration}} </td>

                                        <td>
                                            {{$niveau->name}}
                                        </td>

                                        <td>
                                            <a href="#" class="btn btn-primary me-2">Modifier</a>
                                            <a href="{{route('niveau.delete',$niveau->id)}}" class="btn btn-danger">Supprimer</a>
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
