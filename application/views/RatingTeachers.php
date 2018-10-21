<?php $this->load->view('common/header'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li class="breadcrumb-item active"><?php echo $this->lang->line('Rating'); ?></li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i><?php echo $this->lang->line('Rating'); ?></div>
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

                                            <select class="form-control">
                                                <option>Select Teacher Name</option>
                                            </select>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    Confidence of Subject:
                                                    <div class="star-rating">
                                                        <span class="fa fa-star-o" data-rating="1"></span>
                                                        <span class="fa fa-star-o" data-rating="2"></span>
                                                        <span class="fa fa-star-o" data-rating="3"></span>
                                                        <span class="fa fa-star-o" data-rating="4"></span>
                                                        <span class="fa fa-star-o" data-rating="5"></span>
                                                        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    Functional
                                                    <div class="star-rating">
                                                        <span class="fa fa-star-o" data-rating="1"></span>
                                                        <span class="fa fa-star-o" data-rating="2"></span>
                                                        <span class="fa fa-star-o" data-rating="3"></span>
                                                        <span class="fa fa-star-o" data-rating="4"></span>
                                                        <span class="fa fa-star-o" data-rating="5"></span>
                                                        <input type="hidden" name="whatever2" class="rating-value" value="1.9">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    Interesting of Teaching Style
                                                    <div class="star-rating">
                                                        <span class="fa fa-star-o" data-rating="1"></span>
                                                        <span class="fa fa-star-o" data-rating="2"></span>
                                                        <span class="fa fa-star-o" data-rating="3"></span>
                                                        <span class="fa fa-star-o" data-rating="4"></span>
                                                        <span class="fa fa-star-o" data-rating="5"></span>
                                                        <input type="hidden" name="whatever3" class="rating-value" value="4.1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-3 ">

                                            <button  class="btn btn-success" id="btn" type="button"><span class="fa fa-save"></span>Set Rate</button>
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
                    <i class="fa fa-caret-square-o-left"></i>Teachers Rating</div>
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
                                        <div class="col-12">
                                        
                            <div class="form-group">

                                <div class="col-12">





                                    <div class="row">
                                        <div class="col-12">

                                            <div class="jquery-script-clear"></div>
                                        </div>
                                    </div>

                                    Mr.Niahal Sisiwardana - Chemistry
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="50"></span>
                                    </div>

                                    Mr.Sisira Rathnayaka - Biology
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="35"></span>
                                    </div>	

                                    Mr.Wimal Herath - Biology

                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="75"></span>
                                    </div>	

                                    Mr.Anil K fernando - Mathematic
                                    <div id="bar4" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="95"></span>
                                    </div>	



                                </div>
 
                            </div>
                                            <div id="tbl">

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

            var $star_rating = $('.star-rating .fa');

            var SetRatingStar = function () {
                return $star_rating.each(function () {
                    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                        return $(this).removeClass('fa-star-o').addClass('fa-star');
                    } else {
                        return $(this).removeClass('fa-star').addClass('fa-star-o');
                    }
                });
            };

            $star_rating.on('click', function () {
                $star_rating.siblings('input.rating-value').val($(this).data('rating'));
                return SetRatingStar();
            });

            SetRatingStar();
            $(document).ready(function () {

            });
            $(document).ready(function () {
                $("#tbl").load("<?= base_url('index.php/Grade/load') ?>");


            });


            $(document).ready(function () {




                $("#btn").click(function () {

                    if ($("#txtName").val().length <= 0) {
                        bootbox.alert("Please fill the  fields");
                    } else {


                        $.ajax({
                            url: "<?= base_url('index.php/Grade/add') ?>",
                            type: "post",
                            data: {name: $("#txtName").val(), description: $("#txtDesc").val()},
                            success: function (response) {
                                // you will get response from your php page (what you echo or print)                 
                                $("#tbl").load("<?= base_url('index.php/Grade/load') ?>");
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(textStatus, errorThrown);
                            }


                        });

                    }
                });







            });

        </script>
        <script type="text/javascript">

    $(document).ready(function () {

        $('#bar1').barfiller();
        $('#bar2').barfiller();
        $('#bar3').barfiller({barColor: '#fc6'});
        $('#bar4').barfiller({barColor: '#900', duration: 3000});

    });

</script>
    </div>
</body>

</html>
