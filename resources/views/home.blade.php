@include('layouts.homeNav')


  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Contents </h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($contents as $content)
                <div class="item">
                    @php
                        $randomNumber = rand(1, 5);
                    @endphp
                    <img src="assets/images/courses-{{ str_pad($randomNumber, 2, '0', STR_PAD_LEFT) }}.jpg" alt="Course #{{ $randomNumber + 1 }}">
                    <div class="down-content">
                        <h4>{{ $content->title }}</h4>
                        <p>{{ $content->content_type }}</p>
                        <small class="float-right">{{ $content->created_at }}</small>

                        <div class="text-button-view">
                            <a href="{{ url('show/' . $content->id) }}">view <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Designed By TINASHE CHIVASA (R215598G) to fulfil my dissertation at Midlands State University

          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/video.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
