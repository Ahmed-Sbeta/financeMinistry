
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            @if(Auth::user()->role_id == 1)
                            <a href="{{route('home')}}" class="logo logo-dark">
                            @else
                            <a href="{{route('ministries.index')}}" class="logo logo-dark">
                            @endif
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="17">
                                </span>
                            </a>

                                @if(Auth::user()->role_id == 1)
                                    <a href="{{route('home')}}" class="logo logo-light">
                                @else
                                    <a href="{{route('ministries.index')}}" class="logo logo-light">
                                @endif
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg mt-5">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->

                    </div>

                    <div class="d-flex">

                        {{-- <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}



                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            @if(Auth::user()->notifications->count() > 0)
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @else
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown">
                            @endif
                                <i class="bx bx-bell bx-tada"></i>
                                @if(Auth::user()->notifications->where('read', 0)->count() > 0)
                                <span class="badge bg-danger rounded-pill">{{Auth::user()->notifications->where('read', 0)->count()}}</span>
                                @else
                                <span class="badge bg-danger rounded-pill"></span>
                                @endif
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> الإشــعــارات </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{route('notifications.index')}}" class="small" key="t-view-all"> عــرض الـكـل</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    @foreach (Auth::user()->notifications->take(5)->sortByDesc('created_at') as $notif)
                                    <a href="{{route('notifications.index')}}" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{asset('assets/images/blue.png')}}"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">{{$notif->title}}</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">{{$notif->desc}}</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">{{$notif->created_at->diffForHumans()}}</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach

                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="{{route('notifications.index')}}">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">عرض المزيد..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(Auth::user()->image == "user.png")
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/user.png')}}"
                                    alt="Header Avatar">
                            @else
                                <img class="rounded-circle header-profile-user" src="{{asset(Storage::url(Auth::user()->image))}}"
                                    alt="Header Avatar">
                            @endif

                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">شخصي</span></a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">تسجيل خروج</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </header>


            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                          @if(Auth::user()->role_id == 1)
                            <li class="menu-title" key="t-menu" >عام</li>

                            <li>
                                <a href="{{route('home')}}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <span key="t-file-manager " style="font-size: 130%">الرئـــيــســـيـــة</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-calendar"></i>
                                    <span key="t-dashboards" style="font-size: 130%">تــقاريــر</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                     <li><a href="{{route('reports.index')}}" key="t-full-calendar">تـقاريــر بالأرصدة</a></li>
                                     <li><a href="{{route('GivenVSspentReport')}}" key="t-full-calendar"> تقـاريــر المصروفات و المخصصات</a></li>
                                     <li><a href="{{route('DisissionReport')}}" key="t-full-calendar"> تقـاريــر القـرارات</a></li>
                                </ul>
                            </li>
                            
                            @endif

                            <li class="menu-title" key="t-apps">الإدارة</li>


                            <li>
                                <a href="{{route('ministries.index')}}" class="waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-file-manager" style="font-size: 130%">الجـــهـــات</span>
                                </a>
                            </li>

                            @if(Auth::user()->role_id == 1)

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-calendar"></i>
                                    <span key="t-dashboards" style="font-size: 130%">الــبــنــود</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                  <li><a href="{{route('items.show',[1])}}" key="t-full-calendar">البــاب الأول</a></li>
                                  <li><a href="{{route('items.show',[2])}}" key="t-full-calendar">البــاب الــثــاني</a></li>
                                  <li><a href="{{route('items.show',[3])}}" key="t-full-calendar">البــاب الــثــالــث</a></li>
                                  <li><a href="{{route('items.show',[4])}}" key="t-full-calendar">البــاب الــرابــع</a></li>
                                  <li><a href="{{route('items.show',[5])}}" key="t-full-calendar">البــاب الــخــامــس</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-ecommerce" style="font-size: 130%">الــقــرارات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('decisions.index')}}">كــل الــقــرارات </a></li>
                                    <li><a href="{{route('decisions.create')}}">إنــشــاء قــرار</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-notifications" style="font-size: 130%">الإشــعــارات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('notifications.index')}}" key="t-inbox">كــل الإشــعــارات</a></li>

                                    <li><a href="{{route('notifications.create')}}" key="t-read-email">إرســال إشــعــار</a></li>

                                </ul>
                            </li>

                            @else

                            <li>
                                <a href="{{route('decisions.index')}}" class=" waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-ecommerce" style="font-size: 130%">الــقــرارات</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('notifications.index')}}" class=" waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-notifications" style="font-size: 130%">الإشــعــارات</span>
                                </a>
                            </li>

                            @endif

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">Projects</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                                    <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                                    <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                                    <li><a href="projects-create.html" key="t-create-new">Create New</a></li>
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-tasks">Tasks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                                    <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                                </ul>
                            </li> -->

                            @if(Auth::user()->role->role == "مدير")

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts" style="font-size: 130%">الــمــسـتــخـدمـيـن</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('users.index')}}">كــل المـستـخـدمـيـن</a></li>
                                    @if(auth()->user()->role_id == 1)
                                    <li><a href="{{route('users.create')}}" key="t-user-list">إضـافـة مـسـتـخـدم جـديـد</a></li>
                                    @endif
                                    <!-- <li><a href="contacts-profile.html" key="t-profile">Profile</a></li> -->
                                </ul>
                            </li>
                            @endif

                            <!-- <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                    <i class="bx bx-detail"></i>
                                    <span key="t-blog">Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                    <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                    <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                                </ul>
                            </li> -->


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->




            @if(auth()->user()->notifications->where('show',0)->count() > 0)
            @foreach (auth()->user()->notifications->where('show',0) as $not)
                <script>
                    var title = {!! json_encode($not->title) !!};
                    var desc = {!! json_encode($not->desc) !!};

                    let permission = Notification.permission;
                    if(permission === "granted") {
                       showNotification(title,desc);
                    } else if(permission === "default"){
                       requestAndShowPermission(title,desc);
                    }
                    function showNotification(title,desc) {
                       var title = title;
                       icon = "{{asset('assets/images/blue.png')}}"
                       if(desc == null){
                          var body = "";
                       }else{
                          var body = desc;
                       }
                       var notification = new Notification(title, { body, icon });
                       notification.onclick = () => { 
                              notification.close();
                              window.parent.focus();
                       }
                   }
                   function requestAndShowPermission(title,desc) {
                      Notification.requestPermission(function (permission) {
                         if (permission === "granted") {
                               showNotification(title,desc);
                         }
                      });
                   }
    
                </script>
            @endforeach
    
            <script>
                var url = "{{ route('changeShowNotification') }}";
                $.ajax({
                    url: url,
                    type: "get",
                    data:{ 
                        _token:'{{ csrf_token() }}'
                    },
                    cache: false,
                    dataType: 'json',
                }); 
            </script>
    
            @endif


            <script>    
		setInterval(function()
		{
			var url = "{{route('notificationsCheck')}}";
			$.ajax({
				url: url,
				type: "get",
				data:{ 
					_token:'{{ csrf_token() }}'
				},
				cache: false,
				dataType: 'json',
				success: function(dataResult){
					var resultData = dataResult.data;
					var count = dataResult.count;
					// if(count == 0){
					// 	document.getElementById("billing").style.display = "none";
					// 	document.getElementById("notifCount").style.display = "none";
					// }else{
					// 	show2 = document.getElementById("notifCount");
					// 	show = document.getElementById("billing");
					// 	show.style.display = "block";
					// 	show.innerHTML = count;
					// 	show2.style.display = "block";
					// 	show2.innerHTML = count;
					// }
	
					if(resultData.length == 0){
						return;
					}else{
						var data = resultData;
						let permission = Notification.permission;
						for(i=0; i < data.length; i++){
							if(permission === "granted") {
							   showNotification(data[i]['title'],data[i]['desc']);
							} else if(permission === "default"){
							   requestAndShowPermission(data[i]['title'],data[i]['desc']);
							}
						}

						function showNotification(title,desc) {
						   var title = title;
						   icon = "{{asset('assets/images/blue.png')}}"
                           if(desc == null){
                                var body = "";
                            }else{
                                var body = desc;
                            }
						   var notification = new Notification(title, { body, icon });
						   notification.onclick = () => { 
								  notification.close();
								  window.parent.focus();
						   }
						}
						function requestAndShowPermission(title,desc) {
						   Notification.requestPermission(function (permission) {
							  if (permission === "granted") {
									showNotification(title,desc);
							  }
						   });
						}
						var url = "{{ route('changeShowNotification') }}";
						$.ajax({
							url: url,
							type: "get",
							data:{ 
								_token:'{{ csrf_token() }}'
							},
							cache: false,
							dataType: 'json',
						});
	
					}
				}
			});
		}, 120000);
            </script>