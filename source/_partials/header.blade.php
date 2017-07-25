@section('header')
    <header class="intro-header" style="background-image: url('/images/source_code.png')">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="site-heading">
                        <h1>{{ $page->headerTitle($page->siteTitle) }}</h1>
                        <hr class="small">
                        <span class="subheading">{{ $page->headerText($page->siteDescription) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
