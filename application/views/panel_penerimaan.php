        <div class="span9">
            <div class="content">
                <div class="light-font">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background: #4285f4; color: #fff;">
                      <li class="breadcrumb-item">Penerimaan</li>
                    </ol>
                  </nav>
                </div>
                 <div class="module">
                   <div class="module-body table">
                       <form class="form-horizontal row-fluid">
                           <div class="control-group">
                               <label class="control-label" for="pe_jns_pajak">Jenis Pajak</label>
                               <div class="controls">
                                  <select class="span8" name="pe_jns_pajak" id="pe_jns_pajak" required="">
                                      <option value="0">-Pilih-</option>
                                  </select>
                               </div>
                           </div>
                           <div class="control-group">
                               <label class="control-label" for="pe_periode">Periode Pajak</label>
                               <div class="controls">
                                  <select class="span8" name="pe_periode" id="pe_periode" required="">
                                      <option value="0">-Pilih-</option>
                                  </select>
                               </div>
                           </div>
                           <div class="control-group">
                               <label class="control-label" for="pe_tgl_ketetapan">Tanggal Ketetapan</label>
                               <div class="controls">
                                  <input type="date" name="pe_tgl_ketetapan" id="pe_tgl_ketetapan" class="span8">
                               </div>
                           </div>
                           <div class="control-group">
                               <label class="control-label" for="pe_tgl_bayar">Tanggal Bayar</label>
                               <div class="controls">
                                  <input type="date" name="pe_tgl_bayar" id="pe_tgl_bayar" class="span8">
                               </div>
                           </div>
                           <div class="control-group">
                               <div class="controls">
                                   <!-- <button type="submit" class="btn btn-success">Proses</button> -->
                                   <a href="#" class="btn btn-success" onclick=proses_penerimaan();>Proses</a>
                               </div>
                           </div>
                       </form>
                       <hr>
                       <div id="loader" style="display:none;"></div>
                       <table id="t_penerimaan" cellpadding="0" cellspacing="0" border="0" class="table table-bordered paginated" width="100%">
                           <thead>
                               <tr>
                                   <th>No</th>
                                   <th>NPWD</th>
                                   <th>Nama WP</th>
                                   <th>Denda</th>
                                   <th>Jumlah Bayar</th>
                               </tr>
                           </thead>
                           <tbody id="buat_penerimaan">

                           </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
