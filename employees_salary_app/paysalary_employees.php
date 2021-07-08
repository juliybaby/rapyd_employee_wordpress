
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

$id = strip_tags($_GET['id']);
$token = strip_tags($_GET['token']);
$fullname = strip_tags($_GET['fullname']);





        global $wpdb;
// check if Employer has updated his Bank info for Employees Salary Payouts
$tablename_x = $wpdb->prefix."employeers_bankinfo_rapyd2021";
       $res_s = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_x` WHERE creator_id = %s order by id;"
            , [$user_id]
        ));	
$ida = $res_s[0]->id;
$status = $res_s[0]->status;
$totalcount_s = count($res_s);
$ad_url2 =admin_url('admin.php');

        if($status != 'ok'){

echo "<style>
.fs_css{background:navy;color:white;padding:10px;}
.fs_css:hover{background:orange;color:black;}
</style>";

	echo "<script>alert('Welcome ($user_name). Please You will need to Update your Rapyd Banking Info as Employeer/Salary Payer in this app first before trying to Pay your Employees Salary');</script>";
			
	echo "<div style='background:red;color:white;padding:10px;border:none;'>Welcome <b>($user_name)</b>. 
Please You will need to Updates your Rapyd Banking Info as Employeer/Salary Payers in this app first before trying to Pay your Employees Salary..<br><br>
<a class='fs_css' href='$ad_url2?page=bankinfo_rapyd'>Update Your Bank Info here</a>
</div><br>";

			

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
<center>Employees Salary Payments System
</div><br>

<div style='font-size:20px'>Hey Welcome to <span style='color:purple;' class=''><?php echo $fullname; ?></span>'s Salary Payments Tracking Profile</div><br>

<input type ='hidden' name='id_salaco' class='id_salaco' value='<?php echo $id; ?>'>
<input type ='hidden' name='token_salaco' class='token_salaco' value='<?php echo $token; ?>'>
<input type ='hidden' name='fullname_salaco' class='fullname_salaco' value='<?php echo $fullname; ?>'>

<div id="loader-dashboard_post"></div>
<div id="result-dashboard_post"></div>


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



<br>			
 <button data-toggle='modal' data-target='#myModal_p2'  title='Pay Salary Via Rapyd Disburse' class='col-sm-6 disburse_css'><span style='font-size:20px;color:white;' class='fa fa-money'></span> Pay Salary via Disburse(Payout to Employee Bank Account)</button>
<button data-toggle='modal' data-target='#myModal_p3'  title='Pay Salary Via Rapyd Wallets' class='col-sm-6  walleting_css'><span style='font-size:20px;color:white;' class='fa fa-money'></span> Pay Salary Via Wallet to Wallets(Transfer Salary to Employee's Wallets)</button>


<br>
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


.action_css1{
background:#32CD32;
color:white;
border:none;
padding:10px;
border-radius:10%;
}


.action_css1:hover{
background:orange;
color:black;


}



.collect_css{
background:#ec5574;
color:white;
border:none;
padding:10px;
border-radius:50%;
font-size:16px;
}
.collect_css:hover{
background:orange;
color:black;
}


.disburse_css{
background:purple;
color:white;
border:none;
padding:10px;
border-radius:50%;
font-size:16px;
}
.disburse_css:hover{
background:orange;
color:black;
}



.walleting_css{
background:#800000;
color:white;
border:none;
padding:10px;
border-radius:50%;
font-size:16px;
}
.walleting_css:hover{
background:orange;
color:black;
}


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


		
		

.p1_css{
background: #FF00FF;
color:white;
padding:6px;
border:none;
border-radius:10%;
text-align:center;
}

.p1_css:hover{
background: orange;
color:black;

}

.p2_css{
background: #008000;
color:white;
padding:6px;
border:none;
border-radius:10%;
text-align:center;
}

.p2_css:hover{
background: orange;
color:black;

}


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



<input type="hidden" name="vx_id" class="vx_id" value="">
<input type="hidden" name="vx_payout_id" class="vx_payout_id" value="">
<input type="hidden" name="vx_payout_status" class="vx_payout_status" value="">
<input type="hidden" name="vx_salary" class="vx_salary" value="">





<!-- start loading data --->

<div style='width:100%;background:#ddd;color:black;font-size:18px;text-align:center;'>Salary Payments Details</div>
   <br>
<div id="content">

 




<table width="100%" id="task_label" border="0">
        <tr class="tr_header">
            <th class='col-sm-1'>Photo</th>
            <th class='col-sm-2'>Fullname</th>
            <th class='col-sm-1'>Salary(USD)</th>
            <th class='col-sm-1'>Salary Month</th>

<th class='col-sm-2'>Payments Method</th>
<th class='col-sm-1'>Department</th>
<th class='col-sm-1'>Payment Status</th>
            <th class='col-sm-1'>Created Time</th>
            <th class='col-sm-2'>Actions</th>

        </tr>
    </table>
  
        <div id="res_Task_sal"  style='width:100%'></div>
<div id="nomore_content_check_sal"></div>
<div id="loader_check_sal"></div>
<div id="result_check_sal"></div>

        <div id="">
            <input type="hidden" id="form_queryid_sal" value="0" />
            <input type="hidden" id="form_querytotal_sal" value="0" />
<br>

<hr style='width:100%;'>
<br>
<div id="network_error"></div>
<div id="pcheck_sal"></div>

<div style='width:100%;' id="loader_posts_sal"></div><br>
<input type="button" style='width:100%' title='LoadMore Employee Salary' class="action_cssx" value="LoadMore Employee Salary Info" id="loadmore_btn_sal" />
 
        </div>
    </div>

<br><br><br>
<!-- end loading data  --->

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







<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



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



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

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
 
  <div class="modal fade" id="myModal_p2" role="dialog">
   <div class="full-screen modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing" style='height:1300px;'>
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pay Salary via Payout to Employees Bank Account(Rapyd Disburse)</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->


<script>
/*
$(document).ready(function(){

$('#pay_collect_btn').click(function(){
var amount1 = $('.amount1c').val();
var currency1 = $('#currency1c').val();
var description1 = $('#description1c').val();
var name1 = $('#name1c').val();
var number1 = $('#number1c').val();
var expiration_month1 = $('#expiration_month1c').val();
var expiration_year1 = $('#expiration_year1c').val();
var cvv1 = $('#cvv1c').val();
var walletid_call2_wallets = $('.walletid_call2_walletsc').val();

var creator_id1 = localStorage.getItem('useridsessdata');

//alert(url_post_data);
var url_content1c = window.location.href;
var url_p1c = new URL(url_content1c);
var uidc = url_p1c.searchParams.get("id");
var tokenc = url_p1c.searchParams.get("token");
var salary_datec = $('#salary_datec').val();


if(walletid_call2_wallets==""){
alert('Employee Wallets ID Cannot be Empty.');
}

else if(salary_datec==""){
alert('Please Pick Salary Payment Date');
}

else if(creator_id1==""){
alert('There is an issue with Admin Session ID.');
}

else if(amount1==""){
alert('Amount Cannot be Empty.');
}

else if(isNaN(amount1)){
  alert("Amount must be a number");
}


else if(currency1==""){
alert('Currency Cannot be Empty');
}

else if(description1==""){
alert('Payment Description Cannot be Empty');
}
else if(name1==""){
alert('Name on Card Cannot be Empty');
}

else if(number1==""){
alert('Card No Cannot be Empty');
}

else if(expiration_month1==""){
alert('Card Expiration Date Cannot be Empty');
}

else if(expiration_year1==""){
alert('Card Expiration Year Cannot be Empty');
}


else if(cvv1==""){
alert('Card CVV Cannot be Empty');
}


else{
$('#loader_wallets_collect').fadeIn(400).html('<br><div class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Salary is Being Processed</div><br>');
var datasend = {walletid_call2_wallets:walletid_call2_wallets,creator_id1:creator_id1, amount1:amount1, currency1:currency1,description1:description1,name1:name1,number1:number1,expiration_month1:expiration_month1,expiration_year1:expiration_year1,cvv1:cvv1,uidc:uidc,tokenc:tokenc};
		
		$.ajax({
			
			type:'POST',
			url:'wallets_fund_action.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
$('#loader_wallets_fund').hide();
$('#result_wallets_fund').html(msg);
//setTimeout(function(){ $('#result_wallets_fund').html(''); }, 5000);				
					
			}
			
		});
		
		}
		
	})
					
});


*/



        </script>




<div style='font-size:20px;color:purple'><center>Pay Salary via Rapyd Disburse (Payout to Employees Bank Account)</center></div><br>



<div class='rows'>

<div class='col-sm-6'>

<h3 style='color:purple'>Employers(Senders) Payout Banking Info</h3>

<b>Payout Descriptions: </b> <span class="s_description_call1"></span> <br />
<b> Merchant_reference_id:</b> <span class="s_merchant_reference_id_call1"></span> <br />
<b>Payout_currency: </b> <span class="s_payout_currency_call1"></span> <br />
<b>Payout_method_type: </b> <span class="s_payout_method_type_call1"></span> <br />
<b>Name: </b> <span class="s_name_call1"></span> <br />
<b> Address:</b> <span class="s_address_call1"></span> <br />
<b>City: </b> <span class="s_city_call1"></span> <br />
<b>State: </b> <span class="s_state_call1"></span> <br />
<b>Date of Birth: </b> <span class="s_date_of_birth_call1"></span> <br />
<b>Postcode: </b> <span class="s_postcode_call1"></span> <br />
<b> Phonenumber:</b> <span class="s_phonenumber_call1"></span> <br />
<b> Remitter_account_type:</b> <span class="s_remitter_account_type_call1"></span> <br />
<b>Source_of_income: </b> <span class="s_source_of_income_call1"></span> <br />
<b> Identification_type:</b> <span class="s_identification_type_call1"></span> <br />
<b> Identification_value:</b> <span class="s_identification_value_call1"></span> <br />
<b>Purpose_code: </b> <span class="s_purpose_code_call1"></span> <br />
<b> Account_number:</b> <span class="s_account_number_call1"></span> <br />
<b>Beneficiary_relationship: </b> <span class="s_beneficiary_relationship_call1"></span> <br />
<b> Sender_country:</b> <span class="s_sender_country_call1"></span> <br />
<b>Sender_currency: </b> <span class="s_sender_currency_call1"></span> <br />
<b>Sender_entity_type: </b> <span class="s_sender_entity_type_call1"></span> <br />

</div>


<div class='col-sm-6'>
<h3 style='color:#800000'>Employee(Recievers) Rapyd Banking Info</h3>
<b>Salary </b> <span class="b_salary_call1"></span> (USD)<br />
<b>Wallet_ID </b> <span class="b_wallet_call1"></span><br />
<b>Name </b> <span class="b_name_call1"></span><br />

<b>Address: </b> <span class="b_address_call1"></span><br />
<b>Email: </b> <span class="b_email_call1"></span><br />
<b>Country: </b> <span class="b_country_call1"></span><br />
<b>City: </b> <span class="b_city_call1"></span><br />
<b>PostCode: </b> <span class="b_postcode_call1"></span><br />
<b>Account No: </b> <span class="b_account_number_call1"></span><br />
<b>Bank Name: </b> <span class="bank_name_call1"></span><br />
<b>State: </b> <span class="b_state_call1"></span><br />
<b>Identification Type: </b> <span class="b_identification_type_call1"></span><br />
<b>Identification value: </b> <span class="b_identification_value_call1"></span><br />
<b>Bic Swift: </b> <span class="b_bic_swift_call1"></span><br />
<b>Ach Code: </b> <span class="b_ach_code_call1"></span><br />
<b>Beneficiary Country: </b> <span class="b_beneficiary_country_call1"></span><br />
<b>Beneficiary Entity Type: </b> <span class="b_beneficiary_entity_type_call1"></span><br /><br /><br /><br /><br />
</div>



</div>



<div id="result_employee"></div>
 <div id="loader_pro1_employee"></div>
			<br><br>
			<hr style='width:100%;' />
			<br><br>
			
			
<form id="" method="post" >


<b style='font-size:18px;color:green'>Salary: <span  class='b_salary_call1'></span>(USD)</b><br>
						<div class="form-group">
 <label style='padding:6px;font-size:16px;color:orange' >Select Your Employeers Wallets</label><br><br>
<select id='wallet_select' class='w_id col-sm-12 form-control'>
<option value='0' >Select Wallet</option>
</select>
<div id="wallet_select_empty"></div>
                        <div id="loader_pro1"></div>
 </div>	
 
 
 <br><br>

 <div class="form-group alerts alert-warning">
              <label style="a" >Pick Salary Payment Date and Month</label><br>
              <input type="date" class="col-sm-12 form-control" id="b_date" name="b_date" placeholder="" >
           
			</div><br>
			

 

                        <div id="loader_paye"></div>
                        <div id="result_paye"></div>
                  

                    <input type="button" id="paye_btn" class="pull-right seeking_css payebtn col-sm-12" value="Pay Salary to Bank Account Now" /><br>
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
 
  <div class="modal fade" id="myModal_p3" role="dialog">
   <div class="full-screen modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing" style='height:1000px;'>
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Employees Salary Payments via Wallets/Funds Transfer System</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->

 Easily Pay your Employees by Transfering Funds from the Employeers Wallets to Employees Wallets<br><br>
 
 
 
 <script>
 
		/*
// start Payments
$(document).ready(function(){

$('#transfer_btn').click(function(){

var employeers_wallet_id = $('#wallet_select2').val();
var employees_wallet_id = $('#employees_wallet_id_single1').val();
var creator_id1 = localStorage.getItem('useridsessdata');
var b_date1 = $('#b_date1').val();


var url_content1cp = window.location.href;
var url_p1cp = new URL(url_content1cp);
var ee_uid = url_p1cp.searchParams.get("id");
var ee_token = url_p1cp.searchParams.get("token");

if(employeers_wallet_id==0){
alert('Please Select Employers Wallets ID');
}


else if(employees_wallet_id==''){
alert('Please Enter Employees Wallets ID');
}
else if(b_date1==''){
alert('Please Select Salary Payment Datae and Month');
}

else{
$('#loader_transfer').fadeIn(400).html('<br><div class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Employess payment is being Transfer to his Wallets</div><br>');


var datasend = {
employeers_wallet_id:employeers_wallet_id,
employees_wallet_id:employees_wallet_id,
creator_id1:creator_id1,
b_date1:b_date1,
ee_token:ee_token,
ee_uid:ee_uid
};

		$.ajax({
			
			type:'POST',
			url:'salary_payout_transfer_action.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
$('#loader_transfer').hide();
$('#result_transfer').html(msg);
//setTimeout(function(){ $('#result_transfer').html(''); }, 5000);				
					
			}
			
		});
		
		}


})

});

// ends payments
*/
 </script>
 
 
<b style='font-size:18px;color:green'>Salary Transferable: <span  class='b_salary_call1'></span>(USD)</b><br>
 
 
<form id="" method="post" >

 
 <div class="form-group">
 <label style='padding:6px;font-size:16px;color:#1F45FC' >Select Your Employeers Wallets (Source Wallets ID)</label><br><br>
<select id='wallet_select2' class='w_id2 col-sm-12 form-control'>
<option value='0' >Select Wallet</option>
</select>
<div id="wallet_select_empty2"></div>
                        <div id="loader_pro12"></div>
 </div>	
<br>
 
 <div class="form-group">
 <label style='padding:6px;font-size:16px;color:#1F45FC' >Employees Wallet Id (Destination Wallets Id)</label><br><br>
<input type='text' id='employees_wallet_id_single1' class='employees_wallet_id_single1 col-sm-12 form-control' value=''>
 </div>	
 <br><br>
 
 <div class="form-group alerts alert-warning">
              <label style="a" >Pick Salary Payment Date and Month</label><br><br>
              <input type="date" class="col-sm-12 form-control" id="b_date1" name="b_date1" placeholder="" >
           
			</div><br>
			

 

                        <div id="loader_transfer"></div>
                        <div id="result_transfer"></div>
                  

                    <input type="button" id="transfer_btn" class="pull-right seeking_css  col-sm-12" value="Pay Salary via Transfer Now" /><br>
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


















