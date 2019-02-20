      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-right image">
              <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{auth()->user()->name}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> {{__('admin.online')}} </a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="جستوجو ...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span> {{__('admin.users')}}  </span> <i class="fa fa-angle-left pull-left"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('admin/users')}}"><i class="fa fa-circle-o"></i> {{__('admin.users')}} </a></li>
                <li class="active"><a href="{{url('admin/users/create')}}"><i class="fa fa-circle-o"></i> {{__('admin.add_user')}}</a></li>
                
              </ul>
            </li>
              <li class="active treeview">
              <a href="{{url('admin/posts')}}">
                <i class="fa fa-dashboard"></i> <span> {{__('admin.posts')}}  </span>
              </a>
            </li>
             <li class="active treeview">
              <a href="{{url('admin/articles')}}">
                <i class="fa fa-dashboard"></i> <span> {{__('admin.articles')}}  </span> 
              </a>
            </li>
             <li class="active treeview">
              <a href="{{url('admin/images')}}">
                <i class="fa fa-dashboard"></i> <span> {{__('admin.images')}}  </span> 
              </a>
            </li>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>