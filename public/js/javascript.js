function logOut(){
  $.ajax({
    url:'../../controllers/Login.php',
    type:'post',
    data:{
      logout:true
    },
    success:function(data){
      if(data == "success"){
        location.replace("http://localhost/engagecode");
      }
    }
  });
}