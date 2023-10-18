<!-- <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar"> -->
<style>
.sh-bg-d{
    background: rgb(23,0,28);
    background: -moz-linear-gradient(195deg, rgba(23,0,28,1) 34%, rgba(69,9,121,0.9976365546218487) 71%, rgba(144,35,219,1) 100%);
    background: -webkit-linear-gradient(195deg, rgba(23,0,28,1) 34%, rgba(69,9,121,0.9976365546218487) 71%, rgba(144,35,219,1) 100%);
    background: linear-gradient(195deg, rgba(23,0,28,1) 34%, rgba(69,9,121,0.9976365546218487) 71%, rgba(144,35,219,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#17001c",endColorstr="#9023db",GradientType=1);
}
</style>

<ul class="navbar-nav sh-bg-d sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <!-- <i class="fas fa-fw fa-lock"></i> -->
            <!-- <img style="width: 35px; height: auto;" src="../iutlogo/IUTLogo.png"/> -->
        </div>
        <div class="sidebar-brand-text mx-3">DLT Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Calendar -->
    <li class="nav-item active">
        <a class="nav-link" href="../calendar/index.php">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Calendar</span></a>
    </li>

    <!-- Nav Item - New Meeting -->
    <li class="nav-item active">
        <a class="nav-link" href="../form/">
            <i class="fas fa-fw fa-pen"></i>
            <span>Book Meeting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Schedule
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Meeting Details</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <a class="collapse-item" href="meetings.php?source=add_meeting">Add Meeting</a> -->
                <a class="collapse-item" href="meetings.php">View Meetings</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pending Requests -->
    <li class="nav-item">
        <a class="nav-link" href="meetings.php?source=pending_requests">
            <i class="fas fa-fw fa-clock"></i>
            <span>Pending Requests</span></a>
    </li>

    <!-- Nav Item - Previous Meetings -->
    <li class="nav-item">
        <a class="nav-link" href="meetings.php?source=previous_meetings">
            <i class="fas fa-fw fa-eye"></i>
            <span>Previous Meetings</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Permission
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span>Faculty</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="faculty.php?source=add_faculty">Add Faculty</a>
                <a class="collapse-item" href="faculty.php">View Faculties</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Profile -->
    <li class="nav-item">
        <a class="nav-link" href="profile.php">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>