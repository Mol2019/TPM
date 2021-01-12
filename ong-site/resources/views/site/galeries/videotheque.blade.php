@extends('site.layouts.template',['title' => "Notre vidéothèque"])

@section('template-content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row portfolio-container">
        @foreach($data->donnees->videos as $video)
            @if($video->is_online)
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-wrap">
                    <img src="{{ asset($video->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                        <a href="{{ asset($video->image) }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
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