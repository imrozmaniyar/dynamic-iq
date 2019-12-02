<?php 
  include('top.php');
  include_once(DIR_WS_CLASS_SITE."db_registration_master.php");
  $id = $uid;
  $obj = new db_registration_master($id);
  $name = $obj->Get_user_name();
  $email = $obj->Get_user_email();
  $phone = $obj->Get_user_mobile();
  $flag = $obj->Get_user_flag();
  if($flag=='I'):
    $siteflag = 'Inquilab.Com';
  endif;  
?>
    <section>
      <div class="container">
        <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto">Primary Information</h1>
        <div class="row">
          <div class="col-md-5 mx-auto text-left">
            <form class="register-placeholder">
              <div class="form-group mt-3">
                <table>
                  <tr>
                     <td width="30%"><b>Name</b></td> 
                     <td width="20%" align="center"><b>:</b></td> 
                     <td width="50%"><b><?php echo htmlspecialchars($name,ENT_QUOTES, 'UTF-8')?></b></td> 
                  </tr>
                  <tr>
                     <td width="30%"><b>Email</b></td> 
                     <td width="20%" align="center"><b>:</b></td> 
                     <td width="50%"><b><?php echo htmlspecialchars($email,ENT_QUOTES, 'UTF-8')?></b></td> 
                  </tr>
                  <tr>
                     <td width="30%"><b>Mobile No</b></td> 
                     <td width="20%" align="center"><b>:</b></td> 
                     <td width="50%"><b><?php echo htmlspecialchars($phone,ENT_QUOTES, 'UTF-8')?></b></td> 
                  </tr>
                  <tr>
                     <td width="30%"><b>Registered</b></td> 
                     <td width="20%" align="center"><b>:</b></td> 
                     <td width="50%"><b><?php echo htmlspecialchars($siteflag,ENT_QUOTES, 'UTF-8')?></b></td> 
                  </tr>

                </table>

              </div>
            </form>  
          </div>
        </div>  
      </div>
    </section>
<?php include('bottom.php')?>