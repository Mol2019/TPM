  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex justify-content-between">
        <div class="contact-info">
          <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@ongserviceforjob.org</a>
          <i class="icofont-phone"></i> +225 00 00 00 00
        </div>
        <div class="contact-flash">
          <div class="ticker-wrap">
            <div class="d-flex justify-content-between align-items-center breaking-news">
              <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger
              px-1 news"><span class="d-flex align-items-center">&nbsp;Flash</span> </div>

              <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();"
              onmouseout="this.start();">

                  @foreach ($data->flashs as $flash)
                    <a href="#"> {{$flash->content}} </a>   
                  @endforeach

              </marquee>

          </div>
          </div>
        </div>
        <div class="social-links">
          <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
          <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
          <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
          <a href="#" class="skype"><i class="icofont-skype"></i></a>
          <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
      </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex justify-content-between">

       <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Eterna</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('acc')}}"><img src="{{asset('assets/site/img/logo.png')}}" alt="" class="img-fluid"></a>
      </div>
      @include('site.layouts.partials._menu')
    </div>
  </header><!-- End Header -->
