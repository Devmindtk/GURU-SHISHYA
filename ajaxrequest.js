function addstu()
{
    var stuname=$("#username").val();
    var email=$("#password").val();
    var stupass=$("#pass").val();
    $.ajax({
        url:'addstudent.php',
        method:'POST',
        dataType:'json',
        data:
        {
            stusignup:"Sign up",
            stuname:name,
            email:mail,
            stupass:pass,
        },
        success:function(data)
        {
            console.log(data)
        }
    })
}