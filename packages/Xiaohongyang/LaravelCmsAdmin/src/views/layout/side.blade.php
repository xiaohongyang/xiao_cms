<section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="/plugin/AdminLTE-2.4.5/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>user.Mobile</p>
            <!-- Status -->
            <a href="/user_center/index"><i class="fa fa-circle text-success"></i> 后台首页</a>
        </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
            <a href="<?=route('article_type.index')?>"><i class="fa fa-link"></i> <span>类别管理</span></a>
        </li>

        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i>
                <span>账号管理</span>

                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>

            </a>
            <ul class="treeview-menu">

                <li><a href="#">账号修改</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i>
                <span>其它</span>

                <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>

            </a>
            <ul class="treeview-menu">

                <li><a href="#">Link in level 2</a></li>
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>