<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>
    @include('layouts.backend.data.styles')
    
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('layouts.backend.data.navbar')
            @include('layouts.backend.data.sidebar')
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1 class="text-capitalize">{{ request()->segment(3) ?? request()->segment(2) }}</h1>
                        <div class="section-header-breadcrumb">
                            @foreach (request()->segments() as $index => $item)
                                <div class="breadcrumb-item text-capitalize">
                                    @if ($loop->last)
                                        {{ $item }}
                                    @else
                                        <a href="#">{{ $item }}</a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="section-body">
                        @yield('content')
                    </div>
                </section>
            </div>
            @include('layouts.backend.data.footer')
        </div>
    </div>

    @include('layouts.backend.data.scripts')
    
</body>

</html>
