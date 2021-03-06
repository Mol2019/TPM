@extends('app.content.template.base',["title" => "Les equipes"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des equipes</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form">
                                        <i class="fa fa-plus"></i> ajouter un membre
                                    </span>
                                </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="civilite" data-editable="true">Civilité</th>
                                        <th data-field="nom" data-editable="true">Nom</th>
                                        <th data-field="prenoms" data-editable="true">Prénoms</th>
                                        <th data-field="fonction" data-editable="true">Fonction</th>
                                        <th data-field="portrait" data-editable="true">Portrait</th>
                                        <th data-field="image" data-editable="true">Photo</th>
                                        <th data-field="action"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $membre)
                                        <tr>
                                            <td>{{ $membre->civilite }}</td>
                                            <td>{{ $membre->nom }}</td>
                                            <td>{{ $membre->prenoms}}</td>
                                            <td>{{ $membre->fonction}}</td>
                                            <td>{{ $membre->portrait}}</td>
                                            <td>{{ $membre->photo}}</td>
                                            <td>
                                                @if($membre->is_online)
                                                    <button id="{{ $membre->id }}" name="online" class="action btn btn-warning" data-toggle="modal" data-target="#action">Mettre hors ligne</button>
                                                @else
                                                    <button id="{{ $membre->id }}" name="offline" class="action btn btn-success" data-toggle="modal" data-target="#action">Mettre en ligne</button>
                                                @endif
                                                <button id="{{ $membre->id }}" class="edit btn btn-info" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $membre->id }}" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
    </div>
</div>
@endsection

@section('form-modal')
    <form method="post" id="add-form">
        <div class="modal-header flex-column text-center bg-primary">
            <h4 class="modal-title w-100">Ajouter un membre</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="civilite">Votre sexe</label>
                <select name="civilite" id="civilite" class="form-control">
                    <option value="">Selectionnez votre sexe</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>

                </select>
                <span class="text-danger" id="civilite-error"> </span>
            </div>
            <div class="form-group">
                <label for="nom">Nom : </label>
                <input name="nom" id="nom" class="form-control"/>
                <span class="text-danger" id="nom-error"> </span>
            </div>
            <div class="form-group">
                <label for="prenoms">Prénoms : </label>
                <input name="prenoms" id="prenoms" class="form-control"/>
                <span class="text-danger" id="prenoms-error"> </span>
            </div>
            <div class="form-group">
                <label for="fonction">Fonction : </label>
                <input name="fonction" id="fonction" class="form-control"/>
                <span class="text-danger" id="fonction-error"> </span>
            </div>
             <div class="form-group">
                <label for="image">Image : </label>
                <input name="image" type="file" id="image" class="form-control"/>
                <span class="text-danger" id="image-error"> </span>
            </div>
             <div class="form-group">
                <label for="protrait">Portrait</label>
                <textarea class="form-control" name="portrait" id="portrait" cols="30" rows="10"></textarea>
                <span class="text-danger" id="portrait-error"> </span>
            </div>
            <input name="hidden_id" id="hidden_id" class="form-control" type="hidden"/>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="reset" class="btn btn-default btn-reset" data-dismiss="modal">annuler</button>
            <button type="submit" id ="valid" class="btn btn-primary">valider</button>
        </div>
    </form>
@endsection

@section("cscripts")
    <script type="text/javascript">
        actionData.name = "equipes";
    </script>
@endsection


