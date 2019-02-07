                    <div class="span9">
                        <div class="content">
                            <div class="light-font">
                              <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                                  <li class="breadcrumb-item">Konfigurasi / </li>
                                  <li class="breadcrumb-item">Menu Admin</li>
                                </ol>
                              </nav>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>Edit Menu</h3>
                                </div>
                                <div class="module-body table">
                                    <?php
                                        foreach ($tampil as $val) {}
                                    ?>
                                    <form class="form-horizontal row-fluid" action="<?php echo base_url()?>menu/aksi_edit" method="post">
                                        <div class="control-group">
                                            <input type="hidden" id="id_user" name="id_user" value="<?php echo $val->id_menu; ?>">
                                            <label class="control-label" for="nama_menu">Nama Menu</label>
                                            <div class="controls">
                                                <input type="text" id="nama_menu" name="nama_menu" value="<?php echo $val->nama_menu; ?>" placeholder="Type something here..." class="span8" required="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="urutan">Urutan</label>
                                            <div class="controls">
                                                <input type="text" id="urutan" name="urutan" value="<?php echo $val->urutan; ?>" placeholder="Type something here..." class="span8" required="">
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
                                                <button type="submit" class="btn btn-info">Update</button>
                                                <a href="<?php echo base_url()?>menu" class="btn btn-danger">Batal</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
