@extends('site.layouts.default')

@section('carroussel')
    @include('site.layouts.partials._carrousel')
@endsection

@section('page-content')
  <!-- ======= Featured Section ======= -->
  <section id="featured" class="featured">
    <div class="container">

      <div class="row">
        @foreach ($data->donnees->menus as $menu)
              @if(!$menu->nom)
                <div class="col-lg-3">
                  <div class="icon-box">
                    <i class="icofont-computer"></i>
                    <h3><a href="">{{$menu->title}}</a></h3>
                    <p>{{$menu->content}}</p>
                  </div>
                </div>
              @endif
          @endforeach
      </div>
  </section><!-- End Featured Section -->

  <!-- ======= Mot du président ======= -->
  @if($data->donnees->mp)
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title" data-aos="fade-up">
        <h2>Mot du président</h2>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <img src="{{$data->donnees->mp->image}}" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="col-lg-9 pt-4 pt-lg-0 content">
          <h3>{{$data->donnees->mp->nom}}</h3>
          <p class="font-italic">{{$data->donnees->mp->poste}}</p>
          <p>
              {{$data->donnees->mp->content}}
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->
@endif

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Chiffres Clés</h2>
      </div>

      <div class="row no-gutters">
        @foreach($data->donnees->chiffres as $chiffre)
          
        @endforeach
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">{{ $chiffre->valeur }}</span>
            <p><strong>{{ $chiffre->libelle }}</strong> {{ $chiffre->description }}</p>
          </div>
        </div>

        

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Nos actions ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Nos Actions</h2>
      </div>

      <div class="row">
        @foreach($data->donnees->programmes as $action)
        @if($action->is_online)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">{{ $action->label }}</a></h4>
              <p>{{ $action->content }}</p>
            </div>
          </div> 
        @endif     
       @endforeach
      </div>

    </div>
  </section><!-- End Nos actions -->

  <!-- ======= Nos Actualités ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Nos Actualités</h2>
      </div>

      <div class="row">
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
          </div><!-- End blog entries list -->
          @else
              <h2 class="entry-title"> Aucune actualité</h2>

          @endif        
        <div class="section-button" data-aos="fade-up">
          <button class="btn btn-or"><a href="{{ route('nouvelles') }}" class="">Toutes nos actualités ici</a></button>
        </div>

      </div>

    </div>
  </section><!-- End Nos Actualités -->

  <!-- ======= donation -->
  <section id="donation" class="donation">
    <div class="container reviews-area">
      <div class="row no-gutter">
        <div class="col-lg-6 py-0">
          <img src="assets/img/background/bg-donation.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>Faites un don</h2>
              <h5>Donner à l'ONG, c'est sortir un jeune du chômage.</h5>
              <a href="{{ route('contact') }}" class="ready-btn scrollto float-end gris-beige">Contactez-nous</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End donation -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="section-title">
        <h2>Témoignages</h2>
        <p>Ils nous ont rejoints, ils en témoignent</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="testimonial-item mt-4">
            <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
            <h3>Emily Harison</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur. Sequi officiis ea et quia quidem.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        </div>
          
      </div>

      <div class="section-button" data-aos="fade-up">
        <button class="btn btn-or"><a href="#" class="">Voir tous les témoignages </a></button>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <section id="clients" class="clients">
    <div class="container">

      <div class="section-title">
        <h2>Partenaires</h2>
        <p>Ils nous ont fait confiance, nous collaborons.</p>
      </div>

      <div class="owl-carousel clients-carousel">
        @foreach ($data->donnees->partenaires as $partenaire)
          @if($partenaire->is_online)
            <img src="{{asset($partenaire->image)}}" alt="">
          @endif  
        @endforeach
      </div>

    </div>
  </section><!-- End Clients Section -->

@endsection
