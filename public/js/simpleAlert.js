function showAlert(message,status){
  var exists = $('div').hasClass('van-alert-container');
  if(exists)
  {
        $alert ="<div class='none van-alert "+ status +"'>" +
                "   <span class='closebtn' onclick='removeElement(this.parentElement);'>&times;</span>"+message +
                "</div>";
        $('.van-alert-container').append($alert);
  }
  else
  {
        $alert = "<div class='van-alert-container' style='z-index:1051;'>"+
                "   <div class='none van-alert "+ status +"'>" +
                "     <span class='closebtn' onclick='removeElement(this.parentElement);'>&times;</span>"+ message +
                "   </div>"+
                " </div>";
        $('body').append($alert);
  }
  $('.van-alert').fadeIn(function(){
        let fade = setTimeout(() => removeElement($(this)),10000);
  });
}

function removeAlerts(){
  $.each($('.van-alert'),function(){
        removeElement($(this));
  });
}

function removeElement(element){
  $(element).fadeOut("slow",function(){
        $(element).remove();
  });
}