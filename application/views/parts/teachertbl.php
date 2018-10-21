
<input type="hidden" class="form-control" id="txtId" placeholder="">
<div class="row">



    <div class="col-3">
        <label class="switch">
            <input type="checkbox" id="state">
            <span class="slider round"></span>
        </label>
    </div>

</div>
<div class="row">
    <div class="col-12">
        <form>
            <div class="form-group">

                <div class="col-12">




                    <div class="row">
                        <div class="col-3">

                            <input type="text" class="form-control" id="txtFNames" placeholder="First Name" maxlength="20">
                        </div>
                        <div class="col-3">

                            <input type="text" class="form-control" id="txtLNames" placeholder="Last Name" maxlength="20">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-3">

                            <input type="text" class="form-control" id="txtMobile1s" placeholder="Mobile No 1" maxlength="20">
                        </div>
                        <div class="col-3">

                            <input type="text" class="form-control" id="txtMobile2s" placeholder="Mobile No 2" maxlength="20">
                        </div>

                    </div>

                    <br>
                    <div class="row">
                        <div class="col-3">

                            <input type="text" class="form-control" id="txtcity2s" placeholder="city" maxlength="20">
                        </div>

                        <div class="col-3">
                            <input type="text" class="form-control" id="txthigh2s" placeholder="Highest Qualification" maxlength="20">

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">

                            <textarea class="form-control" id="txtAddress2s" placeholder="address" maxlength="100" rows="3" cols="3"></textarea>
                        </div>

                    </div>

                    <br>
                    <div class="row">

                        <div class="col-3 ">

                            <button  class="btn btn-success" id="updates" type="button"><span class="fa fa-save"></span><?php echo $this->lang->line('Add'); ?></button>
                        </div>
                    </div>
                </div>
            </div>



        </form>

    </div>

</div>
<br>
<?php
echo '<table id="tbles" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                 <th>Last Name</th>
                 <th>Street Address</th>
                 <th>City</th>
            <th>Highest Qualification</th>
             <th>Mobile Phone 1</th>
              <th>Mobile Phone 2</th>
            </tr>
        </thead>
       <tbody> ';

foreach ($data->result() as $row) {
    echo '<tr id=' . $row->teacher_id . '>';
    echo '<td>' . $row->teacher_id . '</td>';
    echo '<td>' . $row->firstname . '</td>';
    echo '<td>' . $row->lastname . '</td>';
    echo '<td>' . $row->straddress . '</td>';
    echo '<td>' . $row->city . '</td>';
    echo '<td>' . $row->highestQualification . '</td>';
    echo '<td>' . $row->mobile1 . '</td>';
    echo '<td>' . $row->mobile2 . '</td>';

    echo '</tr>';
}

echo '
        </tbody>
    </table>
    
               ';
?>


<script type="text/javascript">


    $(document).ready(function () {

        $('#tbles').DataTable();

        $('#tbles').on('click', 'tr', function () {


        
            var id = $(this).find("td").eq(0).html();
            var txtFName = $(this).find("td").eq(1).html();
            var txtLName = $(this).find("td").eq(2).html();
            var txtMobile1 = $(this).find("td").eq(6).html();
            var txtMobile2 = $(this).find("td").eq(7).html();
            var txtcity = $(this).find("td").eq(4).html();
            var txthigh = $(this).find("td").eq(5).html();
            var txtAddress = $(this).find("td").eq(3).html();
 
          
            $("#txtId").val(id);
            $("#txtFNames").val(txtFName);
            $("#txtLNames").val(txtLName);
            $("#txtMobile1s").val(txtMobile1);
            $("#txtMobile2s").val(txtMobile2);
            $("#txtcity2s").val(txtcity);
            $("#txthigh2s").val(txthigh);
            $("#txtAddress2s").val(txtAddress);



            if (status == "true") {
                $("#state").prop('checked', true);
            }
            if (status == "false") {
                $("#state").prop("checked", false)
            }




        });





        $("#updates").click(function () {


            if ($("#txtFNames").val().length <= 0) {
                bootbox.alert("Please fill the  fields");
            } else {

                $.ajax({
                    url: "<?= base_url('index.php/Teacher/Update') ?>",
                    type: "post",
                    data: {id: $("#txtId").val(), txtFName: $("#txtFNames").val(), txtLName: $("#txtLNames").val(), txtMobile1: $('#txtMobile1s').val(),txtMobile2: $('#txtMobile2s').val(),txtCity: $("#txtcity2s").val(),txtHigh:$('#txthigh2s').val(),txtAddress:$('#txtAddress2s').val()},
                    success: function (response) {
                        // you will get response from your php page (what you echo or print)                 
                        $("#tbl").load("<?= base_url('index.php/Teacher/load') ?>");
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }


                });
            }

        });
    });

</script>
