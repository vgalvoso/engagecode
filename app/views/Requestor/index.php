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
            <th>Approver</th>
            <th>Date Requested</th>
            <th>Date Modified</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>
              <textarea name="" class="no-border w100" id="inp_request" cols="30" placeholder="Input request here..."></textarea>
            </th>
            <th>
              <select name="" id="sel_approver">
                <option value="">-Select Approver-</option>
              </select>
            </th>
            <th><span id="lbl_date_req"> January 21, 2021 </span></th>
            <th><span id="lbl_date_mod"> January 21, 2021 </span></th>
            <th><span id="lbl_status"> Pending </span></th>
            <th>
              <input type="button" id="btn_send" value="Send Request">
            </th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<?php include "../section/footer.php"; ?>