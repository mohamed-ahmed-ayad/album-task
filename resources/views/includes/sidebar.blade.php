<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->photo}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name??''}}</a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append"><button class="btn btn-sidebar"><i class="fas fa-search fa-fw"></i></button></div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{in_array(Route::currentRouteName(),["home"]) ? 'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                         
                <li class="nav-item">
                    <a href="{{ route('albums.index') }}" class="nav-link {{in_array(Route::currentRouteName(),["albums.index"]) ? 'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Albums</p>
                    </a>
                </li>
                         
                        {{-- @php($general_modules=['general-configurations'])
                        <li class="nav-item menu{{in_array(Route::currentRouteName(),activeArr($general_modules)) ? '-open':'' }}">
                            <a href="#" class="nav-link {{in_array(Route::currentRouteName(),activeArr($general_modules)) ? 'active':'' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>{{trans('cruds.General')}}<i class="right fas fa-angle-left"></i></p>           
                            </a>           
                            <ul class="nav nav-treeview">
                                @foreach($general_modules as $general_module )
                                    <li class="nav-item">
                                        <a href="{{route("$general_module.index")}}" class="nav-link {{in_array(Route::currentRouteName(),["$general_module.index","$general_module.edit","$general_module.show","$general_module.create"]) ? 'active':'' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{trans("cruds.$general_module")}}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li> --}}

                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}"  accept-charset="UTF-8" id="form1">
                                {{ method_field('POST') }} {{ csrf_field() }}
                                <a  class="nav-link" href="#" onclick="document.getElementById('form1').submit();"><i class="fas fa-sign-out-alt"></i> <p>{{trans('cruds.logout')}}</p></a>
                            </form>
                        </li>
              
            </ul>

            {{-- <ul>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if($localeCode!=app()->getLocale())
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endif
                @endforeach
            </ul> --}}
        </nav>
    </div>
</aside>