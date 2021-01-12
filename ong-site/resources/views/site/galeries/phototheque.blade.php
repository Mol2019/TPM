@extends('site.layouts.template',['title' => "Notre photothèque"])

@section('template-content')
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

     

      <div class="row portfolio-container">
        @foreach($data->donnees->photos as $photo)
            @if($photo->is_online)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                    <img src="{{ asset($photo->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $photo->title }}</h4>
                        <p>{{ $photo->content }}</p>
                        <div class="portfolio-links">
                        <a href="{{ asset($photo->image) }}" data-gall="portfolioGallery" class="venobox" title="{{ $photo->title }}"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    </div>
                </div>
            @endif    
        @endforeach
        
      </div>

    </div>
  </section><!-- End Portfolio Section -->

@endsection