
$('#btn-Add-emp').on('click',function(){
    $.ajax({
        url: "/show/form",
        data: '',
        type: 'get',
        // dataType : 'json',
    }).done(function (res){

        $('body').append(res);
    });

});

$('body').on('submit','#Add-emp',function (event) {
    $fullname = $("input[name=fullname]").val();
    $username = $("input[name=username]").val();
    $password = $("input[name=password]").val();
    $email = $("input[name=email]").val();
    $phone = $("input[name=phone]").val();
    $address = $("input[name=address]").val();
    $gender = $("input[name=gender]").val();
    var formData = {
        fullname: $fullname,
        username: $username,
        password: $password,
        email: $email,
        phone: $phone,
        address: $address,
        gender: $gender,

    };
    var formData2 = {aliasName: $("select[name=aliasName]").val()};



    $.ajax({
        url: "/employee/add",
        data: {formData,formData2},
        type: 'POST',
        //dataType : 'json',
        success: function (id)
        {
            window.location = '/';
        }
    });


    event.preventDefault();
});

