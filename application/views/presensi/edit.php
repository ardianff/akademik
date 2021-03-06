<div class="col-sm-12">
    <!-- start: TEXT FIELDS PANEL -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i>
            Edit Data Presensi
        </div>
        <div class="panel-body">

            <?php
            echo form_open('presensi/edit', 'role="form" class="form-horizontal"');
            echo form_hidden('id_presensi', $presensi['id_presensi']);
            ?>

<div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NIM
                </label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $presensi['nim'] ?>" disabled="" placeholder="MASUKAN NIM" id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    NAMA
                </label>
                <div class="col-sm-4">
                    <input type="text" value="<?php echo $presensi['nama'] ?>" disabled="" placeholder="MASUKAN NAMA" id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    TANGGAL
                </label>
                <div class="col-sm-4">
                    <input type="date" value="<?php echo $presensi['tanggal'] ?>" name="tanggal_absen" placeholder="TANGGAL ABSEN" id="form-field-1" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    ROMBEL
                </label>
                <div class="col-sm-4">
                    <!-- <?php echo cmb_dinamis('rombel', 'tbl_rombel', 'nama_rombel', 'id_rombel') ?> -->
                    <input type="text" value="<?php echo $presensi['rombel'] ?>" name="rombel" placeholder="Rombel" id="form-field-1" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="form-field-1">
                    KETERANGAN ABSENSI
                </label>
                <div class="col-sm-4">
                <?php echo form_dropdown('absen', array('Hadir' => 'Hadir','Sakit' => 'Sakit', 'Izin' => 'Izin', 'Alpa' => 'Alpa'), null, "class='form-control'") ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="form-field-1">

                </label>
                <div class="col-sm-1">
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">SIMPAN</button>
                </div>
                <div class="col-sm-1">
                    <?php echo anchor('guru', 'Kembali', array('class' => 'btn btn-info btn-sm')); ?>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end: TEXT FIELDS PANEL -->
</div>
