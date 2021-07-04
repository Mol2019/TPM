@extends('site.layouts.template',['title' => "Devenir membre"])

@section('template-content')
<section id="contact" class="contact">
    <div class="container">
<div class="row">

     <div class="col-lg-12">
       <form action="{{ route('membres.create') }}" method="post"  class="php-email-form">
          @csrf
         <div class="row">

           <div class="col-md-6 form-group">
               <label for="id">N° :</label>
             <input type="text" name="id" class="form-control" id="id" placeholder="id" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group">
               <label for="nom">Nom :</label>
             <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group">
               <label for="prenoms">Prénoms :</label>
             <input type="text" name="prenoms" class="form-control" id="prenoms" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group">
               <label for="email">E-mail :</label>
             <input type="email" name="email" class="form-control" id="email" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="contact">Contact :</label>
             <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <label><input type="checkbox"> WhatsApp</label>
             <label><input type="checkbox"> Telegram</label>
             <label><input type="checkbox"> Signal</label>
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="datenaissance">Date de naissance :</label>
             <input type="date" class="form-control" name="datenaissance" id="datenaissance" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>
           
           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="lieunaissance">Lieu de naissance :</label>
             <input type="text" class="form-control" name="lieunaissance" id="lieunaissance" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="habitation">Habitation :</label>
             <input type="text" class="form-control" name="habitation" id="habitation" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="profession">Profession :</label>
             <input type="text" class="form-control" name="profession" id="profession" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="cv">CV :</label>
             <input type="file" class="form-control" name="cv" id="cv" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="site">Site personnel:</label>
             <input type="text" class="form-control" name="site" id="site" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="facebook">Facebook :</label>
             <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="twitter">Twitter :</label>
             <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-3 mt-md-0">
               <label for="linkedin">LinkedIn :</label>
             <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
             <div class="validate"></div>
           </div>

           <div class="col-md-6 form-group mt-4 mt-md-0">
               <label class="form-label" for="nationalite">Nationalite :</label>
               <input class="form-control" list="datalistOptions" id="nationalite" placeholder="Taper pour rechercher son pays...">
               <datalist id="datalistOptions">
               <option value="Côte d'Ivoire">
               <option value="Ghana">
               <option value="Libéria">
               <option value="Afrique du Sud">
               <option value="Angola">
               </datalist>
             <!-- <input type="text" class="form-control" name="nationalite" id="nationalite" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" /> -->
             <div class="validate"></div>
           </div>

         </div>
         <!-- <div class="form-group mt-3">
           <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
           <div class="validate"></div>
         </div> -->
         <div class="mb-3">
           <div class="loading">Loading</div>
           <div class="error-message"></div>
           <div class="sent-message">Your message has been sent. Thank you!</div>
         </div>
         <div class="text-center"><button type="submit">Envoyer</button></div>
       </form>
     </div>
     
   </div>
</div>
</section> 
@endsection