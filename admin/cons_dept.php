<?php
include_once 'header.php';
require_once 'databases.php';
include 'checkLogin.php';
$i = 1;
$output1 = '';
$query = "SELECT * FROM const_dept ORDER BY id DESC";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_array($result)) {
    $output1 .= '
 <tr>
  <td>' . $i . '</td>
  <td>' . $row["title"] . '</td>
  <td>' . $row["description"] . '</td>
  <td>' . $row["const_des"] . '</td>
  <td><img src="../'.$row['cons_image'].'" width="50" height="50" /></td>
  <td><button type="button" data-toggle="modal" data-target="#modal-item' . $row["id"] . '" class="btn btn-warning btn-xs update">Update</button>
  <button type="button" data-toggle="modal" data-target="#modal-item2' . $row["id"] . '" class="btn btn-danger btn-xs delete">Delete</button></td>
 </tr>

 <div class="modal fade" id="modal-item' . $row["id"] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title" id="myModalLabel">Update Department</h4>
    </div>
    <div class="modal-body">
     <form method="post" id="insert_depart_update_form' . $row["id"] . '" enctype="multipart/form-data">
      <label>Department Name</label>
      <input type="text" name="dept_name" id="dept_name' . $row["id"] . '" class="form-control" value="' . $row["title"] . '" />
      <br />
      <label>Department About Description</label>
      <textarea name="dept_about_description" id="dept_about_description' . $row["id"] . '" class="form-control" rows="6">' . $row["description"] . '</textarea>
      <br />
      <label>Department Description</label>
      <textarea name="dept_description" id="dept_description' . $row["id"] . '" class="form-control" rows="6">' . $row["const_des"] . '</textarea>
      <br />
      <div class="form-group">
        <label>Department Image</label><br />
        <img src="../'.$row['cons_image'].'" width="50" height="50" />
        <input type="file" name="cons_dept_image" id="cons_dept_image'.$row['id'].'" class="form-control" value="'.$row['cons_image'].'" />
      <br />
      </div>
      <button type="button" onclick="update_depart_record(' . $row['id'] . ')" name="update" id="' . $row["id"] . '" class="btn btn-success btn-xs update">Update</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

     </form>
    </div>
   </div>
  </div>
  </div>
  <div class="modal fade" id="modal-item2' . $row["id"] . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title" id="myModalLabel">Delete Consultancy Department</h4>
    </div>
    <div class="modal-body">
    <h5 class="modal-title" id="myModalLabel">Are you sure want to delete ' . $row["title"] . ' ?</h4>
     <div class="modal-footer">
     <form method="post" id="delete_depart_update_form' . $row["id"] . '" enctype="multipart/form-data">
     <button type="button" onclick="delete_depart_record(' . $row['id'] . ')" name="delete" id="' . $row["id"] . '" class="btn btn-danger btn-xs delete">Delete</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
     </form>    
     </div>          
    </div>
   </div>
  </div>
  </div>
 ';
    $i++;
}

