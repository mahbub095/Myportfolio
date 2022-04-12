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
                <form method="post" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="intro-y box p-5">

                        <div>

                            <div class="form-group">
                                <div>
                                    <label for="crud-form-1" class="form-label"> Name</label>
                                    <input id="exptitle" name="exptitle" type="text" class="form-control w-full"
                                           placeholder="Input text">
                                </div>

                                <div>
                                    <label for="crud-form-1" class="form-label"> percent</label>
                                    <input id="expmarketplace" name="expmarketplace" type="text" class="form-control w-full"
                                           placeholder="Input text">
                                </div>
                                <div>
                                    <label for="crud-form-1" class="form-label"> percent</label>
                                    <input id="expdescription" name="expdescription" type="text" class="form-control w-full"
                                           placeholder="Input text">
                                </div>
                                <div>
                                    <label for="crud-form-1" class="form-label"> percent</label>
                                    <input id="expsession" name="expsession" type="text" class="form-control w-full"
                                           placeholder="Input text">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- END: Form Layout -->
            </div>

        </div>
    </div>
    <!-- END: Content -->
@endsection
