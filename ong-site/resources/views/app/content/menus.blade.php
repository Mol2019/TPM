@extends('app.content.template.base',["title" => "Les menus"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des menus</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> ajouter un menu</span>
                                </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="title" data-editable="true">Titre</th>
                                        <th data-field="content" data-editable="true">Contenu</th>
                                        <th data-field="image" data-editable="true">Image</th>
                                        <th data-field="Nom" data-editable="true">Nom</th>
                                        <th data-field="poste" data-editable="true">Poste</th>
                                        <th data-field="action"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $menu)
                                        <tr>
                                            <td>{{ $menu->title }}</td>
                                            <td>{{ $menu->content }}</td>
                                            <td>{{ $menu->image }}</td>
                                            <td>{{ $menu->nom }}</td>
                                            <td>{{ $menu->poste }}</td>
                                            <td>
                                                <button id="{{ $menu->id }}" class="edit btn btn-info" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $menu->id }}" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
            <h4 class="modal-title w-100">Ajouter un menu</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="title">Titre : </label>
                <input name="title" id="title" class="form-control"/>
                <span class="text-danger" id="title-error"> </span>
            </div>

            <div class="form-group">
                <label for="content">Contenu : </label>
                <input name="content" id="content" class="form-control"/>
                <span class="text-danger" id="content-error"> </span>
            </div>

            <div class="form-group">
                <label for="image">Image : </label>
                <input name="image" id="image" type="file" class="form-control"/>
                <span class="text-danger" id="image-error"> </span>
            </div>
            <div class="form-group">
                <label for="nom">Nom : </label>
                <input name="nom" id="nom" class="form-control"/>
                <span class="text-danger" id="nom-error"> </span>
            </div>
            <div class="form-group">
                <label for="poste">Poste : </label>
                <input name="poste" id="poste" class="form-control"/>
                <span class="text-danger" id="poste-error"> </span>
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
        actionData.name = "menus";
    </script>
@endsection