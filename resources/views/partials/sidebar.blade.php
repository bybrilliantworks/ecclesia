<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="{{url('assets/images/profile-menu-image.png')}}" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>{{Auth::user()->name}}<br><small>Administrator</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu">
            <li class="{{strpos(URL::current(), URL::to('dashboard')) !== false ? 'active':''}}"><a href="{{url("dashboard")}}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
            <li class="{{strpos(URL::current(), URL::to('members')) !== false ? 'active':''}}"><a href="{{url("members")}}" class="waves-effect waves-button"><span class="menu-icon fa fa-users"></span><p>Members</p></a></li>
            <li class="{{strpos(URL::current(), URL::to('events')) !== false ? 'active':''}}"><a href="{{url("events")}}" class="waves-effect waves-button"><span class="menu-icon fa fa-calendar"></span><p>Events</p></a></li>
            <li class="{{strpos(URL::current(), URL::to('projects')) !== false ? 'active':''}}"><a href="{{url("projects")}}" class="waves-effect waves-button"><span class="menu-icon fa fa-cubes"></span><p>Projects</p></a></li>
            <li class="{{strpos(URL::current(), URL::to('groups')) !== false ? 'active':''}}"><a href="{{url("groups")}}" class="waves-effect waves-button"><span class="menu-icon fa fa-group"></span><p>Groups</p></a></li>
            <li class="{{strpos(URL::current(), URL::to('assets')) !== false ? 'active':''}}"><a href="{{url("assets")}}" class="waves-effect waves-button"><span class="menu-icon fa fa-cogs"></span><p>Assets</p></a></li>

        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->


