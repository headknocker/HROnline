<?php
	include('auth.php');/*session_start()*/
	$_SESSION['previous-page'] = 'google.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Application List</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1; charset=ISO-8859-1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.material.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-timepicker.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/dataTables.tableTools.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/dataTables.tableTools.css">
	<link rel = "stylesheet" type = "text/css" href = "css/buttons.dataTables.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/buttons.dataTables.css">
	<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.min.css">

	</head>
<body style = 'background-color: white'>
 <?php  header('Content-Type: text/html; charset=ISO_8859-1'); ?>
<style type="text/css">
.sb-search {
	position: relative;
	margin-top: 10px;
	width: 0%;
	min-width: 60px;
	height: 60px;
	float: right;
	overflow: hidden;
	-webkit-transition: width 0.3s;
	-moz-transition: width 0.3s;
	transition: width 0.3s;
	-webkit-backface-visibility: hidden;
}
#myTable tr.selected {
background-color: #83b4ef !important; //color when selected
}
	.active {
		background-color: white;
	}
	ul {
	  list-style-type: none;
	}
		#bgImg {		
		  position: absolute;
		  top: 1%;
		  left: 8%;
		  right: 5%;
		  z-index: 0;
		  background-attachment: fixed;
		  background-position: center;
	}
	
#ulPrint div a, #ulSave div a{
padding: 0;
border: none;
background: none;
}
#ulPrint div a span, #ulSave div span{
float: left;
}
</style>
	<?php  
		include('sidenavhtml.php');
	?>


	<div id="main" >
			<nav style="width:103.25%; margin-top:-2%; margin-left:-2%; background-color:#F0F8FF;">
			  <div class="container-fluid">
				<ul class="nav navbar-nav">
				  <li data-toggle="dropdown-toggle"><a data-toggle='modal'><h4 style="cursor:pointer; color:#00008B; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px; padding-right:10px; padding-left: -10px" onclick="openNav()"><i class="fa fa-bars"></i> Menu</h4></a></li>
				</ul>
				</div>
			</nav>

	<div class="row"><!--Status Change-->
		<div class="col-md-12">
			<div class="" id='googlecontanier'>
				<!--h5 style="text-align:center;"></h5-->
				<div class="dropdown" style='z-index: 1' id ='statusDropdown'>
					<a id='withselected' href="#"  style = 'background-color: #00008B;'class="btn btn-danger   btn btn-sm btn-raised dropdown-toggle" data-toggle="dropdown">
					<i> <i class="fa fa-toggle-down"></i></i>
					</a>
				</div>
			</div>
				<div id = 'myData'>
				<center><h3 style="font-weight: bold;margin-bottom: 2%;margin-top:-2%;">Privacy Policy List</h3></center>
				<table name="" id="myTable" class="table table-striped table-hover" style="width:100%; ">
					<thead>
						<tr>
							<th>Name</th>
							<th>Reference Code</th>
							<th>Date</th>
							<th>Time</th>
						</tr>
					</thead>
					<?php  
						include('connect.php');
						$sql = "SELECT ID, applicant_name, ref_code, date_agreed, time_agreed FROM tbl_policy ORDER BY ID";
						$result = $conn->query($sql);
						if ($result->num_rows > 0){
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
								echo "<td>".$row['applicant_name']."</td>";
								echo "<td>".$row['ref_code']."</td>";
								echo "<td>".$row['date_agreed']."</td>";
								echo "<td>".$row['time_agreed']."</td>";
								echo "</tr>";
							}
						}
					?>
				</tbody>
			</table>
			</div>
	      </div>
	    </div>
	  </div>

	<footer class="panel-footer" style="background-color:#F0F8FF;">
		<center><p style="color: black; font-size:90%">
			Private and Confidential. Anderson Group BPO Inc. &copy; 2017
		</p></center>
	</footer>
<!--END-->

	<script type="text/javascript" src="js/tether.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="js/buttons.Html5.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/material.js"></script>
	<script type="text/javascript" src="js/buttons.print.min.js"></script>
	<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="js/dataTables.tableTools.min.js"></script>
	<script type="text/javascript" src="js/dataTables.material.js"></script>
	<script type="text/javascript" src="js/dataTables.select.min.js"></script>
	<script type="text/javascript" src="js/buttons.flash.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-clockpicker.js"></script>
	<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript">
	    $('.clockpicker').clockpicker();
	</script>

