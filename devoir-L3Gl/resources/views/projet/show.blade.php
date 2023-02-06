@extends('layout.app')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Etudiant Information</h2>
                    </div>
                    <div class="card-body">
                        <br> <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Matier</th>
                                        <th>Notes</th>
                                        <th>Examen</th>
                                        <th>Semmestre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($etudiant  as $etudiants)
                                    <tr>
                                        <td>{{ $etudiants->id}}</td>
                                        <td>{{ $etudiants->nom}}</td>
                                        <td>{{ $etudiants->prenom}}</td>
                                        <td>{{ $etudiants->matiere}}</td>
                                        <td>{{ $etudiants->notes}}</td>
                                        <td>{{ $etudiants->examen}}</td>
                                        <td>{{ $etudiants->semestre}}</td>

                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection