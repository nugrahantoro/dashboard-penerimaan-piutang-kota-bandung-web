                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Konfigurasi / </li>
                                  <li class="breadcrumb-item">Web</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>Web</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama Web</th>
                                                <th>Email</th>
                                                <th>Telpon</th>
                                                <th>Logo</th>
                                                <th>Alamat</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($tampil as $val) { ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $val->nama_web; ?></td>
                                                        <td><?php echo $val->email; ?></td>
                                                        <td><?php echo $val->telp; ?></td>
                                                        <td><?php echo $val->web_thumb; ?></td>
                                                        <td><?php echo $val->alamat; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url()?>index.php/web/edit/<?php echo $val->id_web;?>">Edit</a>
                                                        </td>
                                                    </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
