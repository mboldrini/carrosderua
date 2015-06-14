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
            <li class="header">Administrativo</li>
            <li class="active"><a href="<?php echo base_url('admin');?>"><i class='fa fa-dashboard'></i> <span>Painel</span></a></li>            
            <li class="treeview">
              <a href="#"><i class='fa fa-car'></i> <span>Carros</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class='fa fa-plus-square'></i> Modelo</a></li>
                <li><a href="#"><i class='fa fa-plus-square'></i> Marca</a></li>
                <li><a href="#"><i class='fa fa-plus-square'></i> Categoria</a></li>                
              </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>
            
          </ul><!-- /.sidebar-menu -->

          <ul class="sidebar-menu">
            <li class="header">Usuário</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class='fa fa-car'></i> <span>Meus Carros</span></a></li>
            <li><a href="#"><i class='fa fa-circle'></i> <span>Usuário</span></a></li>
            <li class="treeview">
              <a href="#"><i class='fa fa-circle'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
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