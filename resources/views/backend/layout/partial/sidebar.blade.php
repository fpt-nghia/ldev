
  <a href="#" class="visible-phone">
    <?php if (Request::is('backend/form-common')): ?><i class="icon icon-list"></i>Forms<?php endif; ?>
    <?php if (Request::is('backend/error403')): ?><i class="icon icon-info-sign"></i> Error<?php endif; ?>
    <?php if (Request::is('backend/grid')): ?><i class="icon icon-fullscreen"></i>Full width<?php endif; ?>
    <?php if (Request::is('backend/tables')): ?><i class="icon icon-th"></i>Tables<?php endif; ?>
  </a>
  <ul>
    <li><a href="index"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="<?php echo url('backend/product'); ?>"><i class="icon icon-inbox"></i> <span>商品管理</span></a></li>
    <li><a href="charts"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li><a href="widgets"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li class="<?php active('backend/tables') ?>"><a href="<?php echo url('backend/tables'); ?>"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li class="<?php active('backend/grid') ?>"><a href="<?php echo url('backend/grid'); ?>"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu <?php active('backend/form-common') ?>"> <a href="#"><i class="icon icon-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo url('backend/form-common'); ?>">Basic Form</a></li>
        <li><a href="<?php echo url('backend/form-validation'); ?>">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu <?php active('backend/error*') ?>"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">1</span></a>
      <ul>
        <li><a href="<?php echo url('backend/error403'); ?>">Error 403</a></li>
      </ul>
    </li>
    <li class="submenu <?php active('backend/setting') ?>"> <a href="#"><i class="icon icon-list"></i> <span>System</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="<?php echo url('backend/setting'); ?>">Setting</a></li>
        <li><a href="<?php echo url('backend/info'); ?>">Info</a></li>
        <li><a href="<?php echo url('backend/config'); ?>">Config</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
