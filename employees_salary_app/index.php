<?php
 /*
 
   Plugin Name: Employees Rapyd Salary Payments Plugin
   Plugin URI: http://qbtut.com
   description: Employees Rapyd Salary Payments Plugins for Wordpress
   Version: 1.0.0
   Author: Esedo Fredrick Chijioke
   Author URI: https://qbtutu.com/
 */



// Create a new table
function employees2021_rapyd_table(){





        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
	$tablename_1 = $wpdb->prefix."employeers_bankinfo_rapyd2021";
$tablename_2 = $wpdb->prefix."employees_rapyd2021";
$tablename_3 = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
$tablename_4 = $wpdb->prefix."salary_pay_rapyd2021";
$tablename_5 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
$tablename_6 = $wpdb->prefix."users_rapyd2021";
$tablename_7 = $wpdb->prefix."wallets_rapyd2021";
$tablename_8 = $wpdb->prefix."settings_rapyd2021";

	$sql1 = "CREATE TABLE $tablename_1 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_description` varchar(100) DEFAULT NULL,
  `s_merchant_reference_id` varchar(100) DEFAULT NULL,
  `s_payout_currency` varchar(100) DEFAULT NULL,
  `s_payout_method_type` varchar(100) DEFAULT NULL,
  `s_name` varchar(100) DEFAULT NULL,
  `s_address` varchar(100) DEFAULT NULL,
  `s_city` varchar(100) DEFAULT NULL,
  `s_state` varchar(100) DEFAULT NULL,
  `s_date_of_birth` varchar(100) DEFAULT NULL,
  `s_postcode` varchar(100) DEFAULT NULL,
  `s_phonenumber` varchar(100) DEFAULT NULL,
  `s_remitter_account_type` varchar(100) DEFAULT NULL,
  `s_source_of_income` varchar(100) DEFAULT NULL,
  `s_identification_type` varchar(100) DEFAULT NULL,
  `s_identification_value` varchar(100) DEFAULT NULL,
  `s_purpose_code` varchar(100) DEFAULT NULL,
  `s_account_number` varchar(100) DEFAULT NULL,
  `s_beneficiary_relationship` varchar(100) DEFAULT NULL,
  `s_sender_country` varchar(100) DEFAULT NULL,
  `s_sender_currency` varchar(100) DEFAULT NULL,
  `s_sender_entity_type` varchar(100) DEFAULT NULL,
  `creator_id` varchar(100) DEFAULT NULL,
  `timing` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;";

$sql2 = "CREATE TABLE $tablename_2 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_no` varchar(200) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timer` varchar(200) DEFAULT NULL,
  `lastdate_pay` varchar(200) DEFAULT NULL,
  `lastdate_time` varchar(200) DEFAULT NULL,
  `payment_status` varchar(200) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `creator_id` varchar(20) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `wallet_id` varchar(200) DEFAULT NULL,
  `b_name` varchar(100) DEFAULT NULL,
  `b_address` varchar(100) DEFAULT NULL,
  `b_email` varchar(100) DEFAULT NULL,
  `b_country` varchar(100) DEFAULT NULL,
  `b_city` varchar(100) DEFAULT NULL,
  `b_postcode` varchar(100) DEFAULT NULL,
  `b_account_number` varchar(100) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `b_state` varchar(100) DEFAULT NULL,
  `b_identification_type` varchar(100) DEFAULT NULL,
  `b_identification_value` varchar(100) DEFAULT NULL,
  `b_bic_swift` varchar(100) DEFAULT NULL,
  `b_ach_code` varchar(100) DEFAULT NULL,
  `b_beneficiary_country` varchar(100) DEFAULT NULL,
  `b_beneficiary_entity_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";

$sql3 = "CREATE TABLE $tablename_3 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(300) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `user_token` varchar(200) DEFAULT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `payout_id` varchar(200) DEFAULT NULL,
  `payout_status` varchar(20) DEFAULT NULL,
  `timing` varchar(30) DEFAULT NULL,
  `payment_type1` varchar(100) DEFAULT NULL,
  `payment_type2` varchar(100) DEFAULT NULL,
  `salary_amount` varchar(30) DEFAULT NULL,
  `month_date` varchar(50) DEFAULT NULL,
  `month_period` varchar(50) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  `creator_id` varchar(50) DEFAULT NULL,
  `user_ewallet_id` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;";

$sql4 = "CREATE TABLE $tablename_4 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `fullname` varchar(70) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `salary_amount` varchar(50) DEFAULT NULL,
  `salary_month` varchar(50) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  `calendar_month` varchar(50) DEFAULT NULL,
  `calendar_date` varchar(50) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `creator_id` varchar(20) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$sql5 = "CREATE TABLE $tablename_5 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_fund_fund` varchar(50) DEFAULT NULL,
  `total_fund_spend` varchar(50) DEFAULT NULL,
  `total_employee` varchar(50) DEFAULT NULL,
  `total_fund_available` varchar(50) DEFAULT NULL,
  `creator_id` varchar(50) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;";

$sql6 = "CREATE TABLE $tablename_6 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `user_rank` varchar(200) DEFAULT NULL,
  `user_verified` varchar(200) DEFAULT NULL,
  `user_banned` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timer1` varchar(200) DEFAULT NULL,
  `timer2` varchar(200) DEFAULT NULL,
  `data` varchar(200) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `phone_no` varchar(60) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `points` varchar(100) DEFAULT NULL,
  `levels` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";


        $sql7 = "CREATE TABLE $tablename_7 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `wallet_id` varchar(200) DEFAULT NULL,
  `account_status` varchar(50) DEFAULT NULL,
  `ewallet_reference_id` varchar(150) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  `fund` varchar(50) DEFAULT NULL,
  `fund_time` varchar(50) DEFAULT NULL,
  `creator_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;";


        $sql8 = "CREATE TABLE $tablename_8 (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `api_access_key` varchar(300) DEFAULT NULL,
  `api_secret_key` varchar(300) DEFAULT NULL,
  `timing` varchar(50) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
 `fullname` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
`password` varchar(200) DEFAULT NULL,
`department` varchar(200) DEFAULT NULL,
  `creator_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;";


require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql1 );
        dbDelta( $sql2 );
dbDelta( $sql3 );
dbDelta( $sql4 );
dbDelta( $sql5 );
dbDelta( $sql6 );
dbDelta( $sql7 );
dbDelta( $sql8 );
}
register_activation_hook( __FILE__, 'employees2021_rapyd_table' );

// Add menu
function employees2021_rapyd_menu() {

    add_menu_page("Employees Rapyd Payments Plugin", "Employees Rapyd Payments Plugin","manage_options", "myplugin1_Rapyd_Payments2021", "displayList_Employees",plugins_url('/employees_salary/img/icon.png'));
    //add_submenu_page("myplugin1_Rapyd_Payments2021","Employees Salary System", "Employees Salary System","manage_options", "allentries1", "displayList_Employees");
	add_submenu_page("myplugin1_Rapyd_Payments2021","", "","manage_options", "settings_rapyd", "settings_Employees_Rapyd2021");
   	add_submenu_page("myplugin1_Rapyd_Payments2021","", "","manage_options", "wallets_fund_rapyd", "wallets_Employees_Rapyd2021");
   add_submenu_page("myplugin1_Rapyd_Payments2021","", "","manage_options", "bankinfo_rapyd", "bankupdates_Employers_Rapyd2021");
   add_submenu_page("myplugin1_Rapyd_Payments2021","", "","manage_options", "paysalary_rapyd", "paysalary_Employees_Rapyd2021");
   
      add_submenu_page("myplugin1_Rapyd_Payments2021","", "","manage_options", "tracksalary_rapyd", "tracksalary_Employees_Rapyd2021");
	     add_submenu_page("myplugin1_Rapyd_Payments2021","", "","manage_options", "calendarsalary_rapyd", "calendarsalary_Employees_Rapyd2021");
		 
	//add_submenu_page("myplugin1_Rapyd_Payments2021","Employees Paysments", "Employees Paysments","manage_options", "allentries2", "payments_Employees");
}

add_action("admin_menu", "employees2021_rapyd_menu");

function payments_Employees(){
  include "pay_salary.php";
}



function settings_Employees_Rapyd2021(){
  include "settings.php";
}

function wallets_Employees_Rapyd2021(){
  include "create_wallets_fund.php";
}


function bankupdates_Employers_Rapyd2021(){
  include "employers_bank_updates.php";
}



function paysalary_Employees_Rapyd2021(){
  include "paysalary_employees.php";
}


function tracksalary_Employees_Rapyd2021(){
  include "tracksalary_employees.php";
}

function calendarsalary_Employees_Rapyd2021(){
  include "calendarsalary_employees.php";
}



function displayList_Employees(){
	include "displaylist_Employees.php";
}



// Initialize your wordpress ajax
add_action( 'admin_footer', 'my_action_javascript_employees_rapyd2021_payments' );
function my_action_javascript_employees_rapyd2021_payments() { ?>


<?php
$plugin_url1 = plugin_dir_url( __FILE__ );
$img_url1 ='img/ajax-loader.gif';
$plugin_img_url1= $plugin_url1.$img_url1;

/*
$ad_url =admin_url('admin.php');  
$mydata_url = '?page=allentries'; 
$mydata_url_merged = $ad_url.$mydata_url;';
*/

global $current_user;
get_currentuserinfo();


$user_name = $current_user->user_login;
$user_email = $current_user->user_email;
$user_id  = $current_user->ID;
$user_display_name = $current_user->ID;
$user_firstname = $current_user->user_firstname;
$user_lastname = $current_user->user_lastname;





// load bootstrap files for modal pop up display
$plugin_url_t = plugin_dir_url( __FILE__ );
$b_js_file ='bootstrap.min.js';
$b_css_file ='bootstrap.min.css';
$b_jq_file ='jquery.min.js';


$momentjs ='moment.js';
$livejs ='livestamp.js';

$url_momentjs= $plugin_url_t.$momentjs;
$url_livejs= $plugin_url_t.$livejs;

$wp_home =home_url();


$url_bjs_file= $plugin_url_t.$b_js_file;
$url_bcss_file= $plugin_url_t.$b_css_file;
$url_jq_file= $plugin_url_t.$b_jq_file;

$image_url1 ='img/loader.gif';
$plugin_image_url1= $plugin_url_t.$image_url1;


?>

<link rel="stylesheet" href="<?php echo $url_bcss_file; ?>">
<script src="<?php echo $url_bjs_file; ?>" type="text/javascript"></script>
<script src="<?php echo $url_jq_file; ?>" type="text/javascript"></script>

<script src="<?php echo $url_momentjs; ?>"  type="text/javascript"></script>
	<script src="<?php echo $url_livejs; ?>"  type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

</script>

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


.loader_css{

background: purple;
color:white;
padding:10px;
text-align:center;
border-radius:20%;
width:30%;


}


.loader_css_delete{

background: purple;
color:white;
padding:6px;
text-align:center;
border-radius:20%;
max-width:80%;


}



</style>





	<script type="text/javascript" >

function imagePreview(e) 
{
 var readImage = new FileReader();
 readImage.onload = function()
 {
  var displayImage = document.getElementById('imageupload_preview');
  displayImage.src = readImage.result;
 }
 readImage.readAsDataURL(e.target.files[0]);
}


	jQuery(document).ready(function($) {






//start Employees Creations




            //$(function () {
                $('#save_btn').click(function () {

// initialize Employees Personal details Variables

                    var email = $('#email').val();
                    var phone_no = $('#phone_no').val();
                    var first_name = $('#first_name').val();
                    var last_name = $('#last_name').val();
                    var file_fname = $('#file_content').val();
                    var department = $('#department').val();
                    var emailaddress_pot = $('#emailaddress_pot').val();
                    var salary1 = $('#salary1').val();

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");


var creator_id = '<?php echo $user_id; ?>';

//alert(creator_id);

// initialize Banking Variable for Employees Payouts
var b_name = $('#b_name').val();
var b_address = $('#b_address').val();
var b_email = $('#b_email').val();
var b_country = $('#b_country').val();
var b_city = $('#b_city').val();
var b_postcode = $('#b_postcode').val();
var b_account_number = $('#b_account_number').val();
var bank_name = $('#bank_name').val();
var b_state = $('#b_state').val();
var b_identification_type = $('#b_identification_type').val();
var b_identification_value = $('#b_identification_value').val();
var b_bic_swift = $('#b_bic_swift').val();
var b_ach_code = $('#b_ach_code').val();
var b_beneficiary_country = $('#b_beneficiary_country').val();
var b_beneficiary_entity_type = $('#b_beneficiary_entity_type').val();

var action = 'my_action_employees_action2021';


// start if validate
if(file_fname==""){
alert('please Select File to Upload');
}

else if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}

else if(phone_no==""){
alert('please Enter Phone No.');
}

else if(first_name==""){
alert('please Enter Your Firstname');
}

else if(last_name==""){
alert('please Enter Your Lastname');
}
else if(department==""){
alert('please Select Departments');
}

else if(salary1==""){
alert('Monthly Salary Cannot be empty');
}

else if(isNaN(salary1)){
  alert("Salary must be a number");
}

else if(salary1 > 1000){
alert('For Testing, Employees Salary Cannot be More than 1000 USD, Try lesser values');
}


else if(b_name==""){
alert('Employees name at Bank Cannot be Empty');
}
else if(b_address==""){
alert('Employees Address for Bank Cannot be Empty');
}
else if(b_email==""){
alert('Employees Email for Bank Cannot be Empty');
}
else if(b_country==""){
alert('Employees Country for Bank Cannot be Empty');
}
else if(b_city==""){
alert('Employees City For Bank Cannot be Empty');
}
else if(b_postcode==""){
alert('Employees Postcode for Bank Cannot be Empty');
}
else if(b_account_number==""){
alert('Employees Bank Account Number Cannot be Empty');
}
else if(bank_name==""){
alert('Your Bank Name Cannot be Empty');
}
else if(b_state==""){
alert('Employees State for Bank Cannot be Empty');
}
else if(b_identification_type==""){
alert('Employees Identification type Cannot be Empty');
}
else if(b_identification_value==""){
alert('Employees Identification Value  Cannot be Empty');
}
else if(b_bic_swift==""){
alert('Employees Bic Swift Cannot be Empty');
}
else if(b_ach_code==""){
alert('Employees Ach code Cannot be Empty');
}
else if(b_beneficiary_country==""){
alert('Employees beneficiary_country  Cannot be Empty');
}
else if(b_beneficiary_entity_type==""){
alert('Employees beneficiary_entity_type Cannot be Empty');
}




else{

var fname=  $('#file_content').val();
var ext = fname.split('.').pop();
//alert(ext);

// add double quotes around the variables
var fileExtention_quotes = ext;
fileExtention_quotes = "'"+fileExtention_quotes+"'";

 var allowedtypes = ["PNG", "png", "gif", "GIF", "jpeg", "JPEG", "BMP", "bmp","JPG","jpg"];
    if(allowedtypes.indexOf(ext) !== -1){
//alert('Good this is a valid Image');
}else{
alert("Please Upload a Valid image. Only Images Files are allowed");
return false;
    }

          var form_data = new FormData();
          form_data.append('file_content', $('#file_content')[0].files[0]);
          form_data.append('file_fname', file_fname);
          form_data.append('email', email);
          form_data.append('last_name', last_name);
          form_data.append('first_name', first_name);
          form_data.append('emailaddress_pot', emailaddress_pot);
          form_data.append('phone_no', phone_no);
          form_data.append('department', department);
          form_data.append('salary1', salary1);
          form_data.append('creator_id', creator_id);



form_data.append('b_name', b_name);
form_data.append('b_address', b_address);
form_data.append('b_email', b_email);
form_data.append('b_country', b_country);
form_data.append('b_city', b_city);
form_data.append('b_postcode', b_postcode);
form_data.append('b_account_number', b_account_number);
form_data.append('bank_name', bank_name);
form_data.append('b_state', b_state);
form_data.append('b_identification_type', b_identification_type);
form_data.append('b_identification_value', b_identification_value);
form_data.append('b_bic_swift', b_bic_swift);
form_data.append('b_ach_code', b_ach_code);
form_data.append('b_beneficiary_country', b_beneficiary_country);
form_data.append('b_beneficiary_entity_type', b_beneficiary_entity_type);

form_data.append('action', action);

//'action': 'my_action_comment_process1',
//  url: 'employees_action.php',


                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader_pp').fadeIn(400).html('<br><span class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Your Data is being Submitted</span>');

                        $.ajax({
      url: '<?php echo admin_url('admin-ajax.php'); ?>',
                      
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        xhr: function () {
                      //var xhr = new window.XMLHttpRequest();
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.addEventListener("progress", function (event) {
                                var upload_percent = 0;
                                var upload_position = event.loaded;
                                var upload_total  = event.total;

                                if (event.lengthComputable) {
                                    var upload_percent = upload_position / upload_total;
                                    upload_percent = parseInt(upload_percent * 100);
                                  //upload_percent = Math.ceil(upload_position / upload_total * 100);
                                    $('.upload_progress').css('width', upload_percent + '%');
                                    $('.upload_progress').text(upload_percent + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                //$('#box').val('');
				$('#loader_pp').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
                                $('.result_data_new').fadeIn('slow').prepend(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (Successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/Successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#file_fname').val('');
$('#email').val('');
$('#first_name').val('');
$('#last_name').val('');
$('#phone_no').val('');
$('#department').val('');
}




                        }
                    });
} // end if validate
                });
            //});





// Ends Employees Creations





// start loading employees table info


//loading starts

var owner_id = '<?php echo $user_id; ?>';
//alert(owner_id);
        var page_row_call =3;
var action_emp = 'my_action_employees_action2021_load';
             

        $(document).ready(function(){
 
            loadTask();

$("#loader_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content <i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');


            $("#loadmore_btn").click(function(){



 // var issue = $("#issue").val();
                var queryid = Number($("#form_queryid").val());
                var querytotal = Number($("#form_querytotal").val());
                queryid += page_row_call;
                if(queryid <= querytotal){
               
                    $("#form_queryid").val(queryid);
                    loadTask();
                }

                if(queryid >= querytotal){
               
                   alert('No More Content to Load');
$("#nomore_content_check").html("<div style='background:purple;color:white;padding:10px;'>No More Content to Load <br> <center><button style='background:#3b5998;border:none;color:white;padding:10px;cursor:pointer' title='Refresh Page' class='reloadPageTask'>Refresh Page</button></center> </div>");   
//setTimeout(function(){ $('#result_task_updates').html(''); }, 5000);	

$('#loader_post').hide();
                }





            });
        });

        function loadTask(){
            var queryid = $("#form_queryid").val();
            var querytotal = $("#form_querytotal").val();

/*
if(querytotal ==0){
alert('No Content to Load Yet');
$("#loader_posts").hide();
}
url:'dashboard_load.php',
*/

$("#loader_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content <i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');

            $.ajax({
                
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type:'post',
                data:{queryid:queryid,page_row_call:page_row_call, owner_id:owner_id, action:action_emp},
                dataType:'json',
                success:function(response){

if(response ==11){
//alert('No Data has been Recorded Yet');
$("#pcheck").html("<div style='background:red;color:white;padding:10px;'>No Employee Has been added by You. Try Add it now</div>");   
$("#loader_posts").hide();
return false;
}

                    loadAllContent(response);

$("#loader_posts").hide();

                }
            });




        }

        function loadAllContent(data){

            var len1 = data.length;



            for(var i=0; i<len1; i++){
                if(i == 0){
                    var querytotal = data[i]['allcount'];
                    $("#form_querytotal").val(querytotal);

                }else{


                    var id = data[i]['id'];
                    var fullname = data[i]['fullname'];
                    var email = data[i]['email'];
                    var phone_no = data[i]['phone_no'];
                    var photo = data[i]['photo'];
                    var department = data[i]['department'];
                    var created_time = data[i]['created_time'];
                    var timing = data[i]['timer'];
					
					//alert(timing);
var token = data[i]['user_token'];
 var salary = data[i]['salary'];                
 var wallet_id = data[i]['wallet_id']; 
 var first_name = data[i]['first_name']; 
var last_name = data[i]['last_name']; 

var b_name = data[i]['b_name'];
var b_address  = data[i]['b_address'];
var b_email = data[i]['b_email'];
var b_country = data[i]['b_country'];
var b_city = data[i]['b_city'];
var b_postcode = data[i]['b_postcode'];
var b_account_number = data[i]['b_account_number'];
var bank_name = data[i]['bank_name'];
var b_state = data[i]['b_state'];
var b_identification_type = data[i]['b_identification_type'];
var b_identification_value = data[i]['b_identification_value'];
var b_bic_swift = data[i]['b_bic_swift'];
var b_ach_code = data[i]['b_ach_code'];
var b_beneficiary_country = data[i]['b_beneficiary_country'];
var b_beneficiary_entity_type = data[i]['b_beneficiary_entity_type'];


if(department == 'Engineering'){
var st_css= 'eng_css';
}

if(department == 'Operations'){
var st_css= 'op_css';
}

if(department == 'Design'){
var st_css= 'des_css';
}
if(department == 'Supports'){
var st_css= 'sup_css';
}

var rec = "<div class='rows' style='width:100%;'><div  class='col-sm-12 task_css notify-fade_" + id +"'  style='width:100%;' id='contents_data' >" +      
"<span class='col-sm-1'><img title='Owner' alt='Image' class='img-circle' style='border-style: solid; border-width:3px; border-color:#3b5998; width:40px;height:40px; max-width:40px;max-height:40px;' src=" + photo +" /></span>" +
"<span class='col-sm-2' >"+fullname+"</span>" +
"<span class='col-sm-3' >"+wallet_id+"</span>" +
"<span class='col-sm-1 "+st_css+" ' >"+department+"</span>" +
"<span class='col-sm-1' >"+salary+" USD</span>" +
"<span class='col-sm-1'><span class='fa fa-calendar'></span> <span data-livestamp='" + timing + "'></span></span>"+
"<a href='<?php echo $ad_url =admin_url('admin.php'); ?>?page=paysalary_rapyd&id=" + id +"&token=" + token +"&fullname=" + fullname +"' class='btn btn-primary col-sm-1' title='Pay Salary'><span style='font-size:20px;color:black;' class='fa fa-money'></span><br> Pay Salary</a><br>"+




"<li style='list-style: none;'><span style='color:white;' class='dropdown'></span>"+
"<a style='color:white;font-size:14px;cursor:pointer;' title='Actions' class='dropdown-toggle action_css btn_action_task pull-right'  data-toggle='dropdown'  data-id=\""+ id +"\" data-email=\""+ email +"\"  data-photo=\""+photo +"\" data-phone_no=\""+ phone_no +"\"  data-fullname=\""+ fullname +"\" data-department=\""+ department +"\"  data-timing=\""+ timing +"\" data-salary=\""+ salary +"\" data-wallet=\""+ wallet_id +"\"  data-b_name=\""+ b_name +"\" data-b_address=\""+ b_address +"\" data-b_email=\""+ b_email +"\" data-b_country=\""+ b_country +"\" data-b_city=\""+ b_city +"\" data-b_postcode=\""+ b_postcode +"\" data-b_account_number=\""+ b_account_number +"\"   data-bank_name=\""+ bank_name +"\" data-b_state=\""+ b_state +"\" data-b_identification_type=\""+ b_identification_type +"\" data-b_identification_value=\""+ b_identification_value +"\"   data-b_bic_swift=\""+ b_bic_swift +"\" data-b_ach_code=\""+ b_ach_code +"\" data-b_beneficiary_country=\""+  b_beneficiary_country +"\" data-b_beneficiary_entity_type=\""+ b_beneficiary_entity_type +"\"> <span style='font-size:20px;color:black;' class='fa fa-plus-square'></span>  Action</a>"+
"<ul class='dropdown-menu pull-right' style='width:120px;height: 170px;overflow-y : scroll;'>"+

//"<img title='Owner' alt='Image'  src='uploads_image/" + photo +"' class='img-circle' style='border-style: solid; border-width:3px; border-color:#3b5998; width:40px;height:40px; max-width:40px;max-height:40px;'><br>";
"<span class='' ><b>Name:</b> "+fullname+"</span><br><br>" +
"<div><button data-toggle='modal' data-target='#myModal_action_task'  title='View Content'  data-id=\""+ id +"\" data-email=\""+ email +"\"  data-photo=\""+photo +"\" data-phone_no=\""+ phone_no +"\"  data-fullname=\""+ fullname +"\" data-department=\""+ department +"\"  data-timing=\""+ timing +"\"  data-salary=\""+ salary +"\" data-wallet=\""+ wallet_id +"\" data-b_name=\""+ b_name +"\" data-b_address=\""+ b_address +"\" data-b_email=\""+ b_email +"\" data-b_country=\""+ b_country +"\" data-b_city=\""+ b_city +"\" data-b_postcode=\""+ b_postcode +"\" data-b_account_number=\""+ b_account_number +"\"   data-bank_name=\""+ bank_name +"\" data-b_state=\""+ b_state +"\" data-b_identification_type=\""+ b_identification_type +"\" data-b_identification_value=\""+ b_identification_value +"\"   data-b_bic_swift=\""+ b_bic_swift +"\" data-b_ach_code=\""+ b_ach_code +"\" data- b_beneficiary_country=\""+  b_beneficiary_country +"\" data-b_beneficiary_entity_type=\""+ b_beneficiary_entity_type +"\" class='btn_action_taskpull-right edit_css btn btn-success  col-sm-12'><span style='font-size:20px;color:black;' class='fa fa-edit'></span> view Content</button></div><br>" +


"<div class='loader-notify-delete-post_" + id +"'></div>"+
"<div class='result-notify-delete-post_" + id +"'></div>"+


"<div><button class='btn btn-danger col-sm-12 del_btn' id='' data-id=\""+ id +"\"  title='Delete Content'><span style='font-size:20px;color:black;' class='fa fa-trash'></span> Delete Content</button></div><br>"+

"<a href='<?php echo $ad_url =admin_url('admin.php'); ?>?page=paysalary_rapyd&id=" + id +"&token=" + token +"&fullname=" + fullname +"' class='btn btn-primary col-sm-12' title='Pay Salary'><span style='font-size:20px;color:black;' class='fa fa-money'></span> Pay Salary</a><br>";
"<br></ul>&nbsp;&nbsp;</li>"+



"</div><br></div><br>";





 $("#res_Task").append(rec);


$("#loader_posts").hide();

                }
            }
        }

	// loading ends	
		
		
	

// Task updates Calls Starts

$(document).ready(function(){
//$('.btn_action_task').click(function(){
$(document).on( 'click', '.btn_action_task', function(){ 



var salary = $(this).data('salary');
var wallet = $(this).data('wallet');


var id = $(this).data('id');
var photo = $(this).data('photo');
var fullname = $(this).data('fullname');
var userid = id;
var email = $(this).data('email');
var phone_no = $(this).data('phone_no');
var department = $(this).data('department');
var timing = $(this).data('timing');
//alert(timing);

var image1 = "<img title='Owner' alt='Image' class='img-circle' style='border-style: solid; border-width:3px; border-color:#3b5998; width:40px;height:40px; max-width:40px;max-height:40px;' src='" + photo +"' /></span>";
var image2 = "<img title='Owner' alt='Image' class='img-circle' style='border-style: solid; border-width:3px; border-color:#3b5998; width:240px;height:240px; max-width:240px;max-height:240px;' src='" + photo +"' /></span>";

var timing_call = "<span data-livestamp='" + timing + "'></span>";

$('.id_call').html(id);
$('.fullname_call').html(fullname);
$('.userid_call').html(userid);
$('.email_call').html(email);
$('.phone_no_call').html(phone_no);
$('.department_call').html(department);
$('.timing_call').html(timing);
$('.image1_call').html(image1);
$('.image2_call').html(image2);

$('.salary_call').html(salary);
$('.wallet_call').html(wallet);


$('.id_call2').val(id).value;
$('.fullname_call2').val(fullname).value;

/*
$('.id_call2').val(id).value;
$('.fullname_call2').val(fullname).value;
*/



var b_name = $(this).data('b_name');
var b_address = $(this).data('b_address');
var b_email = $(this).data('b_email');
var b_country = $(this).data('b_country');
var b_city = $(this).data('b_city');
var b_postcode = $(this).data('b_postcode');
var b_account_number = $(this).data('b_account_number');
var bank_name = $(this).data('bank_name');
var b_state = $(this).data('b_state');
var b_identification_type = $(this).data('b_identification_type');
var b_identification_value = $(this).data('b_identification_value');
var b_bic_swift = $(this).data('b_bic_swift');
var b_ach_code = $(this).data('b_ach_code');
var b_beneficiary_country = $(this).data('b_beneficiary_country');
var b_beneficiary_entity_type = $(this).data('b_beneficiary_entity_type');


$('.b_name_call').html(b_name);
$('.b_address_call').html(b_address);
$('.b_email_call').html(b_email);
$('.b_country_call').html(b_country);
$('.b_city_call').html(b_city);
$('.b_postcode_call').html(b_postcode);
$('.b_account_number_call').html(b_account_number);
$('.bank_name_call').html(bank_name);
$('.b_state_call').html(b_state);
$('.b_identification_type_call').html(b_identification_type);
$('.b_identification_value_call').html(b_identification_value);
$('.b_bic_swift_call').html(b_bic_swift);
$('.b_ach_code_call').html(b_ach_code);
$('.b_beneficiary_country_call').html(b_beneficiary_country);
$('.b_beneficiary_entity_type_call').html(b_beneficiary_entity_type);
		
	})


});
//Task Update Calls Ends




// refresh page on click

$(document).ready(function(){
//$('.reloadPageTask').click(function(){
$(document).on( 'click', '.reloadPageTask', function(){ 
//window.reload();
window.location='<?php  $ad_url =admin_url('admin.php');  echo $ad_url; ?>?page=myplugin1_Rapyd_Payments2021';
// set url for window relocate on delete

	})

});






// delete content starts here


$(document).ready(function(){

//$('.del_btn').click(function(){
$(document).on( 'click', '.del_btn', function(){ 
// confirm start
 if(confirm("Are you sure you want to Delete This Contents: ")){
var id = $(this).data('id');
var action_emp_del = 'my_action_employees_action2021_emp_del';
 var creator_idxv = '<?php echo $user_id; ?>';
//url:'employee_delete.php',

$(".loader-notify-delete-post_"+id).fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Data being deleted...</div>');
var datasend = {'id': id, creator_idxv:creator_idxv, action:action_emp_del};
		$.ajax({
			
			type:'POST',		
url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


	if(msg == 1){
alert('Contents Successfully Deleted');
$(".notify-fade_"+id).delay(1000).fadeOut('fast');

}


	if(msg == 0){

alert('Contents could not be deleted. Please ensure you are connected to Internet.');
$(".loader-notify-delete-post_"+id).hide();
$(".result-notify-delete-post_"+id).html("<div style='color:white;background:red;padding:10px;'>Contents could not be deleted. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);

}

}
			
});
}

// confirm ends

                });


            });


// Delete contents ends here	


// ends loading employees table info









// settings starts here
//$(function () {
	$(document).ready(function(){
$('#save_btn_settings').click(function () {

                    var c1x_name = $('#c1x_name').val();
                    var c1x_location = $('#c1x_location').val();
            var owner_id = '<?php echo $user_id; ?>';
var action = 'my_action_employees_action2021_settings';

if(c1x_name==""){
alert('Company Name/Team name cannot be Empty');
}

else if(c1x_location==""){
alert('Company/Team Location Address cannot be empty');
}


else{

          var form_data = new FormData();
          form_data.append('c1x_name', c1x_name);
          form_data.append('c1x_location', c1x_location);
		  form_data.append('owner_id', owner_id);
          form_data.append('action', action);
                    $('#loader_setings').fadeIn(400).html('<br><span class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Settings is being Updated</span>');
                    $.ajax({
						url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        
                        success: function (msg) {
				$('#loader_setings').hide();
				$('.result_data_setings').html(msg);
				$('#alertdata_uploadfiles_setings').delay(5000).fadeOut('slow');
                               


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (Successful) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/Successful/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#c1x_name').val('');
$('#c1x_location').val('');

}

                        }
                    });
} // end if validate
                });
            });
// settings ends here



// API settings Call starts here
$(document).ready(function(){
var idxc1 ='<?php echo $user_id; ?>';
var action1 = 'my_action_employees_action2021_load_api';

$(".loader_out_res").fadeIn(400).html('<br><div  style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Loading Rapyd API Data...</div>');
var datasend = {'idxc1': idxc1, action:action1};
		// start Ajax
		$.ajax({
			
			type:'POST',
url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".loader_out_res").hide();
$(".result_out_res").html(msg);
}
			
});
// end Ajax


                });
// Api setings call ends here







// content 2 loading for wallets and funds starts here

var owner_id = '<?php echo $user_id; ?>';
var action_wallets ='my_action_employees_action2021_load_wallets';
        var page_row_call_wallets =3;

        $(document).ready(function(){
 
            loadTask_wallets();

$("#loader_posts_wallets").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Wallets <i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');

            $("#loadmore_btn_wallets").click(function(){

// var issue = $("#issue").val();
                var queryid_wallets = Number($("#form_queryid_wallets").val());
                var querytotal_wallets = Number($("#form_querytotal_wallets").val());
                queryid_wallets += page_row_call_wallets;
                if(queryid_wallets <= querytotal_wallets){
               
                    $("#form_queryid_wallets").val(queryid_wallets);
                    loadTask_wallets();
                }

                if(queryid_wallets >= querytotal_wallets){
               
                   alert('No More Content to Load');
$("#nomore_content_check_wallets").html("<div style='background:purple;color:white;padding:10px;'>No More Content to Load <br> <center><button style='background:#3b5998;border:none;color:white;padding:10px;cursor:pointer' title='Refresh Page' class='reloadPageTask_wallets'>Refresh Page</button></center> </div>");   
//setTimeout(function(){ $('#result_task_updates').html(''); }, 5000);	

$('#loader_post_wallets').hide();
                }





            });
        });

        function loadTask_wallets(){
            var queryid_wallets = $("#form_queryid_wallets").val();
            var querytotal_wallets = $("#form_querytotal_wallets").val();


$("#loader_posts_wallets").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Wallets <i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
// url:'wallets_load.php',
            $.ajax({
                
url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type:'post',
                data:{queryid_wallets:queryid_wallets,page_row_call_wallets:page_row_call_wallets, owner_id:owner_id, action:action_wallets},
                dataType:'json',
                success:function(response){

if(response ==11){
//alert('No Wallets has been created Yet');
$("#pcheck_wallets").html("<div style='background:red;color:white;padding:10px;'>No Wallets has been created Yet</div>");   
$("#loader_posts_wallets").hide();
return false;
}

                    loadAllContent_wallets(response);

$("#loader_posts_wallets").hide();

                }
            });




        }

        function loadAllContent_wallets(data){

            var len_wallets = data.length;



            for(var i=0; i<len_wallets; i++){
                if(i == 0){
                    var querytotal_wallets = data[i]['allcount'];
                    $("#form_querytotal_wallets").val(querytotal_wallets);

                }else{


                    var id = data[i]['id'];
                    var phone_number = data[i]['phone_number'];
                    var email = data[i]['email'];
                    var last_name = data[i]['last_name'];
                    var first_name = data[i]['first_name'];
                    var wallet_id = data[i]['wallet_id'];
                    var fund = data[i]['fund'];
                    var timing = data[i]['timer'];
var fund_time = data[i]['fund_time'];
var creator_id = data[i]['creator_id'];
                 
var rec_wallets = "<div class='rows' style='width:100%;'><div  class='col-sm-12 task_css notify-fade_" + id +"'  style='width:100%;' id='contents_data' >" +      
"<span class='col-sm-1' >"+last_name+"</span>" +
"<span class='col-sm-2' >"+first_name+"</span>" +
"<span class='col-sm-4' >"+wallet_id+"</span>" +
"<span class='col-sm-2' >"+fund+"</span>" +
"<span class='col-sm-1'><span class='fa fa-calendar'></span> <span data-livestamp='" + timing + "'></span></span>"+
"<button data-toggle='modal' data-target='#myModal_action_fund' style='color:white;font-size:14px;cursor:pointer;' title='Fund Wallets' class='col-sm-1 action_css btn_action_wallets pull-right'   data-id=\""+ id +"\" data-email=\""+ email +"\"  data-lastname=\""+last_name +"\" data-firstname=\""+ first_name +"\"  data-walletid=\""+ wallet_id +"\" data-fund=\""+ fund +"\"  data-timing=\""+ timing +"\"> <span style='font-size:20px;color:black;' class='fa fa-money'></span> Fund Wallets</button>"+

"<div class='loader-post1b_" + id +"'></div>"+
"<div class='result-post1b_" + id +"'></div>"+

"<div><button class='btn_bal_check btn_action_wallets pull-right col-sm-1 action_css2' title='Check Wallets Balance'   data-id=\""+ id +"\" data-email=\""+ email +"\"  data-lastname=\""+last_name +"\" data-firstname=\""+ first_name +"\"  data-walletid=\""+ wallet_id +"\" data-fund=\""+ fund +"\"  data-timing=\""+ timing +"\"><span style='font-size:20px;color:black;' class='fa fa-money'></span> Check Balance </button></div><br>"+

"</div><br></div><br>";





 $("#res_Task_wallets").append(rec_wallets);


$("#loader_posts_wallets").hide();

                }
            }
        }



// loading ends here







// Task updates Calls Starts

$(document).ready(function(){
//$('.btn_action_wallets').click(function(){
$(document).on( 'click', '.btn_action_wallets', function(){ 


var id = $(this).data('id');
var firstname = $(this).data('firstname');
var lastname = $(this).data('lastname');
var userid = id;
var email = $(this).data('email');
var walletid = $(this).data('walletid');
var fund = $(this).data('fund');
var timing = $(this).data('timing');
//alert(timing);
var timing_call_wallets = "<span class='fa fa-calendar'></span> <span data-livestamp='" + timing + "'></span>";


$('.id_call_wallets').html(id);
$('.firstname_call_wallets').html(firstname);
$('.lastname_call_wallets').html(lastname);
$('.userid_call_wallets').html(userid);
$('.email_call_wallets').html(email);
$('.walletid_call_wallets').html(walletid);
$('.fund_call_wallets').html(fund);
$('.timing_call_wallets').html(timing);


$('.id_call2_wallets').val(id).value;
$('.walletid_call2_wallets').val(walletid).value;

		
	})


});
//Task Update Calls Ends




// refresh page on click

$(document).ready(function(){
//$('.reloadPageTask_wallets').click(function(){
$(document).on( 'click', '.reloadPageTask_wallets', function(){ 
//window.reload();
window.location='<?php echo $ad_url =admin_url('admin.php'); ?>?page=wallets_fund_rapyd';
	})


});






// check wallets balance starts here


$(document).ready(function(){

//$('.btn_bal_check').click(function(){
$(document).on( 'click', '.btn_bal_check', function(){ 
// confirm start
 if(confirm("Are you sure you want to Check Balance to this Wallets:")){
 
 var id = $(this).data('id');
 
var w_id = $(this).data('walletid');
var c_id = '<?php echo $user_id; ?>';
var action ='my_action_employees_action2021_fund_wallets_check'
$(".loader-post1b_"+id).fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Wallets Balance is being Checked...</div>');

//url:'wallets_balance_check.php',

var datasend = {'w_id': w_id, c_id:c_id, action:action};
		$.ajax({
			
			type:'POST',
			
url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$(".loader-post1b_"+id).hide();
$(".result-post1b_"+id).html(msg);
//setTimeout(function(){ $(".result-post1b_"+id).html(''); }, 5000);
//location.reload();

}
			
});
}

// confirm ends

                });


            });


// check Wallets balance ends here


// content 2 loading for wallets and funds ends






//create wallets Starts here

$(document).ready(function(){

$('#save_btn1').click(function(){
var first_name = $('#first_name').val();
var last_name = $('#last_name').val();
var email = $('#email_w').val();
var phone_number = $('#phone_number_w').val();


var mothers_name = $('#mothers_name_w').val();
var contact_type = $('#contact_type_w').val();
var identification_type = $('#identification_type_w').val();
var identification_number = $('#identification_number_w').val();
var date_of_birth = $('#date_of_birth_w').val();
var country = $('#country_w').val();



var creator_id = '<?php echo $user_id; ?>';
var action = 'my_action_employees_action2021_create_wallets';

if(creator_id==""){
alert('There is an issue with Admin Session ID.');
}


else if(first_name==""){
alert('First Name Cannot be Empty');
}

else if(last_name==""){
alert('Last Name Cannot be Empty');
}


else if(email==""){
alert('Emaill Cannot be Empty');
}

else if(phone_number==""){
alert('phone_number Cannot be Empty');
}
else if(mothers_name==""){
alert('mothers_name Cannot be Empty');
}

else if(contact_type==""){
alert('contact_type Cannot be Empty');
}

else if(identification_type==""){
alert('identification_type Cannot be Empty');
}

else if(identification_number==""){
alert('identification_number Cannot be Empty');
}

else if(date_of_birth==""){
alert('date_of_birth Cannot be Empty');
}

else if(country==""){
alert('country Cannot be Empty');
}


else{
$('#loader_wallets_create').fadeIn(400).html('<br><div class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Wallets is Being Created</div><br>');
var datasend = {first_name:first_name, last_name:last_name,creator_id:creator_id, action:action,email:email, phone_number:phone_number, mothers_name:mothers_name, contact_type:contact_type, identification_type:identification_type,identification_number:identification_number, date_of_birth:date_of_birth, country:country};
		
		//url:'wallets_create_action.php',
		
		$.ajax({
			
			type:'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
$('#loader_wallets_create').hide();
$('#result_wallets_create').html(msg);
//setTimeout(function(){ $('#result_wallets_create').html(''); }, 5000);				
					
			}
			
		});
		
		}
		
	})
					
});

// create wallets ends here




// fund wallets starts here
$(document).ready(function(){

$('#pay_btn1').click(function(){
var amount1 = $('#amount1').val();
var currency1 = $('#currency1').val();
var description1 = $('#description1').val();
var name1 = $('#name1').val();
var number1 = $('#number1').val();
var expiration_month1 = $('#expiration_month1').val();
var expiration_year1 = $('#expiration_year1').val();
var cvv1 = $('#cvv1').val();
var walletid_call2_wallets = $('.walletid_call2_wallets').val();

var creator_id1 = '<?php echo $user_id; ?>';
var action = 'my_action_employees_action2021_fund_wallets';

if(walletid_call2_wallets==""){
alert('There is an issue with Admin Wallets ID.');
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


else if(amount1 > 1000){
alert('Please Wait. At Sandbox Level, You are not allowed to fund wallets above 1000(USD). Try lesser Amount. Eg. 1000, 900 etc');
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
$('#loader_wallets_fund').fadeIn(400).html('<br><div class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Wallets is Being Funded</div><br>');
var datasend = {action:action, walletid_call2_wallets:walletid_call2_wallets,creator_id1:creator_id1, amount1:amount1, currency1:currency1,description1:description1,name1:name1,number1:number1,expiration_month1:expiration_month1,expiration_year1:expiration_year1,cvv1:cvv1};
	//url:'wallets_fund_action.php',
		$.ajax({
			
			type:'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
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


// funds wallets ends here





// load wallets Expenditure Starts Here

$(document).ready(function(){
var idxc ='<?php echo $user_id; ?>';
var action_expenses ='my_action_employees_action2021_load_wallets_expenses';
$(".loader_out").fadeIn(400).html('<br><div class="pull-right" style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Loading Salary Expenditure...</div>');
var datasend = {'idxc': idxc, action:action_expenses};
		// start Ajax
		$.ajax({
			
			type:'POST',
url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			


$(".loader_out").hide();
$(".result_out").html(msg);



}
			
});
// end Ajax


                });

//Load Wallets expenditure ends here








// Employers Banking info updtes starts here

$(document).ready(function(){

$('#pay_updates_btn').click(function(){
var creator_id1 = '<?php echo $user_id; ?>';
var s_description = $('#s_description').val();
var s_merchant_reference_id = $('#s_merchant_reference_id').val();
var s_payout_currency = $('#s_payout_currency').val();
var s_payout_method_type = $('#s_payout_method_type').val();
var s_name = $('#s_name').val();
var s_address = $('#s_address').val();
var s_city = $('#s_city').val();
var s_state = $('#s_state').val();
var s_date_of_birth = $('#s_date_of_birth').val();
var s_postcode = $('#s_postcode').val();
var s_phonenumber = $('#s_phonenumber').val();
var s_remitter_account_type = $('#s_remitter_account_type').val();
var s_source_of_income = $('#s_source_of_income').val();
var s_identification_type = $('#s_identification_type').val();
var s_identification_value = $('#s_identification_value').val();
var s_purpose_code = $('#s_purpose_code').val();
var s_account_number = $('#s_account_number1').val();
var s_beneficiary_relationship = $('#s_beneficiary_relationship').val();
var s_sender_country = $('#s_sender_country').val();
var s_sender_currency = $('#s_sender_currency').val();
var s_sender_entity_type = $('#s_sender_entity_type').val();

var action_employeers_bankinfo_updates  = 'my_action_employees_action2021_employer_bank_updates';

if(creator_id1==""){
alert('There is an issue with Admin Session ID.');
}

else if(s_description==""){
alert('Amount Cannot be Empty.');
}
/*
else if(isNaN(amount1)){
  alert("Amount must be a number");
}
*/

else if(s_merchant_reference_id==""){
alert('Currency Cannot be Empty');
}

else if(s_payout_currency==""){
alert('Payment Description Cannot be Empty');
}
else if(s_payout_method_type==""){
alert('Name on Card Cannot be Empty');
}

else if(s_name==""){
alert('Card No Cannot be Empty');
}

else if(s_address==""){
alert('Card Expiration Date Cannot be Empty');
}

else if(s_city==""){
alert('Card Expiration Year Cannot be Empty');
}


else if(s_state==""){
alert('Card CVV Cannot be Empty');
}


else{
$('#loader_updates_rapyd').fadeIn(400).html('<br><div class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Bank Payout Info. is Being Updated</div><br>');

var datasend = {
s_description:s_description,
s_merchant_reference_id:s_merchant_reference_id,
s_payout_currency:s_payout_currency,
s_payout_method_type:s_payout_method_type,
s_name:s_name,
s_address:s_address,
s_city:s_city,
s_state:s_state,
s_date_of_birth:s_date_of_birth,
s_postcode:s_postcode,
s_phonenumber:s_phonenumber,
s_remitter_account_type:s_remitter_account_type,
s_source_of_income:s_source_of_income,
s_identification_type:s_identification_type,
s_identification_value:s_identification_value,
s_purpose_code:s_purpose_code,
s_account_number:s_account_number,
s_beneficiary_relationship:s_beneficiary_relationship,
s_sender_country:s_sender_country,
s_sender_currency:s_sender_currency,
s_sender_entity_type:s_sender_entity_type,
creator_id1:creator_id1,
action: action_employeers_bankinfo_updates
};

//url:'bank_info_updates_action.php',
		
		$.ajax({
			
			type:'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
$('#loader_updates_rapyd').hide();
$('#result_updates_rapyd').html(msg);
//setTimeout(function(){ $('#result_updates_rapyd').html(''); }, 5000);				
					
			}
			
		});
		
		}
		
	})
					
});



// Employers Banking info updtes ends here





// Load employers banking info starts here
$(document).ready(function(){

var creator_id2 = '<?php echo $user_id; ?>';
var action_employer_bankload ='my_action_employees_action2021_employer_bank_updates_load';
//alert(creator_id2);
if(creator_id2==""){
alert('There is an issue with Admin Session ID.');
}
else{
$('#loader_updates_rapyd1').fadeIn(400).html('<br><div class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Employers Bank Payout Info. is Being Loaded</div><br>');

var datasend = { creator_id2:creator_id2, action:action_employer_bankload };
		
		$.ajax({
			
			type:'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
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


// Load employers banking info ends here






// load employees payout Salary info starts
$(document).ready(function(){

var uidbx = $('.id_salaco').val();
var tokenbx = $('.token_salaco').val();
var fullnamebx = $('.fullname_salaco').val();

//alert(uidbx);
//alert(tokenbx);
//alert(fullnamebx);

//var sal_amount = url_p1.searchParams.get("sal");
//$('.amount1c').val(sal_amount).value;
//$('.fullname_call').html(fullname);

var action_load_empdata = 'my_action_employees_action2021_load_employees_data';

$("#loader-dashboard_post").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>"> &nbsp;Please Wait,Loading Contents...</div>');
var datasend = {uid:uidbx, token:tokenbx, action:action_load_empdata};

//employee_info
	
		$.ajax({
			type:'POST',			
                       url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-dashboard_post").hide();
$("#result-dashboard_post").html(msg);
//setTimeout(function(){ $('#result-dashboard_post').html(''); }, 5000);				
	
}
			
		});
		
		

});




// load employees payout Salary info ends




// load payout dropdown wallets info starts here
$(document).ready(function(){
$('#loader_pro1').fadeIn(400).html('<br><div class="loader_css" ><?php echo $plugin_img_url1; ?>  &nbsp;Please Wait, Project is being Loaded...</div>');
 $('#loader_pro2').fadeIn(400).html('<br><div class="loader_css" ><?php echo $plugin_img_url1; ?>  &nbsp;Please Wait, Project is being Loaded...</div>');
                 
var creator_id = '<?php echo $user_id; ?>';
var n_uid = $('.id_salaco').val();
var n_token = $('.token_salaco').val();
var action_load_dropdownwallets ='my_action_employees_action2021_load_dropdown_wallets';

//url: 'ewallets_load.php',

			$.ajax({
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				type: 'post',
				data: {creator_id: creator_id, n_uid:n_uid, n_token:n_token, action:action_load_dropdownwallets},
				dataType: 'json',
				success: function(response){
					
					var len = response.length;
					
//alert(response[0].employee_wallet_id);
var employees_wallet_id = response[0].employee_wallet_id;
$('.employees_wallet_id_single').html(employees_wallet_id);
$('.employees_wallet_id_single1').val(employees_wallet_id).value;
//startif
if(len == 0){
$("#wallet_select_empty").html("<div style='background:red;color:white;padding:10px;'>You dont have any Payment Wallets on this Platform. Please Create and Fund Your Wallets First from Dashboard</div>");
$("#wallet_select_empty2").html("<div style='background:red;color:white;padding:10px;'>You dont have any Payment Wallets on this Platform. Please Create and Fund Your Wallets First from Dashboard</div>");


$('#loader_pro1').hide();
$('#loader_pro2').hide();
}else{

		            for( var i = 0; i<len; i++){
		                var id = response[i]['id'];
		                var wallet_id = response[i]['wallet_id'];
		                    
		                $("#wallet_select").append("<option name='w_id' class='w_id' value='"+wallet_id+"'>"+wallet_id+"</option>");
						$("#wallet_select2").append("<option name='w_id2' class='w_id2' value='"+wallet_id+"'>"+wallet_id+"</option>");
						
						
                                $('#loader_pro1').hide();
								 $('#loader_pro2').hide();
								
//$('#wallet_select3').val(wallet_id).value;
		            }

}
//end if



				}
			});
			
		});

// load payout dropdown wallets info ends here









// load payout employers employees wallets content starts here


$(document).ready(function(){
$('#loader_emp1').fadeIn(400).html('<br><div class="loader_css" ><img src="<?php echo $plugin_img_url1; ?>">  &nbsp;Please Wait, Employee Banking Info is being Loaded...</div>');
var creator_id = '<?php echo $user_id; ?>';
var e_uid = $('.id_salaco').val();
var e_token = $('.token_salaco').val();

//alert(e_uid);
//alert(e_token);

var action_employers_employees_walletsx ='my_action_employees_action2021_employers_employees_wallets';

//url: 'employee_bank_load.php',

			$.ajax({
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				type: 'post',
				data: {creator_id: creator_id, e_uid:e_uid, e_token:e_token, action:action_employers_employees_walletsx},
				dataType: 'json',
				success: function(data){
					
					var len = data.length;
					 // $('#loader_emp1').hide();
					 
					// alert(data[0].id);
					//alert(data[0].bank_name);
//startif
if(len == 0){
$("#result_employee").html("<div style='background:red;color:white;padding:10px;'>No Banking Info Found for this Employees</div>");
$('#loader_emp1').hide();

}else{


		            for( var i = 0; i<len; i++){
		                var id = data[i]['id'];
		                var wallet_id = data[i]['wallet_id'];
		                  var salary = data[i]['salary'];  
						  //alert(wallet_id);
						  //alert(salary);
var b_salary=salary;					
var b_name = data[i]['b_name'];
var b_address  = data[i]['b_address'];
var b_email = data[i]['b_email'];
var b_country = data[i]['b_country'];
var b_city = data[i]['b_city'];
var b_postcode = data[i]['b_postcode'];
var b_account_number = data[i]['b_account_number'];
var bank_name = data[i]['bank_name'];
var b_state = data[i]['b_state'];
var b_identification_type = data[i]['b_identification_type'];
var b_identification_value = data[i]['b_identification_value'];
var b_bic_swift = data[i]['b_bic_swift'];
var b_ach_code = data[i]['b_ach_code'];
var b_beneficiary_country = data[i]['b_beneficiary_country'];
var b_beneficiary_entity_type = data[i]['b_beneficiary_entity_type'];


var s_description = data[i]['s_description'];
var s_merchant_reference_id = data[i]['s_merchant_reference_id'];
var s_payout_currency = data[i]['s_payout_currency'];
var s_payout_method_type = data[i]['s_payout_method_type'];
var s_name = data[i]['s_name'];
var s_address = data[i]['s_address'];
var s_city = data[i]['s_city'];
var s_state = data[i]['s_state'];
var s_date_of_birth = data[i]['s_date_of_birth'];
var s_postcode = data[i]['s_postcode'];
var s_phonenumber = data[i]['s_phonenumber'];
var s_remitter_account_type = data[i]['s_remitter_account_type'];
var s_source_of_income = data[i]['s_source_of_income'];
var s_identification_type = data[i]['s_identification_type'];
var s_identification_value = data[i]['s_identification_value'];
var s_purpose_code = data[i]['s_purpose_code'];
var s_account_number = data[i]['s_account_number'];
var s_beneficiary_relationship = data[i]['s_beneficiary_relationship'];
var s_sender_country = data[i]['s_sender_country'];
var s_sender_currency = data[i]['s_sender_currency'];
var s_sender_entity_type = data[i]['s_sender_entity_type'];



$('#wallet_id_calling').val(wallet_id).value;

//alert(b_name);

$('.b_salary_call1').html(salary);
$('.b_walletid_call1').html(wallet_id);
$('.b_name_call1').html(b_name);
$('.b_address_call1').html(b_address);
$('.b_email_call1').html(b_email);
$('.b_country_call1').html(b_country);
$('.b_city_call1').html(b_city);
$('.b_postcode_call1').html(b_postcode);
$('.b_account_number_call1').html(b_account_number);
$('.bank_name_call1').html(bank_name);
$('.b_state_call1').html(b_state);
$('.b_identification_type_call1').html(b_identification_type);
$('.b_identification_value_call1').html(b_identification_value);
$('.b_bic_swift_call1').html(b_bic_swift);
$('.b_ach_code_call1').html(b_ach_code);
$('.b_beneficiary_country_call1').html(b_beneficiary_country);
$('.b_beneficiary_entity_type_call1').html(b_beneficiary_entity_type);



$('.s_description_call1').html(s_description);
$('.s_merchant_reference_id_call1').html(s_merchant_reference_id);
$('.s_payout_currency_call1').html(s_payout_currency);
$('.s_payout_method_type_call1').html(s_payout_method_type);
$('.s_name_call1').html(s_name);
$('.s_address_call1').html(s_address);
$('.s_city_call1').html(s_city);
$('.s_state_call1').html(s_state);
$('.s_date_of_birth_call1').html(s_date_of_birth);
$('.s_postcode_call1').html(s_postcode);
$('.s_phonenumber_call1').html(s_phonenumber);
$('.s_remitter_account_type_call1').html(s_remitter_account_type);
$('.s_source_of_income_call1').html(s_source_of_income);
$('.s_identification_type_call1').html(s_identification_type);
$('.s_identification_value_call1').html(s_identification_value);
$('.s_purpose_code_call1').html(s_purpose_code);
$('.s_account_number_call1').html(s_account_number);
$('.s_beneficiary_relationship_call1').html(s_beneficiary_relationship);
$('.s_sender_country_call1').html(s_sender_country);
$('.s_sender_currency_call1').html(s_sender_currency);
$('.s_sender_entity_type_call1').html(s_sender_entity_type);



$('#loader_emp1').hide();
								
					
// start Payments
$(document).ready(function(){

$('#paye_btn').click(function(){
//alert(data[0].id);
var s_wallet_id = $('#wallet_select').val();
var creator_id1 = '<?php echo $user_id; ?>';
var b_date = $('#b_date').val();

 var action_salary_payout_bank ='my_action_employees_action2021_salary_payout_banking';

if(s_wallet_id==0){
alert('Please Select Employers Wallets ID');
}

else if(b_date==''){
alert('Please Select Salary Payment Datae and Month');
}

else{
$('#loader_paye').fadeIn(400).html('<br><div class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Employess payment is being sent to Bank Account</div><br>');


var datasend = {
s_description:s_description,
s_merchant_reference_id:s_merchant_reference_id,
s_payout_currency:s_payout_currency,
s_payout_method_type:s_payout_method_type,
s_name:s_name,
s_address:s_address,
s_city:s_city,
s_state:s_state,
s_date_of_birth:s_date_of_birth,
s_postcode:s_postcode,
s_phonenumber:s_phonenumber,
s_remitter_account_type:s_remitter_account_type,
s_source_of_income:s_source_of_income,
s_identification_type:s_identification_type,
s_identification_value:s_identification_value,
s_purpose_code:s_purpose_code,
s_account_number:s_account_number,
s_beneficiary_relationship:s_beneficiary_relationship,
s_sender_country:s_sender_country,
s_sender_currency:s_sender_currency,
s_sender_entity_type:s_sender_entity_type,
creator_id1:creator_id1,
s_wallet_id:s_wallet_id,
b_name:b_name,
b_address:b_address,
b_email:b_email,
b_country:b_country,
b_city:b_city,
b_postcode:b_postcode,
b_account_number:b_account_number,
bank_name:bank_name,
b_state:b_state,
b_identification_type:b_identification_type,
b_identification_value:b_identification_value,		
b_bic_swift:b_bic_swift,
b_ach_code:b_ach_code,
b_beneficiary_country:b_beneficiary_country,
b_beneficiary_entity_type:b_beneficiary_entity_type,
b_salary:b_salary,
e_token:e_token,
e_uid:e_uid,
b_date:b_date,
action:action_salary_payout_bank
};
//url:'salary_payout_bank_action.php',
		
		$.ajax({
			
			type:'POST',
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
$('#loader_paye').hide();
$('#result_paye').html(msg);
//setTimeout(function(){ $('#result_paye').html(''); }, 5000);				
					
			}
			
		});
		
		}


})

});

// ends payments




					
		            }
					
					

}
//end if


				}
			
				
			});
			
		});


// load payout employer employees wallets content ends here






// salary pay by wallets transfer starts here

$(document).ready(function(){

$('#transfer_btn').click(function(){

var employeers_wallet_id = $('#wallet_select2').val();
var employees_wallet_id = $('#employees_wallet_id_single1').val();
var creator_id1 = '<?php echo $user_id; ?>';
var b_date1 = $('#b_date1').val();


var ee_uid = $('.id_salaco').val();
var ee_token = $('.token_salaco').val();
//alert(ee_uid);
//alert(ee_token);

 var action_salary_transfer_wallets1 ='my_action_employees_action2021_salary_transfer_wallets';

if(employeers_wallet_id==0){
alert('Please Select Employers Wallets ID');
}


else if(employees_wallet_id==''){
alert('Please Enter Employees Wallets ID');
}
else if(b_date1==''){
alert('Please Select Salary Payment Date and Month');
}

else{
$('#loader_transfer').fadeIn(400).html('<br><div class="well" style="color:black"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Employess payment is being Transfer to his Wallets</div><br>');


var datasend = {
employeers_wallet_id:employeers_wallet_id,
employees_wallet_id:employees_wallet_id,
creator_id1:creator_id1,
b_date1:b_date1,
ee_token:ee_token,
ee_uid:ee_uid,
action:action_salary_transfer_wallets1
};

		$.ajax({
			
			type:'POST',
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
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

// salary pay by wallets transfer ends here






// over all salary payments starts here


var user_id = $('.id_salaco').val();
var owner_id = '<?php echo $user_id; ?>';
var action_emp_load_sal ='my_action_employees_action2021_salary_all_employees_load';

//alert(user_id);
        var page_row_call_sal =3;

        $(document).ready(function(){
 
            loadTask_sal();

$("#loader_posts_sal").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content <img src="<?php echo $plugin_img_url1; ?>"></div>');


            $("#loadmore_btn_sal").click(function(){



 // var issue = $("#issue").val();
                var queryid_sal = Number($("#form_queryid_sal").val());
                var querytotal_sal = Number($("#form_querytotal_sal").val());
                queryid_sal += page_row_call_sal;
                if(queryid_sal <= querytotal_sal){
               
                    $("#form_queryid_sal").val(queryid_sal);
                    loadTask_sal();
                }

                if(queryid_sal >= querytotal_sal){
               
                   alert('No More Employee Salary Payments Data to Load');
				  // location.reload();
$("#nomore_content_check_sal").html("<div style='background:purple;color:white;padding:10px;'>No More Employee Salary Payments Data to Load <br> <center><button style='background:#3b5998;border:none;color:white;padding:10px;cursor:pointer' title='Refresh Page' class='reloadPageTask_sal'>Refresh Page</button></center> </div>");   
//setTimeout(function(){ $('#result_task_updates_sal').html(''); }, 5000);	

$('#loader_post_sal').hide();
                }





            });
        });

        function loadTask_sal(){
            var queryid_sal = $("#form_queryid_sal").val();
            var querytotal_sal = $("#form_querytotal_sal").val();

$("#loader_posts_sal").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content <img src="<?php echo $plugin_img_url1; ?>"></div>');
//url:'pay_month_salary_load.php',

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type:'post',
                data:{queryid_sal:queryid_sal,page_row_call_sal:page_row_call_sal, owner_id:owner_id, user_id:user_id,action:action_emp_load_sal},
                dataType:'json',
                success:function(response){

if(response ==11){
//alert('This Employee has not recieve any Salary Yet');
$("#pcheck_sal").html("<div style='background:red;color:white;padding:10px;'>This Employee has not recieve any Salary yet</div>");   
$("#loader_posts_sal").hide();
return false;
}

                    loadAllContent_sal(response);

$("#loader_posts_sal").hide();
                }
            });




        }

        function loadAllContent_sal(data){

            var len1_sal = data.length;



            for(var i=0; i<len1_sal; i++){
                if(i == 0){
                    var querytotal_sal = data[i]['allcount'];
                    $("#form_querytotal_sal").val(querytotal_sal);

                }else{

			
                    var id = data[i]['id'];
					var userid = data[i]['userid'];
					var usertoken = data[i]['usertoken'];
					 var photo = data[i]['photo'];
                    var fullname = data[i]['fullname'];
                    var department = data[i]['department'];
                    var salary_amount = data[i]['salary_amount'];
                    var salary_month = data[i]['salary_month'];
                    var timing = data[i]['timing'];
                    var payment_method = data[i]['payment_method'];
      var payment_method2 = data[i]['payment_method2'];
	        var user_ewallet_id = data[i]['user_ewallet_id'];
			      var payout_id = data[i]['payout_id'];
				        var payout_status = data[i]['payout_status'];
var creator_id = data[i]['creator_id'];

						
if(payout_status =='Created'){
var pay1_css= 'p1_css';
}	
if(payout_status =='PEN'){
var pay1_css= 'p1_css';
}				
if(payout_status =='Completed'){
var pay1_css= 'p2_css';
}	
if(payout_status =='CLO'){
var pay1_css= 'p2_css';
}						
						
if(payment_method =='Disburse'){
var pay_css= 'eng_css';
}
if(payment_method =='Wallet'){
var pay_css= 'des_css';
}


if(payout_status =='Created'){
var c_pay1 = 'action_css';
var c_pay2 = 'complete_pay_btn';
var c_pay3  ='Complete Payments';
}

if(payout_status =='PEN'){
var c_pay1 = 'action_css';
var c_pay2 = 'complete_pay_btn';
var c_pay3  ='Complete Payments';
}


if(payout_status =='Completed'){
var c_pay1 = 'action_css1';
var c_pay2 = 'complete_pay_btn_no';
var c_pay3  ='Payout Completed';
}


if(payout_status =='CLO'){
var c_pay1 = 'action_css1';
var c_pay2 = 'complete_pay_btn_no';
var c_pay3  ='Transfer Completed';
}


/*
if(payment_method =='Transfer'){
var pay_css= 'op_css';
}

if(department == 'Engineering'){
var st_css= 'eng_css';
}

if(department == 'Operations'){
var st_css= 'op_css';
}

if(department == 'Design'){
var st_css= 'des_css';
}
if(department == 'Supports'){
var st_css= 'sup_css';
}
*/


var rec_sal = "<div class='rows' style='width:100%;'><div  class='col-sm-12 task_css notify-fade_" + id +"'  style='width:100%;' id='contents_data' >" +      
"<span class='col-sm-1'><img title='Owner' alt='Image' class='img-circle' style='border-style: solid; border-width:3px; border-color:#3b5998; width:40px;height:40px; max-width:40px;max-height:40px;' src='" + photo +"' /></span>" +
"<span class='col-sm-2' >"+fullname+"</span>" +
"<span class='col-sm-1' >"+salary_amount+"</span>" +
"<span class='col-sm-1' >"+salary_month+"</span>" +
"<span class='col-sm-2 "+pay_css+" ' >"+payment_method+" ("+payment_method2+")</span>" +
"<span class='col-sm-1' >"+department+"</span>" +
"<span class='col-sm-1 "+pay1_css+"' >"+payout_status+"</span>" +
"<span class='col-sm-1'><span class='fa fa-calendar'></span> <span data-livestamp='" + timing + "'></span></span>"+


"<div class='loader-post1_" + id +"'></div>"+
"<div class='result-post1_" + id +"'></div>"+

"<div><button class='"+c_pay1+" btn_action_pay pull-right col-sm-2 "+c_pay2+" ' id='' data-id=\""+ id +"\" data-payout_id=\""+ payout_id +"\" data-payout_status=\""+ payout_status +"\" data-creator_id=\""+ creator_id +"\" data-salary=\""+ salary_amount +"\"  title=' "+c_pay3+" '><span style='font-size:20px;color:black;' class='fa fa-money'></span> "+c_pay3+" </button></div><br>"+



//"<div><button class='action_css btn_action_pay pull-right col-sm-2 complete_pay_btn' id='' data-id=\""+ id +"\" data-payout_id=\""+ payout_id +"\"  title='Complete Payments'><span style='font-size:20px;color:black;' class='fa fa-money'></span> Complete Payments</button></div><br>"+


"</div><br></div><br>";





 $("#res_Task_sal").append(rec_sal);


$("#loader_posts_sal").hide();

                }
            }
        }



// loading ends here




// refresh page on click

$(document).ready(function(){
//$('.reloadPageTask_sal').click(function(){
$(document).on( 'click', '.reloadPageTask_sal', function(){ 
window.location.href = window.location.href;
//location.reload();
//window.location='pay_salary.html';
	})


});




// Task updates Calls Starts
$(document).ready(function(){
//$('.btn_action_pay').click(function(){
$(document).on( 'click', '.btn_action_pay', function(){ 

var id = $(this).data('id');
var payout_id = $(this).data('payout_id');
var payout_status = $(this).data('payout_status');
var creator_id = $(this).data('creator_id');
var salary = $(this).data('salary');

//alert(salary);
//alert(creator_id);

$('.vx_id').val(id).value;
$('.vx_payout_id').val(payout_id).value;
$('.vx_payout_status').val(payout_status).value;
$('.vx_creator_id').val(creator_id).value;
$('.vx_salary').val(salary).value;

})
});



// Complete starts here starts here
$(document).ready(function(){
//$('.complete_pay_btn').click(function(){
$(document).on( 'click', '.complete_pay_btn', function(){ 

var id = $('.vx_id').val();
var payout_id = $('.vx_payout_id').val();
var payout_status = $('.vx_payout_status').val();
var salary = $('.vx_salary').val();
var creator_id = '<?php echo $user_id; ?>';


if(payout_status =='Created'){
	var action_emp_complete_payout_bank ='my_action_employees_action2021_complete_payout_bank';
	
 if(confirm("Are you sure you want to Complete this Payout Payments: ")){
$(".loader-post1_"+id).fadeIn(400).html('<br><div class="pull-right" style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Payments is being Completed...</div>');
var datasend = {'id': id,payout_id:payout_id,payout_status:payout_status,creator_id:creator_id,salary:salary,action:action_emp_complete_payout_bank};
		// start Ajax
		$.ajax({
			
			type:'POST',
		url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
			
	if(msg == 1){
alert('Payout Successfully Completed');
//$(".notify-fade_"+id).delay(1000).fadeOut('fast');

$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:green;padding:10px;'>Payout Successfully Completed..</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);
//location.reload();
window.location.href = window.location.href;
}


	if(msg == 0){

alert('Payout Could not be Completed. Please Ensure there is Internet Connections');
$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:red;padding:10px;'>Payout Could not be Completed. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);

}

}
			
});
// end Ajax

}
// confirm ends
}
//end if








if(payout_status =='PEN'){
	var action_emp_complete_transfer_wallets ='my_action_employees_action2021_complete_transfer_wallets';
 if(confirm("Are you sure you want to Complete this Transfer Payments: ")){
$(".loader-post1_"+id).fadeIn(400).html('<br><div class="pull-right" style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Transfer is being Completed...</div>');
var datasend = {'id': id,payout_id:payout_id,payout_status:payout_status,creator_id:creator_id,salary:salary,action:action_emp_complete_transfer_wallets};
		// start Ajax
		$.ajax({
			
			type:'POST',
		url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
			
	if(msg == 1){
alert('Transfer Successfully Completed');
//$(".notify-fade_"+id).delay(1000).fadeOut('fast');

$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:green;padding:10px;'>Transfer Successfully Completed..</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);
//location.reload();
window.location.href = window.location.href;
}


	if(msg == 0){

alert('Transfer Could not be Completed. Please Ensure there is Internet Connections');
$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:red;padding:10px;'>Transfer Could not be Completed. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);

}

}
			
});
// end Ajax

}
// confirm ends
}
//end if



                });


            });


// complete Payments ends here


// over all salary payments ends here










//over all salary payments tracking starts here



var owner_id = '<?php echo $user_id; ?>';
var action_payments_trackings ='my_action_employees_action2021_sal_payments_trackings';
//alert(user_id);
        var page_row_call_track =3;

        $(document).ready(function(){
 
            loadTask_track();

$("#loader_posts_track").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content <img src="<?php echo $plugin_img_url1; ?>"></div>');


            $("#loadmore_btn_track").click(function(){



 // var issue = $("#issue").val();
                var queryid_track = Number($("#form_queryid_track").val());
                var querytotal_track = Number($("#form_querytotal_track").val());
                queryid_track += page_row_call_track;
                if(queryid_track <= querytotal_track){
               
                    $("#form_queryid_track").val(queryid_track);
                    loadTask_track();
                }

                if(queryid_track >= querytotal_track){
               
                   alert('No More Employee Salary Payments Data to Load');
				  // location.reload();
$("#nomore_content_check_track").html("<div style='background:purple;color:white;padding:10px;'>No More Employee Salary Payments Data to Load <br> <center><button style='background:#3b5998;border:none;color:white;padding:10px;cursor:pointer' title='Refresh Page' class='reloadPageTask_track'>Refresh Page</button></center> </div>");   
//setTimeout(function(){ $('#result_task_updates_track').html(''); }, 5000);	

$('#loader_post_track').hide();
                }





            });
        });

        function loadTask_track(){
            var queryid_track = $("#form_queryid_track").val();
            var querytotal_track = $("#form_querytotal_track").val();

$("#loader_posts_track").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Loading Content  <img src="<?php echo $plugin_img_url1; ?>"></div>');

            $.ajax({
               url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type:'post',
                data:{queryid_track:queryid_track,page_row_call_track:page_row_call_track, owner_id:owner_id, action:action_payments_trackings},
                dataType:'json',
                success:function(response){

if(response ==11){
//alert('No Employee has be Salary Yet');
$("#pcheck_track").html("<div style='background:red;color:white;padding:10px;'>No Employee has been Paid Salary yet</div>");   
$("#loader_posts_track").hide();
return false;
}

                    loadAllContent_track(response);

$("#loader_posts_track").hide();
                }
            });




        }

        function loadAllContent_track(data){

            var len1_track = data.length;



            for(var i=0; i<len1_track; i++){
                if(i == 0){
                    var querytotal_track = data[i]['allcount'];
                    $("#form_querytotal_track").val(querytotal_track);

                }else{

			
                    var id = data[i]['id'];
					var userid = data[i]['userid'];
					var usertoken = data[i]['usertoken'];
					 var photo = data[i]['photo'];
                    var fullname = data[i]['fullname'];
                    var department = data[i]['department'];
                    var salary_amount = data[i]['salary_amount'];
                    var salary_month = data[i]['salary_month'];
                    var timing = data[i]['timing'];
                    var payment_method = data[i]['payment_method'];
      var payment_method2 = data[i]['payment_method2'];
	        var user_ewallet_id = data[i]['user_ewallet_id'];
			      var payout_id = data[i]['payout_id'];
				        var payout_status = data[i]['payout_status'];
var creator_id = data[i]['creator_id'];

					//alert(photo);	
if(payout_status =='Created'){
var pay1_css= 'p1_css';
}	
if(payout_status =='PEN'){
var pay1_css= 'p1_css';
}				
if(payout_status =='Completed'){
var pay1_css= 'p2_css';
}	
if(payout_status =='CLO'){
var pay1_css= 'p2_css';
}						
						
if(payment_method =='Disburse'){
var pay_css= 'eng_css';
}
if(payment_method =='Wallet'){
var pay_css= 'des_css';
}


if(payout_status =='Created'){
var c_pay1 = 'action_css';
var c_pay2 = 'complete_pay_btn1';
var c_pay3  ='Complete Payments';
}

if(payout_status =='PEN'){
var c_pay1 = 'action_css';
var c_pay2 = 'complete_pay_btn1';
var c_pay3  ='Complete Payments';
}


if(payout_status =='Completed'){
var c_pay1 = 'action_css1';
var c_pay2 = 'complete_pay_btn_no';
var c_pay3  ='Payout Completed';
}


if(payout_status =='CLO'){
var c_pay1 = 'action_css1';
var c_pay2 = 'complete_pay_btn_no';
var c_pay3  ='Transfer Completed';
}


/*
if(payment_method =='Transfer'){
var pay_css= 'op_css';
}

if(department == 'Engineering'){
var st_css= 'eng_css';
}

if(department == 'Operations'){
var st_css= 'op_css';
}

if(department == 'Design'){
var st_css= 'des_css';
}
if(department == 'Supports'){
var st_css= 'sup_css';
}
*/


var rec_track = "<div class='rows' style='width:100%;'><div  class='col-sm-12 task_css notify-fade_" + id +"'  style='width:100%;' id='contents_data' >" +      
"<span class='col-sm-1'><img title='Owner' alt='Image' class='img-circle' style='border-style: solid; border-width:3px; border-color:#3b5998; width:40px;height:40px; max-width:40px;max-height:40px;' src='" + photo +"' /></span>" +
"<span class='col-sm-2' >"+fullname+"</span>" +
"<span class='col-sm-1' >"+salary_amount+"</span>" +
"<span class='col-sm-1' >"+salary_month+"</span>" +
"<span class='col-sm-2 "+pay_css+" ' >"+payment_method+" ("+payment_method2+")</span>" +
"<span class='col-sm-1' >"+department+"</span>" +
"<span class='col-sm-1 "+pay1_css+"' >"+payout_status+"</span>" +
"<span class='col-sm-1'><span class='fa fa-calendar'></span> <span data-livestamp='" + timing + "'></span></span>"+


"<div class='loader-post1_" + id +"'></div>"+
"<div class='result-post1_" + id +"'></div>"+

"<div><button class='"+c_pay1+" btn_action_track pull-right col-sm-2 "+c_pay2+" ' id='' data-id=\""+ id +"\" data-payout_id=\""+ payout_id +"\" data-payout_status=\""+ payout_status +"\" data-creator_id=\""+ creator_id +"\" data-salary=\""+ salary_amount +"\"  title=' "+c_pay3+" '><span style='font-size:20px;color:black;' class='fa fa-money'></span> "+c_pay3+" </button></div><br>"+



//"<div><button class='action_css btn_action_track pull-right col-sm-2 complete_pay_btn' id='' data-id=\""+ id +"\" data-payout_id=\""+ payout_id +"\"  title='Complete Payments'><span style='font-size:20px;color:black;' class='fa fa-money'></span> Complete Payments</button></div><br>"+


"</div><br></div><br>";





 $("#res_Task_track").append(rec_track);


$("#loader_posts_track").hide();

                }
            }
        }



// loading ends here




// refresh page on click

$(document).ready(function(){
//$('.reloadPageTask_track').click(function(){
$(document).on( 'click', '.reloadPageTask_track', function(){ 
window.location.href = window.location.href;
//location.reload();
//window.location='pay_salary.html';
	})


});




// Task updates Calls Starts
$(document).ready(function(){
//$('.btn_action_track').click(function(){
$(document).on( 'click', '.btn_action_track', function(){ 

var id = $(this).data('id');
var payout_id = $(this).data('payout_id');
var payout_status = $(this).data('payout_status');
var creator_id = $(this).data('creator_id');
var salary = $(this).data('salary');

//alert(salary);
//alert(creator_id);

$('.vx_id1').val(id).value;
$('.vx_payout_id1').val(payout_id).value;
$('.vx_payout_status1').val(payout_status).value;
$('.vx_creator_id1').val(creator_id).value;
$('.vx_salary1').val(salary).value;

})
});



// Complete starts here starts here
$(document).ready(function(){
//$('.complete_pay_btn1').click(function(){
$(document).on( 'click', '.complete_pay_btn1', function(){ 


var id = $('.vx_id1').val();
var payout_id = $('.vx_payout_id1').val();
var payout_status = $('.vx_payout_status1').val();
var salary = $('.vx_salary1').val();
var creator_id = '<?php echo $user_id; ?>';

//alert(id);
//alert(payout_id);
//alert(payout_status);
//alert(salary);
//alert(creator_id);

if(payout_status =='Created'){
	 var action_emp_complete_payout_bank1 ='my_action_employees_action2021_complete_payout_bank1';
 if(confirm("Are you sure you want to Complete this Payout Payments: ")){
	
$(".loader-post1_"+id).fadeIn(400).html('<br><div class="pull-right" style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Payments is being Completed...</div>');
var datasend = {'id': id,payout_id:payout_id,payout_status:payout_status,creator_id:creator_id,salary:salary,action:action_emp_complete_payout_bank1};
		// start Ajax
		$.ajax({
			
			type:'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
			
	if(msg == 1){
alert('Payout Successfully Completed');
//$(".notify-fade_"+id).delay(1000).fadeOut('fast');

$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:green;padding:10px;'>Payout Successfully Completed..</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);
//location.reload();
window.location.href = window.location.href;
}


	if(msg == 0){

alert('Payout Could not be Completed. Please Ensure there is Internet Connections');
$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:red;padding:10px;'>Payout Could not be Completed. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);

}

}
			
});
// end Ajax

}
// confirm ends
}
//end if








if(payout_status =='PEN'){
	var action_emp_complete_transfer_wallets1 ='my_action_employees_action2021_complete_transfer_wallets1';
 if(confirm("Are you sure you want to Complete this Transfer Payments: ")){
$(".loader-post1_"+id).fadeIn(400).html('<br><div class="pull-right" style="color:black;background:#ddd;padding:10px;"><img src="<?php echo $plugin_img_url1; ?>">&nbsp;Please Wait, Transfer is being Completed...</div>');
var datasend = {'id': id,payout_id:payout_id,payout_status:payout_status,creator_id:creator_id,salary:salary,action:action_emp_complete_transfer_wallets1};
		// start Ajax
		$.ajax({
			
			type:'POST',
			url: '<?php echo admin_url('admin-ajax.php'); ?>',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
			
			
	if(msg == 1){
alert('Transfer Successfully Completed');
//$(".notify-fade_"+id).delay(1000).fadeOut('fast');

$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:green;padding:10px;'>Transfer Successfully Completed..</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);
//location.reload();
window.location.href = window.location.href;
}


	if(msg == 0){

alert('Transfer Could not be Completed. Please Ensure there is Internet Connections');
$(".loader-post1_"+id).hide();
$(".result-post1_"+id).html("<div style='color:white;background:red;padding:10px;'>Transfer Could not be Completed. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-post1_"+id).html(''); }, 5000);

}

}
			
});
// end Ajax

}
// confirm ends
}
//end if



                });


            });


// complete Payments ends here

//over all salary payments tracking ends here








	});
	</script> 
<?php
}





//send employees to database starts

add_action('wp_ajax_my_action_employees_action2021', 'my_action_employees_action2021');
function my_action_employees_action2021() {
	
include('utilities.php');

global $wpdb; // this is how you get access to the database
$tablename_employees = $wpdb->prefix."employees_rapyd2021";


//if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
	

$file_content = strip_tags($_POST['file_fname']);
$email = strip_tags($_POST['email']);
$user_rank = strip_tags($_POST['department']);
$phone_no = strip_tags($_POST['phone_no']);
$mt_id=rand(0000,9999);
$dt2=date("Y-m-d H:i:s");
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);
$username = md5(uniqid());

$salary = strip_tags($_POST['salary1']);
$creator_id = strip_tags($_POST['creator_id']);

$first_name = strip_tags($_POST['first_name']);
$last_name = strip_tags($_POST['last_name']);


$fullname = "$last_name $first_name";



$b_name = strip_tags($_POST['b_name']);
$b_address = strip_tags($_POST['b_address']);
$b_email = strip_tags($_POST['b_email']);
$b_country = strip_tags($_POST['b_country']);
$b_city = strip_tags($_POST['b_city']);
$b_postcode = strip_tags($_POST['b_postcode']);
$b_account_number = strip_tags($_POST['b_account_number']);
$bank_name = strip_tags($_POST['bank_name']);
$b_state = strip_tags($_POST['b_state']);
$b_identification_type = strip_tags($_POST['b_identification_type']);
$b_identification_value = strip_tags($_POST['b_identification_value']);
$b_bic_swift = strip_tags($_POST['b_bic_swift']);
$b_ach_code = strip_tags($_POST['b_ach_code']);
$b_beneficiary_country = strip_tags($_POST['b_beneficiary_country']);
$b_beneficiary_entity_type = strip_tags($_POST['b_beneficiary_entity_type']);


$emailaddress_pot =$_POST['emailaddress_pot'];


if ($file_content == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Files Upload is empty</font></div>";
exit();
}



if ($fullname == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>fullname Name is empty</font></div>";
exit();
}

if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is empty</font></div>";
exit();
}

$em= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$em){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is Invalid</font></div>";
exit();
}

$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>IP Address is Invalid</font></div>";
exit();
}


$allowed_types=array(
'application/json',
'application/octet-stream',
'text/plain',
'image/gif',
'image/jpeg',
'image/png',
'image/jpg',
'image/GIF',
'image/JPEG',
'image/PNG',
'image/JPG'
);
//validate image using file info  method
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['file_content']['tmp_name']);
if ( ! ( in_array($mime, $allowed_types) ) ) {
  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Images are allowed...<br></div>";

exit();

}
finfo_close($finfo);


if($_FILES['file_content']['name'] != ''){
   $uploading_file = $_FILES['file_content'];
    $uploading_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $uploading_file, $uploading_overrides);
		
    $fileurl = "";
    if ( $movefile && ! isset( $movefile['error'] ) ) {
       $fileurl = $movefile['url'];
       //echo "$fileurl";
    } else {
       echo $movefile['error'];
    }
  }
  
  //echo "$fileurl";
 
//table name
	$tablename_match = $wpdb->prefix."employees_rapyd2021";
// check if email already Exist
       $res_user = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_match` WHERE email = %s;"
            , [$email]
        ));

        if(count($res_user) > 0){
echo "<br><div class='alert alert-danger'  id='alertdata_uploadfiles'><b><font color=red><b></b>This Email is already taken</font></b><br>";
exit();
}
$timer = time();
$dt2=date("Y-m-d H:i:s");
$created_time ='00000';

