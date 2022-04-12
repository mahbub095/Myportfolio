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
                <div class="intro-y box p-5">
                    <form method="post" action="{{ route('resume.store') }}" enctype="multipart/form-data">
                        @csrf
                    <div>
                        <label for="crud-form-1" class="form-label">EduTitle</label>
                        <input name="edutitle" id="edutitle" type="text" class="form-control w-full" placeholder="Input text">

                    </div>
                    <div>
                        <label for="crud-form-1" class="form-label">University</label>
                        <input id="univerisity" name="univerisity" type="text" class="form-control w-full" placeholder="Input text">
                    </div>

                    <div>
                        <label for="crud-form-1" class="form-label">Description</label>
                        <input id="description"  name ="description"type="text" class="form-control w-full" placeholder="Input text">
                    </div>

                    <div>
                        <label for="session" class="form-label">session Name</label>
                        <input id="sessions"  name ="sessions"type="text" class="form-control w-full" placeholder="Input text">
                    </div>

              
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>

    </div>
    <!-- END: Content -->
@endsection
