@extends('layouts.template')

@section("styles")
    @include('app.content.template.assets.astyles')
    @yield('cstyles')
@endsection

@section('content')
        <!-- Header top area start-->
    <div class="wrapper-pro">
        @include('app.content.template.partials._sidebar')
        <!-- Header top area start-->
        <div class="content-inner-all">
            @include('app.content.template.partials._header')
            <!-- Header top area end-->
            @include("app.content.template.partials._breadcome")
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            @include('app.content.template.partials._mobilemenu')

            @yield('app-content')

    <div class="modal" id="form">
        <div class="modal-dialog">
            <div class="modal-content">
                @yield('form-modal')
            </div>
        </div>
    </div>
    <div class="modal" id="delete">
        <div class="modal-dialog modal-confirm">
           <div class="modal-content">
               <div class="modal-header flex-column">
                   <h4 class="modal-title w-100">Etes vous sure?</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <div class="modal-body">
                   <div id="action_result"></div>
                   <p>Voulez vous réelement supprimer cette donnée ? </p>
               </div>
               <div class="modal-footer justify-content-center">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                   <button type="button" class="btn btn-danger ok">Valider</button>
               </div>
           </div>
       </div>
   </div>
    <div class="modal" id="logout">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h4 class="modal-title w-100">Etes vous sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Voulez vous réelement vous déconnectez du sytème ? .</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger ok">Déconnexion</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("scripts")
    @include('app.content.template.assets.ascripts')
    <script type="text/javascript">
        let actionData = {
            route : "",
            action : "",
            name : null,
            chemin : null
        }
        $(document).ready(function(){
            let appId;


            $('.edit').click(function(e){
                e.preventDefault();
                reset();
                $('#form .modal-title').text('Modification de  '+actionData.name);
                $('#form .modal-footer #valid').text('modifier');
                loadData(this.id);
            });

            $('.delete').click(function(e){
                e.preventDefault();
                appId = this.id;
            });

            $('#delete .ok').click(function(e){
                e.preventDefault();
                deleteData(appId);
            })

            $("#add").click(function(e){
                e.preventDefault();
                reset();
                $('#form .modal-title').text('Ajout de  '+actionData.name);
                $('#form .modal-footer #valid').text('valider');
            })

            $('#add-form').on('submit',function(e){
                e.preventDefault();
                if($(e.target[e.target.length-1]).text() == "valider"){
                    let create_action = actionData;
                    create_action.action = 'create';
                    create_action.route = actionData.name+"."+create_action.action;
                    create_action.chemin = "/"+actionData.name+"/"+create_action.action;
                    createFunction(create_action);
                }else if($(e.target[e.target.length-1]).text() == "modifier"){
                    let create_action = actionData;
                    create_action.action = 'update';
                    create_action.route = actionData.name+"."+create_action.action;
                    create_action.chemin = "/"+actionData.name+"/"+create_action.action;
                    createFunction(create_action);
                }

            })

        })



        function loadFromDatabase(data){
            $.ajax({
                url : data.chemin,
                type : "GET",
                success : function(data){
                    putDataInField(data.response_data);
                }
            })
        }

        function putDataInField(data){
            $("#form form input").each(function(){
                $('#'+$(this).attr('name')).val(data[$(this).attr('name')]);
            });
            $('#hidden_id').val(data.id);
        }




        function createFunction(data){
            let routeTest = data.route;
            $.ajax({
                url : data.chemin,
                type : "POST",
                data : $("#add-form").serialize(),
                success : function(data){
                    treatment(data);
                }
            })
        }

        function treatment(data){
            if(data.success){
                successTreatment(data.message)
            }else{
                failTreatment(data.response_data)
            }
        }

        function successTreatment(successMessage){
            html = "";
            reset();
            html = '<div class="alert alert-success">' + successMessage + '</div>';
            $('#form form #form_result').html(html);

            setTimeout(function(){
                location.reload();
            }, 3000);
        }

        function failTreatment(errors){
            $("#form form input").each(function(){
                $('#'+$(this).attr('name')+"-error").text(errors[$(this).attr('name')]);
            });
         }

        function reset(){
            if($("#add-form :input"))
            $("#add-form :input").each(function(){

                if($(this).attr('name') !=="_token"){
                    $(this).val("");
                    $('#'+$(this).attr('name')+"-error").text('');
                } //$(this).val("");
            });

            if($("#form form select"))
            $("#add-form select").each(function(){
                $(this).val("");
                $('#'+$(this).attr('name')+"-error").text('');
            });

            if($("#form form textarea"))
            $("#add-form textarea").each(function(){
                $(this).val("");
                $('#'+$(this).attr('name')+"-error").text('');
            });
        }

        function loadData(id){
            appId = id;
            let edit_action = actionData;
            edit_action.action = 'edit';
            edit_action.route = actionData.name+"."+edit_action.action;
            edit_action.chemin = "/"+actionData.name+"/"+edit_action.action+"/"+appId;

            loadFromDatabase(edit_action);
        }

        function deleteData(id){

            $.ajax({
                url : "/"+actionData.name+"/delete/"+id,
                type : "GET",
                success : function(data){
                    treatmentDelete(data.message);
                }
            })
        }

        function treatmentDelete(message){
            html = "";
            reset();
            html = '<div class="alert alert-success">' + message + '</div>';
            $('#delete #action_result').html(html);

            setTimeout(function(){
                location.reload();
            }, 3000);
        }

    </script>
    @yield('cscripts')
@endsection
