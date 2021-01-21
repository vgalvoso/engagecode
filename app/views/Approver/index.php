<?php
 session_start();
 include "../section/header.php"; 
 ?>
  <div class="main main-full h100">
    <nav class="nav-top drop-shadow">
        <h1>ENGAGE G.O.P.</h1>
        <div class="nav-user" onclick="logOut();">
            <label id="lbl_user"><?= $_SESSION["fullname"];?></label>
            <i class="icono-user"></i>
        </div>
    </nav>
    <div class="main main-wide">
      <table class="drop-shadow no-border">
        <thead>
          <tr>
            <th>Request</th> 
            <th>Requestor</th>
            <th>Date Requested</th>
            <th>Date Modified</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>
              <label id="lbl_request">Request Details</label>
            </th>
            <th>
              <label id="lbl_requestor">Request Details</label>
            </th>
            <th><label id="lbl_date_req"> January 21, 2021 </label></th>
            <th><label id="lbl_date_mod"> January 21, 2021 </label></th>
            <th><span id="lbl_status"> Pending </span></th>
            <th>
              <input type="button" id="btn_approve" value="Approve">
              <input type="button" class="bg-red" id="btn_reject" value="Reject">
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<?php include "../section/footer.php"; ?>