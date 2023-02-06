@extends('layout.app')
@section('content')
    <div class="container mt-5">
            <div class="card m-2 p-2 bg-secondary">
                <div class="card-head h4 bg-warning p-2">
                        <a href="{{route('projet.show')}}" class="btn btn-primary">
                            Afficher etudiant  
                        </a>
                </div>
            </div>
            <div class="card mt-4 col-md-8 offset-md-2">
                <div class="h4 text-center bg-primary p-2 text-white">Formulaire d'ajout des information d'un Etudiant</div>
                <div class="card-body text-center">

                    <form action="/store" class="align-middle" method="post">
                        @csrf
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Prenom</label>
                            <input name="prenom" type="text" class="form-control col-md-8" required>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Nom</label>
                            <input name="nom" type="text" class="form-control col-md-8" required>
                        </div>
                        <div>
                            <select name = "semestre" id=""  class="form-control" >
                                <option value="Semestre 1">Semestre 1</option>
                                <option value="Semestre 2">Semestre 2</option>
                                <option value="Semestre 3">Semestre 3</option>
                            </select>
                        </div>
                        <div>
                            <select name = "matiere"  id=""  class="form-control">
                                <option value="LARAVEL">LARAVEL</option>
                                <option value="PHP">PHP</option>
                                <option value="LINUX">LINUX</option>
                            </select>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Notes</label>
                            <input name="notes" type="number" class="form-control col-md-8" required>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Examen</label>
                            <input name="examen" type="number" class="form-control col-md-8" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
@endsection