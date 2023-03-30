

<?php
include_once('header.php');
require_once('databases.php');
include('checkLogin.php');
$i=1;
$output1='';
$query = "SELECT department.dname, department.id as did, services.* FROM department INNER JOIN services ON department.id = services.dept ORDER BY services.ord DESC";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result))
  
{
 $output1 .= '
    
    <tr>
    <td>'.$i.'</td>
    <td>'.$row["dname"].'</td>
    <td>'.$row["sname"].'</td>
    <td>'.$row["des"].'</td>
    <td><img src="../'.$row["image"].'" width="50" height="50" /></td>
    <td>'.$row["image_alt"].'</td>
    <td>
      '.$row["keywords"].'

    </td>
    <td>'.$row["ord"].'</td>
    <td><button type="button" data-toggle="modal" data-target="#modal-item'.$row["sid"].'" class="btn btn-warning btn-xs update">Update</button>
  <button type="button" name="delete" id="'.$row["sid"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
    </tr>

    <div class="modal fade" id="modal-item'.$row["sid"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Update Service</h4>
        </div>
        <div class="modal-body">
          <form method="post" id="service_update_form'.$row["sid"].'" enctype="multipart/form-data">
            <div class="form-group">
              <label>Department</label>
              <select name="dept_id" id="dept_id'.$row["sid"].'" class="form-control">
                
                ';
                $query1 = "SELECT * FROM department";
                $result1 = mysqli_query($connection, $query1);
                while($row1 = mysqli_fetch_array($result1))
                {
                  $output1 .= '<option value="'.$row1["id"].'"';
                  if($row1["id"] == $row["did"])
                  {
                    $output1 .= 'selected';
                  }
                  $output1 .= '>'.$row1["dname"].'</option>';
                }
                $output1 .= '
              </select>
            </div>
            <div class="form-group">
              <label>Service Name</label>
              <input type="text" name="sname" id="sname'.$row["sid"].'" class="form-control" value="'.$row["sname"].'" />
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="sdes" id="sdes'.$row["sid"].'" class="form-control">'.$row["des"].'</textarea>
            </div>
            <div class="form-group">
              <label>Image</label>
              <img src="../'.$row["image"].'" width="50" height="50" />
              <input type="file" name="simage" id="simage'.$row["sid"].'" class="form-control" value="'.$row["image"].'" />
            </div>
            <div class="form-group">
              <label>Image Alt</label>
              <input type="text" name="simage_alt" id="simage_alt'.$row["sid"].'" class="form-control" value="'.$row["image_alt"].'" />
            </div>
            <div class="form-group">
              <label>Keywords</label>
              <input type="text" name="skeywords" id="skeywords'.$row["sid"].'" class="form-control" value="'.$row["keywords"].'" />
            </div>
            <div class="form-group">
              <label>Order</label>
              <input type="text" name="sorder" id="sorder'.$row["sid"].'" class="form-control" value="'.$row["ord"].'" />
            </div>
            <div class="form-group">
              <input type="hidden" name="sid" id="sid" value="'.$row["sid"].'" />
              <input type="hidden" name="old_image" id="old_image'.$row["sid"].'" value="'.$row["image"].'" />
              <button type="button" onclick="update_service_record('.$row['sid'].')" name="update" id="'.$row["sid"].'" class="btn btn-success btn-xs update">Update</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
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
    <input type="text" placeholder="Search" class="menu-search form-control round"/>
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
                <h3>DEPARTMENT SETUP</h3>
              </div>
              <div class="col-sm-4">
                <button type="button" class="btn btn-success pull-right mb" id="btnaddnew" data-toggle="modal" data-target="#modal-item">Add new</button>
              </div>
              <div class="col-lg-12 col-md-12">
                <table id="example" class="table table-striped table-bordered dt-responsive"  style="width:100%">
                  <thead>
                    <tr>
                        <th>SL</th>
                        <th>Department Name</th>
                        <th>Service Name</th>
                        <th>Service Description</th>
                        <th>Service Image Id</th>
                        <th>Service Image</th>
                        <th>Service Keywords</th>
                        <th>Service Order</th>
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
        <div id="modal-item" class="modal fade text-xs-left in" role="dialog" tabindex="-1" aria-labelledby="myModalLabel1"> 
          <div class="modal-dialog" role="document">
            <!-- Modal content-->
             <form method="post" class="form" id="frm_slider_setup" name="frm_slider_setup" enctype="multipart/form-data" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">ADD DEPARTMENT</h4>
              </div>
              
               <div class="modal-body">
                    
                      <div class="form-group">
                      <label  for="menu_head">Select your department</label>

                      <select class="form-control" name="dept_id" id="dept_id">
                        <option value="">Select Department</option>
                        <?php
                        $query = "SELECT * FROM department ORDER BY ord DESC";
                        $result = mysqli_query($connection, $query);
                        while($row = mysqli_fetch_array($result))
                        {
                          echo '<option value="'.$row["id"].'">'.$row["dname"].'</option>';
                        }
                        ?>
                      </select>
                      
                      </div>
                      <div class="form-group">
                        <label  for="menu_head">Service Name</label>
                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Enter Service Name">
                      </div>
                      <div class="form-group">
                        <label for="">Service Description</label>
                        <textarea class="form-control" id="service_description" name="service_description" placeholder="Enter Service Description"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">image</label>
                        <input type="file" class="form-control" id="service_image" name="service_image" >
                      </div>
                      <div class="form-group">
                        <label for="">Service Image Alt</label>
                        <input type="text" class="form-control" id="service_image_alt" name="service_image_alt" >
                      </div>
                      <div class="form-group">
                        <label for="">Service Keywords</label>
                        <input type="text" class="form-control" id="service_keyword" name="service_keyword" placeholder="write keyword with enter press">
                      </div>
                      <div class="form-group">
                        <label for="">Service Order</label>
                        <input type="number" class="form-control" id="service_order" name="service_order" >
                      </div>
                      
                      
                      
                    <!--end form group -->
                  
                       
                        </div>
                      
                          <!--end form group -->
                          
                       
                        
                        <div class="modal-footer">
                          
                          <button type="button" onclick="addRecord()" name="submit" class="btn btn-success btn-lg">Save</button>
                          <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Reset</button>
                          <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
                        
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
    
      <script type="text/javascript">

        

        
        

     
      // ----------------- my functions ---------------------
      
      function openmodal(){
      $("#modal-item").modal();
      }
      $(document).ready(function() {
      $('#example').DataTable();
      } );

    function addRecord() {

        var dept_id = $('#dept_id').val();
        console.log(dept_id);
        var service_name = $('#service_name').val();
        var service_description = $('#service_description').val();
        var service_image = $('#service_image').val();
        var service_image_alt = $('#service_image_alt').val();
        
        var service_keyword = $('#service_keyword').val();
        
        //convert array to json
      
        var service_order = $('#service_order').val();
        
        var form = $('#frm_slider_setup')[0];
        var data = new FormData(form);
        data.append("dept_id", dept_id);
        data.append("service_name", service_name);
        data.append("service_description", service_description);
        data.append("service_image", service_image);
        data.append("service_image_alt", service_image_alt);
        data.append("service_keyword", service_keyword);
        data.append("service_order", service_order);
        $.ajax({
            type: "POST",
            url: "service_insert.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
              console.log(data);
                alertify.success('Added');
                setTimeout(function() {
                    window.location.reload();
                }, 1000);
            },
            error: function (e) {
              console.log(e);
                alertify.error('Error');
            }
        });
    
   
    
  }

      function update_service_record(id){
      var id = id;
      var dept_id = $('#dept_id'+id).val();
      var service_name = $('#sname'+id).val();
      var service_description = $('#sdes'+id).val();
      var service_image = $('#simage'+id).val();
      var service_image_alt = $('#simage_alt'+id).val();
      
     
      var service_keyword = $('#skeywords'+id).val();
    
      var service_order = $('#sorder'+id).val();

      if(service_image == ""){
        var service_image = $('#old_image'+id).val();
      }

      

      var form = $('#service_update_form'+id)[0];
      var data = new FormData(form);
      data.append("sid", id);
      data.append("dept_id", dept_id);
      data.append("service_name", service_name);
      data.append("service_description", service_description);
      data.append("simage", service_image);
      data.append("service_image_alt", service_image_alt);
      data.append("service_keyword", service_keyword);
      data.append("service_order", service_order);
      $.ajax({
          type: "POST",
          url: "service_update.php",
          data: data,
          processData: false,
          contentType: false,
          cache: false,
          timeout: 600000,
          success: function (data) {

              alertify.success('Updated');
              setTimeout(function() {
                  window.location.reload();
              }, 1000);
          },
          error: function (e) {
            console.log(e);
              alertify.error('Error');
          }
      });
      

      }
    

      function editItem(id){
      var id = id;
      //  alert($('istock'+id).text());
      var caption = $('#caption'+id).text();
      
      
      
      
      function sentDataForEdit(){
      xmlhttp = new XMLHttpRequest();
      var url = "department_edit.php?id="+id+"&caption="+caption+"";
      xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      alertify.success('Edited');
      setTimeout(function() {
      
      window.location.reload();
      }, 1000);
      }
      }
      xmlhttp.open("GET",url, true);
      xmlhttp.send();
      }
      sentDataForEdit();
      }
  
        function deletem(id){
          var data={"id":id}
          $.ajax({
             
             method: "post",
             url: "solution_delete.php",
             data: data,
             success: function(data){
                 if(data == "1"){
                  alertify.success('deleted');
                  //setTimeout(function(){location.reload()},1000);
                 }

             }
    });
        }

      </script>
    </body>
  </html>