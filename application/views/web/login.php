<style>
/* box login */
.obox{
    width:90%;
    max-width:420px;
    min-height:50%;
    margin:60px auto;
}

/* input supaya full */
.inp{
    width:100%;
    height:40px;
    padding:8px 10px;
    border:1px solid #ccc;
    border-radius:4px;
}

/* header box */
.hbox{
    padding:10px;
}

/* responsive tablet */
@media (max-width:768px){
    .obox{
        width:95%;
        margin-top:40px;
    }

    h4{
        text-align:center;
        
    }
}

/* responsive hp kecil */
@media (max-width:480px){
    .obox{
        width:95%;
        margin-top:20px;
    }

    .btn{
        width:48%;
        font-size:14px;
    }

    .text-warning{
        font-size:13px;
    }
}
</style>
<div class="layer"></div>
<div class="obox">
    <div class="row">
        <div class="col-lg-12">
            <div class="intro-text">
                <div class="col-md-12 bg-success hbox">
                        
                </div>
                <h4 style="color:white;">
    <br><br><br>
    <img src="img/logods.png" width="60">
    Login Administrasi Siswa
</h4>
                <div class="col-md-12">
                    <span>Masukkan No. Pendaftaran dan Password<br> yang diperoleh saat melakukan pendaftaran secara online.</span><br>
                </div>
                <div class="col-md-12" style="margin-top:20px">
                    <?php
                    echo $this->session->flashdata('msg');
                    ?>
                    <span ><b>MASUKKAN</b></span>
                    <form action="" method="post">
                        <div class="form-group" style="padding-left:15px;padding-right:15px">
                            <input type="text" name="username" class="inp" placeholder="NO. PENDAFTARAN" required="true" autofocus />
                        </div>
                        <div class="form-group has-feedback" style="margin-top:-20px;padding-left:15px;padding-right:15px">
                            <input type="password" name="password" class="inp" placeholder="N.I.S.N" required="true"  />
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="" style="color:#fff;float:left;" class="btn btn-warning"><i class="fa fa-remove margin-r-5"></i> Tutup</a>
                                <button type="submit" name="btnlogin" style="color:#fff;float:right;" class="btn btn-danger"><i class="fa fa-sign-in margin-r-5"></i> Login</button>
                            </div><!-- /.col -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>