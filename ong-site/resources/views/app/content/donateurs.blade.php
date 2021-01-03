@extends('app.content.template.base',["title" => "Les donateurs"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des donateurs</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> ajouter un donateur</span>
                                </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="identite" data-editable="true">Identite</th>
                                        <th data-field="montant" data-editable="true">Montant</th>
                                        <th data-field="nationalite" data-editable="true">Nationalité</th>
                                        <th data-field="url_site" data-editable="true">Site web</th>
                                        <th data-field="fb" data-editable="true">Facebook</th>
                                        <th data-field="tt" data-editable="true">Twitter</th>
                                        <th data-field="ldn" data-editable="true">Linkdln</th>
                                        <th data-field="contact" data-editable="true">Contact</th>
                                        <th data-field="whsp" data-editable="true">Whatsapp</th>
                                        <th data-field="tgramme" data-editable="true">Télégramme</th>
                                        <th data-field="is_online" data-editable="true">Statut</th>
                                        <th data-field="action"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $donateur)
                                        <tr>
                                            <td>{{ $donateur->identite }}</td>
                                            <td>{{ $donateur->sigle }}</td>
                                            <td>{{ $donateur->logo }}</td>
                                            <td>{{ $donateur->site_url }}</td>
                                            <td>{{ $donateur->facebook }}</td>
                                            <td>{{ $donateur->twitter }}</td>
                                            <td>{{ $donateur->email }}</td>
                                            <td>{{ $donateur->whatsapp }}</td>
                                            <td>{{ $donateur->telegram }}</td>
                                            <td>
                                                @if($donateur->is_online)
                                                    En ligne
                                                @else
                                                    Hors ligne
                                                @endif
                                            <td>
                                                 @if($donateur->is_online)
                                                    <button name="line" id="{{ $donateur->id }}" class="other btn btn-warning" data-toggle="modal" data-target="#form">Mettre hors ligne</button>
                                                @else
                                                    <button name="line" id="{{ $donateur->id }}" class="other btn btn-success" data-toggle="modal" data-target="#form">Mettre en ligne</button>
                                                @endif
                                                <button id="{{ $donateur->id }}" class="edit btn btn-info" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $donateur->id }}" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
            <h4 class="modal-title w-100">Ajouter un donateur</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="identite">identite : </label>
                <input name="identite" id="identite" class="form-control"/>
                <span class="text-danger" id="identite-error"> </span>
            </div>

            <div class="form-group">
                <label for="sigle">Sigle: </label>
                <input name="sigle" id="sigle" class="form-control"/>
                <span class="text-danger" id="sigle-error"> </span>
            </div>

            <div class="form-group">
                <label for="logo">Logo: </label>
                <input type="file" name="logo" id="logo" class="form-control"/>
                <span class="text-danger" id="logo-error"> </span>
            </div>
            <div class="form-group">
                <label for="site_url">Site web: </label>
                <input name="site_url" id="site_url" class="form-control"/>
                <span class="text-danger" id="site_url-error"> </span>
            </div>
            <div class="form-group">
                <label for="facebook">Facebook: </label>
                <input name="facebook" id="facebook" class="form-control"/>
                <span class="text-danger" id="facebook-error"> </span>
            </div>
            <div class="form-group">
                <label for="twitter">Twitter: </label>
                <input name="twitter" id="twitter" class="form-control"/>
                <span class="text-danger" id="twitter-error"> </span>
            </div>
            <div class="form-group">
                <label for="linkdln">Linkdln: </label>
                <input name="linkdln" id="linkdln" class="form-control"/>
                <span class="text-danger" id="linkdln-error"> </span>
            </div>
            <div class="form-group">
                <label for="contact">Contact: </label>
                <input name="contact" id="contact" class="form-control"/>
                <span class="text-danger" id="contact-error"> </span>
            </div>
            <div class="form-group">
                <label for="whatsapp">Whatsapp: </label>
                <input name="whatsapp" id="whatsapp" class="form-control"/>
                <span class="text-danger" id="whatsapp-error"> </span>
            </div>
            <div class="form-group">
                <label for="telegram">Télégram: </label>
                <input name="telegram" id="telegram" class="form-control"/>
                <span class="text-danger" id="telegram-error"> </span>
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
        actionData.name = "donateurs";
    </script>
@endsection
