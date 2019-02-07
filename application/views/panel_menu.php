                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Konfigurasi / </li>
                                  <li class="breadcrumb-item">Menu</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <!-- <h3>Menu Admin</h3> <hr> -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Tambah</button>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama Menu</th>
                                                <!-- <th>Icon</th> -->
                                                <th>Urutan</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($tampil as $val) { ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php echo $val->nama_menu; ?></td>
                                                        <!-- <td><?php echo $val->icon; ?></td> -->
                                                        <td class="center"> <?php echo $val->urutan; ?></td>
                                                        <td class="center">
                                                            <?php
                                                                if ($val->status == 1) {
                                                                    echo "Active";
                                                                }
                                                                else{
                                                                    echo "Not Active";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo base_url()?>index.php/menu/edit/<?php echo $val->id_menu;?>">Edit</a>
                                                            |
                                                            <a href="<?php echo base_url()?>index.php/menu/aksi_hapus/<?php echo $val->id_menu;?>">Hapus</a>
                                                        </td>
                                                    </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Tambah Menu</h4>
                                  </div>
                                  <div class="modal-body">
                                    <form class="form-horizontal row-fluid" action="<?php echo base_url()?>index.php/menu/aksi_tambah" method="post">
                                        <div class="control-group">
                                            <input type="hidden" id="id_user" name="id_user" value="<?php echo $this->session->userdata("id"); ?>">
                                            <label class="control-label" for="nama_menu">Nama Menu</label>
                                            <div class="controls">
                                                <input type="text" id="nama_menu" name="nama_menu" placeholder="Type something here..." class="span8" required="">
                                            </div>
                                        </div>
                                        <!-- <div class="control-group">
                                            <label class="control-label" for="icon">Icon</label>
                                            <div class="controls">
                                                <input type="text" id="icon" name="icon" placeholder="Type something here..." class="span8">
                                            </div>
                                        </div> -->
                                        <div class="control-group">
                                            <label class="control-label" for="urutan">Urutan</label>
                                            <div class="controls">
                                                <input type="text" id="urutan" name="urutan" placeholder="Type something here..." class="span8" required="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="urutan">Status</label>
                                            <div class="controls">
                                                <select class="span8" name="status" required="">
                                                    <option value="1">Active</option>
                                                    <option value="0">Not Active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-info">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
