
<input type="hidden" class="form-control" id="txtIds" placeholder="">
<div class="row">





</div>
<div class="form-group">

    <div class="col-12">




        <div class="row">
            <div class="col-3">

                <input type="text" class="form-control" id="txtTeacherNames" placeholder="teacherName" maxlength="20">
            </div>



        </div>

        <br>


        <div class="row">
            <div class="col-sm-2" style=" padding-right:0;"> <select id="txtDayss" class="form-control">
                    <option>Sunday</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>

                </select></div>
            <div class="col-sm-1" style=" padding-right:0;padding-left:0;"><input type="text" class="form-control" id="txtDates" placeholder="Time" maxlength="20">
            </div>

        </div> 


        <br>
        <div class="row">


            <div class="col-3">

                <input type="text" class="form-control" id="txtNames" placeholder="<?php echo $this->lang->line('Subjectname'); ?>" maxlength="20">
            </div>

        </div>

        <br>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" id="txtFeess" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Fees for Subject">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">


            <div class="col-3">

                <input type="text" class="form-control" id="txtTypes" placeholder="Type" maxlength="20">
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
<br>
<?php
echo '<table id="tbles" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                    <th>Type</th>
                 <th>Teacher</th>
                 <th>Fees</th>
                 <th>Date</th>
                 <th>Time</th>
                 <th>Teacherid</th>
           
            </tr>
        </thead>
       <tbody> ';

foreach ($data->result() as $row) {
    echo '<tr id=' . $row->subject_ID . '>';
    echo '<td>' . $row->subject_ID . '</td>';
    echo '<td>' . $row->name . '</td>';
    echo '<td>' . $row->subject_type . '</td>';
    echo '<td>' . $row->firstname . '</td>';
    echo '<td>' . $row->fees . '</td>';
    echo '<td>' . $row->dates . '</td>';
    echo '<td>' . $row->times . '</td>';
    echo '<td>' . $row->teacher_ID . '</td>';
    echo '</tr>';
}

echo '
        </tbody>
    </table>
    
               ';
?>


<script type="text/javascript">

  var subjectid="";
    $(document).ready(function () {

        var txtID = "";
      
      
      
           horsey(document.querySelector('#txtTeacherNames'), {
                    source:<?php
        echo $teacher;
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
      
      
        $('#tbles').DataTable();

        $('#tbles').on('click', 'tr', function () {

            var id = $(this).find("td").eq(0).html();
            var name = $(this).find("td").eq(1).html();
            var dates = $(this).find("td").eq(5).html();
            var times = $(this).find("td").eq(6).html();
            var fees = $(this).find("td").eq(4).html();
            var type = $(this).find("td").eq(2).html();
            var teacher = $(this).find("td").eq(3).html();
            subjectid= $(this).find("td").eq(7).html();
            // alert(name);

           txtID = id;
            $("#txtIds").val(id);
            $("#txtTeacherNames").val(name);
            //  $("#txtDayss").val(dates);
            $("#txtDates").val(times);
            $("#txtNames").val(name);
            $("#txtFeess").val(fees);
            $("#txtTypes").val(type);
            $("#txtTeacherNames").val(teacher);

            $("#txtDayss").val(dates).change();



        });





        $("#update").click(function () {


            if ($("#txtFeess").val().length <= 0) {
                bootbox.alert("Please fill the  fields");
            } else {

                $.ajax({
                    url: "<?= base_url('index.php/Subject/Update') ?>",
                    type: "post",
                    data: {teacherId: $("#txtIds").val(), Days: $("#txtDayss").val(), Time: $("#txtDates").val(), Subject: subjectid,SubjectName: $("#txtNames").val(), Fees: $("#txtFeess").val(), Type: $("#txtTypes").val()},
                    success: function (response) {
                        // you will get response from your php page (what you echo or print)                 
                        $("#tbl").load("<?= base_url('index.php/Subject/load') ?>");
                    },
                    error: function (jqXHR, textStatus, errorThrown) {

                        alert(errorThrown);
                        console.log(textStatus, errorThrown);
                    }


                });
            }

        });
    });

</script>
