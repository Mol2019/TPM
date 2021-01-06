@extends('site.layouts.template',['title' => "Les acteurs"])

@section('template-content')
<section id="team" class="team">
    <div class="container">

      <div class="row">
        @foreach($data->donnees->acteurs as $acteur)
            @if($acteur->is_online)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{ asset($acteur->image)}}" alt="">
                        <h4>{{ $acteur->libelle }}</h4>
                        <p>
                            {{ $acteur->description}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
      </div>

    </div>
  </section><!-- End Team Section -->
@endsection
