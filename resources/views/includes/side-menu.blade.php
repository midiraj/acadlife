            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{url('/home')}}"></i>Home</a>
                        </li>
                        <li>
                            <a href="{{url('/profile')}}"></i>Profile</a>
                        </li>
                        <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Message<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('/public-post')}}">Post</a>
                            </li>
                            <li>
                                <a href="{{url('/private-mssg')}}">Private Message</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    @if(auth()->user()->category == 1)
                     <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Courses<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="{{url('/course/create')}}">Add Course</a>
                            </li>
                             <li>
                                   <a href="{{url('/course')}}">View Course</a>
                             </li>
                         </ul>
                            <!-- /.nav-second-level -->
                     </li>

                     @else
                        
                        <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Courses<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                             <li>
                                <a href="{{url('/course-std')}}">Running Course</a>
                            </li>
                             <li>
                                   <a href="{{url('/course-req')}}">Request Course</a>
                        </li>
                    @endif

                        </ul>
                            <!-- /.nav-second-level -->
                     </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
