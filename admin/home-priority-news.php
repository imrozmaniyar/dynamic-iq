<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(8, $AdminSession_ID, $AdminSession_NAME);
?>
<script src='jquery-3.0.0.js' type='text/javascript'></script>
<script src='script-news.js' type='text/javascript'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
a :hover{
  color: hotpink;
}  


</style>
    <section role="main" class="content-body">
    <header class="page-header">
        <h2>Home News Priorities</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <!-- <li><span>Category List</span></li> -->
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <div class="row">
      <table border="1" width="100%">
        <tr bgcolor="#f4f4f4">
          <td align="center"><a href="home-priority-list.php" style="text-decoration:none; color:hotpink;"><b>Home P1</b></a></td>
          <td align="center"><a href="home-priority-photo.php" style="text-decoration:none; color:hotpink;"><b>Home Photos</b></a></td>
          <td align="center"><a href="home-priority-videos.php" style="text-decoration:none; color:hotpink;"><b>Home Videos</b></a></td>
          <td align="center"><a href="home-priority-mumbai.php" style="text-decoration:none; color:hotpink;"><b>Home Mumbai</b></a></td>
          <td align="center"><a href="home-priority-news.php" style="text-decoration:none; color:hotpink;"><b>Home News</b></a></td>
          <td align="center"><a href="home-priority-lifestyle.php" style="text-decoration:none; color:hotpink;"><b>Home Lifestyle</b></a></td>
          <td align="center"><a href="home-priority-entertainment.php" style="text-decoration:none; color:hotpink;"><b>Home Entertainment</b></a></td>
          <td align="center"><a href="home-priority-sports.php" style="text-decoration:none; color:hotpink;"><b>Home Sports</b></a></td>
        </tr>
      </table>
        <div class="col-md-6 col-lg-12 col-xl-6">
          <section class="panel">
              <div class="">
                      <div class="panel-body" >
                        <table border="4" width="50%" cellspacing="10" bgcolor="#00FF00" align="center" id="demo">
                          <tbody class="row_position">
                          <?php
                              $query = "select * from users_news order by position";
                              $result = mysqli_query($con,$query);
                              $count = 1;
                              while($row = mysqli_fetch_array($result) ){
                                  $id = $row['id'];
                                  $username = $row['username'];
                                  $name = $row['name'];
                                  $position = $row['position'];
                          ?>
                            <tr id='<?php echo $id?>'>
                                <td align="center" width="25%" bgcolor="#4d88ff"><font color="#ffffff"><b>Position <?php echo $position; ?></b></font></td>
                                <td align="center" width="25%" bgcolor="#4d88ff" valign="center">
                                  <div id='username_<?php echo $id; ?>'>
                                    <select  class=" form-control mb-md categorydd" id='username_<?php echo $id; ?>' name="cbocat" required="required">
                                      <option value="Article" <?php if($username == "Article"){ echo "selected"; } ?>>Article</option>
                                      <option value="Photos" <?php if($username == "Photos"){ echo "selected"; } ?>>Photos</option>
                                      <option value="Videos" <?php if($username == "Videos"){ echo "selected"; } ?>>Videos</option>

                                    </select>
                                  </div>
                                </td>
                                <td align="center" width="25%" bgcolor="#4d88ff">
                                <div id='name_<?php echo $id; ?>'>
                                    <!-- <font color="#ffffff"><?php echo $name; ?>  -->
                                <input type="number" class="textdd" name="txtname" id='name_<?php echo $id; ?>' value="<?php echo $name; ?>">                                      
                                </div>
                              </td>
                            </tr>
                            <?php
                                    $count ++;
                                }
                            ?>
                            <tbody>
                        </table>
                        <br><br>
                        <div align="center">
                          <a href="#" class="btn btn-default" id="myButton">Update</a>
                          <a href="<?php echo $domain?>admin/adminhome.php" class="btn btn-default" id="myButton">Cancel</a></div>
                      </div>
                      <div>
                      </div>  
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
</div>
<?php include("right.php");?>
<?php include("bottom.php");?>
<script type="text/javascript">
    $( ".row_position" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url:"ajaxProNews.php",
            type:'post',
            data:{position:data},
            success:function(){
                alert('your change successfully saved');
            }
        })
    }
</script>
