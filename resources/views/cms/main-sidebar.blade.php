<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>
@php

        use Illuminate\Support\Facades\Auth;
        $user=Auth::user()->name;

@endphp
    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{url('https://s19.picofile.com/file/8436974126/me.jpeg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{$user}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                 <li class="nav-item">
                    <a href="{{url("admin")}}" class="nav-link">
                      <i class="nav-icon fa fa-dashboard"></i>
                      <p>
                        پیشخوان

                      </p>
                    </a>
                  </li>

                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-file"></i>
                      <p>
                        رزومه
                        <i class="fa fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url("admin/experience")}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>تجربه </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url("admin/education")}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>تحصیلات</p>
                        </a>
                      </li>
                        </ul>
                  <li class="nav-item">
                    <a href="{{url("admin/header/edit")}}" class="nav-link">
                      <i class="nav-icon fa fa-header"></i>
                      <p>
                        هدر وبسایت

                      </p>
                    </a>
                  </li>

                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url("admin/experience")}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>تجربه </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url("admin/education")}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>تحصیلات</p>
                        </a>
                      </li>
                        </ul>
                  <li class="nav-item">
                    <a href="{{url("admin/profile/edit")}}" class="nav-link">
                      <i class="nav-icon fa fa-user"></i>
                      <p>
                        پروفایل

                      </p>
                    </a>
                  </li>

                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="fa fa-pencil"></i>
                      <p>
                        مدیریت وبلاگ
                        <i class="fa fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{route('blog.create')}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>افزودن پست جدبد </p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url("admin/blog/posts")}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>نمایش مطالب</p>
                        </a>
                      </li>
                        </ul>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                              <i class="fa fa-list-alt"></i>
                              <p>
                                دسته بندی نمونه کار ها
                                <i class="fa fa-angle-left right"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="{{url("admin/category/create")}}" class="nav-link">
                                  <i class="fa fa-circle-o nav-icon"></i>
                                  <p>افزودن دسته جدید </p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{url("admin/category")}}" class="nav-link">
                                  <i class="fa fa-circle-o nav-icon"></i>
                                  <p>نمایش دسته ها</p>
                                </a>
                              </li>
                                </ul>
             <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-image"></i>
                <p>
               مدیریت نمونه کار ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('portfolios.index')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمایش نمونه کار ها</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('portfolios.create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>افزودن نمونه کار ها</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-money"></i>
                  <p>
                    قیمت های پروژه
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url("admin/price/")}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>نمایش قیمت ها</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url("admin/price/create")}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>افزودن قیمت جدید</p>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-code"></i>
                  <p>
                    مهارت ها
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin/skills')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>نمایش مهارت ها</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('skills.create')}}" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>افزودن مهارت جدید</p>
                    </a>
                  </li>

                </ul>
              </li>
            <li class="nav-item">
                <a href="{{url('admin/project-order/')}}" class="nav-link">
                  <i class="nav-icon fa fa-product-hunt"></i>
                  <p>
                    سفارش پروژه

                  </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="{{url('admin/show-message')}}" class="nav-link">
                  <i class="nav-icon fa fa-comment"></i>
                  <p>
                    ارتباط با من

                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="{{url('admin/tikets')}}" class="nav-link">
                      <i class="nav-icon fa fa-comment"></i>
                      <p>
                         تیکت ها

                      </p>
                  </a>
              </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
