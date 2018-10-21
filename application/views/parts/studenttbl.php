
<input type="hidden" class="form-control" id="txtId" placeholder="">
<div class="col-12">

    <div class="row">
        <div class="col-3">

            <i><?php echo $this->lang->line('Firstname'); ?></i>
            <input class='autocomp form-control' id="txtFistName1" placeholder="<?php echo $this->lang->line('Firstname'); ?>"/>


        </div>
        <div class="col-3">

            <i><?php echo $this->lang->line('Lastname'); ?></i>
            <input class='autocomp form-control' id="txtLastName1" placeholder="<?php echo $this->lang->line('Lastname'); ?>"/>


        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-3">
            <i><?php echo $this->lang->line('Grade'); ?></i>

            <input class='autocomp form-control' id="txtGrade1" placeholder="<?php echo $this->lang->line('Grade'); ?>"/>


        </div>

        <div class="col-3">
            <i><?php echo $this->lang->line('School'); ?></i>

            <input class='autocomp form-control' id="txtSchool1" placeholder="<?php echo $this->lang->line('School'); ?>"/>


        </div>



    </div>
    <br>

    <div class="row">
        <div class="col-3">
            <i><?php echo $this->lang->line('Birthday'); ?></i>

            <input class='autocomp form-control' id="txtBirthday1" placeholder="<?php echo $this->lang->line('Birthday'); ?>"/>


        </div>

        <div class="col-3">
            <i><?php echo $this->lang->line('Addressline1'); ?></i>

            <input class='autocomp form-control' id="txtAddress11" placeholder="<?php echo $this->lang->line('Addressline1'); ?>"/>


        </div>

    </div>



    <div class="row">
        <div class="col-3">
            <i><?php echo $this->lang->line('Addressline2'); ?></i>

            <input class='autocomp form-control' id="txtAddress21" placeholder="<?php echo $this->lang->line('Addressline2'); ?>"/>


        </div>
    </div>
    <br>
    <br>

    <div class="col-3">
        <label class="switch">
            <input type="checkbox" id="state">
            <span class="slider round"></span>
        </label>
    </div>

</div>
<div class="row">

    <div class="col-3 ">

        <button  class="btn btn-success" id="update" type="button"><span class="fa fa-reply"></span><?php echo $this->lang->line('Update'); ?></button>
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
                    <th>Grade</th>
                    <th>School</th>
                    <th>Birthday</th>
                 <th>Visibility</th>
           
            </tr>
        </thead>
       <tbody> ';

foreach ($data->result() as $row) {
    echo '<tr id=' . $row->ID . '>';
    echo '<td>' . $row->ID . '</td>';
    echo '<td>' . $row->FNAME . '</td>';
    echo '<td>' . $row->LNAME . '</td>';
    echo '<td>' . $row->GRADE . '</td>';
    echo '<td>' . $row->BIRTHDAY . '</td>';
    echo '<td>' . $row->SCHOOL . '</td>';
    echo '<td>' . $row->STATUS . '</td>';
    echo '</tr>';
}

echo '
        </tbody>
    </table>
    
               ';
?>


<script type="text/javascript">


    $(document).ready(function () {

        var txtGrade1;
        var txtSchool1;


        horsey(document.querySelector('#txtGrade1'), {
            source:<?php
echo $grades;
?>,
            getText: 'text',
            getValue: 'value',
            predictNextSearch(info) {
                //get the suggestion selected by the user
                //console.log(info.selection.value);

                txtGrade1 = info.selection.value;
                // alert(txtModel);
            }
        });

        horsey(document.querySelector('#txtSchool1'), {
            source:<?php
echo $schools;
?>,
            getText: 'text',
            getValue: 'value',
            predictNextSearch(info) {
                //get the suggestion selected by the user
                //console.log(info.selection.value);

                txtSchool1 = info.selection.value;
            }
        });

        $('#tbles').DataTable();

        $('#tbles').on('click', 'tr', function () {

            var id = $(this).find("td").eq(0).html();
            var Fname = $(this).find("td").eq(1).html();
            var Grade = $(this).find("td").eq(3).html();
            var LName = $(this).find("td").eq(2).html();
            var School = $(this).find("td").eq(4).html();
            var Birthday = $(this).find("td").eq(5).html();
            var status = $(this).find("td").eq(6).html();

            $("#txtId").val(id);
            $("#txtFistName1").val(Fname);
            $("#txtLastName1").val(LName);
            $("#txtGrade1").val(Grade);
            $("#txtSchool1").val(School);
            $("#txtBirthday1").val(Birthday);

            if (status == "true") {
                $("#state").prop('checked', true);
            }
            if (status == "false") {
                $("#state").prop("checked", false)
            }




        });


        $("#update").click(function () {


            if ($("#txtName2").val().length <= 0) {
                bootbox.alert("Please fill the  fields");
            } else {

                $.ajax({
                    url: "<?= base_url('index.php/Schools/Update') ?>",
                    type: "post",
                    data: {id: $("#txtId").val(), name: $("#txtName2").val(), description: $("#txtDesc2").val(), status: $('#state').is(":checked")},
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
