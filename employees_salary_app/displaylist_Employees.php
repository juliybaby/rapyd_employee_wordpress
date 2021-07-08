
<?php
// $user_info = get_userdata(1);
//$user_data = $user_info->user_login;

error_reporting(0);
global $current_user;
get_currentuserinfo();


$user_name = $current_user->user_login;
$user_email = $current_user->user_email;
$user_id  = $current_user->ID;
$user_display_name = $current_user->ID;
$user_firstname = $current_user->user_firstname;
$user_lastname = $current_user->user_lastname;


global $wp_version;
$vs= get_bloginfo( 'version' );
     // echo "<b style='font-size:20px;color:purple'>Welcome: $user_name</b><br>";
      //echo "<b style='font-size:20px;color:#800000'>Your Wordpress Version: $vs</b><br>";


$plugin_url1 = plugin_dir_url( __FILE__ );
$img_url1 ='img/ajax-loader.gif';
$plugin_img_url1= $plugin_url1.$img_url1;


        global $wpdb;
// check if settings has been done
$tablename_settings = $wpdb->prefix."settings_rapyd2021";
       $res_s = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_settings` WHERE creator_id = %s order by id;"
            , [$user_id]
        ));	
$ida = $res_s[0]->id;
$da = $res_s[0]->data;
$totalcount_s = count($res_s);
$ad_url =admin_url('admin.php');

        if($da != 'ok'){
			echo "<div style='background:red;color:white;padding:10px;border:none;'>Welcome to Employeees Salary Payments System 
			<b>($user_name)</b>. Please Update Your Settings before anything. Once you are done with Settings, 
			Goto Application Dashboard <b></b></div><br>";

			
			echo "<div style='background:purple;color:white;padding:10px;border:none;'>Click Ok. and you will be  Redirecting to Settings in a Seconds...<img src='$plugin_img_url1'><b></b></div>";

			echo "<script>alert('Welcome to Employeees Salary Payments System ($user_name). Please Update Your Settings before anything. Once you are done with Settings, Goto Application Dashboard');
			window.location='$ad_url?page=settings_rapyd';
			</script>";
			exit();
}

 ?>


<style>

.action_css{
background:#ec5574;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.action_css:hover{
background:orange;
color:black;


}




.seeking_css2021{
background-color:#800000 ;
color:white;
font-size:16px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
padding:10px;
}
.seeking_css2021:hover {
background: black;
color:white;
}



//ccc fff ddd
.task_css{
background: #c1c1c1;
color:black;
padding:6px;
border:none;
}

.task_css:hover{
background: #ccc;
color:black;

}



//ccc fff ddd
.edit_css{
background: green;
color:white;
padding:6px;
border:none;
}

.edit_css:hover{
background: #ccc;
color:black;

}



//ccc fff ddd
.delete_css{
background: red;
color:white;
padding:6px;
border:none;
}

.delete_css:hover{
background: #ccc;
color:black;

}




.eng_css{
background: blue;
color:white;
padding:6px;
border:none;
border-radius:10%;
text-align:center;
}

.eng_css:hover{
background: orange;
color:black;

}

.op_css{
background: green;
color:white;
padding:6px;
border:none;
border-radius:10%;
text-align:center;
}

.op_css:hover{
background: orange;
color:black;

}



.des_css{
background: purple;
color:white;
padding:6px;
border:none;
border-radius:10%;
text-align:center;
}

.des_css:hover{
background: orange;
color:black;

}


.sup_css{
background: #800000;
color:white;
padding:6px;
border:none;
border-radius:10%;
text-align:center;
}

.sup_css:hover{
background: orange;
color:black;

}


</style>



<style>







/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
}

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}



  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#8B008B;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }



  
.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #8B008B;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
}



.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #8B008B;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #8B008B;
padding: 6px;
color:white;
}

/*
modal_mobile_resize 

@media screen and (max-width: 600px) {
  .modal_mobile_resize {
    width: 100%;
    margin-top: 15%;
  }
}


*/



.btn_copyright{
//background: orange;
color:orange;
//padding:2px;
font-weight:200;
}


.btn_copyright:hover {
background: black;
color:pink;
font-weight:700;
}




/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#8B008B;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.category_post{
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	



.category_post1{
background-color: #8B008B;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}


.s_css{
background:#ddd;
color:black;
padding:10px;
border:none;
cursor:pointer;
border-style: dashed; border-width:4px; border-color: #0088cc;
}


.s_css:hover{
background:orange;
color:black;
}	

.cx1{
 color:black;
padding:10px;
background:#ddd;
font-size:16px;
text-align:center;
border-radius:20%;
}
.cx1:hover{ 
color:black;
background:orange
}

</style>


<nav style="padding-top:20px;" class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
    
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="<?php 
$plugin_url_tx = plugin_dir_url( __FILE__ );
echo $plugin_url_tx; ?>img/logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">







 <li class="navgate_no"><a title='Rapyd App Settings' href="<?php echo $ad_url =admin_url('admin.php'); ?>?page=settings_rapyd" style="color:white;font-size:14px;"><button class="category_post1">Rapyd App <br>Settings</button></a>
 

 <li class="navgate_no"><a title='Create and Fund Wallets' href="<?php echo $ad_url =admin_url('admin.php'); ?>?page=wallets_fund_rapyd" style="color:white;font-size:14px;"><button class="category_post1">Create and <br>Fund Wallets</button></a>
  <li class="navgate_no"><a title='Bank Info Updates' href="<?php echo $ad_url =admin_url('admin.php'); ?>?page=bankinfo_rapyd" style="color:white;font-size:14px;"><button class="category_post1">Update Bank<br> Info</button></a>

 <li class="navgate_no"><a title='Add Employees' data-toggle='modal' data-target='#myModal_emp' style="color:white;font-size:14px;"><button class="category_post1"><i  style="color:white;font-size:10px;" class="fa fa-edit" aria-hidden="true"></i> Add <br>Employees</button></a>

<li class="navgate_no"><a title='Track Payments' href="<?php echo $ad_url =admin_url('admin.php'); ?>?page=tracksalary_rapyd" style="color:white;font-size:14px;"><button class="category_post1">Track All<br> Salary Payments</button></a>







<li class="navgate">

<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class='myd_photo_sess'></span>

More<span class="caret"></span></a>

<ul class="dropdown-menu">
<b style='color:black;'>(<?php echo $user_name; ?> )</b><br><br>

</ul></span>

</li>



      </ul>



    </div>




  </div>



</nav>


<br><br><br><br>
<div style='color:#800000' class="">
<center><h3>Employees Salary Payments System</h3></center>
</div>

<marquee><b style='font-family:comic sans ms;color:#800000;font-size:16px;'>(Name: <?php echo $user_name; ?>)</b></marquee>




<div class='loader_out'></div>
<div class='result_out'></div>

<button title='Add Employees' data-toggle='modal' data-target='#myModal_emp' class="s_css">
<i  style="color:white;font-size:10px;" class="fa fa-edit" aria-hidden="true"></i> Add Employees</button>



<?php


?>





<script>

</script>









<!-- start loading data --->
<style>

.action_cssx{
background:#ec5574;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.action_cssx:hover{
background:orange;
color:black;


}


</style>
<div id="content">

 
   <br>


<table width="100%" id="task_label" border="0">
        <tr class="tr_header">
            <th class='col-sm-1'>Photo</th>
            <th class='col-sm-2'>Fullname</th>
            <th class='col-sm-3'>E-Wallets</th>
         

<th class='col-sm-1'>Department</th>

<th class='col-sm-1' style='color:purple'>Salary(USD)</th>
            <th class='col-sm-1'>Created Time</th>
<th class='col-sm-1'>Pay Salary</th>
            <th class='col-sm-2'>Priority/Action</th>

        </tr>
    </table>
  
        <div id="res_Task"  style='width:100%'></div>
<div id="nomore_content_check"></div>
<div id="loader_check"></div>
<div id="result_check"></div>

        <div id="">
            <input type="hidden" id="form_queryid" value="0" />
            <input type="hidden" id="form_querytotal" value="0" />
<br>

<hr style='width:100%;'>
<br>
<div id="network_error"></div>
<div id="pcheck"></div>

<div style='width:100%;' id="loader_posts"></div><br><br><br>
<button style='width:100%' title='LoadMore Employees' class="action_cssx" id="loadmore_btn" >LoadMore Employees</button>
 
        </div>
    </div>


<!-- end loading data  --->












<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}

// make modal full screen
/*
.full-screen {
    width: 100%;
    height: 100%;
    margin: 0;
    top: 0;
    left: 0;
}
*/

.modal-dialog {
  width: 98%;
  height: 92%;
  padding: 0;
}

.modal-content {
  height: 99%;
}

</style>



 <!-- Modal one Starts -->

<div class="container">
 
  <div class="modal fade" id="myModal_emp" role="dialog">
   <div class="full-screen modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Employees Creation Management System</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->





<!--start form-->
<div class='col-sm-12 ' style='background:#ddd;'>

<form id="" method="post" class='result_hide'>



<center><div style='font-size:18px;color:purple;'>Stage 1.) Employees Personal Details</div></center>

<div class="form-group">
<label style="">Select Profile Photo: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" accept="image/*" onchange="imagePreview(event)" />
 <img id="imageupload_preview"/>
</div><br>

 <div class="form-group">
              <label style="" for="email">
<span class="fa fa-envelope-o"></span>Email</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" value="">
<div class="result1" id="email_check"></div>
            </div><br>

 


 <div class="form-group">
              <label style="" for="phone"></label>
<span class="fa fa-phone"></span>Contact No.(The Phone must start with your Coutry Codes eg +123.......)
              <input type="text" class="col-sm-12 form-control" id="phone_no" name="phone_no" placeholder="Enter Contact No.">

            </div><br>

<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />




<div class="form-group">
              <label style="" for="last_name">
<span class="fa fa-male"></span>LastName</label>
              <input type="text" class="col-sm-6 form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
            </div>



<div class="form-group">
              <label style="" for="first_name">
<span class="fa fa-male"></span>FirstName</label>
              <input type="text" class="col-sm-6 form-control" id="first_name" name="first_name" placeholder="Enter First Name">
            </div>



<div class="form-group">
              <label style="" for="salary">
<span class="fa fa-male"></span>Employee Monthly Salary(USD)</label>  <span style='color:red'> For Testing, Employees Salary should not be more than 1000 USD</span>
              <input type="text" class="col-sm-12 form-control" id="salary1" name="salary1" placeholder="Employee Monthly Salary" value="600">
            </div>




<div class="form-group">
              <label style="" for="departments">
<span class="fa fa-globe"></span> Departments</label>
<select  class="form-control contact_input_color" id="department" name="department" placeholder="Department" required>
<option value=''>---Select Department--</option>
<option value='Engineering'>Engineering</option>
<option value='Operations'>Operations</option>
<option value='Design'>Design</option>
<option value='Supports'>Supports</option>
</select>

</div>



<center><div style='font-size:18px;color:purple;'>Stage 2.) Employees/Beneficiary Banks Details for Salary Payouts</div></center>
<h2 style='color:red'>Warning: </h2> <span style='color:red'>(Do not Edit Banks Details below unless you know what you are doing. For More Informations,
See Payouts to Bank API Call )</span>


<div style='display:none;' class="form-group">
              <label>Name</label>
              <input type="text" class="col-sm-12 form-control" id="b_name" name="b_name" value="Jane Doe">
            </div>
<div class="form-group">
              <label>Address</label>
              <input type="text" class="col-sm-12 form-control" id="b_address" name="b_address" value="456 Second Street">
            </div>
<div class="form-group">
              <label>Email</label>
              <input type="text" class="col-sm-12 form-control" id="b_email" name="b_email" value="janedoe@rapyd.net">
            </div>
<div class="form-group">
              <label>Country</label>
              <input type="text" class="col-sm-12 form-control" id="b_country" name="b_country" value="US">
            </div>
<div class="form-group">
              <label>City</label>
              <input type="text" class="col-sm-12 form-control" id="b_city" name="b_city" value="US">
            </div>
<div class="form-group">
              <label>PostCode</label>
              <input type="text" class="col-sm-12 form-control" id="b_postcode" name="b_postcode" value="10101">
            </div>
<div class="form-group">
              <label>Account Number</label>
              <input type="text" class="col-sm-12 form-control" id="b_account_number" name="b_account_number" value="BG96611020345678">
            </div>
<div class="form-group">
              <label>Bank Name</label>
              <input type="text" class="col-sm-12 form-control" id="bank_name" name="bank_name" value="US General Bank">
            </div>

<div class="form-group">
              <label>State</label>
              <input type="text" class="col-sm-12 form-control" id="b_state" name="b_state" value="NY">
            </div>

<div class="form-group">
              <label>Identification Type</label>
              <input type="text" class="col-sm-12 form-control" id="b_identification_type" name="b_identification_type" value="SSC">
            </div>



<div class="form-group">
              <label>Identification Value</label>
              <input type="text" class="col-sm-12 form-control" id="b_identification_value" name="b_identification_value" value="123456789">
            </div>


<div class="form-group">
              <label>Bic Swift</label>
              <input type="text" class="col-sm-12 form-control" id="b_bic_swift" name="b_bic_swift" value="BUINBGSF">
            </div>

<div class="form-group">
              <label>Ach Code</label>
              <input type="text" class="col-sm-12 form-control" id="b_ach_code" name="b_ach_code" value="123456789">
            </div>

<div class="form-group">
              <label>Beneficiary Country</label>
              <input type="text" class="col-sm-12 form-control" id="b_beneficiary_country" name="b_beneficiary_country" value="US">
            </div>

<div class="form-group">
              <label>beneficiary_entity_type</label>
              <input type="text" class="col-sm-12 form-control" id="b_beneficiary_entity_type" name="b_beneficiary_entity_type" value="individual">
            </div>




                    <div class="form-group">
                            <div class="upload_progress" style="width:0%">0%</div>

                        <div id="loader_pp"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="pull-right seeking_css2021 save_btn" value="Add Employees" />
                </form>


</div>
<!--end form-->

 <!-- Modal content ends-->
          
        </div>
        <div class="modal-footer" style='color:black; background:#ddd'>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <!-- Modal one ends-->









 <!-- Modal two Starts -->

<div class="container">
 
  <div class="modal fade" id="myModal_action_task" role="dialog">
   <div class="full-screen modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Employees Profiles/Updates System</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->

<div class='rows'>

<div class='col-sm-6'>

<h3 style='color:purple'>Employee Personal Info</h3>
<span class='image2_call'></span><br /><br />
<b>Name: </b> <span class="fullname_call"></span><br />
<b>Email: </b> <span class="email_call"></span><br />
<b>Phone No: </b> <span class="phone_no_call"></span><br />
<b>Department </b> <span class="department_call"></span><br />
<b>Time Created: </b> <span class="timing_call"></span><br />

</div>


<div class='col-sm-6'>
<h3 style='color:#800000'>Employee Rapyd Banking Info</h3>
<b>Salary </b> <span class="salary_call"></span> (USD)<br />
<b>Wallet_ID </b> <span class="wallet_call"></span><br />
<b>Name </b> <span class="b_name_call"></span><br />

<b>Address: </b> <span class="b_address_call"></span><br />
<b>Email: </b> <span class="b_email_call"></span><br />
<b>Country: </b> <span class="b_country_call"></span><br />
<b>City: </b> <span class="b_city_call"></span><br />
<b>PostCode: </b> <span class="b_postcode_call"></span><br />
<b>Account No: </b> <span class="b_account_number_call"></span><br />
<b>Bank Name: </b> <span class="bank_name_call"></span><br />
<b>State: </b> <span class="b_state_call"></span><br />
<b>Identification Type: </b> <span class="b_identification_type_call"></span><br />
<b>Identification value: </b> <span class="b_identification_value_call"></span><br />
<b>Bic Swift: </b> <span class="b_bic_swift_call"></span><br />
<b>Ach Code: </b> <span class="b_ach_code_call"></span><br />
<b>Beneficiary Country: </b> <span class="b_beneficiary_country_call"></span><br />
<b>Beneficiary Entity Type: </b> <span class="b_beneficiary_entity_type_call"></span><br />
</div>



</div>



<input type="hidden" id="" class='id_call2' name="id_call2" value="" >
<input type="hidden" id="" class='fullname_call2' name="fullname_call2" value="" >
 <!-- Modal content ends-->
          
        </div>
        <div class="modal-footer" style='color:black; background:#ddd'>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <!-- Modal two ends-->












