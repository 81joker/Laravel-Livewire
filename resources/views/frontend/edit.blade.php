@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex">
                    Posts <br>
                    <a href="{{ route('posts.update', $post->id) }}" class="btn btn-primary ms-auto btn-sm">Create Post</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{ old('title', $post->title) }}" id="title" name="title"
                                class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category', $post->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="body" class="form-label">Body</label>
                            <textarea id="body" name="body" class="form-control" rows="5">
                             {{ old('body', $post->body) }}
                            </textarea>
                            @error('body')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($post->image != '')
                            <div class="form-group">
                                <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" width="100">
                            </div>
                        @endif


                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" value="{{ old('image') }}" id="image" name="image"
                                class="form-control">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <input type="submit" name="save" value="Update Post" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
