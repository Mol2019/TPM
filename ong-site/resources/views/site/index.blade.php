@extends('site.layouts.default')

@section('carroussel')
    @include('site.layouts.partials._carrousel')
@endsection

@section('page-content')
    <!-- ======= Featured Section ======= -->
  <section id="featured" class="featured">
    <div class="container">
     <div class="section-title" data-aos="fade-up">
        <h2>Nous connaître</h2>
      </div>
      <div class="row">
          @foreach ($data->donnees->menus as $menu)
              @if(!$menu->nom)
                <div class="col-lg-4 mt-4 mt-lg-0">
                  <div class="icon-box">
                      <i class="icofont-tasks-alt"></i>
                      <h3><a href="">{{$menu->title}}</a></h3>
                      <p>
                        {{$menu->content}}
                      </p>
                  </div>
                </div>
              @endif
          @endforeach  
        </div>
    </div>
  </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
         <div class="section-title" data-aos="fade-up">
          <h2>Mot du président</h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset('assets/site/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
     <section id="blog" class="blog">
      <div class="container">
         <div class="section-title" data-aos="fade-up">
          <h2>Actualités</h2>
        </div>
        <div class="row entries">
            @if($data->donnees->actualites->count() > 0 )
           
            @foreach($data->donnees->actualites as $actualite)

                <article class="entry col-12 col-md-4 col-lg-4">

              <div class="entry-img">
                <img 
                    src="{{asset($actualite->image ?? 'assets/site/img/blog-1.jpg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="#">{{$actualite->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">Actualités</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="{{$actualite->created_at}}">{{$actualite->created_at}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{$actualite->content}}
                </p>
                <div class="read-more">
                  <a href="{{route('actualites.details',$actualite->slug)}}">Lire plus</a>
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
              <h2 class="entry-title"> Aucune actualité</h2>

          @endif

    </section>
     <!--<section id="about" class="about">
      <div class="container">
         <div class="section-title" data-aos="fade-up">
          <h2>Chiffres clés</h2>
        </div>
        <div class="row">
        </div>
     </section>-->   
    <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Partenaires</h2>
          <p>Ils nous ont fait confiance, nous collaborons.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          @foreach ($data->donnees->partenaires as $partenaire)
            <img src="{{asset($partenaire->image)}}" alt="">
          @endforeach
         <!-- <img src="assets/site/img/clients/client-1.png" alt="">
          <img src="assets/site/img/clients/client-2.png" alt="">
          <img src="assets/site/img/clients/client-3.png" alt="">
          <img src="assets/site/img/clients/client-4.png" alt="">
          <img src="assets/site/img/clients/client-5.png" alt="">
          <img src="assets/site/img/clients/client-6.png" alt="">
          <img src="assets/site/img/clients/client-7.png" alt="">
          <img src="assets/site/img/clients/client-8.png" alt="">-->
        </div>

      </div>
    </section><!-- End Clients Section -->
@endsection