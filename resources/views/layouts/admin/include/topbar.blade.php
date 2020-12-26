 @php
 $contact=DB::table('contacts')->get();
 @endphp  
    <style>
       .blinking{
    animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #FFFFFF;    }
    49%{    color: #FFFFFF; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #FFFFFF;    }

   </style> 
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{URL::to('admin/dashboard')}}">Simple Blog</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    @if(Request::is('admin*'))
                        <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">message</i>
                            <span class="label-count blinking">{{count($contact)}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Message</li>
                            <li class="body">
                                <ul class="menu">
                                @foreach($contact as $row)   
                                   <li>
                                        <a href="{{route('admin.single.message',$row->id)}}">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>{{$row->name}}</b>-- {{ Illuminate\Support\Str::limit($row->message, 20) }}</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> {{ \Carbon\Carbon::parse($row->updated_at)->diffForhumans() }}
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="{{route('admin.all.message')}}">View All Message</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>