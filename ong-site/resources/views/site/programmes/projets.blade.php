@extends('site.layouts.template',['title' => "Les projets"])

@section('template-content')
<section id="blog" class="blog">
      <div class="container">
         
        <div class="row entries">
            @if($data->donnees->projets->count() > 0 )

            @foreach($data->donnees->projets as $projet)

                <article class="entry col-12 col-md-4 col-lg-4">

              <div class="entry-img">
                <img
                    src="{{asset($projet->image ?? 'assets/site/img/blog-1.jpg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{$projet->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">Actualités</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="{{$projet->created_at}}">{{$projet->created_at}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$projet->content}}
                </p>
                <div class="read-more">
                  <a href="{{route('projets.details',$projet->slug)}}">Lire plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->

            @endforeach

              <div class="blog-pagination">
                <ul class="justify-content-center">
                  <li class="disabled"><i class="icofont-rounded-left"></i></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                </ul>
              </div>

          </div><!-- End blog entries list -->
          @else
              <h2 class="entry-title"> Aucun projet</h2>

          @endif

    </section>
@endsection