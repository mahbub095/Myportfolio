@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Soft edit form
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
                <form method="post" action="{{ route('softskill.update',$info->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="intro-y box p-5">
                        <div>
                            <div class="form-group">
                                <div>
                                    <label for="crud-form-1" class="form-label"> Name</label>
                                    <input id="softskillname" name="softskillname" type="text"
                                           class="form-control w-full"
                                           placeholder="Input text" required value="{{ $info->softskillname }}">
                                </div>
                                <div>
                                    <label for="crud-form-1" class="form-label"> Rating</label>
                                    <input id="softskillrating" name="softskillrating" type="text"
                                           class="form-control w-full"
                                           placeholder="Input text" required value="{{ $info->softskillrating }}">
                                </div>
                            </div>
                            <div class="modal-footer">
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
