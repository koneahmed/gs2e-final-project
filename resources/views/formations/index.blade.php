@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <div class="card">
                <form action="{{route('formation.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4>Ajout de formation</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="libelle">Titre de la formation</label>
                                    <input type="text" name="libelle" id="ilbelle" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="image">Image d'illustration de la formation</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="image">Description de la formation</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
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
                    <h4>Liste des formations</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-stripped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Titre de la formation</th>
                                    <th>Description</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formations as $formation)
                                    <tr>
                                        <td>{{$loop->iteration}} </td>
                                        <td>
                                            <img src="{{asset($formation->image)}}" alt="" width="100">
                                        </td>
                                        <td>
                                            {{$formation->libelle}}
                                        </td>
                                        <td>
                                            {{$formation->description}}
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary me-2">Modifier</a>
                                            <a href="{{route('formation.delete',$formation->id)}}" class="btn btn-danger">Supprimer</a>
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
