        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                              <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>
                                        {{ __('Sign Out') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">

                    @if(Request::is('admin*'))
                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/tag') ? 'active' : '' }}">
                        <a href="{{route('admin.tag.index')}}">
                            <i class="material-icons">label</i>
                            <span>Tag</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/category') ? 'active' : '' }}">
                        <a href="{{route('admin.category.index')}}">
                            <i class="material-icons">label</i>
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/post') ? 'active' : '' }}">
                        <a href="{{route('admin.post.index')}}">
                            <i class="material-icons">label</i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/events') ? 'active' : '' }}">
                        <a href="{{route('admin.events.index')}}">
                            <i class="material-icons">label</i>
                            <span>Event</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                        <a href="{{route('admin.post.pending')}}">
                            <i class="material-icons">label</i>
                            <span>Pending Post</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                        <a href="{{route('admin.subscriber.index')}}">
                            <i class="material-icons">label</i>
                            <span>Subscriber</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/edit/config') ? 'active' : '' }}">
                        <a href="{{route('admin.edit.config')}}">
                            <i class="material-icons">label</i>
                            <span>Configuration</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/sliders') ? 'active' : '' }}">
                        <a href="{{route('admin.sliders.index')}}">
                            <i class="material-icons">label</i>
                            <span>Slider</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/abouts') ? 'active' : '' }}">
                        <a href="{{route('admin.abouts.index')}}">
                            <i class="material-icons">label</i>
                            <span>Abouts</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/volunteer') ? 'active' : '' }}">
                        <a href="{{route('admin.volunteer.index')}}">
                            <i class="material-icons">label</i>
                            <span>Volunteer</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/teams') ? 'active' : '' }}">
                        <a href="{{route('admin.teams.index')}}">
                            <i class="material-icons">label</i>
                            <span>Our teams</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/members') ? 'active' : '' }}">
                        <a href="{{route('admin.members.index')}}">
                            <i class="material-icons">label</i>
                            <span>Members</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/request') ? 'active' : '' }}">
                        <a href="{{route('admin.volunteer.request')}}">
                            <i class="material-icons">label</i>
                            <span>Volunteer request</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                    <a href="{{ route('admin.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>

                    <li class="header">Setting</li>
                    <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                        <a href="{{route('admin.settings')}}">
                            <i class="material-icons">settings</i>
                            <span>Settings</span>
                        </a>
                    </li>
                            <li>
                              <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>
                                        <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                    @endif
                    @if(Request::is('author*'))
                    <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                        <a href="{{route('author.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('author/post') ? 'active' : '' }}">
                        <a href="{{route('author.post.index')}}">
                            <i class="material-icons">label</i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('author/comments') ? 'active' : '' }}">
                    <a href="{{ route('author.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>
                    <li class="header">Setting</li>
                    <li class="{{ Request::is('author/settings') ? 'active' : '' }}">
                    <a href="{{ route('author.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                    </li>
                            <li>
                              <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>
                                        <span>Logout</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                    @endif

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Blog Admin</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>