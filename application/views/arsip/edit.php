<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Edit Data Dokumen
            <!-- <div class="panel-tools">
                <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                    <i class="fa fa-wrench"></i>
                </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#">
                    <i class="fa fa-refresh"></i>
                </a>
                <a class="btn btn-xs btn-link panel-expand" href="#">
                    <i class="fa fa-resize-full"></i>
                </a>
                <a class="btn btn-xs btn-link panel-close" href="#">
                    <i class="fa fa-times"></i>
                </a>
            </div> -->
        </div>
        <div class="panel-body">

            <?php
            echo form_open('arsip/edit', 'role="form" class="form-horizontal"');
             echo form_hidden('id_dokumen', $arsip['id_dokumen']);
            ?>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA PEMILIK
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $arsip['nama_pemilik']?>" name="nama_pemilik" placeholder="MASUKAN NAMA PEMILIK" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NIS/NUPTK
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $arsip['nis_nuptk']?>"name="nis_nuptk" placeholder="MASUKAN NIS/NUPTK" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    NAMA DOKUMEN
                </label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $arsip['nama_dokumen']?>" name="dokumen" placeholder="MASUKAN NAMA DOKUMEN" id="form-field-1" class="form-control">
                </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2  control-label" for="date">Tanggal</label>
            <div class="col-sm-9">
                <input type="date"value="<?php echo $arsip['tanggal']?>" name="tanggal" placeholder="TANGGAL" id="form-field-1" class="form-control">
            </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    KATEGORI PEMILIK
                </label>
                <div class="col-sm-9">
                    <?php echo form_dropdown('pemilik', array('Siswa' => 'Siswa', 'Guru' => 'Guru', 'Karyawan' => 'Karyawan'), null, "class='form-control'") ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">
                    UPLOAD FILE
                </label>
                <div class="col-sm-9">
                    <input type="file" name="userfile">
                    <br>
                    <a href="<?php echo base_url()."uploads/file/".$arsip['file_dokumen']?>" class="btn btn-warning btn-sm" target="_blank">Lihat File Sekarang</a>
                    
                    <!-- <iframe src="<?php echo base_url()."uploads/file/".$arsip['file_dokumen']?>" width="50%" height="50%"></iframe> -->
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('arsip', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
