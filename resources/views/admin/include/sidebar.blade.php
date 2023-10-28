<!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="{{route('dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
{{--                    <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>--}}
{{--                    <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>--}}
{{--                    <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>--}}
{{--                    <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>--}}
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Category</span><span class="label label-important"> 2 </span></a>
                        <ul>
                            <li><a class="submenu" href="{{url('/categories/create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Category</span></a></li>
                            <li><a class="submenu" href="{{url('/categories')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Category</span></a></li>
{{--                            <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Sub Category</span><span class="label label-important"> 2 </span></a>
                        <ul>
                            <li><a class="submenu" href="{{url('/sub-categories/create')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Sub Category</span></a></li>
                            <li><a class="submenu" href="{{url('/sub-categories')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Manage Sub Category</span></a></li>
                            {{--                            <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>--}}
                        </ul>
                    </li>
                    <li>
                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Brand  </span><span class="label label-important"> 2 </span></a>
                        <ul>
                            <li><a class="submenu" href="{{route('create.brand')}}"><i class="icon-file-alt"></i><span class="hidden-tablet">Create New Brand</span></a></li>
                            <li><a class="submenu" href="{{route('manage.brand')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> All Brands</span></a></li>
                        </ul>
                    </li>

                    <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                    <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                    <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                    <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                    <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                    <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                    <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                    <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                    <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
                </ul>
            </div>
        </div>
<!-- end: Main Menu -->