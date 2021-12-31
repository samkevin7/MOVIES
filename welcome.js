$('.btn1').click(function(e){
var email= document.getElementById('log-input').value;


var details = {
    'email':email,
};
    e.preventDefault()
   
    if(email==''){
        $('#emailerr').css('display','inline');
    }else{
        $('#emailerr').css('display','none');
    }
    
    if(email!='' ){
        $.ajax({
            type:'POST',
            url:'welcome.php',
            data:details,
            success:function(datas){
                if(datas == "signin"){
                    window.location.href = "moviesin.html";
                }
                else if(datas == "signup"){
                    window.location.href = "moviesup.html";
                }
                else{
                    $('#msg').html(datas);
                }
            }
           
        });
        $("#js")[0].reset();
    }
    
});