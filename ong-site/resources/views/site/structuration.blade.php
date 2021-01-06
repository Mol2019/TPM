@extends('site.layouts.template',['title' => "Notre équipe"])

@section('template-content')
 <!-- ======= Team Section ======= -->
 <section id="team" class="team">
    <div class="container">

      <div class="row">
        @foreach ($data->donnees->team as $equipe)
            @if($equipe->is_online)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="{{ asset($equipe->photo)}}" alt="">
                        <h4>{{ $equipe->nom}} {{ $equipe->prenoms}}</h4>
                        <span>{{ $equipe->fonction}}</span>
                        <p>
                            {{ $equipe->portrait}}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach

    </div>

    </div>
  </section><!-- End Team Section -->
@endsection
