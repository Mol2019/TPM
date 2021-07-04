@extends('app.content.template.base',["title" => "Le publications"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des publications</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form">
                                        <i class="fa fa-plus"></i> ajouter une publication
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
                                        <th data-field="type" data-editable="true">Type</th>
                                        <th data-field="action"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $publication)
                                        <tr>
                                            <td>{{ $publication->title }}</td>
                                            <td>{{ $publication->content }}</td>
                                            <td>{{ $publication->slug }}</td>
                                            <td>{{ $publication->image }}</td>
                                            <td>
                                                @if($publication->is_press)
                                                    Dans press
                                                @elseif($publication->is_rapport)
                                                    Est un rapport     
                                                @else
                                                    Normal
                                                @endif
                                            </td>

                                            <td>
                                                
                                                @if($publication->is_rapport)
                                                    <button id="{{ $publication->id }}" name="normal" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Mode normal</button>
                                                    <button id="{{ $publication->id }}" name="inPress" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Marquer comme presse</button>
                                                @elseif($publication->is_press)
                                                    <button id="{{ $publication->id }}" name="report" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Marquer comme rapport</button>
                                                    <button id="{{ $publication->id }}" name="normal" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Mode normal</button>
                                                @else
                                                    <button id="{{ $publication->id }}" name="report" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Marquer comme rapport</button>
                                                    <button id="{{ $publication->id }}" name="inPress" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Marquer comme presse</button>
                                                @endif


                                                @if($publication->is_online)
                                                    <button id="{{ $publication->id }}" name="online" class="action btn btn-warning btn-sm" data-toggle="modal" data-target="#action">Mettre hors ligne</button>
                                                @else
                                                    <button id="{{ $publication->id }}" name="offline" class="action btn btn-success btn-sm" data-toggle="modal" data-target="#action">Mettre en ligne</button>
                                                @endif
                                                <button id="{{ $publication->id }}" class="edit btn btn-info btn-sm" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $publication->id }}" class="btn btn-danger delete btn-sm" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
            <h4 class="modal-label w-100">Ajouter une publication</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="title">Titre : </label>
                <input name="title" id="label" class="form-control"/>
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
                <input name="slug" type="hidden" id="slug" class="form-control"/>
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
        actionData.name = "publications";
    </script>
@endsection


