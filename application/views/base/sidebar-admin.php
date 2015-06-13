      <!-- ****************************************************
      *
      *       Sidebar esquerda do site
      *
      **************************************************** -->
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="http://upload.wikimedia.org/wikipedia/commons/d/df/Jair_Bolsonaro.JPG" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p class="fa fa-usd"> <?php echo $infosDoUsuario->dinheiro; ?></p>
              <!-- Status -->
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
              </div><!-- progressbar do level -->
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class='fa fa-car'></i> <span>Carros</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>
            <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- ****************************************************
      *
      *       FIM DA Sidebar esquerda do site
      *
      **************************************************** -->