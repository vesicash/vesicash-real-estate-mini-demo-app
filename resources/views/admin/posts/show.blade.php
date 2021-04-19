@extends('backend.layouts.app')

@section('title', 'Show Post')

@push('styles')


@endpush


@section('content')

    <div class="block-header"></div>

    <div class="row clearfix">

        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
            <div class="card">

                <div class="header bg-indigo">
                    <h2>SHOW POST</h2>
                </div>

                <div class="header">
                    <h2>
                        {{$post->title}}
                        <br>
                        <small>Posted By <strong>Vee Estates</strong> on {{$post->created_at->toFormattedDateString()}}</small>
                    </h2>
                </div>

                <div class="body">
                    {!!$post->body!!}
                </div>

            </div>


        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header bg-cyan">
                    <h2>SELECTED CATEGORY</h2>
                </div>
                <div class="body">
                    @foreach($post->categories as $category)
                        <span class="label bg-cyan">{{$category->name}}</span>
                    @endforeach
                </div>
            </div>
            <div class="card">
                <div class="header bg-green">
                    <h2>SELECTED TAGS</h2>
                </div>
                <div class="body">
                    @foreach($post->tags as $tag)
                        <span class="label bg-green">{{$tag->name}}</span>
                    @endforeach
                </div>
            </div>

            <div class="card">
                <div class="header bg-amber">
                    <h2>FEATURED IMAGE</h2>
                </div>
                <div class="body">

                    <img class="img-responsive thumbnail" src="{{ $post->image }}" alt="">


                    <a href="{{route('admin.posts.index')}}" class="btn btn-danger btn-lg waves-effect">
                        <i class="material-icons left">arrow_back</i>
                        <span>BACK</span>
                    </a>
                    <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-info btn-lg waves-effect">
                        <i class="material-icons">edit</i>
                        <span>EDIT</span>
                    </a>

                </div>
            </div>
        </div>

    </div>


@endsection


@push('scripts')

    <script>



    </script>


@endpush
