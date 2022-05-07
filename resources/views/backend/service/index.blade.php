@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Service List
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                <tr>
                    <th class="whitespace-nowrap">Name</th>
                    <th class="whitespace-nowrap">Descriptions</th>
                    <th class="text-center whitespace-nowrap">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $key => $service)
                    <tr class="intro-x">
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{ $service->title }}</a>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{ $service->description }}</a>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="{{ route('service.edit',$service->id) }}">
                                    <i
                                        data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-danger"
                                   href="{{ route('services.delete',$service->id) }}" data-tw-toggle="modal"
                                   data-tw-target="#delete-confirmation-modal"> <i data-feather="trash-2"
                                                                                   class="w-4 h-4 mr-1"></i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->

        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->


    <!-- END: Content -->
@endsection
