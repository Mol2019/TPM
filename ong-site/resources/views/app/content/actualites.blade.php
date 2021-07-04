@extends('app.content.template.base',["title" => "Les actualités"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des actualités</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form">
                                        <i class="fa fa-plus"></i> ajouter une actualité
                                    </span>
                                </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="tite" data-editable="true">Titre</th>
                                        <th data-field="content" data-editable="true">Contenu</th>
                                        <th data-field="slug" data-editable="true">Slug</th>
                                        <th data-field="image" data-editable="true">Image</th>
                                        <th data-field="flash" data-editable="true">Est flash ? </th>

                                        <th data-field="action"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $actualite)
                                        <tr>
                                            <td>{{ $actualite->title }}</td>
                                            <td>{{ $actualite->content }}</td>
                                            <td>{{ $actualite->slug }}</td>
                                            <td>{{ $actualite->image }}</td>
                                            <td>
                                                @if($actualite->is_flash)
                                                    Vrai
                                                @else
                                                    Faux
                                                @endif
                                            </td>

                                            <td>
                                                @if(!$actualite->is_flash)
                                                    <button id="{{ $actualite->id }}" name="flash" class="action btn btn-warning" data-toggle="modal" data-target="#action">Mettre en flash</button>
                                                @else
                                                    <button id="{{ $actualite->id }}" name="flash" class="action btn btn-success" data-toggle="modal" data-target="#action">Enlever en flash</button>
                                                @endif
                                                @if($actualite->is_new)
                                                    <button id="{{ $actualite->id }}" name="older" class="action btn btn-success" data-toggle="modal" data-target="#action">Marquer comme ancien</button>
                                                @endif
                                                <button id="{{ $actualite->id }}" class="edit btn btn-info" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $actualite->id }}" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
    <form method="post" id="add-form" enctype="multipart/form-data">
        <div class="modal-header flex-column text-center bg-primary">
            <h4 class="modal-label w-100">Ajouter une actualité</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="label">Titre : </label>
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
                <input name="image" type="file" id="image" class="form-control"/>
                <span class="text-danger" id="image-error"> </span>
            </div>

            <div class="form-group">
               <div class="form-check">
                    <label class="form-check-label" for="gridCheck">
                        Est flash ?
                    </label>
                    <input value="1" class="form-check-input" name="is_flash" id="isFlash" type="checkbox">
                </div>
                <span class="text-danger" id="is_flash-error"> </span>
            </div>
            <input name="slug" id="slug" class="form-control" value="test" type="hidden"/>
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
        actionData.name = "actualites"; 
    </script>
@endsection


