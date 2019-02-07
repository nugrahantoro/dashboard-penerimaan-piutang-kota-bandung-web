<div class="span9">
    <div class="content">
        <div class="light-font">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
              <li class="breadcrumb-item">Piutang</li>
            </ol>
          </nav>
        </div>
         <div class="module">
           <div class="module-body table">
               <form class="form-horizontal row-fluid" action="" method="post">
                   <div class="control-group">
                       <label class="control-label" for="pi_tgl_awal">Tanggal Awal</label>
                       <div class="controls">
                          <input type="date" name="pi_tgl_awal" id="pi_tgl_awal" class="span8">
                       </div>
                   </div>
                   <div class="control-group">
                       <label class="control-label" for="pi_tgl_akhir">Tanggal Akhir</label>
                       <div class="controls">
                          <input type="date" name="pi_tgl_akhir" id="pi_tgl_akhir" class="span8">
                       </div>
                   </div>
                   <div class="control-group">
                       <label class="control-label" for="pi_jns-pajak">Jenis Pajak</label>
                       <div class="controls">
                          <select class="span8" name="pi_jns-pajak" id="pi_jns-pajak">
                              <option value="0">-Pilih-</option>
                          </select>
                       </div>
                   </div>
                   <div class="control-group">
                       <div class="controls">
                           <!-- <button type="submit" class="btn btn-success">Proses</button> -->
                           <a href="#" class="btn btn-success" onclick=proses_piutang();>Proses</a>
                       </div>
                   </div>
               </form>
               <hr>
               <div id="loader" style="display:none;"></div>
               <table id="t_piutang" cellpadding="0" cellspacing="0" border="0" class="table table-bordered paginated" width="100%">
                   <thead>
                       <tr>
                           <th>No</th>
                           <th>NPWD</th>
                           <th>Nama WP</th>
                           <th>Periode</th>
                           <th>Jumlah Tagihan</th>
                       </tr>
                   </thead>
                   <tbody id="buat_piutang">

                   </tbody>
               </table>
           </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
