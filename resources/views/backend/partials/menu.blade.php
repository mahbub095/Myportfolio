<nav class="side-nav">
    <ul>
        <li>
            <a href="{{route('admin')}}" class="side-menu side-menu--active">
                <div class="side-menu__icon"><i data-feather="home"></i></div>
                <div class="side-menu__title">
                    Dashboard
                    <div class="side-menu__sub-icon transform rotate-180"></div>
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Taglines
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('taglines.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Taglines</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('about.index')}}" class="side-menu">
                <div class="side-menu__icon"><i data-feather="inbox"></i></div>
                <div class="side-menu__title"> About</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Services
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('service.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add Service</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('service.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Service List</div>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Testimonials
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('testimonials.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title">Add testimonials</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('testimonials.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Testimonials List</div>
                    </a>
                </li>
            </ul>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Skill
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('skill.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add skill</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('skill.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Skill List</div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Category
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('category.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add Category</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('category.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Category List</div>
                    </a>
                </li>
            </ul>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Skill
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('skill.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Soft skill</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('skill.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> skill List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    soft Skill
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('softskill.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add Soft Skill</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('softskill.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title">Soft skill List</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Resume
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('resume.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add resume</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('resume.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title">Resume</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Jobs
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('jobs.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add Jobs</div>
                    </a>
                </li>

                <li>
                    <a href="{{route('jobs.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title">Jobs</div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"><i data-feather="box"></i></div>
                <div class="side-menu__title">
                    Portfoilos
                    <div class="side-menu__sub-icon "><i data-feather="chevron-down"></i></div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="{{route('portfolio.create')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title"> Add Portfolio</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('portfolio.index')}}" class="side-menu">
                        <div class="side-menu__icon"><i data-feather="activity"></i></div>
                        <div class="side-menu__title">Portfolio Lisr</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
