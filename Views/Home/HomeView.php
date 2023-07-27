<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../Assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <!--<div class="sidebar"></div>-->
    <div class="main">

        <div class="header"></div>
        <div class="options">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               Add-Employee
            </button>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="">
                create_Ticket
            </button>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="">
                Tickets
            </button>
        </div>

        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h5 class="modal-title" id="staticBackdropLabel">add-employee</h5>

                    </div>
                    <div class="modal-body">
                        <form id="Add-emp">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">نام کامل</label>
                            <input type="text" name="fullname" class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">نام کاربری</label>
                            <input type="text" name="username" class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">رمز عبور</label>
                            <input type="text" name="password" class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">ایمیل</label>
                            <input type="text" name="email" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">آدرس</label>
                            <input type="text" name="address" class="form-control"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">تلفن</label>
                            <input type="text" name="phone" class="form-control"  >
                        </div>

                            <select class="form-select users" aria-label="Default select example" name="aliasName">
                                <option selected>انتخاب کنید</option>
                                <option value="1">کاربر</option>
                                <option value="2">کارمند</option>

                            </select>

                        <div class="mb-3">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="1">
                                <label class="form-check-label" for="gender">
                                    مذکر
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="0">
                                <label class="form-check-label" for="gender">
                                   مونث
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                        <input type="submit" class="btn btn-primary" value="ایجاد">

                    </div>
                    </form>
                </div>
            </div>
        </div>


        <table class="table table-striped table-hover">
            <tdead>
                <tr>
                    <th>#</th>
                    <th>FullName</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>


                </tr>
            </tdead>
            <tbody>
            <?php foreach ($data as $key => $val){ ?>
                <tr>
                    <td><?=$val['id']?></td>
                    <td ><?=$val['fullname']?></td>
                    <td><?=$val['username']?></td>
                    <td><?=$val['password']?></td>
                    <td><?=$val['email']?></td>
                    <td><?=$val['phone']?></td>
                    <td><?=$val['address']?></td>
                    <td><?=$val['gender']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="../../Assets/jquery-3.7.0.min.js"></script>

<script>



$('#Add-emp').submit(function (event) {

    var formData = {
        fullname: $("input[name=fullname]").val(),
        username: $("input[name=username]").val(),
        password: $("input[name=password]").val(),
        email:    $("input[name=email]").val(),
        phone:    $("input[name=phone]").val(),
        address:  $("input[name=address]").val(),
        gender:   $("input[name=gender]").val(),
        aliasName : $("input[name=aliasName]").val(),
    };

    $.ajax({
        url: "/employee/add",
        data: formData,
        type: 'POST',
       // dataType : 'json',
    }).done(function (res){
        console.log(res);
    });

    event.preventDefault();

    });




</script>

</body>
</html>