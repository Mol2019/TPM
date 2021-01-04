<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url({{asset('assets/site/img/logo.png')}}); background-repeat : no-repeat; background-size : cover">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue sur le site de <span>ONG SERVICE FOR JOB</span></h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>
          
          @foreach($data->donnees->slides as $slide)
            <!-- Slide 2 -->
            <div class="carousel-item" style="background: url({{asset($slide->image)}}); background-repeat : no-repeat; background-size : cover">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated fanimate__adeInDown"><span>{{$slide->title}}</span></h2>
                  <p class="animate__animated animate__fadeInUp">{{$slide->content}}</p>
                </div>
              </div>
          </div>
          @endforeach   

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->