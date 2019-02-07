        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo base_url()?>index.php/dashboard"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <?php
                                    $sql = "
                                        SELECT * FROM ref_menu
                                        WHERE status = '1' ORDER By urutan ASC
                                    ";
                                    $a = $this->db->query($sql)->result();
                                    foreach ($a as $val) { ?>
                                        <li>
                                            <a href="<?php echo base_url().'index.php/'; echo $val->url;?>">
                                                <i class="<?php echo $val->icon; ?>"></i>
                                                <?php echo $val->nama_menu; ?>
                                            </a>
                                         </li>
                                <?php } ?>
                            </ul>
                            <!--/.widget-nav-->
                            <!-- <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Konfigurasi </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li>
                                            <a href="<?php echo base_url()?>index.php/web">
                                                <i class="icon-inbox"></i>
                                                Web
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url()?>index.php/menu">
                                                <i class="icon-inbox"></i>
                                                Menu
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url()?>index.php/login/aksi_logout"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul> -->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
