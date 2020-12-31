@extends('app.content.template.base',["title" => "Les partenaires"])

@section('app-content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Liste des partenaires</h1>
                                <div class="sparkline13-outline-icon">
                                    <span id="add" style="cursor:pointer;" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> ajouter un partenaire</span>
                                </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="nom" data-editable="true">Nom</th>
                                        <th data-field="sigle" data-editable="true">Sigle</th>
                                        <th data-field="logo" data-editable="true">Logo</th>
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
                                    @foreach($data as $partenaire)
                                        <tr>
                                            <td>{{ $partenaire->nom }}</td>
                                            <td>{{ $partenaire->sigle }}</td>
                                            <td>{{ $partenaire->logo }}</td>
                                            <td>{{ $partenaire->site_url }}</td>
                                            <td>{{ $partenaire->facebook }}</td>
                                            <td>{{ $partenaire->twitter }}</td>
                                            <td>{{ $partenaire->email }}</td>
                                            <td>{{ $partenaire->whatsapp }}</td>
                                            <td>{{ $partenaire->telegram }}</td>
                                            <td>
                                                @if($partenaire->is_online)
                                                    En ligne
                                                @else
                                                    Hors ligne
                                                @endif                                            
                                            <td>
                                                 @if($partenaire->is_online)
                                                    <button name="line" id="{{ $partenaire->id }}" class="other btn btn-warning" data-toggle="modal" data-target="#form">Mettre hors ligne</button>
                                                @else
                                                    <button name="line" id="{{ $partenaire->id }}" class="other btn btn-success" data-toggle="modal" data-target="#form">Mettre en ligne</button>
                                                @endif  
                                                <button id="{{ $partenaire->id }}" class="edit btn btn-info" data-toggle="modal" data-target="#form">Modifier</button>
                                                <button id="{{ $partenaire->id }}" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" href="#delete">Supprimer</button>
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
            <h4 class="modal-title w-100">Ajouter un partenaire</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            @csrf
            <div id="form_result"></div>
            <div class="form-group">
                <label for="nom">Nom : </label>
                <input name="nom" id="nom" class="form-control"/>
                <span class="text-danger" id="nom-error"> </span>
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
        actionData.name = "partenaires";
    </script>
@endsection