$token1= md5(uniqid());
$token2 = time();
$token = $token1.$token2;
$app ='myapp';
$ewallet_reference_id= "$first_name-$last_name-$timer-$app";

$body = [
    'first_name' => "$first_name",
    'last_name' => "$last_name",
    'email' => '',
    'ewallet_reference_id' => "$ewallet_reference_id",
    'metadata' => [
        'merchant_defined' => true
    ],
    'phone_number' => '',
    'type' => 'person',
    'contact' => [
        'phone_number' => '+14155551234',
        'email' => 'johndoe@rapyd.net',
        'first_name' => "$first_name",
        'last_name' => "$last_name",
        'mothers_name' => 'Jane Smith',
        'contact_type' => 'personal',
        'address' => [
            'name' => 'John Doe',
            'line_1' => '123 Main Street',
            'line_2' => '',
            'line_3' => '',
            'city' => 'Anytown',
            'state' => 'NYAA',
            'country' => 'RU',
            'zip' => '12345',
            'phone_number' => '+14155551234',
            'metadata' => [],
            'canton' => '',
            'district' => '',
        ],
        'identification_type' => 'PA',
        'identification_number' => '1234567890',
        'date_of_birth' => '11/22/2000',
        'country' => 'RU',
        'metadata' => [
                'merchant_defined' => true
        ],
      ],
    ];


