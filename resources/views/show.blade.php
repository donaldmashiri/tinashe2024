@include('layouts.homeNav')


<section class="section courses" data-section="section4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Show Contents Upload </h2>
                </div>
            </div>

            @include('layouts.messages')

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('assets/images/courses-02.jpg') }}">
                        <div class="down-content">
                            <h4>{{ $content->title }}</h4>
                            <p class="bg-light">{!! $content->description !!}</p>
                            <small class="float-right">{{ $content->created_at }}</small>
                            <h6>{{ $content->content_type }}</h6>
                            <a href="{{ asset('storage/'.$content->file_path) }}" class="text-blue-600 dark:text-blue-600 hover:underline" target="_blank" download="">Download</a>
                        </div>

                        <div class="card-footer">
                            <form action="{{ route('feedbacks.store') }}" method="POST">
                                @csrf
                                <div class="p-6 text-gray-900">
                                    <div class="row">
                                        <div class="col-md-9 form-group">
                                            <input type="hidden" name="content_upload_id" value="{{ $content->id }}">
                                            <div class="p-2">
                                                <input type="text" class="form-control" name="feedback" placeholder="Leave your feedback here..." required>
                                                <button type="submit" class="btn btn-success float-right btn-sm mt-3">Feedback</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-header"><h5>Feedbacks:</h5></div>
                        @if($feedbacks->isEmpty())
                            <p class="alert alert-danger">No feedbacks yet.</p>
                        @else
                            @foreach($feedbacks as $feedback)
                                <div class="feedback-item bg-light d-flex align-items-center">
                                    @if ($feedback->user->user_type == 'lecturer')
                                        <img src="{{ asset('assets/images/lecturer.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;">
                                    @else
                                        <img src="{{ asset('assets/images/student.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;">
                                    @endif
                                    <strong>{{ $feedback->user->name }}</strong>:
                                    <p class="mb-0" style="display: inline;">  {{ $feedback->feedback }}</p>
                                    <small class="text-muted float-right">{{ $feedback->created_at->diffForHumans() }}</small> <!-- Time ago -->
                                </div>
                                <hr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div>

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