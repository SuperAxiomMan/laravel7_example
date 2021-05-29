@extends('layouts.app')

@section('content')

    <div class="container">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="article-title">Article Title</label>
                <input name="article-title" type="text" class="form-control @error('article-title') is-invalid @enderror"
                    id="article-title" aria-describedby="titleHelp" placeholder="Your Title">
                @error('article-title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="article-content">Article content</label>
                <textarea class="form-control @error('article-content') is-invalid @enderror" name="article-content"
                    id="article-content" placeholder="content"></textarea>
                @error('article-content')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary m-3">Save</button>
        </form>
    </div>


@stop