try {
    $object = make_request('post', '/v1/user', $body);
$json = json_decode(json_encode($object), true);

//$json = json_encode($object, true);
 print_r($object);

$status_success = $json['status']['status'];
$wallet_id= $json['data']['id'];
$account_status = 'ACT';

if($status_success !='SUCCESS'){
	echo "<div style='background:red;color:white;padding:10px;border-none;'>There is a Problem creating Wallets for Your Employees</div><br>";

	 print_r($json);
	 exit();
}

} catch(Exception $e) {


    echo "Error: $e";
}

//echo "iam $wallet_id";

if($wallet_id ==''){

echo "<script>alert('There is a Problem creating Wallets for Your Employees. Please Ensure there is Internet Connections');</script>";
echo "<div style='background:red;color:white;padding:10px;border-none;'>There is a Problem creating Wallets for Your Employees. Please Ensure there is Internet Connections</div><br>";

 //print_r($json);
	 exit();
	
}

$lastdate_pay ='0:0';
$lastdate_time ='0:0';
$payment_status = 'none';
$final_filename = $fileurl;

$tablename = $wpdb->prefix."employees_rapyd2021";
$sql = $wpdb->prepare("INSERT INTO `$tablename` (fullname,email,photo,department,phone_no,created_time,timer,lastdate_pay,lastdate_time,payment_status,user_token,salary,creator_id,first_name,last_name,wallet_id,b_name,b_address,b_email,b_country,b_city,b_postcode,b_account_number,bank_name,b_state,b_identification_type,b_identification_value,b_bic_swift,b_ach_code,b_beneficiary_country,b_beneficiary_entity_type) values (%s, %s, %s, %s, %s,%s, %s, %s, %s, %s,%s, %s, %s, %s, %s,%s, %s, %s, %s, %s,%s, %s, %s, %s, %s,%s, %s, %s, %s, %s, %s)", $fullname,$email,$final_filename,$user_rank,$phone_no,$created_time,$timer,$lastdate_pay,$lastdate_time,$payment_status,$token,$salary,$creator_id,$first_name,$last_name,$wallet_id,$fullname,$b_address,$b_email,$b_country,$b_city,$b_postcode,$b_account_number,$bank_name,$b_state,$b_identification_type,$b_identification_value,$b_bic_swift,$b_ach_code,$b_beneficiary_country,$b_beneficiary_entity_type);
$sql_res = $wpdb->query($sql);