<script type="text/javascript">

var waitingDialog = waitingDialog || (function ($) {
    'use strict';

	// Creating modal dialog's DOM
	var $dialog = $(
		'<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
		'<div class="modal-dialog modal-m">' +
		'<div class="modal-content">' +
			'<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
			'<div class="modal-body">' +
				'<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
			'</div>' +
		'</div></div></div>');

	return {
	
		show: function (message, options) {
			// Assigning defaults
			if (typeof options === 'undefined') {
				options = {};
			}
			if (typeof message === 'undefined') {
				message = 'Loading';
			}
			var settings = $.extend({
				dialogSize: 'm',
				progressType: '',
				onHide: null // This callback runs after the dialog was hidden
			}, options);

			// Configuring dialog
			$dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
			$dialog.find('.progress-bar').attr('class', 'progress-bar');
			if (settings.progressType) {
				$dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
			}
			$dialog.find('h3').text(message);
			// Adding callbacks
			if (typeof settings.onHide === 'function') {
				$dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
					settings.onHide.call($dialog);
				});
			}
			// Opening dialog
			$dialog.modal();
		},
		/**
		 * Closes dialog
		 */
		hide: function () {
			$dialog.modal('hide');
		}
	};

})(jQuery);

</script>

	<script type="text/javascript">
		var sendersEmail = "";
		var sendersPassword = "";
		var interviewerEmail = "";
		var interviewerFName = "";
		var interviewerLName = "";
		var interviewerMName = "";
		var checkarr = [];
		var checkTblApplication = [];
		var checkTblApplicant2 = [];
		var checkTblApplicant3 = [];
		var tblName = [];
		var idleTime = 0;
		var check = 0;
		var statusTdNum = 7;
		var schedTdNum = 5;
		var selectedColumns = [1,2,3,4,5,6,7,8,9,10];
		var myTable;
		var interviewType='';
		var schedID = [];
		var sched;
		var commentID = [];
		var idHolder = [];
		var idStatus = [];
		var firstStatus = "";
		var checkSimilarity = false;
		var hiredID = "";
		var adminID = '<?php echo $_SESSION["id"]?>';
		
