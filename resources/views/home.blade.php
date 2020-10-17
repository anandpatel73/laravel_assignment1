@extends('layout')

@section('content')

<div class="row tm-row">

    @foreach ($data as $item)
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
            <div class="tm-post-link-inner">
                <img src="img/img-01.jpg" alt="Image" class="img-fluid">                            
            </div>
        <h2 class="tm-pt-30 tm-color-primary tm-post-title">{{$item->title}}</h2>
        </a>                    
        <p class="tm-pt-30">
            {{$item->info}}
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary">Sports</span>
            <span class="tm-color-primary">{{$item->created_at}}</span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>comments</span>
            <span>by Anand Patel</span>
        </div>
    </article>
    @endforeach
    
    
</div>

    
@endsection