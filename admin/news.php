<?php
include_once('header.php');
require_once('databases.php');
include('checkLogin.php');

$i=1;
$output1='';
$query1 = "SELECT * FROM news ORDER BY id DESC";

$result1 = mysqli_query($connection, $query1);
if(mysqli_num_rows($result1) > 0)
{
 while($row1 = mysqli_fetch_array($result1))
 {
  $output1 .= '
  <tr>
   <td>'.$row1["id"].'</td>
   <td>'.$row1["title"].'</td>
   <td>'.$row1["short_description"].'</td>
    <td>'.$row1["article"].'</td>
    <td><img src="../'.$row1["image"].'" width="50" height="35" class="img-thumbnail" /></td>
    <td>
    ';
    if($row1["is_home_page"] == 1){
    	$output1 .= '<span class="">Yes</span>';
    }
    else{
    	$output1 .= '<span class="">No</span>';
    }
    $output1 .= '
    </td>
   <td><button type="button" name="update" id="'.$row1["id"].'" class="btn btn-warning btn-xs update">Update</button>
   <button type="button" name="delete" id="'.$row1["id"].'" class="btn btn-danger btn-xs delete">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output1 .= '
 <tr>
  <td colspan="4">No Data Found</td>
 </tr>
 ';
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
                                <h3>NEWS SETUP</h3>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-success pull-right mb" id="btnaddnew"
                                    data-toggle="modal" data-target="#modal-item">Add new</button>
                            </div>
                            <div class="col-sm-12">
                                <table id="example" class="table table-striped table-bordered dt-responsive"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5%">News Id</th>
                                            <th width="10%">News Title</th>
                                            <th width="25%">Short Description</th>
                                            <th width="25%">Article</th>
                                            <th width="10%">Image</th>
                                            <th width="10%">Show Homepage</th>
                                            <th width="10%">Action</th>
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
                                    <h4 class="modal-title">News Setup</h4>
                                </div>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="menu_head">News Title</label>
                                        <input type="text" class="form-control square" id="news_title" name="title" />
                                    </div>
                                    <!--end form group -->
                                    <div class="form-group">
                                        <label for="menu_head">Short Description</label>
                                        <textarea rows="6" cols="50" class="form-control square"
                                            id="news_short_desp"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="menu_head">Article</label>
                                        <textarea rows="6" cols="50" class="form-control square"
                                            id="news_article"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="menu_title">News Image</label>
                                        <input type="file" id="n_image" class="form-control " name="n_image">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Show home-page</label>
                                        <div class="input-group">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" name="show" value="1" class="custom-control-input"
                                                    id="news_home_page_show">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Yes</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" name="show" value="0" class="custom-control-input"
                                                    id="news_home_page_show">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">No</span>
                                            </label>
                                        </div>

                                    </div>

                                    <!--end form group -->



                                    <div class="modal-footer">

                                        <button type="button" onclick="addRecord()"
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



    // var art = tinymce.get("art").getContent();

    var news_title = $("#news_title").val();
    var news_short_desp = $("#news_short_desp").val();
    var news_article = $("#news_article").val();
    var n_image = $("#n_image").val();
    var news_home_page_show = $("input[name='show']:checked").val();

    var form = $('#frm_slider_setup')[0];
    var data = new FormData(form);
    data.append('news_title', news_title);
    data.append('news_short_desp', news_short_desp);
    data.append('news_article', news_article);
    data.append('n_image', n_image);
    data.append('news_home_page_show', news_home_page_show);
    $.ajax({
        type: "POST",
        enctype: 'multipart/form-data',
        url: "news_insert.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        success: function(data) {
            console.log("SUCCESS : ", data);
            alertify.success('Added');
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

    var title = $("#title" + id).val();

    var art = tinymce.get("art" + id).getContent();

    var img = $("#img" + id).val();


    if (title == "") {
        alert("title cannot be empty");
        console.log('success');
        console.log('failure');
        return false;
    } else if (art == "") {
        alert("Detals cannot be empty");
        console.log('success');
        console.log('failure');
        return false;
    }
    // get values
    function save() {
        if (window.XMLHttpRequest) {
            request = new XMLHttpRequest();
        } else {
            request = new ActiveXObject("Microsoft.XMLHTTP");
        }
        var form1 = document.forms.namedItem("frm_edit" + id);
        var data = new FormData(form1);
        data.append('art' + id, art);
        data.append('id', id);

        request.open('POST', 'news_edit.php', true);
        request.onload = function() {
            if (request.status !== 200) {
                return;
            }
            var return_data = request.responseText;

            var output1 = '';
            if (return_data == "1") {
                alertify.success('News Edited');
                setTimeout(function() {
                    location.reload()
                }, 1000);
            } else {
                //document.getElementById('n').style.display="block";
            }
        };
        request.send(data);
    }
    save();
    $('#modal-item').modal('hide');
    return;
}


function deletem(id) {
    var data = {
        "id": id
    }
    $.ajax({

        method: "post",
        url: "news_delete.php",
        data: data,
        success: function(data) {
            if (data == "1") {
                alertify.success('deleted');
                setTimeout(function() {
                    location.reload()
                }, 1000);
            }

        }
    });
}

function info(id) {
    url = "news_info.php?nid=" + id + "";
    window.location.href = url;
}
</script>
</body>

</html>