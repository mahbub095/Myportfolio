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
                <form method="post" action="{{ route('about.store') }}" enctype="multipart/form-data">
                  <div class="intro-y box p-5">

                        @csrf
                        <div>


                            <div>
                                <label for="crud-form-1" class="form-label">Name</label>
                                <textarea class="form-control" required name="dob">{{ $info->name }}</textarea>
                          
                            </div>
                            <div>
                                <label for="crud-form-1" class="form-label">DOB</label>
                                <textarea class="form-control" required name="dob">{{ $info->dob }}</textarea>
                          
                            </div>
                            <div>
                                <label for="crud-form-1" class="form-label">Mail</label>
                                <textarea class="form-control" required name="mail">{{ $info->mail }}</textarea>
                          
                            </div>
                            <div>
                                <label for="crud-form-1" class="form-label">Phone</label>
                                <textarea class="form-control" required name="phone">{{ $info->phone }}</textarea>
                          
                            </div>
                            <div>
                                <label for="crud-form-1" class="form-label">Address</label>
                                <textarea class="form-control" required name="address">{{ $info->address }}</textarea>
                          
                            </div>
                            <div>
                                <label for="crud-form-1" class="form-label">Nationality</label>
                                <textarea class="form-control" required name="nationality">{{ $info->nationality }}</textarea>
                            </div>

                            <div>
                            <label for="title" class="form-label">Product Name</label>
                            <textarea class="form-control" required name="title">{{ $info->title }}</textarea>
                            </div>
                            <label for="subtitle" class="form-label">Product Name</label>
                            <textarea class="form-control" required name="subtitle">{{ $info->subtitle }}</textarea>



                            <label for="tag_line" class="form-label">Product Name</label>
                            <textarea class="form-control" required name="description">{{ $info->description }}</textarea>

                            <div class="form-group">
                                <label for="cv">CV</label>
                                <input type="file" name="cv" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input type="file" name="file" class="form-control" accept="image/*">
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
        <div class="col-md-4">
            <h5>About Image</h5>
            <img src="{{ asset($info->image) }}" class="img-fluid about-img" >
        </div>
    </div>
    <!-- END: Content -->

@endsection