// update Employes Count
$tablename_match1 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
// check if email already Exist
       $res_user2 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_match1` WHERE creator_id = %s;"
            , [$creator_id]
        ));

        if(count($res_user2) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none'>You will need to create wallet First.</div>"
}

$id = $res_user2[0]->id;
$total_employee = $res_user2[0]->total_employee;
$ftotal = $total_employee + 1;


$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename_match1` SET total_employee= %s WHERE creator_id = %s;"
            , [$ftotal, $creator_id]
        ));

		$ad_url = admin_url('admin.php');
		echo "<script>alert('Employees Data Created Successfully');</script>";
echo "<script>
    window.location.href = '$ad_url?page=myplugin1_Rapyd_Payments2021';
</script>";
	/*	
if($update1){

 } else {
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Your Data cannot be submitted to database.<br></div>";
                }
				*/
				

wp_die(); //  wordpress die to terminate immediately and display a Response


}

// send employees to database ends here






// load employees Start Here
add_action('wp_ajax_my_action_employees_action2021_load', 'my_action_employees_action2021_load');
function my_action_employees_action2021_load() {
	

	
//ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
//set_time_limit(300);




global $wpdb; // this is how you get access to the database
$tablename_employees = $wpdb->prefix."employees_rapyd2021";

$queryid = $_POST['queryid'];
$page_row_call = $_POST['page_row_call'];


$owner_id= strip_tags($_POST['owner_id']);


$tablename_match1 = $wpdb->prefix."employees_rapyd2021";
       $res_user2 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_match1` WHERE creator_id = %s order by id;"
            , [$owner_id]
        ));
		
$id = $res_user2[0]->id;
$totalcount = count($res_user2);

        if(count($res_user2) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none;'>No Employee has been added yet.. <b></b></div>";
echo 11;
exit();
}


$tablename = $wpdb->prefix."employees_rapyd2021";
       $result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id = %s order by id DESC limit %d, %d;"
            , [$owner_id, $queryid, $page_row_call]
        ));
$count_post = count($result);		
		

$result_arr = array();
$result_arr[] = array("allcount" => $totalcount);
//while($row = $result->fetch()){
foreach($result as $row){
$id = $row->id;

//$id = htmlentities(htmlentities($row['id'], ENT_QUOTES, "UTF-8"));
$fullname = $row->fullname;
$email = $row->email;
$phone_no = $row->phone_no;
$photo = $row->photo;
$department = $row->department;
$created_time = $row->created_time;
$timer = $row->timer;
$user_token = $row->user_token;
$salary = $row->salary;
$first_name = $row->first_name;
$last_name= $row->last_name;
$wallet_id = $row->wallet_id;


$b_name = $row->b_name;
$b_address = $row->b_address;
$b_email = $row->b_email;
$b_country = $row->b_country;
$b_city = $row->b_city;
$b_postcode = $row->b_postcode;
$b_account_number = $row->b_account_no;
$bank_name = $row->b_bank_name;
$b_state = $row->b_state;
$b_identification_type = $row->b_identification_type;
$b_identification_value = $row->b_identification_value;
$b_bic_swift = $row->b_bic_swift;
$b_ach_code = $row->b_ach_code;
$b_beneficiary_country = $row->b_beneficiary_country;
$b_beneficiary_entity_type = $row->b_beneficiary_entity_type;




$result_arr[] = array(
"id" => $id,
"fullname" => $fullname,
"email" => $email,
"phone_no" => $phone_no,
"photo" => $photo,
"department" => $department,
"created_time" => $created_time,
"timer" => $timer,
"user_token" => $user_token,
"salary" => $salary,
"first_name" => $first_name,
"last_name" => $last_name,
"wallet_id" => $wallet_id,

"b_name" => $b_name,
"b_address" => $b_address,
"b_email" => $b_email,
"b_country" => $b_country,
"b_city" => $b_city,
"b_postcode" => $b_postcode,
"b_account_number" => $b_account_number,
"bank_name" => $bank_name,
"b_state" => $b_state,
"b_identification_type" => $b_identification_type,
"b_identification_value" => $b_identification_value,
"b_bic_swift" => $b_bic_swift,
"b_ach_code" => $b_ach_code,
"b_beneficiary_country" => $b_beneficiary_country,
"b_beneficiary_entity_type" => $b_beneficiary_entity_type

);


}
echo json_encode($result_arr);

	
wp_die(); //  wordpress die to terminate immediately and display a Response

}
// Load Employees Ends here







// Api settings  start here

add_action('wp_ajax_my_action_employees_action2021_settings', 'my_action_employees_action2021_settings');
function my_action_employees_action2021_settings() {
	error_reporting(0);
	global $wpdb;
	
$company_name = strip_tags($_POST['c1x_name']);
$location = strip_tags($_POST['c1x_location']);
$creator_id = strip_tags($_POST['owner_id']);
$action = strip_tags($_POST['action']);




if ($company_name == ''){
echo "<div style='background:red;padding:10px;color:white' id='alerts_reg'>Company/Team Name cannot be Empty</div>";
exit();
}

if ($location == ''){
echo "<div style='background:red;padding:10px;color:white' id='alerts_reg'>Location Address cannot be Empty</div>";
exit();
}
if ($creator_id == ''){
echo "<div style='background:red;padding:10px;color:white' id='alerts_reg'>Admin Id cannot be Empty</div>";
exit();
}


$timer = time();
$dt2=date("Y-m-d H:i:s");
$token1= md5(uniqid());
$token2 = time();
$token = $token1.$token2;



$tablename = $wpdb->prefix."settings_rapyd2021";
$res_user = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id = %s;"
            , [$creator_id]
        ));

//get results
$cid = $res_user[0]->creator_id;
// row counts

//start if for row count
//if(count($res_user) == 0){
$rowcounting = count($res_user);

if($rowcounting ==0){
$dd ='ok';
$sql = $wpdb->prepare("INSERT INTO `$tablename` (`company_name`, `location`, `data`, `creator_id`, `timing`) values (%s, %s, %s, %s, %s)", $company_name, $location, $dd, $creator_id , $timer);
$sql_res = $wpdb->query($sql);

//get last inserted id
$id = (int) $wpdb->insert_id;


$total_fund_fund ='0.0';
$total_fund_spend ='0.0';
$total_employee = 0;
$tablename2 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
$sql2 = $wpdb->prepare("INSERT INTO `$tablename2` (`total_fund_fund`, `total_fund_spend`, `total_employee`, `creator_id`) values (%s, %s, %s, %s)", $total_fund_fund, $total_fund_spend, $total_employee, $creator_id);
$sql_res2 = $wpdb->query($sql2);

$tablename3 = $wpdb->prefix."employeers_bankinfo_rapyd2021";
$sql3 = $wpdb->prepare("INSERT INTO `$tablename3` (`creator_id`) values (%s)", $creator_id);
$sql_res3 = $wpdb->query($sql3);


$ad_url =admin_url('admin.php');

if($sql_res3){
echo "<div id='alertdata_uploadfiles_o' style='color:purple;font-size:16px;'>Settings  Successfully.
.Redirecting in a second to <b>Application Dashboard</b>....<br></div>";

echo "<script>
alert('Settings Done Successfully');
window.setTimeout(function() {
    window.location.href = '$ad_url?page=myplugin1_Rapyd_Payments2021';
}, 1000);
</script><br><br>";

}
 else {
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Your Data cannot be submitted to database.<br></div>";
                }

}
// close if for row count

if($rowcounting > 0){
// updates	

$updates = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename` SET company_name= %s, location=%s, timing= %s WHERE creator_id = %s;"
            , [$company_name, $location, $timer, $creator_id]
        ));
		
		if($updates){
echo "<div id='alertdata_uploadfiles_o' style='color:purple;font-size:16px;'>Data Created Successfully.
.Redirecting in a second.....<br></div>";

echo "<script>
window.setTimeout(function() {
    window.location.href = '$ad_url?page=settings_rapyd';
}, 1000);
</script><br><br>";

}
 else {
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Your Data cannot be submitted to database.<br></div>";
                }
				
				
		
}
  
   
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

