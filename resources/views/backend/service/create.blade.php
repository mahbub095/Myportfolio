@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Service
            </h2>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Form Layout -->
                <form method="post" action="{{ route('service.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">
                        <div>
                            <div class="form-group">
                                <label for="title">{{ __('Name')}}</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Desination')}}</label>
                                <textarea name="description" class="form-control" id="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">{{ __('Image') }}</label>
                                <input type="file" name="file" id="icon" class="form-control" required="">
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