////////////////////////////////////////////////////////////////////////////////////		
		$('ul.nav li.dropdown').hover(function(){
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function(){
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
////////////////////////////////////////////////////////////////////////////////////

		$(document).ready(function(){
			$.material.init();
			$('.ddcheckbox').prop('checked',true);
			$('.deact').prop('checked',false);
			document.getElementById('withselected').style.visibility = "hidden";
			$('.showHideColumn').on('click', function(event){
			event.stopPropagation();
			});

			if(adminID == 1 ){
				$('.divEmail').prop('style','visibility:visible');
			}else{
				<?php 
				$sql = "select * from tbl_admin where id = '".$_SESSION['id']."'";
				$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
								echo "
									sendersEmail = '".$row['email']."';
									sendersPassword = '".$row['email_password']."';
								";
						}
					}
				?>
			}
			
			$('html').click(function(e){
				if ( $(e.target).hasClass('dropbtn')){	
				}else{
					$('ul .dropdown  .dropdown-content').attr('style','display:none');
				}
			});
			$('ul .dropdown ').on('click', function(event){
				if ( $(this).find('.dropdown-content').css('display') == 'block')
				{
				$('ul .dropdown  .dropdown-content').attr('style','display:none');
					}else{
				$('ul .dropdown  .dropdown-content').attr('style','display:none');
				$(this).find('.dropdown-content').attr('style','display:block');
				}
			});
			
			$('#override').click(function(event){
				event.stopPropagation();
					$('.openOveride').prop('style','position:static;visibility:visible;');							
			});
			
			$('#statusDropdown').on('hidden.bs.dropdown', function () {
					$('.openOveride').prop('style','position:absolute;visibility:hidden;');
										if(checkSimilarity == true){
					if(idStatus[0] == "Pending"){
						$("#InitialInterview").prop('style','position:static;visibility:visible;');	
					}else if(idStatus[0] == "Initial Interview"){
						$("#SecondInterview").prop('style','position:static;visibility:visible;');	
					}else if(idStatus[0] == "Second Interview"){
						$("#ThirdInterview").prop('style','position:static;visibility:visible;');
						$("#FinalInterview").prop('style','position:static;visibility:visible;');	
					}else if(idStatus[0] == "Third Interview"){
						$("#FinalInterview").prop('style','position:static;visibility:visible;');	
					}else if(idStatus[0] == "Final Interview"){
						$("#HireAccept").prop('style','position:static;visibility:visible;');	
										}}
				
			});

			///managing table
			$('#myTable').on('draw.dt', function(e) {
				if ($('#select_all').is(':checked')) {
					$('.checkbox').prop('checked', true);
				}				
			});
			$('.checkbox').click(function(e){
				trCheckBox($(this),$(this ).closest( "tr" ));
				
			});

			$('#myTable tbody').on( 'mouseup', 'tr', function (e) {	
				trCheckBox($( this).find( ".checkbox" ),$(this));	
				///$('#InitialInterview').hide();
			});

			$('#interviewStatus').DataTable({
				"autoWidth": false,
			    "order": [[ 1, "asc" ]],
				"scrollY": "500px",
				"scrollX": "100%",
				"processing": true,
				"paging": true,
				"pagingType": "full_numbers",
			    "pageLength": 50,
				"orderClasses" : false,
				 dom: 'Bfrtip',
				buttons: [],
		    });
	//////////TABLE MANAGEMENT//////////
		     myTable = $('#myTable').DataTable({
				select: {
					style: 'multi'
				},
				"autoWidth": false,
				"columnDefs": [{ targets: -1,visible: false}],
				"scrollY": '75vh',
			    "scrollX": "90%",
				"processing": true,
				"paging": true,
				"pagingType": "full_numbers",
			    "pageLength": 40,
				"orderClasses" : false,
				 dom: 'Bfrtip',
				buttons: [],
				columnDefs: [ {
					targets: -1,
					visible: false
				} ],
				"aoColumnDefs": [
					{ "bSortable": false, "aTargets": [ 0 ] }
				]
		    });
			
			var $buttonPrint = new $.fn.dataTable.Buttons(myTable, {
				buttons: [
					{
						'extend':'csv',
						'sFileName' : '.csv',
						text: 'Save',
						exportOptions: {
								columns:  selectedColumns 
							},
					},
				]
			}).container().appendTo($('#ulSave'));
						
			var $buttonPrintSelected= new $.fn.dataTable.Buttons(myTable, {
				buttons: [
				{ 'extend': 'print',
					text: 'All',
					exportOptions: {
						columns:  selectedColumns 
					},
						customize: function ( win ) {
							$(win.document.body)
							.css( 'font-size', '10pt' );
						$(win.document.body).find( 'table' )
							.addClass( 'compact' )
							.css( 'font-size', 'inherit' );
					}
				},
					{extend: 'print',
						text: 'Selected', 
						exportOptions: {
							columns:  selectedColumns,
							modifier: {
								selected: true,
							}
						},
						customize: function ( win ) {
							$(win.document.body)
								.css( 'font-size', '10pt')
								.prepend(
									'<img id = "bgImg" src="http://andersongroup.ph/applicationv2/lady liberty.png" style="position:absolute; top:center; right:center; z-index:-.1; opacity:.5; " />'
								);
							$(win.document.body).css("z-index","-.1");
		 
							$(win.document.body).find( 'table' )
								.addClass( 'compact' )
								.css( 'font-size', 'inherit' );
						myTable.rows('tr').deselect();
						$('.checkbox').prop('checked',false);
						}
					},			

				]
					}).container().appendTo($('#ulPrint'));
					$('div#myTable_filter').prop('style','top:20px;left:50px;');
					
					///searchtab 
					var $filterBtn = "<div id = 'repo' style = 'display:inline-block; float:right;margin-top:2%'><div style = 'float:left;'></div><div id ='reposition'  style = 'float:right;'></div></div>";
					$('.container-fluid').append($filterBtn);
					$('#myTable_filter label input').detach().appendTo('#reposition').prop('placeholder','Search here...').prop('style','color:black').prop('style','padding-left:10%');
					$('#myTable_filter label').detach();
					$('#myTable_filter').prop('style','float:right');
			$buttonPrintSelected.attr('style','padding: 0; border: none; background: none;');
			$buttonPrintSelected.prop('href','#');			
			$('ul.dropdown-menu div.dt-buttons a').attr('style','height: 100%; width: 100%');
			$('#ulPrint div a').prop('href','#'); 
			$('ul.dropdown-menu div.dt-buttons a').addClass('actionbtn2 btn btn-default');
			$('.showHideColumn').mouseout(function(){
				var column = myTable.column( $(this).attr('data-columnindex') );
				if(column.visible() == true){
					$(this).attr('style','text-decoration:none !important;');
				}
			});
			$('.ddcheckbox').on( 'click', function (e) {$(this).prop('checked',!$(this).prop('checked'));});
			myTable.column('5').visible(false);
			myTable.column('2').visible(false);
			myTable.column('3').visible(false);
			myTable.column('8').visible(false);
			$('.showHideColumn').on( 'click', function (e) {
			var column = myTable.column( $(this).attr('data-columnindex') );
			column.visible( ! column.visible());
			$(this).find('.ddcheckbox').prop('checked',!$(this).find('.ddcheckbox').prop('checked'));
			if(column.visible() == true){
			}else{
				$(this).attr('style','color:gray !important;');
			}
				var colNum = $(this).attr('data-columnindex');
				if(column.visible()==true){
					selectedColumns.push(colNum);
					selectedColumns.sort();
					statusTdNum +=1;
					schedTdNum += 1;
				}else{
					for(var i = selectedColumns.length - 1; i >= 0; i--) {
						if(selectedColumns[i] == colNum) {
						   selectedColumns.splice(i, 1);	
							statusTdNum -=1;
							schedTdNum -=1;
					}
					}
				}
			});
			
		    $("#myTable tbody").on('click', '.clickme', function(){
	   			$("#emailadd").val($(this).data('email'));
	   			$("#showemail").val($(this).data('email'));
				$("#appname").val($(this).data('name'));
				$("#appid").val($(this).data('id'));
				$('#emailmodal').modal('show');
	   		});
			
			$('#googlecontanier ul').on('click', '.actionbtn', function() {//change status
				document.getElementById('headerx').innerHTML = $(this).data('headerx');
				document.getElementById('headerx').style.color = $(this).data('hcolor');
				document.getElementById('content').innerHTML = $(this).data('content');
				$('#type').val($(this).data('type'));
				$('#headercolor').css({backgroundColor: $(this).data('headercolor')});
				$('#delmodal').modal('show');
			});

			$('#googlecontanier ul').on('click', '.actionbtn2', function() {
				$('#type').val($(this).data('type'));
				if(checkTblApplication.length>0){
				actionfunction('tbl_application',checkTblApplication);				
				checkTblApplication  = [];
				}	
				if(checkTblApplicant2.length>0){
				actionfunction('tbl_applicant2',checkTblApplicant2);
				checkTblApplicant2 = [];
				}		
				if(checkTblApplicant3.length>0){
				actionfunction('tbl_applicant3',checkTblApplicant3);
				checkTblApplicant3 = [];
				}
			});
			
			var idleInterval = setInterval(timerIncrement, 60000); // Check every 60 Seconds
		    $(this).mousemove(function (e) {
		        idleTime = 0;
		    });
		    $(this).keypress(function (e) {
		        idleTime = 0;
		    });
		
		document.addEventListener('touchmove', function(e) {
		    idleTime = 0;
		}, false);
		document.addEventListener('touchstart', function(e) {
		    idleTime = 0;
		}, false);
		function timerIncrement() {
		    idleTime++;
		    if (idleTime == 30) { // minutes
		    	<?php  
		    		$_SESSION['loginerror'] = 'You were idle for too long!';
		    	?>
		        window.location = 'adminloginpage.php';
		    }
		}
		});



	
		function openNav() {
		    document.getElementById("mySidenav").style.width = "300px";
		    document.getElementById("main").style.marginLeft = "300px";
		}
		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		    document.getElementById("main").style.marginLeft= "0";
		}
		setTimeout(function(){
		  $('#removeme').fadeOut();
		  <?php unset($_SESSION['uploadnotice']);
		  		unset($_SESSION['queryerror']); ?>
		}, 5000);

	</script>
</body>
</html>
