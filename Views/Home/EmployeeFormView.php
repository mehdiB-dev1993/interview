

<div class="mask">


        <div class="modal d-block" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h5 class="modal-title" id="staticBackdropLabel">add-employee</h5>

                    </div>
                    <form id="Add-emp">

                    <div class="modal-body">

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
                                <option value="1" selected>کاربر</option>
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
</div>

<script>
    $('.btn-close').on('click',function(){
        $(this).parents('.mask').remove();
    });



</script>
