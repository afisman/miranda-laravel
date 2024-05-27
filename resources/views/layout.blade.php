@component('head')
@endcomponent
<body>
    @component('header')
    @endcomponent
    @section('content')
    @show
    @component('footer')
    @endcomponent  
    @if(session('success'))
        @if(session('booking'))  
            @component('swal', [
                'title' => '¡Thank you for your request!',
                'text' => 'We have received it correctly. Someone from our Team will get back to you very soon. The Miranda Hotel',
                'icon' => 'success',
            ])
            @endcomponent
        @else
            @component('swal', [
                'title' => 'Your message was sent successfully',
                'text' => 'Thanks for your time',
                'icon' => 'success',
            ])
            @endcomponent
        @endif
    @endif
     @if ($errors->any())
        @component('swal', [
                'title' => 'Validation errors',
                'text' => implode('\n', $errors->all()),
                'icon' => 'error',
            ])
        @endcomponent
    @endif
    @php
        session()->forget(['error', 'success']);
    @endphp
</body>