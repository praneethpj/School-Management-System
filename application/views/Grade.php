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
                <li class="breadcrumb-item active"><?php echo $this->lang->line('Grade'); ?></li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i><?php echo $this->lang->line('Newgrade'); ?></div>
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

                                    <div class="row">
                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtInstitute" placeholder="Institute name" maxlength="20">
                                        </div>



                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtSubjectName" placeholder="Subject name" maxlength="20">
                                        </div>



                                    </div>
                                    <br>


                                    <div class="row">
                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtHallName" placeholder="<?php echo $this->lang->line('Gradename'); ?>" maxlength="20">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">

                                            <input type="text" class="form-control" id="txtCapacity" placeholder="Hall capacity" maxlength="20">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-3">

                                            <textarea class="form-control" id="txtDesc" placeholder="<?php echo $this->lang->line('Gradedesc'); ?>" maxlength="100" rows="3" cols="3"></textarea>
                                        </div>
                                        <div class="col-3 ">

                                            <button  class="btn btn-success" id="btn" type="button"><span class="fa fa-save"></span><?php echo $this->lang->line('Add'); ?></button>
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
                    <i class="fa fa-caret-square-o-left"></i><?php echo $this->lang->line('Updateschools'); ?></div>
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

                                    <div class="form-group">

                                        <div class="col-12">

                                            <div class="row">
                                                <div class="col-3">

                                                    <input type="text" class="form-control" id="txtInstitutes" placeholder="Institute name" maxlength="20">
                                                </div>



                                            </div>
                                            <br>

                                            <div class="row">
                                                <div class="col-3">

                                                    <input type="text" class="form-control" id="txtSubjectNames" placeholder="Subject name" maxlength="20">
                                                </div>



                                            </div>
                                            <br>


                                            <div class="row">
                                                <div class="col-3">

                                                    <input type="text" class="form-control" id="txtHallNames" placeholder="<?php echo $this->lang->line('Gradename'); ?>" maxlength="20">
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-3">

                                                    <input type="text" class="form-control" id="txtCapacitys" placeholder="Hall capacity" maxlength="20">
                                                </div>

                                            </div>
                                            <br>
                                            <div class="row">
                                               
                                                <div class="col-3 ">

                                                    <button  class="btn btn-success" id="update" type="button"><span class="fa fa-save"></span><?php echo $this->lang->line('Add'); ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



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
                   <th>HallId</th>
                <th>HallName</th>
                 <th>Capacity</th>
           <th>Institute</th>
              <th>Subject</th>
            <th>SubjectId</th>
            </tr>
        </thead>
       <tbody> ';

                                                                foreach ($data->result() as $row) {
                                                                    echo '<tr id=' . $row->hallid . '>';
                                                                    echo '<td>' . $row->hallid . '</td>';
                                                                    echo '<td>' . $row->hallname . '</td>';
                                                                    echo '<td>' . $row->capacity . '</td>';
                                                                    echo '<td>' . $row->institute_id . '</td>';
                                                                    echo '<td>' . $row->name . '</td>';
                                                                    echo '<td>' . $row->subject_id . '</td>';

                                                                    echo '</tr>';
                                                                }

                                                                echo '
        </tbody>
    </table>
    
               ';
                                                                ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                            </form>

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
                //  $("#tbl").load("<? base_url('index.php/Grade/load') ?>");
                txtInstituteID = "";
                txtSubjectID = "";
                horsey(document.querySelector('#txtInstitute'), {
                    source:<?php
        echo $institute;
        ?>,
                    getText: 'text',
                    getValue: 'value',
                    predictNextSearch(info) {
                        //get the suggestion selected by the user
                        //console.log(info.selection.value);

                        // txtModel = info.selection.value;
                        txtInstituteID = info.selection.value;

                    }
                });

                horsey(document.querySelector('#txtSubjectName'), {
                    source:<?php
        echo $subject;
        ?>,
                    getText: 'text',
                    getValue: 'value',
                    predictNextSearch(info) {
                        //get the suggestion selected by the user
                        //console.log(info.selection.value);

                        // txtModel = info.selection.value;
                        txtSubjectID = info.selection.value;

                    }
                });

            });

            var hallid = "";
            var institute = "";
            var subjectid = "";
            var hallname;
            var capacity;

            var subject;

            $(document).ready(function () {

                $('#tbles1').DataTable();



                horsey(document.querySelector('#txtInstitutes'), {
                    source:<?php
        echo $institute;
        ?>,
                    getText: 'text',
                    getValue: 'value',
                    predictNextSearch(info) {
                        //get the suggestion selected by the user
                        //console.log(info.selection.value);

                        // txtModel = info.selection.value;
                        institute = info.selection.value;

                    }
                });

                horsey(document.querySelector('#txtSubjectNames'), {
                    source:<?php
        echo $subject;
        ?>,
                    getText: 'text',
                    getValue: 'value',
                    predictNextSearch(info) {
                        //get the suggestion selected by the user
                        //console.log(info.selection.value);

                        // txtModel = info.selection.value;
                        subjectid = info.selection.value;

                    }
                });

                $('#tbles1').on('click', 'tr', function () {

                    hallid = $(this).find("td").eq(0).html();
                     hallname = $(this).find("td").eq(1).html();
                     capacity = $(this).find("td").eq(2).html();
                    institute = $(this).find("td").eq(3).html();
                     subject = $(this).find("td").eq(4).html();
                    subjectid = $(this).find("td").eq(5).html();
                    // alert(name);

                    $("#txtInstitutes").val(institute);
                    $("#txtSubjectNames").val(subject);
                    $("#txtCapacitys").val(capacity);
                    $('#txtHallNames').val(hallname);





                });


                $("#btn").click(function () {

                    if ($("#txtSubjectNames").val().length <= 0) {
                        bootbox.alert("Please fill the  fields");
                    } else {
 
                        $.ajax({
                            url: "<?= base_url('index.php/Grade/add') ?>",
                            type: "post",
                            data: {Institute: txtInstituteID, Subject: txtSubjectID, HallName: $("#txtHallName").val(), Capacity: $("#txtCapacity").val(), Desc: $("#txtDesc").val()},
                            success: function (response) {

                                $("#tbl").load("<?= base_url('index.php/Grade/load') ?>");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }


                        });

                    }
                });


                $("#update").click(function () {

                    if ($("#txtHallNames").val().length <= 0) {
                        bootbox.alert("Please fill the  fields");
                    } else {
 
                        $.ajax({
                            url: "<?= base_url('index.php/Grade/Update') ?>",
                            type: "post",
                            data: {hallid:hallid,Institute: institute, Subject: subjectid, HallName: $("#txtHallNames").val(), Capacity: $("#txtCapacitys").val()},
                            success: function (response) {

                                 location.reload();
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
