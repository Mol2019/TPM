@extends('app.content.template.base',["title" => "Les documents",'subtitle' => "Liste des documents"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des documents</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> ajouter un document</span>
                                </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="montant" data-editable="true">Nom</th>
                                        <th data-field="action"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $document)
                                        <tr>
                                            <td>{{ $document->nom }}</td>
                                            <td>
                                                <button id="{{ $document->id }}" class="edit btn btn-info" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $document->id }}" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
            <h4 class="modal-title w-100">Ajouter un document</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="nom">Nom : </label>
                <input name="nom" id="nom" class="form-control"/>
                <input name="hidden_id" id="hidden_id" class="form-control" type="hidden"/>
                <span class="text-danger" id="nom-error"> </span>
            </div>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="reset" class="btn btn-default btn-reset" data-dismiss="modal">annuler</button>
            <button type="submit" id ="valid" class="btn btn-primary">valider</button>
        </div>
    </form>
@endsection

@section("cscripts")
    <script type="text/javascript">
        actionData.name = "documents";
    </script>
@endsection
