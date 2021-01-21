$(document).ready(function(){
  $('#btn_login').on('click',function(){
    login();
  });
  $('#inp_username,#inp_userpass').on('keypress',function(e){
    var keycode = (e.keyCode ? e.keyCode : e.which);
    if(keycode == '13'){
      login();
    }
  });
});

function login(){
  let username = $.trim($('#inp_username').val());
  let password = $.trim($('#inp_userpass').val());
  $.ajax({
    url:'../../controllers/Login.php',
    type:'post',
    data:{
      login:true,
      username:username,
      password:password
    },
    success:function(data){
      if(data == "success"){
        location.replace("../../config/routes.php");
      }else{
        showAlert("Login Failed!","danger");
      }
    }
  });
}