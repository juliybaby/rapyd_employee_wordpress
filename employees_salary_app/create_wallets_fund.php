
<?php
// $user_info = get_userdata(1);
//$user_data = $user_info->user_login;


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


.wallets_css{
background:purple;
color:white;
border:none;
padding:10px;
border-radius:10%;
font-size:20px;
}


.wallets_css:hover{
background:orange;
color:black;


}




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



.map1_css{
background:purple;
color:black;
border:none;
padding:10px;
border-radius:10%;
}


.map1_css:hover{
background:orange;
color:black;


}


.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }

.myform_btn_css{

background:navy;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.myform_btn_css:hover{
background:orange;
color:black;


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



.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


.point_count2 { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: red; padding: 2px 6px;font-size:14px; }



.invite_btn1{
background-color: navy;
padding: 6px;
color:white;
font-size:24px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
padding:20px;
}
.invite_btn1:hover {
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



.action_css2{
background:#32CD32;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.action_css2:hover{
background:orange;
color:black;


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





 <li class="navgate_no"><a title='Application Dashboard' href="<?php echo $ad_url =admin_url('admin.php'); ?>?page=myplugin1_Rapyd_Payments2021" style="color:white;font-size:14px;"><button class="category_post1">Go Back to Application Dashboard</button></a>
 





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


<br><br><br>
<div style="font-size:30px;color:#800000" >
<center>Create & Fund Your Rapyd Wallets
</div><br>

<center><div><button data-toggle='modal' data-target='#myModal_action_wallets'  title='Create Rapyd Wallets' class='wallets_css'>
<span style='font-size:20px;color:white;' class='fa fa-edit'></span> Create Rapyd Wallets</button></div></center><br>


<marquee><b style='font-family:comic sans ms;color:#800000;font-size:16px;'>(Name: <?php echo $user_name; ?>)</b></marquee>



<?php

?>






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




.register_btn{
background:#ec5574;
color:white;
border:none;
padding:10px;
border-radius:10%;
width:200px;
}


.register_btn:hover{
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


<!-- start loading data --->
<div id="content">

 
   <br>




<table width="100%" id="task_label" border="0">
        <tr class="tr_header">
            <th class='col-sm-1'>Lastname</th>
            <th class='col-sm-2'>Firstname</th>
            <th class='col-sm-4'>Wallets ID</th>
            <th class='col-sm-2'>Funds(USD)</th>
            <th class='col-sm-1'>Time</th>
            <th class='col-sm-2'>Actions</th>

        </tr>
    </table>
  
        <div id="res_Task_wallets"  style='width:100%'></div>
<div id="nomore_content_check_wallets"></div>
<div id="loader_check_wallets"></div>
<div id="result_check_wallets"></div>

        <div id="">
            <input type="hidden" id="form_queryid_wallets" value="0" />
            <input type="hidden" id="form_querytotal_wallets" value="0" />
<br>

<hr style='width:100%;'>
<br>
<div id="network_error"></div>
<div id="pcheck_wallets"></div>

<div style='width:100%;' id="loader_posts_wallets"></div><br>
<input type="button" style='width:100%' title='LoadMore Wallets' class="action_cssx" value="LoadMore Wallets" id="loadmore_btn_wallets" />

        </div>
    </div>


<!-- end loading data  --->













<style>

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









<style>


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
/*
.modal-dialog {
  width: 98%;
  height: 92%;
  padding: 0;
}

.modal-content {
  height: 99%;
}
*/


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


.seeking_css{
background: purple;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}

</style>





 <!-- Modal one Starts -->

<div class="container">
 
  <div class="modal fade" id="myModal_action_fund" role="dialog">
   <div class="full-screen modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing" style='height:1200px;width:70%;'>
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Wallets Funding System</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->



<b>Wallets ID: </b> <span class="walletid_call_wallets"></span><br />

<b>Firstname: </b> <span class="firstname_call_wallets"></span><br />
<b>Lastname: </b> <span class="lastname_call_wallets"></span><br />

<b>Email: </b> <span class="email_call_wallets"></span><br />
<b>Available Funds: </b> <span class="fund_call_wallets"></span><br />
<b>Time Created: </b> <span class="timing_call_wallets"></span><br />





<div style='font-size:20px;color:purple'><center>Fund Wallets by RAPYD Collect</center></div>

<form id="" method="post" >
 <div class="form-group">
              <label style="a" >Amount to Fund(USD) </label> <span style='color:red'> Eg. Max. of 1000 USD for Rapyd Sandbox testing per Funding....</span>
              <input type="text" class="col-sm-12 form-control" id="amount1" name="amount1" placeholder="Enter Amount" value='1000'>
            </div><br>



 <div class="form-group">
              <label style="b" >Currency</label><br>
              <select class="col-sm-12 form-control" id="currency1" name="currency1"  >
<option value='USD'>USD</option>
</select>
            </div><br>

 <div class="form-group">
              <label style="c" >Payment/Funding Description</label>
              <input type="text" class="col-sm-12 form-control" id="description1" name="description1" value="Wallets Funding" >
            </div><br>



<div class='alerts alert-success'>


<div style='font-size:20px;color:purple'><center>Rapyd Sample Payment Method via Visa Card</center></div>

<br>
 <span style='color:red'>For testing Purpose, You must not Edit anything below hence I have diasbled the Payments Data form inputs....</span>
<br>
 <div class="form-group">
              <label style="" >Name on Visa Card</label>
              <input disabled type="text" class="col-sm-12 form-control" id="name1" name="name1" value="Test User" >
            </div><br>

 <div class="form-group">
              <label style="" >Card No</label>
              <input disabled type="text" class="col-sm-12 form-control" id="number1" name="number1" value="4111111111111111" >
            </div><br>



<div class='rows'>


 <span class="col-sm-4">
              <label style="" >Expiration Month</label>
              <input disabled type="text" class="col-sm-4 form-control" id="expiration_month1" name="expiration_month1" value="08" >
            </span>
 <span class="col-sm-4">
              <label style="" >Expiration Year</label>
              <input disabled type="text" class="col-sm-4 form-control" id="expiration_year1" name="expiration_year1" value="24" >
            </span>

<span class="col-sm-4">
              <label style="" >CVV</label>
              <input disabled type="text" class="col-sm-4 form-control" id="cvv1" name="cvv1" value="789" >
            </span>

</div>



</div>


<input type="hidden" id="" class='id_call2_wallets' name="id_call2_wallets" value="" >
<input type="hidden" id="" class='walletid_call2_wallets' name="walletid_call2_wallets" value="" >


                        <div id="loader_wallets_fund"></div>
                        <div id="result_wallets_fund"></div>
                  

                    <input type="button" id="pay_btn1" class="pull-right seeking_css pay_btn1 col-sm-12" value="Fund Wallets" /><br>
                </form>

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
 
  <div class="modal fade" id="myModal_action_wallets" role="dialog">
   <div class="full-screen1 modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing" style='width:60%;height:1200px;'>
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Wallets Creation System</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->

<!--start form-->
<div class='col-sm-12 ' style='background:#ddd;'>

<form id="" method="post">

 <div class="form-group">
              <label style="" for="first_name">Firstname</label>
              <input type="text" class="col-sm-12 form-control" id="first_name" name="first_name" placeholder="Enter First Name" value=''>
            </div><br>

 <div class="form-group">
              <label style="" for="last_name">Lastname</label>
              <input type="text" class="col-sm-12 form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value=''>
            </div><br><br>
 
<div style='background:#c1c1c1;color:black;font-family:comic sans ms;'>

<center><h3> Wallets Contacts Info</h3></center>

<div style='color:red'><b>Warnings !!!:</b> You are advised not to edit the Wallets Contact Info below unless you know what you are doing.
 By default the Contacts info below works with <b>RAPYD Sandbox Wallets Creation API</b>
</div>



 <div class="form-group">
              <label style="" for="email_w">Email</label>
              <input type="text" class="col-sm-12 form-control" id="email_w" name="email_w" placeholder="" value='johndoe@rapyd.net'>
            </div><br>

 <div class="form-group">
              <label style="phone_number_w" for="">Phone Number</label>
              <input type="text" class="col-sm-12 form-control" id="phone_number_w" name="phone_number_w" placeholder="" value='+14155551234'>
            </div><br><br>
 
 <div class="form-group">
              <label style="" for="mothers_name_w">Mothers Name</label>
              <input type="text" class="col-sm-12 form-control" id="mothers_name_w" name="mothers_name_w" placeholder="" value='Jane Smith'>
            </div><br><br>
 
 <div class="form-group">
              <label style="" for="contact_type_w">Contact Type</label>
              <input type="text" class="col-sm-12 form-control" id="contact_type_w" name="contact_type_w" placeholder="" value='personal'>
            </div><br><br>
 
 <div class="form-group">
              <label style="" for="identification_type_w">Identification Type</label>
              <input type="text" class="col-sm-12 form-control" id="identification_type_w" name="identification_type_w" placeholder="" value='PA'>
            </div><br><br>
 
 <div class="form-group">
              <label style="" for="identification_number_w">Identification Number</label>
              <input type="text" class="col-sm-12 form-control" id="identification_number_w" name="identification_number_w" placeholder="" value='1234567890'>
            </div><br><br>
 
 <div class="form-group">
              <label style="" for="date_of_birth_w">Date of Birth</label>
              <input type="text" class="col-sm-12 form-control" id="date_of_birth_w" name="date_of_birth_w" placeholder="" value='11/22/2000'>
            </div><br><br>
 
 <div class="form-group">
              <label style="" for="country_w">Country</label>
              <input type="text" class="col-sm-12 form-control" id="country_w" name="country_w" placeholder="" value='US'>
            </div><br><br>
 
</div><br>


                    <div class="form-group">
                        <div id="loader_wallets_create"></div>
                        <div id="result_wallets_create"></div>
                    </div>

                    <input type="button" id="save_btn1" class="pull-right seeking_css save_btn1" value="Create Wallets" />
                </form>





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
















