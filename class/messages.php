<?php
Class message{
  var $_message;
  function message($id=NULL){
    if($id):
      switch ($id):
        case 101:
        $this->_title = "Thank you";
        $this->_message = "Operation Successful.";
        break;
        case 102:
        $this->_title = "Sorry";
        $this->_message = "Invalid login. Please try again.";
        break;
       case 103:
       $this->_title = "Sorry";
       $this->_message = "Session Expired. Please Relogin.";
       break;
       case 104:
       $this->_title = "Sorry";
       $this->_message = "Invalid Image Format. Please Try Again";
       break;
       case 105:
       $this->_title = "Success";
       $this->_message = "Record(s) Deleted Successfully";
        break;		case 106:
        $this->_title = "Sorry";
        $this->_message = "User Already Exist";
        break;		case 107:
        $this->_title = "Success";
        $this->_message = "Details Has Sent To Your Mail Id";
        break;		case 108:
        $this->_title = "Sorry";
        $this->_message = "Invalid User Name. Please try again.";
        break;		case 109:
        	$this->_title = "Sorry";
        $this->_message = "Video Title Already Exist. Please try again.";
         break;		case 110:
         $this->_title = "Success";
         $this->_message = "Forgot password link mailed to your Email account.";
         break;		case 111:
         $this->_title = "Success";
         $this->_message = "ailed In Sending Mail !! Please try Again.";
         break;
         case 112:
         $this->_title = "Success";
         $this->_message = "Your password is changed successfully.";
         break;		case 113:
         $this->_title = "Sorry";
         $this->_message = "Invalid link or Password already changed.";
         break;		case 114:
         $this->_title = "Sorry";
         $this->_message = "Email Address Already Exists. Please try again with another email ";
         break;
         case 115:
         $this->_title = "Sorry";
         $this->_message = "No records Found. Please try again with another Date ";
         break;
         case 116:
         $this->_title = "Sorry";
         $this->_message = "Invalid Old Password. Please re-try";
         break;
         case 117:
         $this->_title = "Sorry";
         $this->_message = "Password Changed Successfully.";
         break;
         case 118:
         $this->_title = "Sorry";
         $this->_message = "Profile Edited Successfully.";
         break;
         case 119:
         $this->_title = "Success";
         $this->_message = "An e-mail has been sent to your email id with an activation link. Click the link to activate your account.";
         break;
         case 120:
         $this->_title = "Sorry";
         $this->_message = "Invalid File Format. Please Upload PDF File";
         break;
         case 121:
         $this->_title = "Sorry";
         $this->_message = "Category name already exists. Try a different category name.";
         break;
         case 122:
         $this->_title = "Sorry";
         $this->_message = "Sub-Category name already exists. Try a different sub-category name.";
          break;
          case 123:
           $this->_title = "Sorry";
            $this->_message = "Album name already exists. Try a different album name.";
            break;
            case 124:
            $this->_title = "Sorry";
            $this->_message = "Category already exists. Try with a different category.";                    
            break;
             case 125:
              $this->_title = "Sorry";
               $this->_message = "Invalid Captcha. Please try again";
                break;
                endswitch;
               endif;
              }
              // method to return the message
              function get_message(){
                return $this->_message;    }
                function get_title(){
                  return $this->_title;    }
}
