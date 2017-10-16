$('#btndangnhap').click(function () {
    var ip_username = $('#ip_username').val();
    var ip_password = $('#ip_password').val();
    var ip_email = $('#ip_email').val();
    var ip_confirmpassword = $('#ip_comfirmpassword').val();

    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if(!$partten.test(ip_username)){
        alert("Tên đăng nhập không chứa ký tự lạ và trong khoảng 6-32 ký tự");
        return false;
    }
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(ip_email)) {
        alert('Nhập địa chỉ email hợp lệ !');
        return false;
    }
    if(ip_password.length <6 || ip_password === ip_username){
        alert("Mật khẩu không an toàn");
        return false;
    }
    if(ip_confirmpassword.trim() ==="" || ip_confirmpassword != ip_password){
        alert("Mật khẩu không trùng khớp");
        $('#ip_comfirmpassword').val('');
        return false;
    }
    $('#formregister').submit();
});