<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img onerror=""
                        src=""
                        alt="image profile" class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Muhammad Agni Rosadi
                            <span style="text-transform: capitalize;" class="user-level">Dashboard Guru</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?= base_url('user')?>" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <span class="link-collapse">Logout</span>
                                </a>

                                <form id="logout-form" action="" method="POST" class="d-none">
                                    <input type="hidden" name="_token" value="xfWPCR4NBmiteZcN9APAwigxL9vBrlEheOmC60oQ">                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            
            <ul class="nav nav-primary">

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>

                

                <li class="nav-item active">
                    <a href="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="">
                                    <span class="sub-item">Go to Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Menu</h4>
                </li>

                <li class="nav-item  ">
                    <a data-toggle="collapse" href="#arts">
                        <i class="fas fa-users"></i>
                        <p>Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse  " id="arts">
                        <ul class="nav nav-collapse">

                            <li class="">
                                <a href="">
                                    <span class="sub-item">Manage Data Siswa</span>
                                </a>
                            </li>
                          
                        </ul>
                    </div>
                </li>

                <li class="nav-item  ">
                    <a data-toggle="collapse" href="#messages-app-nav">
                        <i class="far fa-paper-plane"></i>
                        <p>Kelompok</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse " id="messages-app-nav">
                        <ul class="nav nav-collapse">

                            <li class="">
                                <a href="">
                                    <span class="sub-item">Manage Data KelompokU</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item  ">
                    <a data-toggle="collapse" href="#ustadzah">
                        <i class="far fa-paper-plane"></i>
                        <p>Ustadzah</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse " id="ustadzah">
                        <ul class="nav nav-collapse">

                            <li class="">
                                <a href="">
                                    <span class="sub-item">Manage Data Ustadzah</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item   ">
                    <a href="">
                        <i class="fas fa-user-circle"></i>
                        <span class="link-collapse">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('User');?>" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="link-collapse">Logout</span>
                    </a>
                    <form id="logout-form" action="" method="POST" class="d-none">
                        <input type="hidden" name="_token" value="xfWPCR4NBmiteZcN9APAwigxL9vBrlEheOmC60oQ">                    </form>
                </li>




            </ul>
        </div>
    </div>
</div>
		<!-- End Sidebar -->