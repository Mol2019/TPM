@extends('site.layouts.template',['title' => "Notre réseau de partenaires"])

@section('template-content')
<section id="team" class="team">
    <div class="container">

      <div class="row">
        @foreach($data->donnees->partenaires as $partenaire)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <img src="{{ asset($partenaire->logo)}}" alt="">
                    <h4>{{ $partenaire->nom }}</h4>

                    <div class="social">
                        <a href="{{ $partenaire->site_url }}"><i class="icofont-world"></i></a>
                        <a href="{{ $partenaire->twitter }}"><i class="icofont-twitter"></i></a>
                        <a href="{{ $partenaire->facebook }}"><i class="icofont-facebook"></i></a>
                        <a href="{{ $partenaire->whatsapp }}"><i class="icofont-whatsapp"></i></a>
                        <a href="{{ $partenaire->linkdln }}"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Team Section -->
@endsection
