<div class="col-md-12">
    <!-- start: DYNAMIC TABLE PANEL -->
   
    <div class="panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-external-link-square"></i> Arsip Dokumen
            <div class="panel-tools">
                <?php echo anchor('arsip/add','<i class="fa fa-edit" aria-hidden="true"></i>',"title='Tambah Data'");?>
                <!-- <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                <a class="btn btn-xs btn-link panel-expand" href="#"> <i class="fa fa-resize-full"></i> </a>
                <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a> -->
            </div>
        </div>
        <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>NIS/NUPTK</th>
                        <th>NAMA DOKUMEN</th>
                        <th>TANGGAL</th>
                        <th>PEMILIK</th>
                        <th>FILE</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end: DYNAMIC TABLE PANEL -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>


  <script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('arsip/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "10px",
                        "sClass": "text-center",
                        "orderable": false,
                    },
                    { "data": "nama_pemilik" ,
                        "width": "80px",
                        "sClass": "text-center", 
                    },
                    {
                        "data": "nis_nuptk",
                        "width": "150px",
                        "height" : "10px",
                        "sClass": "text-center"
                    },
                    { "data": "nama_dokumen",
                        "width":"100px",
                        "sClass": "text-center", },
                    { "data": "tanggal",
                        "width":"100px",
                        "sClass": "text-center", },
                    { "data": "pemilik", "width": "15px",
                        "sClass": "text-center", 
                    },
                    { "data": "file_dokumen", "width": "15px",
                        "sClass": "text-center", 
                    },
                    { "data": "aksi","width": "1px",
                        "sClass": "text-center", },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>