//API Settings Ends here




// API Settings loads start here
add_action('wp_ajax_my_action_employees_action2021_load_api', 'my_action_employees_action2021_load_api');
function my_action_employees_action2021_load_api() {
	error_reporting(0);
global $wpdb;

$creator_id = strip_tags($_POST['idxc1']);
$action = strip_tags($_POST['action']);

$tablename = $wpdb->prefix."settings_rapyd2021";
$res_user = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id = %s;"
            , [$creator_id]
        ));
		
		$rowcounting = count($res_user);

if($rowcounting ==0){
echo "<div style='background:red;color:white;padding:10px;'>Please Update Your Rapyd Settings First.</div>";	
exit();	
}

//get results
$cid = $res_user[0]->creator_id;
$company_name= $res_user[0]->company_name;
$location = $res_user[0]->location;
$timing = $res_user[0]->timing;


echo "<div class='cx1'>
<b >Company/Team Name: </b> $company_name<br>
<b >Locations: </b> $location<br>
<span style='color:green;'><b>Last Time Updated: </b> <span data-livestamp='$timing'></span></span> 
</div>";


wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

//API Settings loads Ends here




// Create wallets  start here

add_action('wp_ajax_my_action_employees_action2021_create_wallets', 'my_action_employees_action2021_create_wallets');
function my_action_employees_action2021_create_wallets() {
	
	global $wpdb;
	$tablename = $wpdb->prefix."wallets_rapyd2021";
	
	
$timing = time();
$token1= md5(uniqid());
$token2 = time();
$token = $token1.$token2;

$app ='myapp';
$creator_id = strip_tags($_POST['creator_id']);
$first_name= strip_tags($_POST['first_name']);
$last_name= strip_tags($_POST['last_name']);


$email= strip_tags($_POST['email_w']);
$phone_number= strip_tags($_POST['phone_number']);

$mothers_name= strip_tags($_POST['mothers_name']);
$contact_type= strip_tags($_POST['contact_type']);
$identification_type= strip_tags($_POST['identification_type']);
$identification_number= strip_tags($_POST['identification_number']);
$date_of_birth= strip_tags($_POST['date_of_birth']);
$country= strip_tags($_POST['country']);

$fname = "$last_name $first_name";

$ewallet_reference_id= "$first_name-$last_name-$timing-$app";
$full_name = "$first_name $last_name";

include('utilities.php');
$body = [
    'first_name' => "$first_name",
    'last_name' => "$last_name",
    'email' => '',
    'ewallet_reference_id' => "$ewallet_reference_id",
    'metadata' => [
        'merchant_defined' => true
    ],
    'phone_number' => '',
    'type' => 'person',
    'contact' => [
        'phone_number' => "$phone_number",
        'email' => "$email",
        'first_name' => "$first_name",
        'last_name' => "$last_name",
        'mothers_name' => "$mothers_name",
        'contact_type' => "$contact_type",
        'address' => [
            'name' => "$fname",
            'line_1' => '123 Main Street',
            'line_2' => '',
            'line_3' => '',
            'city' => 'Anytown',
            'state' => 'NYAA',
            'country' => "$country",
            'zip' => '12345',
            'phone_number' => "$phone_number",
            'metadata' => [],
            'canton' => '',
            'district' => '',
        ],
        'identification_type' => "$identification_type",
        'identification_number' => "$identification_number",
        'date_of_birth' => "$date_of_birth",
        'country' => "$country",
        'metadata' => [
                'merchant_defined' => true
        ],
      ],
    ];


try {
    $object = make_request('post', '/v1/user', $body);
$json = json_decode(json_encode($object), true);

//$json = json_encode($object, true);
print_r($json);

$status_success = $json['status']['status'];
$wallet_id= $json['data']['id'];
$account_status = 'ACT';

if($status_success !='SUCCESS'){
	echo "<div style='background:red;color:white;padding:10px;border-none;'>There is a Problem creating your Wallets</div><br>";

	 print_r($json);
	 exit();
}
// start for each if for success
if($status_success =='SUCCESS'){

//$phone_number ='+14155551234';
//$email = 'johndoe@rapyd.net';
$fund = '0.0';
$fund_time ='00:00:00';

$sql = $wpdb->prepare("INSERT INTO `$tablename` (phone_number,email,last_name,first_name,wallet_id,account_status,ewallet_reference_id,timing,fund,fund_time,creator_id) values (%s, %s, %s,%s, %s, %s,%s, %s, %s,%s, %s)", $phone_number,$email,$last_name, $first_name,$wallet_id, $account_status, $ewallet_reference_id,$timing,$fund,$fund_time,$creator_id);
$sql_res2 = $wpdb->query($sql);

 // get last inserted id 
//$id = (int) $wpdb->insert_id;
$ad_url =admin_url('admin.php');

echo "<div style='background:green;color:white;padding:10px;border-none;'>Wallets Created Successfully. Redirecting in a seconds</div><br>";

echo "<script>
alert('Wallets Created Successfully. Redirecting in a seconds');
 window.location.href = '$ad_url?page=wallets_fund_rapyd';
</script>";


print_r($json);


}
// end if for success


} catch(Exception $e) {


    echo "Error: $e";
}





wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// create wallets ends here







// loads wallets  start here

add_action('wp_ajax_my_action_employees_action2021_load_wallets', 'my_action_employees_action2021_load_wallets');
function my_action_employees_action2021_load_wallets() {
	
	//url:'wallets_load.php',
	global $wpdb;
	$tablename = $wpdb->prefix."wallets_rapyd2021";
	
//ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
//set_time_limit(300);


$queryid = $_POST['queryid_wallets'];
$page_row_call = $_POST['page_row_call_wallets'];


$owner_id= strip_tags($_POST['owner_id']);
$creator_id = $owner_id;

$tablename_match1 = $wpdb->prefix."wallets_rapyd2021";
       $res_user2 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_match1` WHERE creator_id = %s order by id;"
            , [$owner_id]
        ));
		
$id = $res_user2[0]->id;
$totalcount = count($res_user2);

        if(count($res_user2) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none;'>No Wallets has been created yet.. <b></b></div>";
echo 11;
exit();
}


$tablename1 = $wpdb->prefix."wallets_rapyd2021";
       $result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename1` WHERE creator_id = %s order by id DESC limit %d, %d;"
            , [$owner_id, $queryid, $page_row_call]
        ));
