<header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Hi <?php   echo $_SESSION['username']   ?></h1>
         
        </header>
      
        <!-- Search box -->
        <!--form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form-->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li><a href="user.php"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="registration.php"><i class="fa fa-users fa-fw"></i>Registration</a></li>
            <li><a href="pending.php"><i class="fa fa-clock-o fa-fw"></i>Pending Authorization</a></li>
            <li><a href="search.php"><i class="fa fa-database fa-fw"></i>Search Member</a></li>
			 <li><a href="report.php"><i class="fa fa-file fa-fw"></i>Report</a></li>
			<li><a href="logout.php"><i class="fa fa-lock fa-fw"></i>Logout</a></li>
           
            <!--li><a href="manage-users.html"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li-->
          </ul>
        </nav>