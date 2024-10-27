@if (session('success'))
    <div class="alert alert-success p-4 mb-4 rounded-lg">
        <span class="font-medium">{{ session('success') }}</span>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger p-4 mb-4 rounded-lg" role="alert">
        <span class="font-medium">{{ session('error') }}</span>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger p-4 mb-4 rounded-lg" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>  <span class="font-medium">{{ $error }}!</span></li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif


