<?php $this->load->view('include/header'); 

  $role_id =  $this->session->userdata('user_role');
  $user_id =  $this->session->userdata('user_id');
  $name = $this->session->userdata('name');
  $comp_name = $this->session->userdata('company_name');  
  $financial_year_selected = $this->session->userdata('financial_year');
  $financial_year_id = $this->session->userdata('financial_id');
  $financial_year_from = $this->session->userdata('financial_from');
  $financial_year_to = $this->session->userdata('financial_to');


?>

<div class="empty-spacer">
<div class="container"></div>
</div>
<!-- ddf white space code ends here -->    
<style type="text/css">
#profilestatus {font-size:14px;font-weight:bold;}   
.textborder {border: 1px solid #555555;}
.form-control {width:90% !important;}
.ui-multiselect{width:50% !important;margin-bottom: 1%;}
label {
    margin-left: 2%;
    margin-top: 1%;
    margin-bottom: 1%;
    }
    .well {
        padding: 5px;
    }
    select.input-sm {
        height:28px;
        line-height:28px;
    }
    .input-sm{
        height:28px;
        padding: 5px 4px;
    }
</style>
<script type="text/javascript">

function add_user() {
        var first_name = $("#txt_first_name").val();
        var last_name = $("#txt_last_name").val();
        var display_name = $("#txt_display_name").val();
        var username = $("#txt_username").val();
        var email = $("#txt_email").val();
        var role = $("#cmb_role").val();

         if (first_name == "") {
            alert('Please enter first name');
            $("#txt_first_name").focus();
            return false;
        }else if (last_name == "") {
            alert('Please enter last name');
            $("#txt_last_name").focus();
            return false;
        }else if (display_name == "") {
            alert('Please enter display name');
            $("#txt_display_name").focus();
            return false;
        }else if (username == "") {
            alert('Please enter username');
            $("#txt_username").focus();
            return false;
        }else if (email == "") {
            alert('Please enter email id');
            $("#txt_email").focus();
            return false;
        }else {
           $("#newregisterfrm").submit();            
        } 
    }
  </script>

<div class="container category">        
  <div class="row">
    <ol class = "breadcrumb">                
        <li style="color: red;">MY ACCOUNT</li>    
        <li style="color: #003166;"><b style="margin-left: 20px;"><?php echo " FINANCIALYEAR :- ".$financial_year_selected ." ";?></b></li>
        <li style="color: #00008b;"><b style="margin-left: 20px; margin-right: 20px; font-size: 20px; text-align: right; color: #00008b;"><?php echo $comp_name ;?></b></li>            
    </ol>     
    <div class="col-md-12" style="background-color:#FFFACD;border-radius: 5px 5px 5px 5px; border: solid 1px #000000; padding:3px 3px 3px 3px;">
            <form name="newregisterfrm" id="newregisterfrm" method="post" action="<?php echo site_url('master/update_account');?>" enctype="multipart/form-data" >
        <div class="textdata_myaccount">
              <fieldset class="well" id="well1">
                        <div class="row" id="row1">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-10 col-sm-9 col-xs-9">
                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">First Name<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_first_name" name="txt_first_name" maxlength="50" value="<?php echo $user_data[0]['FIRSTNAME'];?>">
                                    <input name="user_id" type="hidden" id="user_id" value="<?php echo $user_data[0]['user_id'];?>" />
               <input name="member_id" type="hidden" id="member_id" value="<?php echo $user_data[0]['mem_id'];?>" />
                                </div>
                            </div>
                           
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Middle Name<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_middle_name" name="txt_middle_name" maxlength="50" value="<?php echo $user_data[0]['MIDDLENAME'];?>">
                                </div>
                            </div>
                             <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Last Name<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_last_name" name="txt_last_name" maxlength="50" value="<?php echo $user_data[0]['LASTNAME'];?>" >
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Display Name<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_display_name" name="txt_display_name" maxlength="200" value="<?php echo $user_data[0]['DISPLAYNAME'];?>">
                                </div>
                            </div>                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Username<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_username" name="txt_username" maxlength="50" readonly style="background-color: #f5f5f5;" value="<?php echo $user_data[0]['USERNAME'];?>">
                                </div>
                            </div>
                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Secret Question<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_question" name="txt_question"  maxlength="256" value="<?php echo $user_data[0]['PASSWORDQUESTION'];?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Answer<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_answer" name="txt_answer"  maxlength="128" value="<?php echo $user_data[0]['PASSWORDANSWER'];?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Mobile PIN<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_mobile_pin" name="txt_mobile_pin"  maxlength="12" value="<?php echo $user_data[0]['MOBILEPIN'];?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Mobile Number<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_mobile" name="txt_mobile"  maxlength="12" value="<?php echo $user_data[0]['MOBILENO'];?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Email<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_email" name="txt_email"  maxlength="120" value="<?php echo $user_data[0]['EMAIL'];?>">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Role<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <select id="cmb_role" name="cmb_role" class="form-control input-sm" disabled="true">
                                        <option value="" selected="selected">Select Role</option>
                                          <?php foreach ($role_data_list as $row) {
                                            if($user_data[0]['ROLE_ID'] == $row['ID']){
                                              echo "<option value='".$row['ID']."' selected>".$row['NAME']."</option>"; 
                                            }else{
                                             echo "<option value='".$row['ID']."'>".$row['NAME']."</option>";  
                                            }
                                          }
                                          ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-6 col-xs-6" style="height: 75px;">
                                <label for="emirate" class="control-label">Company Logo<span class="textspandata"></span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="file" name="logo_upload" id="logo_upload" />
                                </div>
                            </div>
                            </div>
                           
                            </div>
                   </div>
                    </fieldset>                    
                    <div style="height:2px;"></div>
                  <div class="text-center">
                    <input type="button" name="update" id="update" class="btn btn-primary" value="UPDATE" onclick="add_user();"/>&nbsp;&nbsp;
                    <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Reset" /> 
                </div>          
            </div>  
        </form>       
    </div>    
  </div>
</div>
  <div style="height:30px;"></div>                
                    <!--  footer code starts here -->
<div class="panel-footer footer navbar-fixed-bottom">  
  <div class="container" style="width: 100%; float: left;">   
    <div class="text-right" style="width: 50%; float: left;"> 
      Copyrights &copy; 2017 Total Accounting 
    </div><div  class="text-right" style="width: 50%; float: right;"> 
      Powered by Salvo Systems Pvt Ltd 
    </div>
  </div>
</div>
</body>
</html>