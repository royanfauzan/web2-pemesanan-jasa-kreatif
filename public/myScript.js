console.log("Coba js")

$('#tampilPass').click(function(){
    if('password' == $('#inputPassword').attr('type')){
        $('#inputPassword').prop('type', 'text');
    }else{
        $('#inputPassword').prop('type', 'password');
    }
});