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
                <form method="post" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
					@csrf   
                     <div class="intro-y box p-5">
                     
                        <div>
                            <div class="form-group">
                                <label for="image">{{ __('Image') }}</label>
                                <input type="file" name="file" id="image"  class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Name')}}</label>
                                <input type="text" name="name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="desination">{{ __('Desination')}}</label>
                                <textarea  name="desination" class="form-control" id="desination" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description')}}</label>
                                <textarea  name="description" class="form-control" id="description" required=""></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>

        </div>
    </div>
    <!-- END: Content -->
@endsection