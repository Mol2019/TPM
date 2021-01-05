@extends('site.layouts.template',['title' => "{$data->donnees->single->title}"])

@section('template-content')
<section id="blog" class="blog">
      <div class="container">


        <!-- design lecture d'un article à insérer dans template ou layout général -->

        <div class="col-lg-12 entries"> <!-- mettre col-lg-12 si sidebar non utilisée  -->

            <article class="entry">

            <div class="entry-img">
                <img src="{{asset( $data->donnees->single->image ?? 'assets/site/img/logo.png')}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="#">{{$data->donnees->single->title}}</a>
            </h2>

            <div class="entry-content">
                <p>
                    {{$data->donnees->single->content}}
                </p>
               
            </div>

            </article><!-- End blog entry -->



        </div><!-- End blog entries list -->


    </div>
</section>
@endsection