?>
<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round" />
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <?php
include 'sideber.php';
?>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="container">

                <div class="card">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-sm-8">
                                <h3>DEPARTMENT SETUP</h3>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-success pull-right mb" id="btnaddnew"
                                    data-toggle="modal" data-target="#modal-item">Add new</button>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <table id="example" class="table table-striped table-bordered dt-responsive"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Department Name</th>
                                            <th>Department Short Description</th>
                                            <th>Department Description</th>
                                            <th>Department Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $output1; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="modal-item" class="modal fade text-xs-left in" role="dialog" tabindex="-1"
                    aria-labelledby="myModalLabel1">
                    <div class="modal-dialog" role="document">
                        <!-- Modal content-->
                        <form method="post" class="form" id="frm_slider_setup" name="frm_slider_setup"
                            enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">ADD CONSULT DEPARTMENT</h4>
                                </div>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="menu_head">DEPARTMENT NAME</label>
                                        <input type="text" class="form-control square" id="dept_name" name="dept_name"
                                            placeholder="Enter Department Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu_head">DEPARTMENT ABOUT DESCRIPTION</label>
                                        <textarea class="form-control square" rows="3" id="dept_about_description"
                                            name="dept_about_description"
                                            placeholder="Write Somethings About Department"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="menu_head">DESCRIPTION</label>
                                        <textarea class="form-control square" rows="5" id="dept_description"
                                            name="dept_description" placeholder="Write Somethings"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="menu_head">IMAGE</label>
                                        <input type="file" class="form-control square" id="cons_dept_image"
                                            name="cons_dept_image">
                                    </div>

                                    <!--end form group -->


                                </div>

                                <!--end form group -->



                                <div class="modal-footer">

                                    <button type="button" onclick="addRecord()" name="submit"
                                        class="btn btn-success btn-lg">Save</button>
                                    <button type="button" class="btn btn-warning btn-lg"
                                        data-dismiss="modal">Reset</button>
                                    <button type="button" class="btn btn-danger btn-lg"
                                        data-dismiss="modal">Cancel</button>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!-- jQuery CDN -->
<?php
include 'footer.php';
?>

<script type="text/javascript">
// ----------------- my functions ---------------------

function openmodal() {
    $("#modal-item").modal();
}
$(document).ready(function() {
    $('#example').DataTable();
});

function addRecord() {

    var department_name = $('#dept_name').val();
    var department_description = $('#dept_description').val();
    var dept_about_description = $('#dept_about_description').val();
    var cons_dept_image = $('#cons_dept_image').val();

    if (department_name == "") {
        alertify.error('Please Enter Department Name');
        return false;
    }
    if (department_description == "") {
        alertify.error('Please Enter Department Description');
        return false;
    }
    if (dept_about_description == "") {
        alertify.error('Please Enter Department Short Description');
        return false;
    }
    if (cons_dept_image == "") {
        alertify.error('Please Select Department Image');
        return false;
    }

    var form = $('#frm_slider_setup')[0];
    var data = new FormData(form);

    $.ajax({
        type: "POST",
        // enctype: 'multipart/form-data',
        url: "cons_dept_insert.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            console.log(data);
            // hide modal
            $('#modal-item').modal('hide');
            alertify.success('Added');
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        },
        error: function(e) {
            console.log(e);
            alertify.error('Error');
        }
    });



}

function update_depart_record(id) {
    var id = id;
    var department_name = $('#dept_name' + id).val();
    var department_about_description = $('#department_about_description' + id).val();
    var department_description = $('#dept_description' + id).val();
    var cons_dept_image = $('#cons_dept_image' + id).val();

    if (department_name == "") {
        alertify.error('Please Enter Department Name');
        return false;
    }
    if (department_about_description == "") {
        alertify.error('Please Enter Department Short Description');
        return false;
    }
    if (department_description == "") {
        alertify.error('Please Enter Department Description');
        return false;
    }


    var form = $('#insert_depart_update_form' + id)[0];
    var data = new FormData(form);
    data.append('dept_id', id);
    data.append('dept_name', department_name);
    data.append('department_about_description', department_about_description);
    data.append('dept_description', department_description);
    data.append('cons_dept_image', cons_dept_image);


    $.ajax({
        type: "POST",
        url: "cons_dept_update.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            // console.log(data);

            // hide modal
            $('#modal-item').modal('hide');
            alertify.success('Updated');
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        },
        error: function(e) {
            console.log(e);
            alertify.error('Error');
        }
    });
}

function delete_depart_record(id) {
    var id = id;
    console.log(id);
    var form = $('#delete_depart_update_form' + id)[0];
    var data = new FormData(form);
    data.append('dept_id', id);
    $.ajax({
        type: "POST",
        url: "cons_dept_delete.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            // hide modal
            $('#modal-item').modal('hide');
            alertify.success('Deleted');
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        },
        error: function(e) {
            console.log(e);
            alertify.error('Error');
        }
    });
}
</script>
</body>

</html>