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

function create_party() {
        var account_name = $("#cmb_account").val();
        var address1 = $("#txt_address1").val();
        var txt_country = $("#cmb_country").val();
        var txt_state = $("#cmb_state").val();

         if (account_name == "") {
           alert("Please enter company name");
            $("#cmb_account").focus();
            return false;
        }else if (address1 == "") {
            alert("Please enter Address");
            $("#txt_address1").focus();
            return false;
        }else if (txt_country == "") {
            alert("Please select country");
            $("#cmb_country").focus();
            return false;
        }else if (txt_state == "") {
            alert("Please select state");
            $("#cmb_state").focus();
            return false;
        }else {
           $("#newregisterfrm").submit();            
        } 
    }
  </script>

<div class="container category">        
  <div class="row">
    <ol class = "breadcrumb">                
        <li style="color: red;">ADD PARTY ADDRESS</li> 
        <li style="color: #003166;"><b style="margin-left: 20px;"><?php echo " FINANCIALYEAR :- ".$financial_year_selected ." ";?></b></li>
        <li style="color: #00008b;"><b style="margin-left: 20px; margin-right: 20px; font-size: 20px; text-align: right; color: #00008b;"><?php echo $comp_name ;?></b></li>         
    </ol>     
    <div class="col-md-12" style="background-color:#FFFACD;border-radius: 5px 5px 5px 5px; border: solid 1px #000000; padding:3px 3px 3px 3px;">
            <form name="newregisterfrm" id="newregisterfrm" method="post" action="<?php echo site_url('master/add_party');?>" >
        <div class="textdata_myaccount">
              <fieldset class="well" id="well1">
                        <div class="row" id="row1">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-10 col-sm-9 col-xs-9">
                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Account Name<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <select id="cmb_account" name="cmb_account" class="form-control input-sm">
                                        <option value="" selected="selected">Select Account</option>
                                          <?php foreach ($account as $row) {
                                            echo "<option value='".$row['ID']."'>".$row['ACCOUNTDESC']."</option>"; 
                                          }
                                          ?>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Address I<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_address1" name="txt_address1" maxlength="250">
                                </div>
                            </div>
                             <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Address II<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_address2" name="txt_address2" maxlength="250" >
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Country<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <select id="cmb_country" name="cmb_country" class="form-control input-sm">
                                        <option value="" selected="selected">Select Country</option>
                                         <?php foreach ($country as $row) {
                                            echo "<option value='".$row['ID']."'>".$row['NAME']."</option>"; 
                                          }
                                          ?>
                                    </select>
                                </div>
                            </div>                            
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">State<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <select id="cmb_state" name="cmb_state" class="form-control input-sm">
                                        <option value="" selected="selected">Select State</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">District<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <select id="cmb_district" name="cmb_district" class="form-control input-sm">
                                        <option value="" selected="selected">Select District</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Pincode<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="number" class="form-control input-sm" id="txt_pin_code" name="txt_pin_code"  maxlength="6"  min = "0"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Vender Code<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_vender_code" name="txt_vender_code"  maxlength="20">
                                </div>
                            </div>
                             <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <label for="emirate" class="control-label">Registration Number<span class="textspandata">*</span></label>
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">
                                    <input type="text" class="form-control input-sm" id="txt_gst_no" name="txt_gst_no"  maxlength="20">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-6">
                                <div class="col-md-12 col-sm-9 col-xs-9" style="align:left;">

                                         <label class="btn btn-default">
                                          <input type="radio" id="chk_billing_2" class="chk_gst" name="chk_billing"  value="1" checked="checked"/> Billing Address
                                        <input type="radio" id="chk_billing_1" class="chk_gst" name="chk_billing"  value="0"  />Shipping Address
                                       </label>
                                </div>
                            </div>
                            </div>
                           
                            </div>
                   </div>
                    </fieldset>                    
                    <div style="height:2px;"></div>
                  <div class="text-center">
                    <input type="button" name="update" id="update" class="btn btn-primary" value="Submit" onclick="create_party();"/>&nbsp;&nbsp;
                    <input type="reset" class="btn btn-primary" name="reset" id="reset" value="Reset" /> <input type="button" class="btn btn-primary" name="reset" id="reset" value="Cancel" onclick="window.location.href='<?php echo site_url('master/manage_party');?>'" />
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
<script type="text/javascript">
  $(document).ready(function() {
    $("#cmb_country").change(function () {
      var country = $(this).val();
      $('#cmb_state').empty();             
        $.ajax({
            url  :"<?php echo site_url(); ?>/admin/get_state",
            data : {country: country},
            success: function(ret){

                ret = jQuery.parseJSON(ret);
                $('#cmb_district').empty();
                var district = $('#cmb_district');
                var opt1 = document.createElement('option');
                opt1.text = 'Select District';
                opt1.value = '';
                district.append(opt1);
                $('#cmb_state').empty();
                var state = $('#cmb_state');
                var opt = document.createElement('option');
                opt.text = 'Select state';
                opt.value = '';
                state.append(opt);
                for(var key in ret){ 
                    var opt = document.createElement('option');
                    opt.text = ret[key]['NAME'];
                    opt.value = ret[key]['ID'];
                    state.append(opt);
                }
            }
        })

    });

    $("#cmb_state").change(function () {
      var state = $(this).val();
      $('#cmb_district').empty();             
        $.ajax({
            url  :"<?php echo site_url(); ?>/admin/get_district",
            data : {state: state},
            success: function(ret){

                ret = jQuery.parseJSON(ret);
                console.log(ret);
                $('#cmb_district').empty();
                var district = $('#cmb_district');
                var opt = document.createElement('option');
                opt.text = 'Select District';
                opt.value = '';
                district.append(opt);
                for(var key in ret){ 
                    var opt = document.createElement('option');
                    opt.text = ret[key]['NAME'];
                    opt.value = ret[key]['ID'];
                    district.append(opt);
                }
            }
        })

    });
   
    

  });
  </script>
</body>
</html>