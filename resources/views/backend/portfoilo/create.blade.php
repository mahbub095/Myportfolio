@extends('backend.partials.layouts')
@section('content')




    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
              Add  Portfolio
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">

                        <div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label for="icon">{{ __('Image 350x342px') }}</label>
                                    <input type="file" name="file" id="icon" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="title">{{ __('Title')}}</label>
                                    <input type="text" name="title" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <label for="link">{{ __('Project Link')}}</label>
                                    <input type="text" id="link" name="url" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">{{ __('Link Target')}}</label>
                                    <select class="form-control" name="target">
                                        <option value="_self">_self</option>
                                        <option value="_blank">_blank</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="cat_id">{{ __('Category')}}</label>
                                    <select class="form-control" name="cat_id">
                                        @foreach(App\Category::latest()->get() as $categroy)
                                            <option value="{{ $categroy->id }}">{{ $categroy->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>

                        </div>
                </form>
                <!-- END: Form Layout -->
            </div>

        </div>
    </div>
    <!-- END: Content -->
@endsection
