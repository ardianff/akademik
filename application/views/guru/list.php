<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
    &nbsp;<?php echo anchor('guru/add','Tambah Data Guru',array('class'=>'btn btn-success btn-sm'))?>
    <div style="margin-bottom: 10px;"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Data Guru
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>FOTO</th>
                        <th>NUPTK</th>
                        <th>NAMA GURU/KARYAWAN</th>
                        <th>JENIS KELAMIN</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TANGGAL LAHIR</th>
                        <th>PHONE</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

     <!-- jQuery Library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <!-- Datatable JS -->
     <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


  <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('guru/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "1px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    {
                        "data": "foto",
                        "width": "30px",
                        "sClass": "text-center"
                    },{
                        "data": "nuptk",
                        "width": "30px",
                        "sClass": "text-center"
                    },
                    { "data": "nama_guru",
                        "width": "80px",
                        "sClass": "text-justify" },
                    { "data": "gender","width": "30px", 
                        "width": "30px",
                        "sClass": "text-center"},
                    { "data": "tempat_lahir","width": "30px",
                        "width": "30px",
                        "sClass": "text-center"},
                    { "data": "tanggal_lahir","width": "30px",
                        "width": "30px",
                        "sClass": "text-center" },
                    { "data": "phone","width": "30px",
                        "sClass": "text-center"},
                    { "data": "alamat","width": "30px", 
                        "sClass": "text-justify"},
                    { "data": "aksi","width": "10px",
                        "sClass": "text-center" },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>