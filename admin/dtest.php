<?php
include_once('header.php');
require_once('databases.php');
include('checkLogin.php');
$i=1;
$output1='';
$query = "SELECT services.sname,services.sid as service_id, const_dept.title as const_title,const_dept.id as const_id, tests.* FROM tests LEFT JOIN services ON tests.servicehead = services.sid
LEFT JOIN const_dept ON tests.const_dept_id = const_dept.id ORDER BY tests.testid ASC, tests.tname ASC";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result))
{
 $output1 .= '
    
    <tr>
    <td>'.$i.'</td>
    <td>'.$row["tname"].'</td>
    <td>'.$row["short_des"].'</td>
    <td>'.$row["sname"].'</td>
    <td>'.$row["tdes"].'</td>
    <td>'.$row["const_title"].'</td>
    <td><button type="button" data-toggle="modal" data-target="#modal-item'.$row["testid"].'" class="btn btn-warning btn-xs update">Update</button>
  <button type="button"data-toggle="modal" data-target="#modal-item2'.$row["testid"].'" class="btn btn-danger btn-xs delete">Delete</button>
    </td>
    
    </tr>

    <div class="modal fade" id="modal-item'.$row["testid"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Update Test</h4>
          </div>
            <div class="modal-body">
              <form method="post" id="update_test_form'.$row["testid"].'" enctype="multipart/form-data">
                <div class="form-group">
                <label>Test Name</label>
                <input type="text" name="tname" id="tname'.$row["testid"].'" class="form-control" value="'.$row["tname"].'" required />
                </div>
                <div class="form-group">
                  <label>Test Short Description</label>
                   <textarea name="test_short_description" id="test_short_description'.$row["testid"].'" class="form-control">'.$row["short_des"].'</textarea>
                </div>
                <div class="form-group">
                <label>Service Head</label>
                <select name="servicehead" id="servicehead'.$row["testid"].'" class="form-control" required>
                <option value="">Select Service Head</option>
                ';
                $query1 = "SELECT * FROM services ORDER BY sname ASC";
                $result1 = mysqli_query($connection, $query1);
                while($row1 = mysqli_fetch_array($result1))
                {
                $output1 .= '<option value="'.$row1["sid"].'"';
                  if($row1["sid"] == $row["service_id"])
                  {
                    $output1 .= 'selected';
                  }
                  $output1 .= '>'.$row1["sname"].'</option>';

                }
                $output1 .= '
                </select>
                </div>
                <div class="form-group">
                <label>Test Order</label>
                <input type="text" name="tdes" id="tdes'.$row["testid"].'" class="form-control" value="'.$row["tdes"].'" required />
                </div>
                <div class="form-group">
                <label>Consultancy Department</label>
                <select name="const_id" id="const_id'.$row["testid"].'" class="form-control" required>
                <option value="">Select Service Head</option>
                ';
                $query2 = "SELECT * FROM const_dept";
                $result2 = mysqli_query($connection, $query2);
                while($row2 = mysqli_fetch_array($result2))
                {
                $output1 .= '<option value="'.$row2["id"].'"';
                  if($row2["id"] == $row["const_id"])
                  {
                    $output1 .= 'selected';
                  }
                  $output1 .= '>'.$row2["title"].'</option>';

                }
                
                $output1 .= '
                </select>
                </div>
                <div class="form-group">
                  <button type="button" onclick="update_test_record('.$row['testid'].')" name="update" id="'.$row["testid"].'" class="btn btn-success btn-xs update">Update</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-item2'.$row["testid"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title" id="myModalLabel">Delete Department</h4>
    </div>
    <div class="modal-body">
    <p>Are You Sure want to Delete '.$row["tname"].'</p>
     <form method="post" id="insert_depart_delete_form'.$row["testid"].'" enctype="multipart/form-data">
      
        <button type="button" onclick="delete_depart_record('.$row['testid'].')" name="delete" id="'.$row["testid"].'" class="btn btn-success btn-xs update">Delete</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </form>

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
  include('sideber.php');
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
                                <h3>TEST SETUP</h3>
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
                                            <th>Test Name</th>
                                            <th>Test Short Description</th>
                                            <th>Service Name</th>
                                            <th>Test Order</th>
                                            <th>Consultation Department</th>
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
                                    <h4 class="modal-title">ADD TESTS</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="menu_head">Test Name</label>
                                        <input type="text" class="form-control" id="test_name" name="test_name"
                                            placeholder="Enter Test Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu_head">TEST SHORT DESCRIPTION</label>
                                        <textarea class="form-control square" rows="5" id="test_short_description"
                                            name="test_short_description"
                                            placeholder="Write Somethings About This Test"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="menu_head">Select your service</label>

                                        <select class="form-control" name="service_id" id="service_id">
                                            <option value="">Select Service</option>
                                            <?php
                                              $query = "SELECT * FROM services ORDER BY ord DESC";
                                              $result = mysqli_query($connection, $query);
                                              while($row = mysqli_fetch_array($result))
                                              {
                                                  echo '<option value="'.$row["sid"].'">'.$row["sname"].'</option>';
                                              }
                                            ?>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Test Order</label>
                                        <input type="number" class="form-control" name="test_order" id="test_order">
                                    </div>
                                    <div class="form-group">
                                        <label for="menu_head">Select your Consultancy Department</label>

                                        <select class="form-control" name="const_id" id="const_id">
                                            <option value="">Select Consultancy Department</option>
                                            <?php
                                              $query = "SELECT * FROM const_dept ORDER BY id DESC";
                                              $result = mysqli_query($connection, $query);
                                              while($row = mysqli_fetch_array($result))
                                              {
                                                  echo '<option value="'.$row["id"].'">'.$row["title"].'</option>';
                                              }
                                            ?>
                                        </select>

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
      include('footer.php');
      ?>

<script>
tinymce.init({
    selector: 'textarea',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [{
            value: 'First.Name',
            title: 'First Name'
        },
        {
            value: 'Email',
            title: 'Email'
        },
    ]
});
</script>

<script type="text/javascript">
// ----------------- my functions ---------------------

function openmodal() {
    $("#modal-item").modal();
}
$(document).ready(function() {
    $('#example').DataTable();
});

function addRecord() {

    var test_name = $("#test_name").val();
    var test_description = tinymce.get('test_short_description').getContent();

    var service_id = $("#service_id").val();


    var test_order = $("#test_order").val();
    var const_id = $("#const_id").val();

    console.log(typeof test_order);

    // if(test_name == "" || service_id == "" || test_description == ""){
    //   alertify.error('Please fill all the fields');
    // }else{

    var form = $('#frm_slider_setup')[0];
    var data = new FormData(form);
    data.append("test_name", test_name);
    data.append("test_short_description", test_description);
    data.append("service_id", service_id);
    data.append("test_order", test_order);
    data.append("const_id", const_id);
    $.ajax({
        type: "POST",
        url: "dtest_insert.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            alertify.success('Added');
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        },
        error: function(e) {
            alertify.error('Error');
        }
    });

    // }



}

