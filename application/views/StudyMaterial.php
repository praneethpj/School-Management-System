



<?php $this->load->view('common/header'); ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <?php $this->load->view('common/navigation'); ?>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">  Study Material</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Upload Files</div>
                <div class="card-body">
                    <div class="table-responsive">

                        <style>

                            .table-hover>tbody>tr>td:hover, .table-hover>tbody>tr>td:hover{
                                background-color: yellow!important;
                                cursor:pointer;
                            }

                            .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th{
                                background-color: inherit;
                            }

                            .table-hover>tr{
                                padding:10px;
                            }

                        </style>

                        <form>
                            <div class="form-group">

                                <div class="col-12">
 
                                   
                                    
                                  <div class="panel panel-default">
        
        <div class="panel-body">

    
          <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="files[]" id="js-upload-files" multiple>
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
          </form>
  
       
        </div>
      </div>
                                        
                                   
                                    <br>
                                    <div class="row">
                                        <div class="col-3">

                                            <textarea class="form-control" id="txtDesc" placeholder="<?php echo $this->lang->line('Schooldesc'); ?>" maxlength="100" rows="3" cols="3"></textarea>
                                        </div>
                                        <div class="col-3 ">

                                            <button  class="btn btn-success" id="btn" type="button"><span class="fa fa-save"></span> <?php echo $this->lang->line('Add'); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </form>

                        <table class="table-hover" id="cupboard" style="padding:10px">

                            <tbody>
                                <tr>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>




            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-caret-square-o-left"></i> <?php echo $this->lang->line('Updateschools'); ?></div>
                <div class="card-body">
                    <div class="table-responsive">

                        <style>

                            .table-hover>tbody>tr>td:hover, .table-hover>tbody>tr>td:hover{
                                background-color: yellow!important;
                                cursor:pointer;
                            }

                            .table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th{
                                background-color: inherit;
                            }

                            .table-hover>tr{
                                padding:10px;
                            }

                        </style>
 
                            <div class="form-group">

                                <div class="col-12">





                                    <div class="row">
                                        <div class="col-12">
                                            <div id="tbl">

                                            </div>
                                               <form>
                            <div class="form-group">

                                <div class="col-12">





                                    <div class="row">
                                        <div class="col-12">
                                          <?php
echo '<table id="tbles1" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>Subject</th>
                    <th>Date</th>
                 <th>Description</th>
           
            </tr>
        </thead>
       <tbody> ';
  
//foreach ($grade->result() as $row) {
    echo '<tr id=1>';
    echo '<td>Chemistry</td>';
    echo '<td>2018-10-15</td>';
    echo '<td>This is about ..</td>';
    
    echo '</tr>';
//}

echo '
        </tbody>
    </table>
    
               ';
?>
                                        </div>
                                    </div>

                                </div>
                            </div>



                       
                                        </div>
                                    </div>

                                </div>
                            </div>



                        </form>


                    </div>
                </div>

            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <style type="text/css">


            header{
                font-weight: bold;
                font-size: 30px;
            }

            header span{
                vertical-align: middle;
                font-size: .5em;
                color: #999;
            }

            header span a{
                font-size: .9em;
            }

            section:first-of-type header{
                font-size: 50px;
            }

            section{
                margin-bottom:30px;
            }

            ul>li{
                margin-bottom:2px;
            }

            button, select{
                margin-right:20px;
            }

            input{
                font-family: 'Montserrat', sans-serif !important;

            }

            .tabulator{
                height:90%;
            }

            #example-table-demo{
                margin-bottom:20px;
            }
        </style>
        <?php $this->load->view('common/footer'); ?>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


        <script type="text/javascript">


            $(document).ready(function () {
                $("#tbl").load("<?= base_url('index.php/Schools/load') ?>");
 $('#tbles1').DataTable();

            });


            $(document).ready(function () {




                $("#btn").click(function () {

                    if ($("#txtName").val().length <= 0) {
                        bootbox.alert("Please fill the  fields");
                    } else {


                        $.ajax({
                            url: "<?= base_url('index.php/Schools/add') ?>",
                            type: "post",
                            data: {name: $("#txtName").val(), description: $("#txtDesc").val()},
                            success: function (response) {
                                // you will get response from your php page (what you echo or print)                 
                                $("#tbl").load("<?= base_url('index.php/Schools/load') ?>");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }


                        });

                    }
                });







            });

        </script>
    </div>
</body>

</html>