$count_post = count($result);	

$result_arr = array();
$result_arr[] = array("allcount" => $totalcount);
//while($row = $result->fetch()){

 foreach($result as $row){
$id = $row->id;
$phone_number = $row->phone_number;
$email = $row->email;
$last_name = $row->last_name;
$first_name = $row->first_name;
$wallet_id = $row->wallet_id;
$timer = $row->timing;
$fund = $row->fund;
$fund_time = $row->fund_time;
$creator_id = $row->creator_id;


$result_arr[] = array(
"id" => $id,
"phone_number" => $phone_number,
"email" => $email,
"last_name" => $last_name,
"first_name" => $first_name,
"wallet_id" => $wallet_id,
"timer" => $timer,
"fund" => $fund,
"fund_time" => $fund_time,
"creator_id" => $creator_id
);


}
echo json_encode($result_arr);
	
	
		
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// loads wallets ends here






// fund wallets starts here

add_action('wp_ajax_my_action_employees_action2021_fund_wallets', 'my_action_employees_action2021_fund_wallets');
function my_action_employees_action2021_fund_wallets() {
	
	global $wpdb;
	
	

$timing = time();
$token1= md5(uniqid());
$token2 = time();
$token = $token1.$token2;


$creator_id = strip_tags($_POST['creator_id1']);
$amount1= strip_tags($_POST['amount1']);
$currency1= strip_tags($_POST['currency1']);

$description1 = strip_tags($_POST['description1']);
$name1= strip_tags($_POST['name1']);
$number1= strip_tags($_POST['number1']);

$expiration_month1 = strip_tags($_POST['expiration_month1']);
$expiration_year1= strip_tags($_POST['expiration_year1']);
$cvv1= strip_tags($_POST['cvv1']);
$walletid_call2_wallets= strip_tags($_POST['walletid_call2_wallets']); 

if($amount1 > 1000){
	echo "<script>alert('At Sandbox Level, You are not allowed to fund wallets above 1000(USD). Try lesser Amount. Eg. 900');</script>";
	//echo "<div style='color:white;background:red;padding:10px;'>At Sandbox Level, You are not allowed to fund wallets above 1000(USD). Try lesser Amount Eg. 900</div>";
exit();	
}

// get balance

include('utilities.php');
try {
    $object1 = make_request('get', "/v1/user/$walletid_call2_wallets/accounts" );
    //var_dump($object1);
$json1 = json_decode(json_encode($object1), true);


$json2 = json_encode($json1, true);
print_r($json2);

$status_success1 = $json1['status']['status'];
$da= $json1['data'];

if($da==[]){
//echo "Wallets is empty";
$balance= '0';
}else{

//echo "<div style='color:white;background:green;padding:10px;'>Balance Found</div>";
echo $balance= $json1['data'][0]['balance'];
}



} catch(Exception $e) {
    echo "Error: $e";
}



// make payments now via RAPYD Collect


$body = [
    'receipt_email' => 'johndow@rapyd.net',
     "amount"=> "$amount1",
    "currency"=> "$currency1",
    "description"=> "$description1",

  "ewallets"=> [
[
            "ewallet"=> "$walletid_call2_wallets",
            "percentage"=> 100
        
   ] 
],


"payment_method" => [
    "type"=> "is_visa_card",
    "fields"=> [
        "name"=> "Test User",
        "number"=> "4111111111111111",
        "expiration_month"=> "08",
        "expiration_year"=> "24",
        "cvv"=> "789"
    ]
    ],
];

try {
    $object2a = make_request('post', '/v1/payments', $body);
$json2a = json_decode(json_encode($object2a), true);


$json3a = json_encode($json2a, true);
print_r($json3a);

$success = $json2a['status']['status'];
$payment_id= $json2a['data']['id'];
$amount= $json2a['data']['amount'];
$final_balance = $balance  + $amount;


$tablename1 = $wpdb->prefix."wallets_rapyd2021";
	$tablename2 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
	

$update = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename1` SET fund= %s WHERE wallet_id = %s and creator_id=%s;"
            , [$final_balance, $walletid_call2_wallets, $creator_id]
        ));

//query updates_data_rapyd tables

       $res_user2 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename2` WHERE creator_id = %s;"
            , [$creator_id]
        ));

        if(count($res_user2) == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>You will need to create wallet First.</div>";
}

$totalcount = count($res_user2);
$id = $res_user2[0]->id;
$total_fund_fund = $res_user2[0]->total_fund_fund;
$total_fund_spend = $res_user2[0]->total_fund_spend;
$total_fund_available = $res_user2[0]->total_fund_available;
$ftotal = $total_fund_fund + $amount1;


$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename2` SET total_fund_fund= %s WHERE creator_id=%s;"
            , [$ftotal, $creator_id]
        ));

} catch(Exception $e) {
    echo "Error: $e";
}

$ad_url =admin_url('admin.php');
if($update1){
	//echo "<div style='color:white;background:green;padding:10px;'>Wallet Funding Successful. Redirecting in 1 seconds</div>";
	echo "<script>
	alert('Wallet Funding Successful');
window.setTimeout(function() {
    window.location.href = '$ad_url?page=wallets_fund_rapyd';
}, 1000);
</script><br><br>";

}else{
	echo "<div style='color:white;background:red;padding:10px;'>Wallet Funding Failed</div>";
	
}



		
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// fund wallets ends here







// check fund wallets starts here

add_action('wp_ajax_my_action_employees_action2021_fund_wallets_check', 'my_action_employees_action2021_fund_wallets_check');
function my_action_employees_action2021_fund_wallets_check() {
	
	global $wpdb;

$timing = time();
$creator_id = strip_tags($_POST['c_id']);
$walletid_call2_wallets= strip_tags($_POST['w_id']);



// get balance
include('utilities.php');

try {
    $object1 = make_request('get', "/v1/user/$walletid_call2_wallets/accounts" );
    //var_dump($object1);
$json1 = json_decode(json_encode($object1), true);


$json2 = json_encode($json1, true);
//print_r($json2);

$status_success1 = $json1['status']['status'];
$da= $json1['data'];

if($da==[]){
echo "<div style='color:white;background:red;padding:10px;'>Wallets is Empty</div>";
$balance= '0';
}else{
$balance= $json1['data'][0]['balance'];
echo "<div style='color:white;background:green;padding:10px;'>Your Balance is: $balance(USD)</div>";

}



} catch(Exception $e) {
    echo "Error: $e";
}

if($status_success1 ==''){
	echo "<script>
	alert('Please Ensure there is Internet Connection and Try Again');
	</script>";
	
echo "<div style='color:white;background:red;padding:10px;'>Please Ensure there is Internet Connection and Try Again</div>";	
exit();	
}


$tablename1 = $wpdb->prefix."wallets_rapyd2021";
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename1` SET fund= %s WHERE wallet_id = %s and creator_id=%s;"
            , [$balance, $walletid_call2_wallets, $creator_id]
        ));

$ad_url =admin_url('admin.php');
	echo "<script>
	alert('Alert Your Balance is: $balance(USD)');
	window.location.href = '$ad_url?page=wallets_fund_rapyd';
	
	//window.location.href = window.location.href;
/*	
window.setTimeout(function() {
    window.location.href = 'wallets_create_fund.html';
}, 1000);
*/
</script>";



	
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// check fund wallets ends here






// employee delete starts here

add_action('wp_ajax_my_action_employees_action2021_emp_del', 'my_action_employees_action2021_emp_del');
function my_action_employees_action2021_emp_del() {
	error_reporting(0);
	global $wpdb;

$id=strip_tags($_POST['id']);
$creator_id=strip_tags($_POST['creator_idxv']);

$tablename1 = $wpdb->prefix."employees_rapyd2021";
$del = $wpdb->delete('wp_employees_rapyd2021', array('id' => $id), array('%d'));

// you will also need to delete from updates_data_rapyd_rapyd2021

	$tablename2 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
       $res_result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename2` WHERE creator_id = %s;"
            , [$creator_id]
        ));

$nosofrows = count($res_result);
$rec_List1 = $nosofrows;
if($rec_List1  == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>This Employeer has not Updated Anything Yet. Try Adding Employees, Create and Fund Your Wallets. Pay your Employees.</div>";
}

//get results
$id = $res_result[0]->id;
$total_employee = $res_result[0]->total_employee;
$emp_total = $total_employee - 1;

$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename2` SET total_employee= %s WHERE creator_id=%s;"
            , [$emp_total, $creator_id]
        ));





if($del){

echo 1;
}else{

echo 0;
}
	
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// employee delete ends here



// load wallets Expenditures starts here

add_action('wp_ajax_my_action_employees_action2021_load_wallets_expenses', 'my_action_employees_action2021_load_wallets_expenses');
function my_action_employees_action2021_load_wallets_expenses() {
	//error_reporting(0);
	global $wpdb;

$creator_id=strip_tags($_POST['idxc']);

	$tablename = $wpdb->prefix."updates_data_rapyd_rapyd2021";
       $res_result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id = %s;"
            , [$creator_id]
        ));

$nosofrows = count($res_result);
$rec_List1 = $nosofrows;

if($rec_List1  == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>This Employeer has not Updated Anything Yet. Try Adding Employees, Create and Fund Your Wallets. Pay your Employees.</div>";
}

//get results
$id = $res_result[0]->id;
$total_fund_fund = $res_result[0]->total_fund_fund;
$total_fund_spend= $res_result[0]->total_fund_spend;
$total_employee = $res_result[0]->total_employee;
$total_fund_available =  $res_result[0]->total_fund_available;


echo "<div class='col-sm-12 notify_content_css' >
<div class='col-sm-4 cx1'>
<b >Total Amount Funded to Wallets So Far: <br>$total_fund_fund (USD)</b><br>
</div>

<div class='col-sm-4 cx1'>
<b >Total Amount Spent on Salaries so Far: <br>$total_fund_spend (USD)</b><br>
</div>

<div class='col-sm-4 cx1'>
<b>Total No. of Employees: <br>$total_employee</b><br>
</div>

</div>";



	
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// load wallets Expenditures ends here








// employers banking info updates starts here

