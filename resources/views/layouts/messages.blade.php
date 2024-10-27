{{--@if (session('success'))--}}
{{--<div class="font-semibold alert alert-success">--}}
{{--    {{ session('success') }}--}}
{{--</div>--}}
{{--@elseif (session('error'))--}}
{{--    <div class="alert alert-danger">--}}
{{--        {{ session('error') }}--}}
{{--    </div>--}}
{{--@elseif (session('status'))--}}
{{--    <div class="alert alert-warning">--}}
{{--        {{ session('status') }}--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if ($errors->any())--}}
{{--    <ul class="list-group text-danger">--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            <li class="list-group-item "><span class="font-small">{{ $error }}</span></li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endif--}}

{{--@if($errors->any())--}}
{{--<div class="p-2 mb-2 text-sm text-red-800 bg-red-300 rounded-lg dark:bg-red-800 dark:text-gray-250" role="alert">--}}
{{--   --}}
{{--</div>--}}
{{-- @endif--}}

{{--@if (session('success'))--}}
{{--    <div class="alert alert-success p-4 mb-4 rounded-lg">--}}
{{--        <span class="font-medium">{{ session('success') }}</span>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if (session('error'))--}}
{{--    <div class="alert alert-danger p-4 mb-4 rounded-lg" role="alert">--}}
{{--        <span class="font-medium">{{ session('error') }}</span>--}}
{{--    </div>--}}
{{--@endif--}}

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <h6> <span class="font-medium">{{ $error }}!</span></h6>
        @endforeach
    </div>
@endif


<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if (session('status'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Status',
            text: '{{ session('status') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK',
            //timer: 3000, // Auto close after 3 seconds
          //  showCloseButton: true, // Show close button
        });
    </script>
@endif

@if (session('delete'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Deleted',
            text: '{{ session('delete') }}',
            confirmButtonText: 'OK',
            timer: 3000, // Auto close after 3 seconds
            showCloseButton: true, // Show close button
        });
    </script>
@endif
