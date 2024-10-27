@include('layouts.homeNav')


<section class="section courses text-white" data-section="section4">
    <div class="col-md-12">
        <div class="section-heading">
            <h2>Register </h2>
        </div>
    </div>
    <div class="container mt-5 pb-3">
        <div class="row">
            <h5 class="card-header">Registration</h5>
            <div class="card-body">
                @include('layouts.messages')
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label for="name">User Type</label>
                        <select name="user_type" class="form-group form-control mb-3" id="user_type">
                            <option value="">Select User Type</option>
                            <option value="student">student</option>
                            <option value="lecturer">lecturer</option>
                            <option value="other">other</option>
                        </select>
                        <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
                    </div>

                    <div>
                        <label for="name">Name</label>
                        <input id="name" class="form-control form-group mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="name">Email</label>
                        <input id="email" class="form-control form-group mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="name">Password</label>

                        <input id="password" class="form-control form-group mt-1 w-full"
                               type="password"
                               name="password"
                               required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="name">Confirm Password</label>
                        <input id="password_confirmation" class="form-control form-group mt-1 w-full"
                               type="password"
                               name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="btn btn-dark ms-4">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
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