function update_test_record(id) {
    var id = id;
    var test_name = $("#tname" + id).val();
    var test_short_description = tinymce.get('test_short_description' + id).getContent();
    var service_id = $("#servicehead" + id).val();
    var test_order = $("#tdes" + id).val();
    var const_id = $("#const_id" + id).val();

    var form = $('#update_test_form' + id)[0];
    var data = new FormData(form);
    data.append("test_id", id);
    data.append("test_name", test_name);
    data.append("test_short_description", test_short_description);
    data.append("service_id", service_id);
    data.append("test_order", test_order);
    data.append("const_id", const_id);
    $.ajax({
        type: "POST",
        url: "dtest_update.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            alertify.success('Updated');
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        },
        error: function(e) {
            alertify.error('Error');
        }
    });

}

function editItem(id) {
    var id = id;
    //  alert($('istock'+id).text());
    var caption = $('#caption' + id).text();




    function sentDataForEdit() {
        xmlhttp = new XMLHttpRequest();
        var url = "department_edit.php?id=" + id + "&caption=" + caption + "";
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                alertify.success('Edited');
                setTimeout(function() {

                    window.location.reload();
                }, 1000);
            }
        }
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
    }
    sentDataForEdit();
}

function deletem(id) {
    var data = {
        "id": id
    }
    $.ajax({

        method: "post",
        url: "solution_delete.php",
        data: data,
        success: function(data) {
            if (data == "1") {
                alertify.success('deleted');
                //setTimeout(function(){location.reload()},1000);
            }

        }
    });
}

function delete_depart_record(id) {
    var id = id;
    console.log(id);

    var form = $('#insert_depart_delete_form' + id)[0];
    var data = new FormData(form);
    data.append('tid', id);

    $.ajax({
        type: "POST",
        url: "dtest_delete.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            // console.log(data);

            // hide modal
            $('#modal-item2').modal('hide');
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