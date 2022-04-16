@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Introduction
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <form method="post" action="{{ route('taglines.store') }}" enctype="multipart/form-data">
                    <div class="intro-y box p-5">
                        @csrf
                        <div>
                            <label for="tag_line" class="form-label">Degination</label>
                            <textarea class="form-control" required name="tag_line">{{ $taglines->tag_line }}</textarea>
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" required
                                      name="description">{{ $taglines->description }}</textarea>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="text-right mt-5">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
