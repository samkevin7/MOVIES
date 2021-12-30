$("#eye1").click(function () {

    if ($("#password").attr("type") == "password")
    { 
        $("#password").attr("type", "text");
    } else
    {
        $("#password").attr("type", "password");
    }
});
$('.signin').click(function(e){
    
var email= document.getElementById('email').value;
var password= document.getElementById('password').value;


var details = {
    'email':email,
    'password':password,
};
    e.preventDefault()
   
    if(email==''){
        $('#emailerr').css('display','inline');
    }else{
        $('#emailerr').css('display','none');
    }
    if(password==''){
        $('#pwderr').css('display','inline');
    }else{
        $('#pwderr').css('display','none');
    }
   
    if( email!='' && password!=''){
        $.ajax({
            type:'POST',
            url:'movielogin.php',
            data:details,
            success:function(datas){
                if(datas == "sucess"){
                    window.location.href = "homepage.html";
                }
                else{
                $('#msg').html(datas);
                }
            }
           
        });
        $("#js")[0].reset();
    }
    
});