
<div class="leftside-menu leftside-menu-detached">

    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <span class="logo-lg">
                <h2 style = "color:white">Orange</h2>
            </span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="side-nav">

        

        <li class="side-nav-title side-nav-item"></li>

        <li class="side-nav-item">
            <a href="{{route('home')}}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Dashboard </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a href="{{route('charging.index')}}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Charging </span>
            </a>
        </li>


        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                <i class="uil-store"></i>
                <span> Blacklist </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEcommerce">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('blacklist.index')}}">View Blacklist</a>
                    </li>
                    <li>
                        <a href="{{route('blacklist.create')}}">Add to Blacklist</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a href="{{route('subscription.index')}}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Subscription </span>
            </a>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                <i class="uil-briefcase"></i>
                <span> Partners</span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarProjects">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('partner.create')}}">Add Partner</a>
                    </li>
                    <li>
                        <a href="{{route('partner.index')}}">View Partner</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarMsg" aria-expanded="false" aria-controls="sidebarMsg" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Message </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMsg">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('message.index')}}">View Message</a>
                    </li>
                    <li>
                        <a href="{{route('message.create')}}">Add Message</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                <i class="uil-clipboard-alt"></i>
                <span> Keyword </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTasks">
                <ul class="side-nav-second-level">
                    <li>
                        <a href="{{route('keyword.index')}}">View Keywords</a>
                    </li>
                    <li>
                        <a href="{{route('keyword.create')}}">Add Keyword</a>
                    </li>
                </ul>
            </div>
        </li>

        
    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>



