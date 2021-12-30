
$("#eye").click(function () {

    if ($("#password").attr("type") == "password")
    { 
        $("#password").attr("type", "text");
    } else
    {
        $("#password").attr("type", "password");
    }
});

$('.signup').click(function(e){
    var name= document.getElementById('name').value;
var email= document.getElementById('email').value;
var password= document.getElementById('password').value;
var city = document.getElementById('city').value;

var details = {
    'name':name,
    'email':email,
    'password':password,
    'city':city,
};
    e.preventDefault()
    if(name==''){
        $('#nameerr').css('display','inline');
    }else{
        $('#nameerr').css('display','none');
    }
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
    if(city==''){
        $('#cityerr').css('display','inline');
    }else{
        $('#cityerr').css('display','none');
    }
    if(name!='' && email!='' && password!='' && city!=''){
        $.ajax({
            type:'POST',
            url:'movienew.php',
            data:details,
            success:function(datas){
                $('#msg').html(datas);
                
            }
           
        });
        $("#js")[0].reset();
    }
    
});