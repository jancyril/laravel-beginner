@section('post-header')
    <header class="intro-header" style="background-image: url('/images/source_code.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $page->headerTitle($page->title) }}</h1>
                        <span class="meta">Posted on {{ $page->date }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
