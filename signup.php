<?php include 'db_connect.php'?>
<div class="container-fluid">
    <form action="" id="signup">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-6">
                    <div id="msg"></div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="輸入姓氏" name='firstname' required="">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="輸入姓名" name='lastname' required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="Email"" class=" form-control" placeholder="輸入電子信箱" name='email' required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" placeholder="輸入密碼" name='password' required="">
                        </div>
                    </div>
                    <b><small class="text-muted"><b>性別：</b></small></b>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <div class="d-flex w-100 justify-content-between p-1 border rounded align-items center">
                                <label for="gfemale">Female</label>
                                <div class="form-check d-flex w-100 justify-content-end">
                                    <input class="form-check-input" type="radio" checked="" id="gfemale" name="gender"
                                        value="Female">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="d-flex w-100 justify-content-between p-1 border rounded align-items center">
                                <label for="gmale">Male</label>
                                <div class="form-check d-flex w-100 justify-content-end">
                                    <input class="form-check-input" type="radio" id="gmale" name="gender" value="Male">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="Contact" class="form-control form-control-sm" required=""
                            placeholder="輸入聯絡電話">
                    </div>
                    <div class="form-group">
                        <textarea id="" cols="30" rows="4" name="address" class="form-control"
                            placeholder="輸入通訊地址"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">個人照片</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="pp" accept="image/*"
                                onchange="displayImgProfile(this,$(this))">
                            <label class="custom-file-label" for="customFile">選擇檔案...</label>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center rounded-circle">
                        <img src="" alt="" id="profile" class="img-fluid img-thumbnail rounded-circle"
                            style="max-width: calc(50%)">
                    </div>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">
            <button class="btn btn-block btn-success col-sm-5 align-self-center"><b>Sign Up</b></button>
        </div>
    </form>
</div>
<style>
#uni_modal .modal-footer {
    display: none
}
</style>
<script>
$('#signup').submit(function(e) {
    e.preventDefault()
    $('#msg').html('')
    start_load()
    $.ajax({
        url: "ajax.php?action=signup",
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success: function(resp) {
            if (resp == 1) {
                location.replace("index.php?page=home")
            } else if (resp == 2) {
                $('#msg').html('<div class="alert alert-danger">此信箱已註冊過</div>')
                end_load()
            }
        }
    })
})

function displayImgProfile(input, _this) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
            $('#profile').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>