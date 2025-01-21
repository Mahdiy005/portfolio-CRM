<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="mx-3 sidebar-brand-text"><img src="{{ asset('assets/images/logo.png') }}" width="50px" alt="logo"></div>
    </a>

    <!-- Divider -->
    <hr class="my-0 sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Landing -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Landing Section</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Actions</h6>
                <a class="collapse-item" href="{{ route('landing.show') }}">Show Current Data</a>
                <a class="collapse-item" href="{{ route('landing.edit') }}">Edit</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Exoerience Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-cog"></i>
            <span>Expertise Section</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Expertise:</h6>
                <a class="collapse-item" href="{{ route('experienc-section.edit.headers') }}">Edit Headers</a>
                <a class="collapse-item" href="{{ route('experienc.show') }}">Show All Experience</a>
                <a class="collapse-item" href="{{ route('experienc.create') }}">Add New Experience</a>
                {{-- <a class="collapse-item" href="utilities-border.html" disable>Disable Section</a> --}}
            </div>
        </div>
    </li>

    <!-- Nav Item - Skills -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSkills"
            aria-expanded="true" aria-controls="collapseSkills">
            <i class="fas fa-fw fa-cog"></i>
            <span>Skills Section</span>
        </a>
        <div id="collapseSkills" class="collapse" aria-labelledby="headingSkills" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Skills:</h6>
                <a class="collapse-item" href="{{ route('skill.edit-section') }}">Edit Main Headers</a>
                <a class="collapse-item" href="{{ route('skill-table.show') }}">Show All Skills</a>
                <a class="collapse-item" href="{{ route('skill-table.create') }}">Add New Skill</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Projects -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects"
            aria-expanded="true" aria-controls="collapseProjects">
            <i class="fas fa-fw fa-cog"></i>
            <span>Projects Section</span>
        </a>
        <div id="collapseProjects" class="collapse" aria-labelledby="headingProjects" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Projects:</h6>
                <a class="collapse-item" href="{{ route('work.index') }}">Show All Projects</a>
                <a class="collapse-item" href="{{ route('category.show') }}">Show All Categories</a>
                <a class="collapse-item" href="{{ route('work-section.editWorkHeaders') }}">Edit Headers</a>
                <a class="collapse-item" href="{{ route('work.create') }}">Add New Project</a>
                <a class="collapse-item" href="{{ route('category.create') }}">Add New Category</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Testimonials -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonials"
            aria-expanded="true" aria-controls="collapseTestimonials">
            <i class="fas fa-fw fa-cog"></i>
            <span>Testimonials Section</span>
        </a>
        <div id="collapseTestimonials" class="collapse" aria-labelledby="headingTestimonials"
            data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <h6 class="collapse-header">Testimonials:</h6>
                <a class="collapse-item" href="{{ route('test-table.index') }}">Show All Testimonials</a>
                <a class="collapse-item" href="{{ route('test-section.editHeadrs') }}">Edit Headers</a>
                <a class="collapse-item" href="{{ route('test-table.create') }}">Add New Testimonial</a>
            </div>
        </div>
    </li>


        <!-- Nav Item - Blog -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                aria-expanded="true" aria-controls="collapseBlog">
                <i class="fas fa-fw fa-cog"></i>
                <span>Blog Section</span>
            </a>
            <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog"
                data-parent="#accordionSidebar">
                <div class="py-2 bg-white rounded collapse-inner">
                    <h6 class="collapse-header">Blog:</h6>
                    <a class="collapse-item" href="utilities-color.html">Show All Blog</a>
                    <a class="collapse-item" href="utilities-border.html">Add New Blog</a>
                </div>
            </div>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>

</ul>
