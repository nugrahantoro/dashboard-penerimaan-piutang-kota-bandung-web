<div class="span9">
    <div class="content">
        <div class="light-font">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
              <li class="breadcrumb-item">Ketetapan</li>
            </ol>
          </nav>
        </div>
         <div class="module">
           <div class="module-body table">
               <form class="form-horizontal row-fluid" action="" method="post">
                 <div class="control-group">
                     <label class="control-label" for="ke_tgl_awal">Tanggal Awal</label>
                     <div class="controls">
                        <input type="date" name="ke_tgl_awal" id="ke_tgl_awal" class="span8">
                     </div>
                 </div>
                 <div class="control-group">
                     <label class="control-label" for="ke_tgl_akhir">Tanggal Akhir</label>
                     <div class="controls">
                        <input type="date" name="ke_tgl_akhir" id="ke_tgl_akhir" class="span8">
                     </div>
                 </div>
                   <div class="control-group">
                       <label class="control-label" for="ke_jenis">Ketetapan Jenis</label>
                       <div class="controls">
                          <select class="span8" name="ke_jenis" id="ke_jenis">
                              <option value="0">-Pilih-</option>
                          </select>
                       </div>
                   </div>
                   <div class="control-group">
                       <label class="control-label" for="ke_jns-pajak">Jenis Pajak</label>
                       <div class="controls">
                          <select class="span8" name="ke_jns-pajak" id="ke_jns-pajak">
                              <option value="0">-Pilih-</option>
                          </select>
                       </div>
                   </div>
                   <div class="control-group">
                       <label class="control-label" for="ke_status_bayar">Status Bayar</label>
                       <div class="controls">
                          <select class="span8" name="ke_status_bayar" id="ke_status_bayar">
                              <option value="1">Sudah Bayar</option>
                              <option value="0">Belum Bayar</option>
                          </select>
                       </div>
                   </div>
                   <div class="control-group">
                       <div class="controls">
                           <!-- <button type="submit" class="btn btn-success">Proses</button> -->
                           <a href="#" class="btn btn-success" onclick=proses_ketetapan();>Proses</a>
                       </div>
                   </div>
               </form>
               <hr>
               <div id="loader" style="display:none;"></div>
               <!-- <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%"> -->
                <table id="t_ketetapan" cellpadding="0" cellspacing="0" border="0" class="table table-bordered paginated" width="100%">
                   <thead>
                       <tr>
                           <th>No</th>
                           <th>NPWD</th>
                           <th>Nama WP</th>
                           <th>Periode</th>
                           <th>Jumlah Ketetapan</th>
                       </tr>
                   </thead>
                   <tbody id="buat_ketetapan">

                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
