@extends('site.layouts.template',['title' => "Détails sur actualité"])

@section('template-content')
<section id="blog" class="blog">
      <div class="container">


        <!-- design lecture d'un article à insérer dans template ou layout général -->

        <div class="col-lg-8 entries"> <!-- mettre col-lg-12 si sidebar non utilisée  -->

            <article class="entry">

            <div class="entry-img">
                <img src="{{asset( $data->donnees->single->image ?? 'assets/site/img/blog-1.jpg')}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="#">{{$data->donnees->single->title}}</a>
            </h2>

            <div class="entry-meta">
                <ul>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="{{$data->donnees->single->created_at}}">{{$data->donnees->single->created_at}}</time></a></li>
                </ul>
            </div>

            <div class="entry-content">
                <p> 
                    {{$data->donnees->single->content}} 
                </p>
                <!-- <div class="read-more">
                <a href="blog-single.html">Read More</a>
                </div> -->
            </div>

            </article><!-- End blog entry -->

           

        </div><!-- End blog entries list -->


    </div>
</section>        
@endsection