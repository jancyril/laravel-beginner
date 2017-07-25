---
pagination:
  collection: posts
  perPage: 10
---

@extends('_layouts.master')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @if($pagination)
                    @foreach ($pagination->items as $post)
                        <div class="post-preview">
                            <a href="{{ $post->getUrl() }}">
                                <h2 class="post-preview">{{ $post->title }}</h2>
                                <h3 class="post-subtitle">{{ $post->excerpt }}</h3>
                            </a>
                        </div>
                        <p class="post-meta">
                            Posted on {{ $post->date }}
                        </p>
                    @endforeach
                @endif
                <!-- Pager -->
                <ul class="pager">
                    @if($previous = $pagination->previous)
                        <li class="previous">
                            <a href="{{ $page->baseUrl.$previous }}"> <i class="fa fa-arrow-left"></i> Previous</a>
                        </li>
                    @endif
                    @if ($next = $pagination->next)
                        <li class="next">
                            <a href="{{ $page->baseUrl.$next }}">Next <i class="fa fa-arrow-right"></i></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>    
@endsection
