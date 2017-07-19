<?php include "includes/header.php"; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div class="content-wrapper" style="height: 2000px;">
   <section class="content-header">
      <h1>
         Dashboard
         <small></small>
      </h1>
   </section>
   <section class="content">
      <?php

         if(isset($user)){ ?>
         

               <table id="example" class="table table-striped table-bordered"" cellspacing="0" width="100%">
                 <thead>
                     <tr>
                         <th>From</th>
                         <th>Username</th>
                         <th>Mobile</th>
                         <th>Birthday</th>
                         <th>Email</th>
                     </tr>
                 </thead>
                 <tfoot>
                     <tr>
                         <th>From</th>
                         <th>Username</th>
                         <th>Mobile</th>
                         <th>Birthday</th>
                         <th>Email</th>
                     </tr>
                 </tfoot>
                 <tbody>

                 <?php foreach ($user as $key => $value) { ?>

                    <tr>
                         <td><?= $value->from ?></td>
                         <td><?= $value->username ?></td>
                         <td><?= $value->mobile ?></td>
                         <td><?= $value->birthday ?></td>
                         <td><?= $value->email ?></td>
                     </tr>


               <?php  } ?>



                     
                     
                     
                 </tbody>
             </table>

            

      <?php } ?>




      <?php

         if(isset($leaderboard)){ ?>
         

               <table id="example" class="table table-striped" cellspacing="0" width="100%">
                 <thead>
                     <tr>
                         <th>Username</th>
                         <th>Points</th>
                     </tr>
                 </thead>
                 <tfoot>
                     <tr>
                         <th>Username</th>
                         <th>Points</th>
                     </tr>
                 </tfoot>
                 <tbody>

                 <?php foreach ($leaderboard as $key => $value) { ?>

                    <tr>
                         <td><?= $value->username ?></td>
                         <td><?= $value->points ?></td>
                     </tr>


               <?php  } ?>
                     
                     
                     
                 </tbody>
             </table>

            

      <?php } ?>

   </section>
</div>

<aside class="control-sidebar control-sidebar-dark">
   <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
   </ul>
   <div class="tab-content">
      <div class="tab-pane active" id="control-sidebar-home-tab">
         <h3 class="control-sidebar-heading">Recent Activity</h3>
         <ul class="control-sidebar-menu">
            <li>
               <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                     <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                     <p>Will be 23 on April 24th</p>
                  </div>
               </a>
            </li>
         </ul>
         <h3 class="control-sidebar-heading">Tasks Progress</h3>
         <ul class="control-sidebar-menu">
            <li>
               <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                     Custom Template Design
                     <span class="pull-right-container">
                     <span class="label label-danger pull-right">70%</span>
                     </span>
                  </h4>
                  <div class="progress progress-xxs">
                     <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
               </a>
            </li>
         </ul>
      </div>
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <div class="tab-pane" id="control-sidebar-settings-tab">
         <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>
            <div class="form-group">
               <label class="control-sidebar-subheading">
               Report panel usage
               <input type="checkbox" class="pull-right" checked>
               </label>
               <p>
                  Some information about this general settings option
               </p>
            </div>
         </form>
      </div>
   </div>
</aside>
<div class="control-sidebar-bg"></div>
</div>



<script src="<?= base_url('assets/admin_assets/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/admin_assets/js/bootstrap.min.js')?>"></script>
<!-- <script src="<?= base_url('assets/admin_assets/js/jquery.dataTables.min.js')?>"></script> -->
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


<!-- <script src="<?php # echo base_url('assets/admin_assets/js/app.min.js');?>"></script> -->

<script type="text/javascript">
  
   $(document).ready(function() {
       $('#example').DataTable();
       // alert('hello');
   });

</script>

</body>
</html>