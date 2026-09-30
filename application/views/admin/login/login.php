<style>
body {
    min-height: 100vh;
    background: linear-gradient(135deg, #26a69a, #1565c0);
    
    align-items: center;
    justify-content: center;
}

/* tambahan efek belakang login */
body::before {
    content: "";
    position: fixed;
    width: 350px;
    height: 350px;
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
    top: -100px;
    left: -100px;
}


/* hanya mempercantik box login */
.login-form {
    width: 320px;
    padding: 30px;
    border-radius: 18px;
    background: #ffffff;
    border: none;
    box-shadow: 0 15px 35px rgba(0,0,0,0.25);
}


/* logo */
.login-form img {
    width:80px;
    height:80px;
    object-fit:contain;
}


/* judul */
.login-form h5 {
    font-size:20px;
    color:#263238;
}


/* input */
.login-form .form-control {
    height:45px;
    border-radius:12px;
    background:#f1f5ff;
    border:1px solid #d7dce5;
    transition:.3s;
}


.login-form .form-control:focus {
    border-color:#26a69a;
    box-shadow:0 0 8px rgba(38,166,154,.3);
}


/* icon input */
.login-form .form-control-feedback {
    color:#999;
}


/* tombol */
.login-form .btn {
    border-radius:12px;
    padding:10px 20px;
    transition:.3s;
}


.login-form .btn:hover {
    transform:translateY(-2px);
    box-shadow:0 5px 12px rgba(0,0,0,.2);
}


/* jarak antar tombol */
.login-form .btn-danger,
.login-form .btn-success {
    margin:5px;
}


/* HP */
@media(max-width:480px){

    .login-form {
        width:90%;
        margin:auto;
    }

    .login-form .btn {
        width:auto;
    }

}
.tombol-login{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:10px;
}

.tombol-login .btn{
    flex:1;
}

</style>
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$user = $this->db->get('tbl_user')->row_array();
?>

<!-- Simple login form -->
<form action="" method="post">
	<div class="panel panel-body login-form">
		<div class="text-center">
			<img src="img/logods.png" alt="Logo" width="80">
			<h5 class="content-group text-bold">LOGIN ADMIN PPDB Online
				<small class="display-block text-bold"><b><?php echo $user['nama_lengkap']; ?></b></small>
			</h5>
			<?php
			echo $this->session->flashdata('msg');
			?>
		</div>
		<hr>
		<div class="form-group has-feedback has-feedback-left">
			<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
			<div class="form-control-feedback">
				<i class="icon-user text-muted"></i>
			</div>
		</div>

		<div class="form-group has-feedback has-feedback-left">
			<input type="password" class="form-control" name="password" placeholder="Password" required>
			<div class="form-control-feedback">
				<i class="icon-lock2 text-muted"></i>
			</div>
		</div>
		<hr>
		<div class="col-md-12">
    <div class="form-group tombol-login">

        <button type="button"
            class="btn btn-danger"
            onclick="window.location.href='<?= base_url(); ?>'">
            <i class="icon-home position-right"></i>
            <b>&nbsp; HOME</b>
        </button>

        <button type="submit"
            name="btnlogin"
            class="btn btn-success">
            <i class="glyphicon glyphicon-log-in position-right"></i>
            <b>&nbsp; LOGIN</b>
        </button>

    </div>
</div>
</form>
<!-- /simple login form -->