add_action('wp_ajax_my_action_employees_action2021_employer_bank_updates', 'my_action_employees_action2021_employer_bank_updates');
function my_action_employees_action2021_employer_bank_updates() {
	error_reporting(0);
	global $wpdb;



$timing = time();
$creator_id = strip_tags($_POST['creator_id1']);
$s_description= strip_tags($_POST['s_description']);
$s_merchant_reference_id= strip_tags($_POST['s_merchant_reference_id']);
$s_payout_currency= strip_tags($_POST['s_payout_currency']);
$s_payout_method_type= strip_tags($_POST['s_payout_method_type']);
$s_name= strip_tags($_POST['s_name']);
$s_address= strip_tags($_POST['s_address']);
$s_city= strip_tags($_POST['s_city']);
$s_state= strip_tags($_POST['s_state']);
$s_date_of_birth= strip_tags($_POST['s_date_of_birth']);
$s_postcode= strip_tags($_POST['s_postcode']);
$s_phonenumber= strip_tags($_POST['s_phonenumber']);
$s_remitter_account_type= strip_tags($_POST['s_remitter_account_type']);
$s_source_of_income= strip_tags($_POST['s_source_of_income']);
$s_identification_type= strip_tags($_POST['s_identification_type']);
$s_identification_value= strip_tags($_POST['s_identification_value']);
$s_purpose_code= strip_tags($_POST['s_purpose_code']);
$s_account_number= strip_tags($_POST['s_account_number']);
$s_beneficiary_relationship= strip_tags($_POST['s_beneficiary_relationship']);
$s_sender_country= strip_tags($_POST['s_sender_country']);
$s_sender_currency= strip_tags($_POST['s_sender_currency']);
$s_sender_entity_type= strip_tags($_POST['s_sender_entity_type']);


$ok ='ok';

$tablename = $wpdb->prefix."employeers_bankinfo_rapyd2021";
$updates1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename` SET
s_description=%s,
s_merchant_reference_id=%s,
s_payout_currency=%s,
s_payout_method_type=%s,
s_name=%s,
s_address=%s,
s_city=%s,
s_state=%s,
s_date_of_birth=%s,
s_postcode=%s,
s_phonenumber=%s,
s_remitter_account_type=%s,
s_source_of_income=%s,
s_identification_type=%s,
s_identification_value=%s,
s_purpose_code=%s,
s_account_number=%s,
s_beneficiary_relationship=%s,
s_sender_country=%s,
s_sender_currency=%s,
s_sender_entity_type=%s, 
status=%s, 
timing=%s WHERE creator_id = %s;"
            , [
$s_description, 
$s_merchant_reference_id,
$s_payout_currency,
$s_payout_method_type,
$s_name,
$s_address,
$s_city,
$s_state,
$s_date_of_birth,
$s_postcode,
$s_phonenumber,
$s_remitter_account_type,
$s_source_of_income,
$s_identification_type,
$s_identification_value,
$s_purpose_code,
$s_account_number,
$s_beneficiary_relationship,
$s_sender_country,
$s_sender_currency,
$s_sender_entity_type,
$ok,
$timing,
$creator_id
]));

$ad_url =admin_url('admin.php');
if($updates1){
	//echo "<div style='color:white;background:green;padding:10px;'>Bank Info Updates Successful. Redirecting in 1 seconds</div>";
	echo "<script>
	alert('Bank Info Updates Successful');
window.setTimeout(function() {
    window.location.href = '$ad_url?page=bankinfo_rapyd';
}, 1000);
</script><br><br>";

}else{
	echo "<div style='color:white;background:red;padding:10px;'>Bank Info Updates Failed</div>";
	
}



wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
//  employers banking info updates ends here








// employers banking info  loads starts here

add_action('wp_ajax_my_action_employees_action2021_employer_bank_updates_load', 'my_action_employees_action2021_employer_bank_updates_load');
function my_action_employees_action2021_employer_bank_updates_load() {
	//error_reporting(0);
	global $wpdb;

$creator_id=strip_tags($_POST['creator_id2']);

$tablename = $wpdb->prefix."employeers_bankinfo_rapyd2021";
  $res_row = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id = %s;"
            , [$creator_id]
        ));

        if(count($res_row) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none'>This info does not exist</div>";
}

$totalcount = count($res_row);

//echo "am tot: $totalcount";

$id = $res_row[0]->id;
$s_description = $res_row[0]->s_description;
$s_merchant_reference_id = $res_row[0]->s_merchant_reference_id;
$s_payout_currency = $res_row[0]->s_payout_currency;
$s_payout_method_type = $res_row[0]->s_payout_method_type;
$s_name = $res_row[0]->s_name;
$s_address = $res_row[0]->s_address;
$s_city = $res_row[0]->s_city;
$s_state = $res_row[0]->s_state;
$s_date_of_birth = $res_row[0]->s_date_of_birth;
$s_postcode = $res_row[0]->s_postcode;
$s_phonenumber = $res_row[0]->s_phonenumber;
$s_remitter_account_type = $res_row[0]->s_remitter_account_type;
$s_source_of_income = $res_row[0]->s_source_of_income;
$s_identification_type = $res_row[0]->s_identification_type;
$s_identification_value = $res_row[0]->s_identification_value;
$s_purpose_code = $res_row[0]->s_purpose_code;
$s_account_number = $res_row[0]->s_account_number;
$s_beneficiary_relationship = $res_row[0]->s_beneficiary_relationship;
$s_sender_country = $res_row[0]->s_sender_country;
$s_sender_currency = $res_row[0]->s_sender_currency;
$s_sender_entity_type = $res_row[0]->s_sender_entity_type;
$status = $res_row[0]->status;
$timing = $res_row[0]->timing;

if($status  != 'ok'){
echo "<div style='background:red;color:white;padding:10px;border:none'>Hey Employeer. Please Update your Banking Info to Facilitates Your
Employees Payout to their Bank Accounts. (Scroll Down left and Click Update Bank Info Button)</div>";
//exit();
}


echo "<div class='col-sm-12 notify_content_css' >
<div  style='color:black;padding:10px;background:#ddd'>


<b>Description:</b> $s_description<br>
<b>Merchant_reference_id:</b> $s_merchant_reference_id<br>
<b>Payout_currency:</b> $s_payout_currency<br>
<b>Payout_method_type:</b> $s_payout_method_type<br>

<b>Name:</b> $s_name <br>
<b>Address:</b> $s_address<br>
<b>City:</b> $s_city<br>
<b>State:</b> $s_state<br>

<b>Date_of_birth:</b> $s_date_of_birth<br>
<b>Postcode:</b> $s_postcode<br>
<b>Phonenumber:</b> $s_phonenumber<br>
<b>Remitter_account_type:</b> $s_remitter_account_type<br>

<b>Source_of_income:</b> $s_source_of_income<br>
<b>Identification_type:</b> $s_identification_type<br>
<b>Identification_value:</b> $s_identification_value<br>
<b>Purpose_code:</b> $s_purpose_code<br>

<b>Account_number:</b> $s_account_number<br>
<b>Beneficiary_relationship:</b> $s_beneficiary_relationship<br>
<b>Sender_country:</b> $s_sender_country<br>
<b>Sender_currency:</b> $s_sender_currency<br>


<b>Sender_entity_type:</b> $s_sender_entity_type<br>


<span style='color:green;font-size:18px'><b>Last Updated Time: </b> <span data-livestamp='$timing'></span></span> 


<br>

</div></div>";

wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
//  employers banking info loads ends here







// load employees salary data starts here

add_action('wp_ajax_my_action_employees_action2021_load_employees_data', 'my_action_employees_action2021_load_employees_data');
function my_action_employees_action2021_load_employees_data() {
	//error_reporting(0);
	global $wpdb;

	
	

$id=strip_tags($_POST['uid']);
$token=strip_tags($_POST['token']);


$tablename = $wpdb->prefix."employees_rapyd2021";
  $res_row = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE id = %d and user_token = %s;"
            , [$id, $token]
        ));

        if(count($res_row) == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>This User Info Does not Exist.</div>";
}

$totalcount = count($res_row);
$id = $res_row[0]->id;

$fullname = $res_row[0]->fullname;
$email = $res_row[0]->email;
$photo = $res_row[0]->photo;
$department =  $res_row[0]->department;
$timing =  $res_row[0]->timer;
$phone_no =  $res_row[0]->phone_no;
$salary =  $res_row[0]->salary;
$wallet_id =  $res_row[0]->wallet_id;


echo "<div class='col-sm-12 notify_content_css'>
<div  style='color:black;padding:10px;background:#ddd'>
<div class='col-sm-6'>
<img style='max-height:140px;max-width:140px;' class='img-circle' src='$photo' alt='User Image'><br>
</div>

<div class='col-sm-6'>
<b>Fullname:</b> $fullname<br>
<b>Email:</b> $email<br>
<b>Contacts:</b> $phone_no<br>
<b>Departments:</b>$department<br>

<b style='font-size:16px;color:purple'>Salary: $salary (USD)</b><br>
<b style='font-size:16px;color:#800000'>Wallet Id: $wallet_id</b><br>
<span style='color:#800000;'><b>Created Time: </b> <span data-livestamp='$timing'></span></span> 
</div>

<br>

</div></div>";


wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// load employees salary data ends here








// load payout dropdown wallets info starts here

add_action('wp_ajax_my_action_employees_action2021_load_dropdown_wallets', 'my_action_employees_action2021_load_dropdown_wallets');
function my_action_employees_action2021_load_dropdown_wallets() {
	//error_reporting(0);
	global $wpdb;
	
	
	$creator_id = strip_tags($_POST['creator_id']);
	$user_id = strip_tags($_POST['n_uid']);
	$user_token = strip_tags($_POST['n_token']);

	
	// get employees wallet id

$tablename = $wpdb->prefix."employees_rapyd2021";
  $res_row = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id =%s and id = %d and user_token = %s;"
            , [$creator_id, $user_id, $user_token]
        ));

        if(count($res_row) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none'>This User Info Does not Exist.</div>";
}

$totalcount = count($res_row);
$idx = $res_row[0]->id;
$employees_ewallet_id = $res_row[0]->wallet_id;


//get employeers wallet id
$tablename2 = $wpdb->prefix."wallets_rapyd2021";
  $result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename2` WHERE creator_id =%s;"
            , [$creator_id]
        ));

$res = array();
foreach($result as $vs){
		$res[] = array(
				$id => $vs->id,
				"wallet_id" => $vs->wallet_id,
				"employee_wallet_id" =>$employees_ewallet_id
			);
	}

	echo json_encode($res);
	exit;

	
	
	
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

// load payout dropdown wallets info ends here








// load employers_employees_wallets data starts here

add_action('wp_ajax_my_action_employees_action2021_employers_employees_wallets', 'my_action_employees_action2021_employers_employees_wallets');
function my_action_employees_action2021_employers_employees_wallets() {
	//error_reporting(0);
	global $wpdb;
	
	
	
$creator_id = strip_tags($_POST['creator_id']);
$e_uid = strip_tags($_POST['e_uid']);
$e_token = strip_tags($_POST['e_token']);


//echo "esedo";


$tablename = $wpdb->prefix."employeers_bankinfo_rapyd2021";
  $res_row = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id =%s;"
            , [$creator_id]
        ));
$totalcount = count($res_row);
$idx = $res_row[0]->id;
$s_description = $res_row[0]->s_description;
$s_merchant_reference_id = $res_row[0]->s_merchant_reference_id;
$s_payout_currency = $res_row[0]->s_payout_currency;
$s_payout_method_type = $res_row[0]->s_payout_method_type;
$s_name = $res_row[0]->s_name;
$s_address = $res_row[0]->s_address;
$s_city = $res_row[0]->s_city;
$s_state = $res_row[0]->s_state;
$s_date_of_birth = $res_row[0]->s_date_of_birth;
$s_postcode = $res_row[0]->s_postcode;
$s_phonenumber = $res_row[0]->s_phonenumber;
$s_remitter_account_type = $res_row[0]->s_remitter_account_type;
$s_source_of_income = $res_row[0]->s_source_of_income;
$s_identification_type = $res_row[0]->s_identification_type;
$s_identification_value = $res_row[0]->s_identification_value;
$s_purpose_code = $res_row[0]->s_purpose_code;
$s_account_number = $res_row[0]->s_account_number;
$s_beneficiary_relationship = $res_row[0]->s_beneficiary_relationship;
$s_sender_country = $res_row[0]->s_sender_country;
$s_sender_currency = $res_row[0]->s_sender_currency;
$s_sender_entity_type = $res_row[0]->s_sender_entity_type;




$tablename2 = $wpdb->prefix."employees_rapyd2021";
  $result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename2` WHERE creator_id =%s and user_token =%s and id=%s;"
            , [$creator_id,$e_token,$e_uid]
        ));
		
$res = array();
foreach($result as $vs){
		$res[] = array(
				"id" => $vs->id,
				"wallet_id" => $vs->wallet_id,
				"salary" => $vs->salary,
"b_name" => $vs->b_name,
"b_address" => $vs->b_address,
"b_email" => $vs->b_email,
"b_country" => $vs->b_country,
"b_city" => $vs->b_city,
"b_postcode" => $vs->b_postcode,
"b_account_number" => $vs->b_account_number,
"bank_name" => $vs->bank_name,
"b_state" => $vs->b_state,
"b_identification_type" => $vs->b_identification_type,
"b_identification_value" => $vs->b_identification_value,
"b_bic_swift" => $vs->b_bic_swift,
"b_ach_code" => $vs->b_ach_code,
"b_beneficiary_country" => $vs->b_beneficiary_country,
"b_beneficiary_entity_type" => $vs->b_beneficiary_entity_type,
"s_description" => $s_description,
"s_merchant_reference_id" => $s_merchant_reference_id,
"s_payout_currency" => $s_payout_currency,
"s_payout_method_type" => $s_payout_method_type,
"s_name" => $s_name,
"s_address" => $s_address,
"s_city" => $s_city,
"s_state" => $s_state,
"s_date_of_birth" => $s_date_of_birth,
"s_postcode" => $s_postcode,
"s_phonenumber" => $s_phonenumber,
"s_remitter_account_type" => $s_remitter_account_type,
"s_source_of_income" => $s_source_of_income,
"s_identification_type" => $s_identification_type,
"s_identification_value" => $s_identification_value,
"s_purpose_code" => $s_purpose_code,
"s_account_number" => $s_account_number,
"s_beneficiary_relationship" => $s_beneficiary_relationship,
"s_sender_country" => $s_sender_country,
"s_sender_currency" => $s_sender_currency,
"s_sender_entity_type" => $s_sender_entity_type
			);
	}

	echo json_encode($res);
	exit;

	

wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

// load employers_employees_wallets data ends here







// salary paoyout to bank account starts here

add_action('wp_ajax_my_action_employees_action2021_salary_payout_banking', 'my_action_employees_action2021_salary_payout_banking');
function my_action_employees_action2021_salary_payout_banking() {
	//error_reporting(0);
	global $wpdb;
	
	

$timing = time();
 $creator_id = strip_tags($_POST['creator_id1']);
$s_description= strip_tags($_POST['s_description']);
$s_merchant_reference_id= strip_tags($_POST['s_merchant_reference_id']);
$s_payout_currency= strip_tags($_POST['s_payout_currency']);
$s_payout_method_type= strip_tags($_POST['s_payout_method_type']);
$s_name= strip_tags($_POST['s_name']);
$s_address= strip_tags($_POST['s_address']);
$s_city= strip_tags($_POST['s_city']);
$s_state= strip_tags($_POST['s_state']);
$s_date_of_birth= strip_tags($_POST['s_date_of_birth']);
$s_postcode= strip_tags($_POST['s_postcode']);
$s_phonenumber= strip_tags($_POST['s_phonenumber']);
$s_remitter_account_type= strip_tags($_POST['s_remitter_account_type']);
$s_source_of_income= strip_tags($_POST['s_source_of_income']);
$s_identification_type= strip_tags($_POST['s_identification_type']);
$s_identification_value= strip_tags($_POST['s_identification_value']);
$s_purpose_code= strip_tags($_POST['s_purpose_code']);
$s_account_number= strip_tags($_POST['s_account_number']);
$s_beneficiary_relationship= strip_tags($_POST['s_beneficiary_relationship']);
$s_sender_country= strip_tags($_POST['s_sender_country']);
$s_sender_currency= strip_tags($_POST['s_sender_currency']);
$s_sender_entity_type= strip_tags($_POST['s_sender_entity_type']);
$s_wallet_id = strip_tags($_POST['s_wallet_id']);

$employeer_s_wallet_id = $s_wallet_id;

$b_salary = strip_tags($_POST['b_salary']);
$b_name = strip_tags($_POST['b_name']);
$b_address = strip_tags($_POST['b_address']);
$b_email = strip_tags($_POST['b_email']);
$b_country = strip_tags($_POST['b_country']);
$b_city = strip_tags($_POST['b_city']);
$b_postcode = strip_tags($_POST['b_postcode']);
$b_account_number = strip_tags($_POST['b_account_number']);
$bank_name = strip_tags($_POST['bank_name']);
$b_state = strip_tags($_POST['b_state']);
$b_identification_type = strip_tags($_POST['b_identification_type']);
$b_identification_value = strip_tags($_POST['b_identification_value']);
$b_bic_swift = strip_tags($_POST['b_bic_swift']);
$b_ach_code = strip_tags($_POST['b_ach_code']);
$b_beneficiary_country = strip_tags($_POST['b_beneficiary_country']);
$b_beneficiary_entity_type = strip_tags($_POST['b_beneficiary_entity_type']);

$user_token = strip_tags($_POST['e_token']);
$userid = strip_tags($_POST['e_uid']);

$b_date = strip_tags($_POST['b_date']);


$str_date =$b_date;
$ff1 = explode('-', $str_date);
$yearing1 =$ff1[0];
$monthing1= $ff1[1];
$daying1= $ff1[2];


$string = $monthing1;
 
//Get the first character.
$firstCharacter = $string[0];

//Get the second character.
$secondCharacter = $string[1];

if($firstCharacter ==0){
$report_month = $secondCharacter;
}

if($firstCharacter !=0){
$report_month = $monthing1;
}


$timer = time();
// get balance

include('utilities.php');

try {
    $object1 = make_request('get', "/v1/user/$s_wallet_id/accounts" );
    //var_dump($object1);
$json1 = json_decode(json_encode($object1), true);


$json2 = json_encode($json1, true);
print_r($json1);

$status_success1 = $json1['status']['status'];
$da= $json1['data'];

if($da==[]){
//echo "Wallets is empty";
$balance= '0';
}else{

//echo "<div style='color:white;background:green;padding:10px;'>Balance Found</div>";
$balance= $json1['data'][0]['balance'];
}



} catch(Exception $e) {
    echo "Error: $e";
}


if($status_success1 ==''){

echo "<script>alert('There is a Problem Checking Wallets Balance First. Please Ensure there is Internet Connections');</script>";
echo "<div style='background:red;color:white;padding:10px;border-none;'>There is a Problem Checking Wallets Balance First. Please Ensure there is Internet Connections</div><br>";

 //print_r($json);
	 exit();	
}

// check if there is enough balance before making payments
if($balance < $b_salary){

echo "<style>
.fs_css{background:navy;color:white;padding:10px;}
.fs_css:hover{background:orange;color:black;}
</style>";
$ad_url1 =admin_url('admin.php');
echo "<script>alert('Insufficient Fund in this Wallets.... The balance in this wallets is ($balance USD) but you are trying to Payout ($b_salary USD). Please fund your Wallets in this App');</script>";
echo "<div style='background:red;color:white;padding:10px;border-none;'>Insufficient Fund in this Wallets...... <br>The balance in this wallets is ($balance USD) but you are trying to payout ($b_salary USD).
<br> Please fund your Wallets by clicking the button below<br><br>
<a class='fs_css' href='$ad_url1?page=wallets_fund_rapyd'>Fund Your Wallets</a>
</div><br>";

//print_r($json);
	 exit();	
}



// proceed with Payments
try {
    $payout = [
        "beneficiary" => array(
            "name" => "$b_name",
            "address" => "$b_address",
            "email" => "$b_email",
            "country" => "$b_country",
            "city" => "$b_city",
            "postcode" => "$b_postcode",
            "account_number" => "$b_account_number",         
            "bank_name" => "$bank_name",
            "state" => "$b_state",
            "identification_type" => "$b_identification_type",
            "identification_value" => "$b_identification_value",
            "bic_swift" => "$b_bic_swift",
            "ach_code" => "$b_ach_code"
        ),
        "beneficiary_country" => "$b_beneficiary_country",
        "beneficiary_entity_type" => "$b_beneficiary_entity_type",
        "description" => "$s_description",
        "merchant_reference_id" => "$s_merchant_reference_id",
        "ewallet" => "$s_wallet_id",
        "payout_amount" => "$b_salary",
        "payout_currency" => "$s_payout_currency",
        "payout_method_type" => "$s_payout_method_type",
        "sender" => array(
            "name" => "$s_name",
            "address" => "$s_address",
            "city" => "$s_city",
            "state" => "$s_state",
            "date_of_birth" => "$s_date_of_birth",
            "postcode" => "$s_postcode",
            "phonenumber" => "$s_phonenumber",
            "remitter_account_type" => "$s_remitter_account_type",
            "source_of_income" => "$s_source_of_income",
            "identification_type" => "$s_identification_type",
            "identification_value" => "$s_identification_value",
            "purpose_code" => "$s_purpose_code",
            "account_number" => "$s_account_number",
            "beneficiary_relationship" => "$s_beneficiary_relationship"
            ),
        "sender_country" => "$s_sender_country",
        "sender_currency" => "$s_sender_currency",
        "sender_entity_type" => "$s_sender_entity_type",
        "metadata" => array(
            "merchant_defined" => true
        )
    ];
    $object = make_request('post', '/v1/payouts', $payout);
    //var_dump($object);
	
	
	
$json1_res = json_decode(json_encode($object), true);

$json2_res = json_encode($json1_res, true);
print_r($json1_res);

$payout_success = $json1_res['status']['status'];
$payout_id= $json1_res['data']['id'];
$payout_status= $json1_res['data']['status'];


} catch(Exception $e) {
    echo "Error: $e";
}


if($payout_status =='Created'){

$tablename = $wpdb->prefix."employees_rapyd2021";
  $res_row = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id =%s and id = %d and user_token = %s;"
            , [$creator_id, $userid, $user_token]
        ));

        if(count($res_row) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none'>Employees Info not Found.</div>";
}

$rec_List1a = count($res_row);
$idx = $res_row[0]->id;
$photo = $res_row[0]->photo;
$department = $res_row[0]->department;
$user_ewallet_id = $res_row[0]->wallet_id;
$fullname = $res_row[0]->fullname;


$dis ='Disburse';
$pb = 'Payout to Bank';
$tablename2 = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
$sql = $wpdb->prepare("INSERT INTO `$tablename2` (photo,fullname,department,user_token,user_id,payout_id,payout_status,timing,payment_type1,payment_type2,salary_amount,month_date,month_period,creator_id,user_ewallet_id) values 
(%s, %s, %s,%s, %s, %s,%s, %s, %s,%s, %s, %s, %s, %s, %s)", 
$photo,
$fullname,
$department,
$user_token,
$userid,
$payout_id,
$payout_status,
 $timer,
$dis,
$pb,
$b_salary,
$report_month,
$b_date,
$creator_id,
$user_ewallet_id
);

$sql_res2 = $wpdb->query($sql);
// get last inserted id for 
$id = (int) $wpdb->insert_id;

//updates Employeers Wallets info
$final_balance = $balance  - $b_salary;

$tablename3 = $wpdb->prefix."wallets_rapyd2021";
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename3` SET fund= %s WHERE wallet_id = %s and creator_id=%s;"
            , [$final_balance,$employeer_s_wallet_id, $creator_id]
        ));


