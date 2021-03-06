<?php include "db_connect.php" ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kiddo Academy SIS</title>
    <link rel="icon" type="image/gif" href="images/School Logo/symbol.png"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="formwizard2.css">
    <script>
    // function ajaxPost()
    // {
    //   var value=document.getElementById('txtStud').innerHTML;
    //   $.ajax({
    //   type: "post",
    //   url: "sectioningv2.php",
    //   data: {'value' : value},
    //   dataType: 'json',
    //   success:function(data){
    //    // Test what is returned from the server
    //      alert(data);
    //   }
    // });
    // }
    </script>
    <script>
        (function(){
  if(window.addEventListener){
    window.addEventListener('load',run,false);
  }else if(window.attachEvent){
    window.attachEvent('onload',run);
  }
function run(){
  var t=document.getElementById('datatable1');
  t.onclick=function(event){
    event=event || window.event;
    var target=event.target||event.srcElement;
    while (target&&target.nodeName!='TR'){
      target=target.parentElement;
    }
    var cells=target.cells;
    
    if(!cells.length||target.parentNode.nodeName=='THEAD'){return;}
    var f1=document.getElementById('txtFillSectionId');
    var f2=document.getElementById('txtSectionId');
    var f3=document.getElementById('txtSlot');
    var f4=document.getElementById('selFaculty');
    f1.value=cells[0].innerHTML;
    f2.value=cells[0].innerHTML;
    f3.value=cells[5].innerHTML;
    f4.value=cells[7].innerHTML;
  };
}})();
    </script>
  </head>

  <body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="dashboard.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><image src="images/School Logo/logo.ico" style="width: 50px; padding: 3px"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><image src="images/School Logo/logo.png" style="width: 200px; padding: 3px;"></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="images/Employees/admin.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Kim Seok Jin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="images/Employees/admin.jpg" class="img-circle" alt="User Image">

                    <p>
                      Kim Seok Jin
                      <small>Head Teacher</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
               <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="images/Employees/admin.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info" style="margin-top: 3%">
              <p>Kim Seok Jin<i class="fa fa-circle text-success" style="margin-left: 5px"></i></p>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" style="font-size:17px;">
            <li class="header" style="color: white">Welcome!</li>
            <li class="treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="AdminMessage.html">
                <i class="fa fa-envelope-o"></i> <span>Message</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gears"></i> <span>Maintenance</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="curriculumv2.php"><i class="fa fa-circle-o"></i>Curriculum</a></li>
                <li><a href="school-yearv2.php"><i class="fa fa-circle-o"></i>School Year</a></li>
                <li><a href="sectionv2.php"><i class="fa fa-circle-o"></i>Section</a></li>
                <li><a href="requirementv2.php"><i class="fa fa-circle-o"></i>Requirement</a></li>
                <li><a href="paymentv2.php"><i class="fa fa-circle-o"></i>Payment</a></li>
                <li><a href="profilev2.php"><i class="fa fa-circle-o"></i>Profile</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-refresh"></i> <span>Transaction</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="sectioningv2.html"><i class="fa fa-circle"></i>Sectioning</a></li>
                <li><a href="dismiss-withdraw.html"><i class="fa fa-circle-o"></i>Dismissal/ Withdrawal</a></li>
                <li><a href="billing.html"><i class="fa fa-circle-o"></i>Billing</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <ol class="breadcrumb" style="font-size:15px;">
            <li><a href="dashboard.php" style="color: black;"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#" style="color: black;">Transaction</a></li>
            <li class="active">Sectioning</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content"  style="margin-top: 4%">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-default">
                <div class="box-header with-border"></div>
                  <div class="box-body">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs" id="myTab">
                          <li class="active"><a href="#tab_1" data-toggle="tab">Sectioning by Section</a></li>
                          <li><a href="#tab_2" data-toggle="tab">Sectioning by Students</a></li>
                        </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="tab_1">
                        <div class="box">
                             
                             
                                <div class="box-body">

                                  <div style="margin-top: 5%">
                                    <table id="datatable1" name="datatable1" class="table table-bordered table-striped">
                                      <thead>
                                        <tr>
                                          <th hidden></th>
                                          <th>Section</th>
                                          <th>Division</th>
                                          <th>Level</th>
                                          <th>Session</th>
                                          <th hidden>Slots Available</th>
                                          <th>Number of Students</th>
                                          <th hidden>Teacher Id</th>
                                          <th>Teacher</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                      $query="select tblsection.tblSectionId, tblsection.tblSectionName, tbllevel.tblLevelName, tbldivision.tblDivisionName, tblsection.tblSectionSession, count(tblsectionstud.tblSectStud_tblSectionId) as sectCount, tblsection.tblSection_tblFacultyId, tblsection.tblSectionMaxCap from tblsection inner join tbllevel on tblsection.tblSection_tblLevelId=tbllevel.tblLevelId inner join tbldivision on tbllevel.tblLevel_tblDivisionId=tbldivision.tblDivisionId left join tblsectionstud on tblsection.tblSectionId=tblsectionstud.tblSectStud_tblSectionId where tblsection.tblSectionFlag=1 group by tblsection.tblSectionId";
                                      $result=mysqli_query($con, $query);
                                      while($row=mysqli_fetch_array($result)):
                                        $facultyid=$row['tblSection_tblFacultyId'];
                                        $count=$row['sectCount'];
                                        $max=$row['tblSectionMaxCap'];
                                        $slot=$max - $count;
                                      ?>
                                        <tr>
                                          <td hidden><?php echo $row['tblSectionId'] ?></td>
                                          <td><?php echo $row['tblSectionName'] ?></td>
                                          <td><?php echo $row['tblDivisionName'] ?></td>
                                          <td><?php echo $row['tblLevelName'] ?></td>
                                          <td><?php echo $row['tblSectionSession'] ?></td>
                                          <td hidden><?php echo $slot ?></td>
                                          <td><?php echo $row['sectCount'] ?></td>
                                          <?php
                                            $query1="select tblFacultyId, concat(tblFacultyLname, ', ', tblFacultyFname, ' ', tblFacultyMname) as facultyname from tblfaculty where tblFacultyId='$facultyid' and tblFacultyFlag=1";
                                            $result1=mysqli_query($con, $query1);
                                            $row1=mysqli_fetch_array($result1);
                                          ?>
                                          <td hidden><?php echo $row1['tblFacultyId'] ?></td>
                                          <td><?php echo $row1['facultyname'] ?></td>>
                                          <td style="width: 25%"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdlFillSection">Fill Section</button>
                                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdlViewStud">View Students</button>
                                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mdlAssignFaculty" style="margin-top: 2%">Assign Faculty-in-Charge</button></td>
                                        </tr>
                                      <?php endwhile; ?>
                                      </tbody>
                                    </table>
                                  </div>

    <div class="modal fade" id="mdlFillSection" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="font-style: bold">Fill Section</h3>
        </div>
        <form action="fillSection.php" method="post">
        <div class="modal-body">
        <div class="box-body table-responsive no-padding"   style="margin-top: 2%">
          <div><input type="hidden" name="txtFillSectionId" id="txtFillSectionId"/></div>
          <div class="form-group" style="margin-top: 5%">
                <label class="col-sm-4" style="text-align: right">Available Slot:</label>
                <div class="col-sm-7 selectContainer">
                <input type="text" disabled style="text-transform: uppercase;" class="form-control" name="txtSlot" id="txtSlot">
                </div>
        </div>
        </div>         
        </div>
        <div class="modal-footer" style="margin-top: 5%; float: center">
        <button type="submit" class="btn btn-danger" name="btnFillSection" id="btnFillSection">Fill</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="mdlAssignFaculty" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="font-style: bold">Assign Faculty</h3>
        </div>
        <form action="assignFaculty.php" method="post">
        <div class="modal-body">
        <div class="box-body table-responsive no-padding"   style="margin-top: 2%">
          <div><input type="hidden" name="txtSectionId" id="txtSectionId"/></div>
        <div class="form-group" style="margin-top: 5%">
                <label class="col-sm-4" style="text-align: right">Faculty-In-Charge:</label>
                <div class="col-sm-7 selectContainer">
                <select class="form-control" style="width: 100%;" name="selFaculty" id="selFaculty">
                <option selected disabled>--Select Faculty-in-charge--</option>
                <?php
                $query="select tblFacultyId, concat(tblFacultyLname, ', ', tblFacultyFname, ' ', tblFacultyMname) as facultyname from tblFaculty where tblFacultyFlag=1";
                $result=mysqli_query($con, $query);
                while($row=mysqli_fetch_array($result)):
                  $facultyid=$row['tblFacultyId'];
                  $query1="select * from tblsection where tblSection_tblFacultyId='$facultyid' and tblSectionFlag=1";
                  $result1 = $con->query($query1);
                  if($result1->num_rows == 0)
                  {
                ?>
                <option value="<?php echo $row['tblFacultyId'] ?>"><?php echo $row['facultyname'] ?></option>
                <?php }; endwhile; ?>
                </select>
                </div>
        </div>
        </div>         
        </div>
        <div class="modal-footer" style="margin-top: 5%; float: center">
        <button type="submit" class="btn btn-danger" name="btnFillSection" id="btnFillSection">Assign</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="mdlViewStud" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title" style="font-style: bold">View Students</h3>
        </div>
        <form action="" method="post">
        <div class="modal-body">
        <div class="box-body table-responsive no-padding"   style="margin-top: 2%">
          <table id="datatable3" name="datatable3" class="table table-bordered table-striped">
          <thead>
          <th>Student Id</th>
          <th>Student Name</th>
          </thead>
          <tbody>
          </tbody>
          </table>
        </div>         
        </div>
        <div class="modal-footer" style="margin-top: 5%; float: center">
        <button type="submit" class="btn btn-danger" name="btnFillSection" id="btnFillSection">Yes</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
                                </div> <!-- box body -->
                  
                           
                          </div> <!-- box -->
                      </div>
                      
                      <div class="tab-pane" id="tab_2">
                        <div class="box">
                                                       
                               
                                <div class="box-body">

                                  <div style="margin-top: 5%">
                                  <form>
                                    <table id="datatable2" class="table table-bordered table-striped">
                                      <thead>
                                        <tr>
                                         <th hidden></th>
                                          <th>Level Name</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      
                                      <?php
                                        $query="select * from tbllevel where tblLevelFlag=1";
                                        $result=mysqli_query($con, $query);
                                        while($row=mysqli_fetch_array($result)):
                                      ?>
                                        <tr>
                                          <td hidden></td>
                                          <td><?php echo $row['tblLevelName'] ?></td>
                                          <td><form method="get" action="SectionStudent.php"><input type="hidden" name="txtlvl" id="txtlvl" value="<?php echo $row['tblLevelId'] ?>"/><button type="submit" class="btn btn-success">Section Student</button></form></td>
                                        </tr>
                                      <?php endwhile; ?>
                                     
                                      </tbody>
                                    </table>
                                    </form>
                                  </div>
                                </div> <!-- box body -->
                                
                         <div class="modal fade" id="mdlSectionStudent" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title" style="font-style: bold">Section Student</h3>
                                </div>
                                <form method="post" action=""/>
                                <?php
                                $stud=$_POST['value'];  
                                ?>
                                <div><?php echo $stud ?></div>
                                <div class="form-group">
                                  <input type="text" name="txtStudentId" id="txtStudentId"/>
                                </div>

                                <div class="form-group" style="margin-top: 10%">
                                  <label class="col-sm-4" style="text-align: right">Session</label>
                                  <div class="col-sm-7">
                                    <input type="text" name="txtStudentName" id="txtStudentName"/>
                                  </div>
                                </div>

                                <div class="form-group" style="margin-top: 20%">
                                  <label class="col-sm-4" style="text-align: right">Payment Scheme</label>
                                    <div class="col-sm-7">
                                    <select class="form-control choose" style="width: 100%;" name="selEnPayment" id="selEnPayment" >
                                      <option selected="selected">--CHOOSE PAYMENT SCHEME--</option>
                                      <?php
                                        $query="select s.tblSchemeId, s.tblSchemeType from tblfee f, tblscheme s where f.tblFeeId=s.tblScheme_tblFeeId and f.tblFeeName='TUITION FEE'";
                                        $result=mysqli_query($con, $query);
                                        while($row=mysqli_fetch_array($result)):
                                      ?>
                                      <option value="<?php echo $row['tblSchemeId'] ?>"><?php echo $row['tblSchemeType'] ?></option>
                                      <?php endwhile; ?>
                                    </select>
                                    </div>
                                </div>

                                <div class="modal-footer" style="margin-top: 35%; float: center">
                                  <button type="submit" class="btn btn-danger" name="btnDel" id="btnDel">OK</button>
                                  <button type="button" class="btn btn-info" data-dismiss="modal">CANCEL</button>
                                </div>
                                </form>
                              </div> <!-- modal content -->
                            </div> <!-- modal dialog -->
                          </div> <!-- modal fade -->
                          </div> <!-- box -->

                    </div> <!-- tab pane tab_2 -->
                  </div> <!-- tab content -->
                  </div><!-- nav tabs custom -->
                </div> <!-- box body -->
              </div> <!-- box box default -->
            </div> <!-- col-md-12 -->
          </div> <!-- row -->
        </section>
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> Last na please
        </div>
        <strong>Copyright &copy; 2017 <a href="http://almsaeedstudio.com">Kiddo Academy and Development Center</a>.</strong> All rights
        reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">

            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">

            </ul>
            <!-- /.control-sidebar-menu -->

          </div>
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          <!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>

              <h3 class="control-sidebar-heading">Message Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div>
              <!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div>
              <!-- /.form-group -->
            </form>
          </div>
          <!-- /.tab-pane -->
        </div>
      </aside>
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="js/select2.full.min.js"></script>
    <script type="text/javascript" src="formwizard.js"></script>

    <script>

      $(function () {
        $("#datatable").DataTable();
        $("#datatable1").DataTable();
        $("#datatable2").DataTable();
        $("#datatable3").DataTable();
        $("#datatable4").DataTable();
      });
      $(document).ready(function() {
      $(".choose").select2();
    });

    </script>

  </body>

</html>
