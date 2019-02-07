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
                                    <h3>Edit Web</h3>
                                </div>
                                <div class="module-body table">
                                    <?php
                                        foreach ($tampil as $val) {}
                                    ?>
                                    <form class="form-horizontal row-fluid" action="<?php echo base_url()?>index.php/web/aksi_edit" method="post">
                                        <div class="control-group">
                                            <input type="hidden" id="id_web" name="id_web" value="<?php echo $val->id_web; ?>">
                                            <label class="control-label" for="nama_web">Nama Web</label>
                                            <div class="controls">
                                                <input type="text" id="nama_web" name="nama_web" value="<?php echo $val->nama_web; ?>" placeholder="Type something here..." class="span8" required="">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="email">Email</label>
                                            <div class="controls">
                                                <input type="mail" id="email" name="email" value="<?php echo $val->email; ?>" placeholder=" -" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="telp">Telpon</label>
                                            <div class="controls">
                                                <input type="text" id="telp" name="telp" value="<?php echo $val->telp; ?>" placeholder=" -" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="telp">Alamat</label>
                                            <div class="controls">
                                                <textarea class="span8" name="alamat">
                                                    <?php echo $val->alamat; ?>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-info">Update</button>
                                                <a href="<?php echo base_url()?>index.php/web" class="btn btn-danger">Batal</a>
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
