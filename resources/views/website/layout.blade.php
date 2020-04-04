<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
</head>

<body>
    @include('website.partials.header')
        @php
            $msg  = session()->get('msg');
            $text = $msg['text'] ?? '';
            $type = $msg['type'] ?? '';
        @endphp

        @if($text & $type)
            @php
                if($type == 'success') { $icon = 'fa fa-check'; $color = '#06d79c'; }
                if($type == 'error') { $icon = 'fa fa-bug'; $color = '#fb9678'; }
                if($type == 'warning') { $icon = 'fa fa-exclamation-triangle'; $color = '#e0bc00'; }
                if($type == 'info') { $icon = 'fa fa-info-circle'; $color = '#f96197'; }
            @endphp
            <script type="text/javascript">
                swal.fire({title:'{{$text}}', icon:'{{$type}}', button:true});
                {{-- $.notify('{{$text}}','{{$type}}'); --}}
                // iziToast.{{$type}}( {title: '{{ ucfirst($type) }}', message: '{{$text}}'} );

                // iziToast.show({
                //     theme: 'dark',
                //     icon: '{{ $icon }}',
                //     iconColor: '{{ $color }}',
                //     title: '{{$text}}',
                //     message: '',
                // });
            </script>
        @endif

    @yield('content')

    @include('website.partials.footer')
    @include('website.partials.script')

    @if(session('faild'))
        <script type="text/javascript">
            $.toast({
          heading: 'Success',
          text: 'Data Insert Successfully.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        });
    </script>
    @endif
</body>
</html>