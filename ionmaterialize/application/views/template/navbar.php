<header>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php echo base_url();?>auth/">Users</a></li>
    <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
  </ul>
  <nav class="blue">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">ION AUTH</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">System<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li>
                <a class="collapsible-header waves-effect">System<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="<?php echo base_url();?>auth/">Users</a></li>
                    <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
  </nav>
</header>
