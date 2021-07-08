
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
<center>Employees Payments Salary Tracking System
</div><br>
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





<input type="hidden" name="vx_id1" class="vx_id1" value="">
<input type="hidden" name="vx_payout_id1" class="vx_payout_id1" value="">
<input type="hidden" name="vx_payout_status1" class="vx_payout_status1" value="">
<input type="hidden" name="vx_salary1" class="vx_salary1" value="">





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
  
        <div id="res_Task_track"  style='width:100%'></div>
<div id="nomore_content_check_track"></div>
<div id="loader_check_track"></div>
<div id="result_check_track"></div>

        <div id="">
            <input type="hidden" id="form_queryid_track" value="0" />
            <input type="hidden" id="form_querytotal_track" value="0" />
<br>

<hr style='width:100%;'>
<br>
<div id="network_error"></div>
<div id="pcheck_track"></div>

<div style='width:100%;' id="loader_posts_track"></div><br>
<input type="button" style='width:100%' title='LoadMore Employee Salary' class="action_css" value="LoadMore Employee Salary Info" id="loadmore_btn_track" />
 
        </div>
    </div>


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




