//query updates_data_rapyd tables
$tablename4 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
  $res_row1 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename4` WHERE creator_id =%s;"
            , [$creator_id]
        ));

        if(count($res_row1) == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>You will need to create wallet First.</div>";
}

$nosofrows= count($res_row1);
$id = $res_row1[0]->id;
$total_fund_fund = $res_row1[0]->total_fund_fund;
$total_fund_spend = $res_row1[0]->total_fund_spend;
$total_fund_available = $res_row1[0]->total_fund_available;
$ftotal = $total_fund_spend + $b_salary;

/*
if($nosofrows  == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>You will need to create wallet First.</div>";

}
*/



//update total spent


$tablename6 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
$update1a = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename6` SET total_fund_spend= %s WHERE creator_id=%s;"
            , [$ftotal, $creator_id]
        ));

}

$ad_url =admin_url('admin.php');

if($update1a){
	//echo "<div style='color:white;background:green;padding:10px;'>Payout to Bank Account Successful. Redirecting in 1 seconds</div>";
	echo "<script>
	alert('Payout to Bank Account Successful');
window.setTimeout(function() {
    //window.location.href = '$ad_url?page=paysalary_rapyd';
	//location.reload();
window.location.href = window.location.href;
}, 1000);
</script><br><br>";

}else{
	echo "<div style='color:white;background:red;padding:10px;'>Bank Info Updates Failed</div>";
	
}

	

wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

// salary paoyout to bank account ends here







// salary pay by transfer starts here

add_action('wp_ajax_my_action_employees_action2021_salary_transfer_wallets', 'my_action_employees_action2021_salary_transfer_wallets');
function my_action_employees_action2021_salary_transfer_wallets() {
	//error_reporting(0);
	global $wpdb;
	
	
$timing = time();

$employeers_wallet_id = strip_tags($_POST['employeers_wallet_id']);
$employees_wallet_id = strip_tags($_POST['employees_wallet_id']);

$creator_id = strip_tags($_POST['creator_id1']);
$user_token = strip_tags($_POST['ee_token']);
$userid = strip_tags($_POST['ee_uid']);
$b_date = strip_tags($_POST['b_date1']);

$s_wallet_id = $employeers_wallet_id;

$str_date =$b_date;
$ff1 = explode('-', $str_date);
$yearing1 =$ff1[0];
$monthing1= $ff1[1];
$daying1= $ff1[2];


$string = $monthing1;
 
//Get the first character.
$firstCharacter = $string[0];

//Get the second character.
$secondCharacter = $string[1];

if($firstCharacter ==0){
$report_month = $secondCharacter;
}

if($firstCharacter !=0){
$report_month = $monthing1;
}


$timer = time();
// get balance



// get employees salary
$tablename = $wpdb->prefix."employees_rapyd2021";
  $res_row = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename` WHERE creator_id =%s and id = %d and user_token = %s;"
            , [$creator_id, $userid, $user_token]
        ));

        if(count($res_row) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none'>Employees Info not Found.</div>";
}

$rec_List1a = count($res_row);
$idx = $res_row[0]->id;
$b_salary = $res_row[0]->salary;



include('utilities.php');


try {
    $object1 = make_request('get', "/v1/user/$s_wallet_id/accounts" );
    //var_dump($object1);
$json1 = json_decode(json_encode($object1), true);


$json2 = json_encode($json1, true);
print_r($json1);

$status_success1 = $json1['status']['status'];
$da= $json1['data'];

if($da==[]){
//echo "Wallets is empty";
$balance= '0';
}else{

//echo "<div style='color:white;background:green;padding:10px;'>Balance Found</div>";
$balance= $json1['data'][0]['balance'];
}



} catch(Exception $e) {
    echo "Error: $e";
}


if($status_success1 ==''){

echo "<script>alert('There is a Problem Checking Wallets Balance First. Please Ensure there is Internet Connections');</script>";
echo "<div style='background:red;color:white;padding:10px;border-none;'>There is a Problem Checking Wallets Balance First. Please Ensure there is Internet Connections</div><br>";

 //print_r($json);
	 exit();	
}

// check if there is enough balance before making payments
if($balance < $b_salary){

echo "<style>
.fs_css{background:navy;color:white;padding:10px;}
.fs_css:hover{background:orange;color:black;}
</style>";
$ad_url1 =admin_url('admin.php');
echo "<script>alert('Insufficient Fund in this Wallets.... The balance in this wallets is ($balance USD) but you are trying to Transfer ($b_salary USD). Please fund your Wallets in this App');</script>";
echo "<div style='background:red;color:white;padding:10px;border-none;'>Insufficient Fund in this Wallets...... <br>The balance in this wallets is ($balance USD) but you are trying to transfer ($b_salary USD).
<br> Please fund your Wallets by clicking the button below<br><br>
<a class='fs_css' href='$ad_url1?page=wallets_fund_rapyd'>Fund Your Wallets</a>
</div><br>";

//print_r($json);
	 exit();	
}




// proceed with Payments Transfer

	$body = [
    'amount' => "$b_salary",
    'currency' => 'USD',
    'source_ewallet' => "$employeers_wallet_id",
    'destination_ewallet' => "$employees_wallet_id"
];

try {
    $object = make_request('post', '/v1/account/transfer', $body);
    //var_dump($object);


$json1_res = json_decode(json_encode($object), true);

$json2_res = json_encode($json1_res, true);
print_r($json1_res);

$transfer_success = $json1_res['status']['status'];
$transfer_id= $json1_res['data']['id'];
$transfer_status= $json1_res['data']['status'];



} catch(Exception $e) {
    echo "Error: $e";
}


if($transfer_status =='PEN'){
	
	
$tablename2 = $wpdb->prefix."employees_rapyd2021";
  $res_row1 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename2` WHERE creator_id =%s and id = %d and user_token = %s;"
            , [$creator_id, $userid, $user_token]
        ));

        if(count($res_row1) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none'>Employees Info not Found.</div>";
}

$rec_Listb = count($res_row1);
$idb = $res_row1[0]->id;

$photo = $res_row1[0]->photo;
$department = $res_row1[0]->department;
$user_ewallet_id = $res_row1[0]->wallet_id;
$fullname = $res_row1[0]->fullname;


$dis ='Wallet';
$pb = 'Wallet Fund Transfer';
$tablename2b = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
$sql = $wpdb->prepare("INSERT INTO `$tablename2b` (photo,fullname,department,user_token,user_id,payout_id,payout_status,timing,payment_type1,payment_type2,salary_amount,month_date,month_period,creator_id,user_ewallet_id) values 
(%s, %s, %s,%s, %s, %s,%s, %s, %s,%s, %s, %s, %s, %s, %s)", 
$photo,
$fullname,
$department,
$user_token,
$userid,
$transfer_id,
$transfer_status,
 $timer,
$dis,
$pb,
$b_salary,
$report_month,
$b_date,
$creator_id,
$user_ewallet_id
);

$sql_res2 = $wpdb->query($sql);
// get last inserted id for 
$id = (int) $wpdb->insert_id;


//updates Employeers Wallets info
$final_balance = $balance  - $b_salary;


$tablename3 = $wpdb->prefix."wallets_rapyd2021";
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename3` SET fund= %s WHERE wallet_id = %s and creator_id=%s;"
            , [$final_balance,$employeer_s_wallet_id, $creator_id]
        ));


//query updates_data_rapyd tables


$tablename4 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
  $res_row1 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename4` WHERE creator_id =%s;"
            , [$creator_id]
        ));

        if(count($res_row1) == 0){
echo "<div style='background:red;color:white;padding:10px;border:none'>You will need to create wallet First.</div>";
}

$nosofrows= count($res_row1);
$id = $res_row1[0]->id;
$total_fund_fund = $res_row1[0]->total_fund_fund;
$total_fund_spend = $res_row1[0]->total_fund_spend;
$total_fund_available = $res_row1[0]->total_fund_available;
$ftotal = $total_fund_spend + $b_salary;



//update total spent


$tablename6 = $wpdb->prefix."updates_data_rapyd_rapyd2021";
$update1a = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename6` SET total_fund_spend= %s WHERE creator_id=%s;"
            , [$ftotal, $creator_id]
        ));
		

}


if($update1a){
	//echo "<div style='color:white;background:green;padding:10px;'>Fund Transfer Successful. Redirecting in 1 seconds</div>";
	echo "<script>
	alert('Fund Transfer Successful');
window.setTimeout(function() {
    //window.location.href = 'bank_info_update.html';
	//location.reload();
	window.location.href = window.location.href;
}, 1000);
</script><br><br>";

}else{
	echo "<div style='color:white;background:red;padding:10px;'>Bank Info Updates Failed</div>";
	
}




	

wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

// salary pay by transfer ends here






// load all employees salary content start here

add_action('wp_ajax_my_action_employees_action2021_salary_all_employees_load', 'my_action_employees_action2021_salary_all_employees_load');
function my_action_employees_action2021_salary_all_employees_load() {
	//error_reporting(0);
	global $wpdb;
	

	
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);



$queryid = $_POST['queryid_sal'];
$page_row_call = $_POST['page_row_call_sal'];


$owner_id= strip_tags($_POST['owner_id']);
$user_id= strip_tags($_POST['user_id']);


$tablename_match1 = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
       $res_user2 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_match1` WHERE creator_id = %s and user_id = %s order by id;"
            , [$owner_id, $user_id]
        ));
		
$id = $res_user2[0]->id;
$totalcount = count($res_user2);

        if(count($res_user2) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none;'>This Employee has not been Paid yet.. <b></b></div>";
echo 11;
exit();
}


$tablename1 = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
       $result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename1` WHERE creator_id = %s and user_id = %s order by id DESC limit %d, %d;"
            , [$owner_id, $user_id, $queryid, $page_row_call]
        ));
$count_post = count($result);	


$result_arr = array();
$result_arr[] = array("allcount" => $totalcount);

 foreach($result as $row){
$id = $row->id;
$usertoken = $row->user_token;
$userid = $row->user_id;
$photo = $row->photo;
$fullname = $row->fullname;
$department = $row->department;
$salary_amount = $row->salary_amount;
$salary_month = $row->month_period;
$timing = $row->timing;
$payment_method =$row->payment_type1;
$payment_method2 = $row->payment_type2;
$user_ewallet_id = $row->user_ewallet_id;

$payout_id = $row->payout_id;
$payout_status = $row->payout_status;


$result_arr[] = array(
"id" => $id,
"userid " => $userid ,
"usertoken " => $usertoken ,
"photo" => $photo,
"fullname" => $fullname,
"department" => $department,
"salary_amount" => $salary_amount,
"salary_month" => $salary_month,
"timing" => $timing,
"payment_method" => $payment_method,
"payment_method2" => $payment_method2,
"user_ewallet_id" => $user_ewallet_id,
"payout_id" => $payout_id,
"payout_status" => $payout_status,
);


}
echo json_encode($result_arr);


wp_die(); //  wordpress die to terminate immediately and display a Response
 
}

// load all employees salary content ends here




// complete payout to bank account starts
add_action('wp_ajax_my_action_employees_action2021_complete_payout_bank', 'my_action_employees_action2021_complete_payout_bank');
function my_action_employees_action2021_complete_payout_bank() {
	//error_reporting(0);
	global $wpdb;
	
	
	
$id=strip_tags($_POST['id']);
$payout_id=strip_tags($_POST['payout_id']);
$payout_status=strip_tags($_POST['payout_status']);
$creator_id=strip_tags($_POST['creator_id']);
$amount=strip_tags($_POST['salary']);



// complete Payout
include('utilities.php');
try {
    $object = make_request('post', "/v1/payouts/complete/$payout_id/$amount");
    //var_dump($object);
	
	
$json1_res = json_decode(json_encode($object), true);

$json2_res = json_encode($json1_res, true);
//print_r($json1_res);

$complete_success = $json1_res['status']['status'];
$complete_id= $json1_res['data']['id'];
$complete_status= $json1_res['data']['status'];

	
} catch (Exception $e) {
    //echo "Error: $e";
}

if($complete_status =='Completed'){
	
	$p_status ='Completed';
$tablename = $wpdb->prefix."salary_emp_rapyd_rapyd2021";	
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename` SET payout_status= %s WHERE payout_id = %s and creator_id=%s;"
            , [$p_status, $payout_id, $creator_id]
        ));
	
}

if($update1){

echo 1;
}else{

echo 0;
}


	

wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// complete payout to bank account ends





// complete wallets salary transfer starts
add_action('wp_ajax_my_action_employees_action2021_complete_transfer_wallets', 'my_action_employees_action2021_complete_transfer_wallets');
function my_action_employees_action2021_complete_transfer_wallets() {
	//error_reporting(0);
	global $wpdb;
	
	
	
$id=strip_tags($_POST['id']);
$payout_id=strip_tags($_POST['payout_id']);
$payout_status=strip_tags($_POST['payout_status']);
$creator_id=strip_tags($_POST['creator_id']);
$amount=strip_tags($_POST['salary']);

$transfer_id =$payout_id;

// complete Transfer
include('utilities.php');


$body = [
    'id' => "$transfer_id",
    'status' => 'accept',
];

try {
    $object = make_request('post', '/v1/account/transfer/response', $body);
    //var_dump($object);
		
$json1_res = json_decode(json_encode($object), true);

$json2_res = json_encode($json1_res, true);
//print_r($json1_res);

$complete_success = $json1_res['status']['status'];
$complete_id= $json1_res['data']['id'];
$complete_status= $json1_res['data']['status'];

	
} catch (Exception $e) {
    //echo "Error: $e";
}

if($complete_status =='CLO'){
$p_status ='CLO';	

$tablename = $wpdb->prefix."salary_emp_rapyd_rapyd2021";	
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename` SET payout_status= %s WHERE payout_id = %s and creator_id=%s;"
            , [$p_status, $payout_id, $creator_id]
        ));
		
}

if($update1){

echo 1;
}else{

echo 0;
}


	
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// complete wallets salary transfer ends

	
	

	

// salary tracking system start here

add_action('wp_ajax_my_action_employees_action2021_sal_payments_trackings', 'my_action_employees_action2021_sal_payments_trackings');
function my_action_employees_action2021_sal_payments_trackings() {
	//error_reporting(0);
	global $wpdb;
	
$queryid = $_POST['queryid_track'];
$page_row_call = $_POST['page_row_call_track'];
$owner_id= strip_tags($_POST['owner_id']);


$tablename_match1 = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
       $res_user2 = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename_match1` WHERE creator_id=%s;"
            , [$owner_id]
        ));
		
$id = $res_user2[0]->id;
$totalcount = count($res_user2);

        if(count($res_user2) == 0){
//echo "<div style='background:red;color:white;padding:10px;border:none;'>This Employee has not been Paid yet.. <b></b></div>";
echo 11;
exit();
}


$tablename1 = $wpdb->prefix."salary_emp_rapyd_rapyd2021";
       $result = $wpdb->get_results( $wpdb->prepare(
            "SELECT * FROM `$tablename1` WHERE creator_id = %s order by id DESC limit %d, %d;"
            , [$owner_id, $queryid, $page_row_call]
        ));
$count_post = count($result);	


$result_arr = array();
$result_arr[] = array("allcount" => $totalcount);

 foreach($result as $row){
$id = $row->id;
$usertoken = $row->user_token;
$userid = $row->user_id;
$photo = $row->photo;
$fullname = $row->fullname;
$department = $row->department;
$salary_amount = $row->salary_amount;
$salary_month = $row->month_period;
$timing = $row->timing;
$payment_method =$row->payment_type1;
$payment_method2 = $row->payment_type2;
$user_ewallet_id = $row->user_ewallet_id;

$payout_id = $row->payout_id;
$payout_status = $row->payout_status;


$result_arr[] = array(
"id" => $id,
"userid " => $userid ,
"usertoken " => $usertoken ,
"photo" => $photo,
"fullname" => $fullname,
"department" => $department,
"salary_amount" => $salary_amount,
"salary_month" => $salary_month,
"timing" => $timing,
"payment_method" => $payment_method,
"payment_method2" => $payment_method2,
"user_ewallet_id" => $user_ewallet_id,
"payout_id" => $payout_id,
"payout_status" => $payout_status,
);


}
echo json_encode($result_arr);

	
	
	wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// salary tracking system ends









// complete payout to bank account starts 1 new
add_action('wp_ajax_my_action_employees_action2021_complete_payout_bank1', 'my_action_employees_action2021_complete_payout_bank1');
function my_action_employees_action2021_complete_payout_bank1() {
	//error_reporting(0);
	global $wpdb;
	
	
	
$id=strip_tags($_POST['id']);
$payout_id=strip_tags($_POST['payout_id']);
$payout_status=strip_tags($_POST['payout_status']);
$creator_id=strip_tags($_POST['creator_id']);
$amount=strip_tags($_POST['salary']);



// complete Payout
include('utilities.php');
try {
    $object = make_request('post', "/v1/payouts/complete/$payout_id/$amount");
    //var_dump($object);
	
	
$json1_res = json_decode(json_encode($object), true);

$json2_res = json_encode($json1_res, true);
//print_r($json1_res);

$complete_success = $json1_res['status']['status'];
$complete_id= $json1_res['data']['id'];
$complete_status= $json1_res['data']['status'];

	
} catch (Exception $e) {
    //echo "Error: $e";
}

if($complete_status =='Completed'){
	
	$p_status ='Completed';
$tablename = $wpdb->prefix."salary_emp_rapyd_rapyd2021";	
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename` SET payout_status= %s WHERE payout_id = %s and creator_id=%s;"
            , [$p_status, $payout_id, $creator_id]
        ));
	
}

if($update1){

echo 1;
}else{

echo 0;
}


	

wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// complete payout to bank account ends 1 new





// complete wallets salary transfer starts 1 new
add_action('wp_ajax_my_action_employees_action2021_complete_transfer_wallets1', 'my_action_employees_action2021_complete_transfer_wallets1');
function my_action_employees_action2021_complete_transfer_wallets1() {
	//error_reporting(0);
	global $wpdb;
	
	
	
$id=strip_tags($_POST['id']);
$payout_id=strip_tags($_POST['payout_id']);
$payout_status=strip_tags($_POST['payout_status']);
$creator_id=strip_tags($_POST['creator_id']);
$amount=strip_tags($_POST['salary']);

$transfer_id =$payout_id;

// complete Transfer
include('utilities.php');


$body = [
    'id' => "$transfer_id",
    'status' => 'accept',
];

try {
    $object = make_request('post', '/v1/account/transfer/response', $body);
    //var_dump($object);
		
$json1_res = json_decode(json_encode($object), true);

$json2_res = json_encode($json1_res, true);
//print_r($json1_res);

$complete_success = $json1_res['status']['status'];
$complete_id= $json1_res['data']['id'];
$complete_status= $json1_res['data']['status'];

	
} catch (Exception $e) {
    //echo "Error: $e";
}

if($complete_status =='CLO'){
$p_status ='CLO';	

$tablename = $wpdb->prefix."salary_emp_rapyd_rapyd2021";	
$update1 = $wpdb->query( $wpdb->prepare(
            "UPDATE `$tablename` SET payout_status= %s WHERE payout_id = %s and creator_id=%s;"
            , [$p_status, $payout_id, $creator_id]
        ));
		
}

if($update1){

echo 1;
}else{

echo 0;
}


	
wp_die(); //  wordpress die to terminate immediately and display a Response
 
}
// complete wallets salary transfer ends 1 new




