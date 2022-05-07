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
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                    <tr>
                        <th class="whitespace-nowrap">Education title</th>
                        <th class="whitespace-nowrap">School/University</th>
                        <th class="whitespace-nowrap">Description</th>
                        <th class="whitespace-nowrap">Session</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($resumes as $resume)
                        <tr class="intro-x">
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $resume->edutitle }}</a>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $resume->univerisity }}</a>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $resume->description }}</a>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $resume->sessions }}</a>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('resume.edit',$resume->id) }}"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger"
                                       href="{{ route('resume.delete',$resume->id) }}" data-tw-toggle="modal"
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

@endsection
