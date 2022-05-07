@extends('backend.partials.layouts')
@section('content')
    <div class="content">
        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Tom Hanks</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                                                                                  class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="edit"
                                                                                  class="w-4 h-4 mr-2"></i> Add Account
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="lock"
                                                                                  class="w-4 h-4 mr-2"></i> Reset
                                Password </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="help-circle"
                                                                                  class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="toggle-right"
                                                                                  class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Top Bar -->
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
                <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                                                                   data-feather="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <ul class="dropdown-content">
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="printer" class="w-4 h-4 mr-2"></i>
                                    Print </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i>
                                    Export to Excel </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i>
                                    Export to PDF </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                    <div class="w-56 relative text-slate-500">
                        <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                    </div>
                </div>
            </div>

            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                    <tr>
                        <th class="whitespace-nowrap">NAME</th>
                        <th class="whitespace-nowrap">Percent</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($skills as $key => $skill)
                        <tr class="intro-x">
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $skill->name }}</a>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $skill->percent }}</a>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('skill.edit',$skill->id) }}"> <i
                                            data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href="{{ route('skills.delete',$skill->id) }}" data-tw-toggle="modal"
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

    </div>
@endsection
