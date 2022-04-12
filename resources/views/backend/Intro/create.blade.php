@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Form Layout
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form method="post" action="{{ route('taglines.store') }}" enctype="multipart/form-data">
                    <div class="intro-y box p-5">
                        @csrf
                        <div>
                            <label for="tag_line" class="form-label">Product Name</label>
                         
                                   <textarea class="form-control" required name="tag_line">{{ $taglines->tag_line }}</textarea>

                           <label for="description" class="form-label">Product Description</label>
                           <textarea class="form-control" required name="description">{{ $taglines->description }}</textarea>

                           <label for="links" class="form-label">Product Links</label>
                           <textarea class="form-control" required name="links">{{ $taglines->links }}</textarea>

                        </div>
                        <div class="text-right mt-5">
                            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>

        </div>
    </div>
    <!-- END: Content -->
@endsection
