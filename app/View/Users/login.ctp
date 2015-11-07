<div class="publicView row" style="margin: 0">
    <div class="name col-all-12"><h1>Đăng nhập vào Website</h1><hr></div>
    <div class="col-all-6" style="border-right: 1px solid #E5E5E5">
        <div class="users form">
            <form action=<?php echo $this->webroot,'login.html'; ?> id="UserLoginForm" method="post" accept-charset="utf-8">
                <div style="display:none;">
                    <input type="hidden" name="_method" value="POST">
                </div>
                <div class="row form-group required">
                    <div class="col-all-4"><label>Tên đăng nhập: </label></div>
                    <div class="col-all-8"><input name="data[User][username]" class="form-control" maxlength="50" type="text" required="required"></div>
                </div>
                <div class="row form-group required">
                    <div class="col-all-4"><label>Mật khẩu: </label></div>
                    <div class="col-all-8"><input name="data[User][password]" class="form-control" type="password" required="required"></div>
                </div>
                <div class="row form-group">
                    <div class="col-all-4"></div>
                    <div class="col-all-8"><a href="#">Quên mật khẩu ?</a></div>
                </div>
                <div class="row form-group">
                    <div class="col-all-4"></div>
                    <div class="col-all-8"><input class="btn btn-flat btn-warning col-all-6" type="submit" value="Đăng nhập"></div>
                </div>
                <div class="row form-group">
                    <div class="col-all-4"></div>
                    <div class="col-all-8"><label>Bạn chưa là thành viên? </label><a href="#"> Đăng ký ngay!</a></div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-all-6" style="border-right: 1px solid #E5E5E5">
        <div class="social-auth-links">
            <div class="btn-group col-all-12 form-group">
                <button type="button" class="btn btn-flat btn-primary">
                    <span class="glyphicon glyphicon-triangle-right"></span>
                </button>
                <button type="button" class="btn btn-flat btn-primary col-all-10">Đăng nhập bằng Facebook</button>
            </div>
            <div class="btn-group col-all-12 form-group">
                <button type="button" class="btn btn-flat btn-danger">
                    <span class="glyphicon glyphicon-triangle-right"></span>
                </button>
                <button type="button" class="btn btn-flat btn-danger col-all-10">Đăng nhập bằng Google+</button>
            </div>
        </div>
    </div>
</div>
