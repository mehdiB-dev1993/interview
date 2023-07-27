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
            <button type="button" class="btn btn-primary" id="btn-Add-emp">
               Add-Employee
            </button>
            <button type="button" class="btn btn-success" id="btn-create-ticket">
                create_Ticket
            </button>
            <button type="button" class="btn btn-warning">
                Tickets
            </button>
        </div>

        <!-- Button trigger modal -->





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
<script src="../../Assets/script.js"></script>

<script>

$('#btn-create-ticket').on('click',function(event){

    $.ajax({
        url: "/show/form/ticket",
        data: '',
        type: 'get',
        // dataType : 'json',
    }).done(function (res){

        $('body').append(res);
    });
});









</script>

</body>
</html>