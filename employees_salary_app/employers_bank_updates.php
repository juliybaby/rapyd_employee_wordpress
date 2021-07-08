
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
<center>Update Your Bank Info as Employeer for Payouts
</div><br>

This Banking info updates Here will enable you(Employeer/Sender) to Payout to your Employees Bank Account.<br>

<br><b> Becareful with any Data you are Editing 
here. By default it works with the Payout to Bank. Your Employer Info here will represent the Sender Info during Employeers Payout
to Employees Bank Account. ========></b><b style='color:red'> (For More Informations, Please See Disurbse Payout to Bank API Details.) </b><br><br> 


<div style='color:red'><b>Warning!!!:</b> Do not change any Bank information in the form below unless you know what you are doing. Just click <b>Update Button Now</b> to Update your Bank Info</div>
<br>


<br>
<style>


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

</style>



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

	

<form id="" method="post" >

<div class='row' style='background:#ddd;color:black;'>

<div class='col-sm-8'>

 <div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Payout Descriptions</label>
<input type="text" class="col-sm-12 form-control" id="s_description" name="s_description" value="Salary Payout to Employee Bank Account" >
</div><br>
<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Merchant Reference Id</label>
<input type="text" class="col-sm-12 form-control" id="s_merchant_reference_id" name="s_merchant_reference_id" value="GHY-0YU-HUJ-POI" >
</div><br>
<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Payout Currency</label>
<input type="text" class="col-sm-12 form-control" id="s_payout_currency" name="s_payout_currency" value="USD" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Payout Method Type</label>
<input type="text" class="col-sm-12 form-control" id="s_payout_method_type" name="s_payout_method_type" value="us_general_bank" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Employee Name</label>
<input type="text" class="col-sm-12 form-control" id="s_name" name="s_name" value="John Doe" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Address</label>
<input type="text" class="col-sm-12 form-control" id="s_address" name="s_address" value="123 First Street" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;City</label>
<input type="text" class="col-sm-12 form-control" id="s_city" name="s_city" value="Anytown" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;State</label>
<input type="text" class="col-sm-12 form-control" id="s_state" name="s_state" value="NY" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth</label>
<input type="text" class="col-sm-12 form-control" id="s_date_of_birth" name="s_date_of_birth" value="22/02/1980" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Postcode</label>
<input type="text" class="col-sm-12 form-control" id="s_postcode" name="s_postcode" value="12345">
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Phonenumber</label>
<input type="text" class="col-sm-12 form-control" id="s_phonenumber" name="s_phonenumber" value="621212938122" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Remitter_account_type</label>
<input type="text" class="col-sm-12 form-control" id="s_remitter_account_type" name="s_remitter_account_type" value="Individual" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Source_of_income</label>
<input type="text" class="col-sm-12 form-control" id="s_source_of_income" name="s_source_of_income" value="Salary" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Identification_type</label>
<input type="text" class="col-sm-12 form-control" id="s_identification_type" name="s_identification_type" value="License No" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Identification_value</label>
<input type="text" class="col-sm-12 form-control" id="s_identification_value" name="s_identification_value" value="123456789" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Purpose_code</label>
<input type="text" class="col-sm-12 form-control" id="s_purpose_code" name="s_purpose_code" value="ABCDEFGHI" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Account_number</label>
<input type="text" class="col-sm-12 form-control" id="s_account_number1" name="s_account_number1" value="123456789" >
</div><br>
<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;beneficiary_relationship</label>
<input type="text" class="col-sm-12 form-control" id="s_beneficiary_relationship" name="s_beneficiary_relationship" value="client" >
</div><br>
<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Sender_country</label>
<input type="text" class="col-sm-12 form-control" id="s_sender_country" name="s_sender_country" value="US" >
</div><br>
<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Sender_currency</label>
<input type="text" class="col-sm-12 form-control" id="s_sender_currency" name="s_sender_currency" value="USD" >
</div><br>

<div class="form-group">
<label>&nbsp;&nbsp;&nbsp;&nbsp;Sender_entity_type</label>
<input type="text" class="col-sm-12 form-control" id="s_sender_entity_type" name="s_sender_entity_type" value="Individual" >
</div><br>



                        <div id="loader_updates_rapyd"></div>
                        <div id="result_updates_rapyd"></div>
                  

                    <input type="button" id="pay_updates_btn" class="pull-right action_css pay_updates_btn col-sm-12" value="Updates Bank Info Now" /><br>
                </form>
				<br><br>
				
				
</div>


<div class='col-sm-4'>
<h3 style='color:#800000'> Updated Bank Info Will Appear Here</h3><br>
  <script>
/*
$(document).ready(function(){
var creator_id2 = localStorage.getItem('useridsessdata');

if(creator_id2==""){
alert('There is an issue with Admin Session ID.');
}


else{
$('#loader_updates_rapyd1').fadeIn(400).html('<br><div class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Bank Payout Info. is Being Loaded</div><br>');

var datasend = {
creator_id2:creator_id2
};
		
		$.ajax({
			
			type:'POST',
			url:'bank_info_load_action.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
$('#loader_updates_rapyd1').hide();
$('#result_updates_rapyd1').html(msg);
//setTimeout(function(){ $('#result_updates_rapyd1').html(''); }, 5000);				
					
			}
			
		});
		
		}
					
});
  */      </script>
<div id="loader_updates_rapyd1"></div>
<div id="result_updates_rapyd1"></div>
</div>


</div>
<br><br>

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
              <label style="a" >Amount to Fund(USD)</label>
              <input type="text" class="col-sm-12 form-control" id="amount1" name="amount1" placeholder="Enter Amount" >
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


<div style='font-size:20px;color:purple'><center>Payment Method via Visa Card</center></div>



 <div class="form-group">
              <label style="" >Name on Visa Card</label>
              <input type="text" class="col-sm-12 form-control" id="name1" name="name1" value="Test User" >
            </div><br>

 <div class="form-group">
              <label style="" >Card No</label>
              <input type="text" class="col-sm-12 form-control" id="number1" name="number1" value="4111111111111111" >
            </div><br>



<div class='rows'>


 <span class="col-sm-4">
              <label style="" >Expiration Month</label>
              <input type="text" class="col-sm-4 form-control" id="expiration_month1" name="expiration_month1" value="08" >
            </span>
 <span class="col-sm-4">
              <label style="" >Expiration Year</label>
              <input type="text" class="col-sm-4 form-control" id="expiration_year1" name="expiration_year1" value="24" >
            </span>

<span class="col-sm-4">
              <label style="" >CVV</label>
              <input type="text" class="col-sm-4 form-control" id="cvv1" name="cvv1" value="789" >
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
   <div class="full-screen1 modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing" style='width:60%;'>
    
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
              <input type="text" class="col-sm-12 form-control" id="first_name" name="first_name" placeholder="Enter First Name" value='John'>
            </div><br>

 <div class="form-group">
              <label style="" for="last_name">Lastname</label>
              <input type="text" class="col-sm-12 form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value='Doe'>
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
















