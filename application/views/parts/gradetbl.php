
<input type="hidden" class="form-control" id="txtId" placeholder="">
<div class="row">

    <div class="col-3 ">

        <input type="text" class="form-control" id="txtName2" placeholder="<?php echo $this->lang->line('Grade');?>" maxlength="20">
    </div>

    <div class="col-3">
        <label class="switch">
            <input type="checkbox" id="state">
            <span class="slider round"></span>
        </label>
    </div>

</div>
<div class="row">
    <div class="col-3">

        <textarea class="form-control" id="txtDesc2" placeholder="<?php echo $this->lang->line('Gradedesc');?>" maxlength="100" rows="3" cols="3"></textarea>
    </div>
    <div class="col-3 ">

        <button  class="btn btn-success" id="update" type="button"><span class="fa fa-reply"></span> <?php echo $this->lang->line('Update');?></button>
    </div>
</div>
<br>
<?php
echo '<table id="tbles" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                    <th>Description</th>
                 <th>Visibility</th>
           
            </tr>
        </thead>
       <tbody> ';
  
foreach ($data->result() as $row) {
    echo '<tr id=' . $row->ID . '>';
    echo '<td>' . $row->ID . '</td>';
    echo '<td>' . $row->NAME . '</td>';
    echo '<td>' . $row->DESCRIPTION . '</td>';
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

        $('#tbles').DataTable();

        $('#tbles').on('click', 'tr', function () {

            var id = $(this).find("td").eq(0).html();
            var name = $(this).find("td").eq(1).html();
            var status = $(this).find("td").eq(3).html();
            var desc = $(this).find("td").eq(2).html();
            // alert(name);

            $("#txtId").val(id);
            $("#txtName2").val(name);
            $("#txtDesc2").val(desc);
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
