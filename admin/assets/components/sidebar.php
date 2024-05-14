<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="dashboard.php"><img src="./../img/logo.png" alt="logo" width="200" class="logo_bg"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="dashboard.php"><img src="./../img/fav.png" alt="logo" width="35" class="logo_bg"></a>
          </div>
          <ul class="sidebar-menu">
            <!--  <li class="menu-header">Dashboard</li>
                <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-grip"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
            </li> -->
            <li class="<?php if($page=='dashboard') echo 'active'?>">
              <a href="./dashboard.php" class="nav-link">
                <i class="fa-solid fa-grip"></i><span>Dashboard</span>
              </a>
            </li>
            <li class="<?php if($page=='categories') echo 'active'?>">
              <a href="./categories.php" class="nav-link">
                <i class="fa-solid fa-filter"></i><span>Categories</span>
              </a>
            </li>
            <li class="<?php if($page=='services') echo 'active'?>">
              <a href="./services.php" class="nav-link">
                <i class="fa-solid fa-filter"></i><span>Services</span>
              </a>
            </li>
            <li class="<?php if($page=='banners') echo 'active'?>">
              <a href="./banners.php" class="nav-link">
                <i class="fa-solid fa-panorama"></i><span>Banners</span>
              </a>
            </li>
            <li class="dropdown <?php if($page=='provider') echo 'active'?>">
              <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-people-carry-box"></i><span>Service Provider</span></a>
              <ul class="dropdown-menu">
                  <li class="<?php if($page1=='pending_provider') echo 'active'?>"><a class="nav-link" href="./free_user_pending_list.php">Free User Pending List</a></li>
                  <li class="<?php if($page1=='approved_provider') echo 'active'?>"><a class="nav-link" href="free_user_approved_list.php">Free User Approved List</a></li>
                  <li class="<?php if($page1=='blocked') echo 'active'?>"><a class="nav-link" href="free_user_reject_list.php">Free User Rejected List</a></li>
                  <li class="<?php if($page1=='pending_provider1') echo 'active'?>"><a class="nav-link" href="./paid_user_pending_list.php">Paid User Pending List</a></li>
                  <li class="<?php if($page1=='approved_provider1') echo 'active'?>"><a class="nav-link" href="paid_user_approved_list.php">Paid User Approved List</a></li>
                  <li class="<?php if($page1=='blocked1') echo 'active'?>"><a class="nav-link" href="paid_user_reject_list.php">Paid User Rejected List</a></li>
                  <li class="<?php if($page1=='service') echo 'active'?>"><a class="nav-link" href="service_provider_list.php">Provider's Service List</a></li>
              </ul>
            </li>
            <li class="<?php if($page=='payment_list') echo 'active'?>">
              <a href="./payments_list.php" class="nav-link">
                <i class="fa-solid fa-square-rss"></i><span>Payment List</span>
              </a>
            </li>
            <!-- <li class="<?php if($page=='blogs') echo 'active'?>">
              <a href="./blogs.php" class="nav-link">
                <i class="fa-solid fa-square-rss"></i><span>Blog</span>
              </a>
            </li> -->
            
            <li class="<?php if($page=='contact_us') echo 'active'?>">
              <a href="./contact_us.php" class="nav-link">
              <i class="fa-solid fa-headset"></i><span>Contact Us</span>
              </a>
            </li>
            <li class="<?php if($page=='feedback') echo 'active'?>">
              <a href="./feedback.php" class="nav-link">
              <i class="fa-solid fa-voicemail"></i><span>Feedback</span>
              </a>
            </li>
            <li class="<?php if($page=='settings') echo 'active'?>">
              <a href="./settings.php" class="nav-link">
              <i class="fa-solid fa-gear"></i><span>Settings</span>
              </a>
            </li>
            <li class="<?php if($page=='logout') echo 'active'?>">
              <a href="./logout.php" class="nav-link">
              <i class="fa-solid fa-right-from-bracket"></i><span>logout</span>
              </a>
            </li>

          </ul>

          </aside>
      </div>