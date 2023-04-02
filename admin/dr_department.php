<?php
include_once('header.php');
require_once('databases.php');
include('checkLogin.php');
$i=1;
$output1='';
$query = "SELECT * FROM dept ORDER BY did ASC";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result))
{
 $output1 .= '
 <tr>
  <td>'.$i.'</td>
  <td>'.$row["department"].'</td>
  
  <td><button type="button" data-toggle="modal" data-target="#modal-item'.$row["did"].'" class="btn btn-warning btn-xs update">Update</button>

  
  <button type="button" name="delete" id="'.$row["did"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
 </tr>

 <div class="modal fade" id="modal-item'.$row["did"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title" id="myModalLabel">Update Department</h4>
    </div>
    <div class="modal-body">
     <form method="post" id="insert_depart_update_form'.$row["did"].'" enctype="multipart/form-data">
      <label>Department Name</label>
      <input type="text" name="dept_name" id="dept_name'.$row["did"].'" class="form-control" value="'.$row["department"].'" />
      <br />
      <input type="hidden" name="dr_department_id" id="dr_department_id'.$row["did"].'" value="'.$row["did"].'" />
      <button type="button" onclick="update_depart_record('.$row['did'].')" name="update" id="'.$row["did"].'" class="btn btn-success btn-xs update">Update</button>
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
                      <label  for="menu_head">DEPARTMENT NAME</label>
                      <input type="text" class="form-control square" id="dept_name" name="dept_name" placeholder="Enter Department Name">
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

      var department_name = $('#dept_name').val();

      if(department_name == ""){
        alertify.error('Please Enter Department Name');
        return false;
      }
      

      var form = $('#frm_slider_setup')[0];
      var data = new FormData(form);

      $.ajax({
        type: "POST",
        url: "dr_department_insert.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
          $('#modal-item').modal('hide');
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

    function update_depart_record(id){
      var id = id;
      console.log(id);
      var department_name = $('#dept_name'+id).val();

      if(department_name == ""){
        alertify.error('Please Enter Department Name');
        return false;
      }
      

      var form = $('#insert_depart_update_form'+id)[0];
      var data = new FormData(form);
      data.append('dept_id', id);
      data.append('dept_name', department_name);
     

      $.ajax({
        type: "POST",
        url: "dr_department_update.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function (data) {
          console.log(data);
          // hide modal
          $('#modal-item').modal('hide');
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