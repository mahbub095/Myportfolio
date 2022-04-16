@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Form Layout
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
                <form method="post" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                    <div class="intro-y box p-5">
                        @csrf
                        <div>
                            <label for="webtitle" class="form-label">Website title</label>

                            <textarea class="form-control" required name="webtitle">{{ $settings->webtitle }}</textarea>

                            <label for="facebook" class="form-label">Facebook address</label>
                            <textarea class="form-control" required
                                      name="facebook">{{ $settings->facebook }}</textarea>

                            <label for="twitter" class="form-label">Twitter address</label>
                            <textarea class="form-control" required name="twitter">{{ $settings->twitter }}</textarea>
                            <label for="youtube" class="form-label">Youtube chanal</label>
                            <textarea class="form-control" required name="youtube">{{ $settings->youtube }}</textarea>

                            <label for="instagram" class="form-label">Instagram</label>
                            <textarea class="form-control" required
                                      name="instagram">{{ $settings->instagram }}</textarea>

                            <div class="form-group">
                                <label for="cv">CV</label>
                                <input type="file" name="cv" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image">Website Logo</label>
                                <input type="file" name="file" id="image" class="form-control">
                            </div>
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
