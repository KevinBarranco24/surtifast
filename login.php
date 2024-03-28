<?php require_once("header.php"); ?>
<body class="backLogin">
<br>
    <div class="container container-form-login">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5 shadow">
                        <h2 class="text-uppercase text-center mb-5">Iniciar Sesion</h2>

                        <form method="POST" class="form_login" id="form_login">

                            <div class="form-outline mb-4">
                            <input type="text" name="user" id="user" class="form-control form-control-lg" require placeholder="Usuario" />
                           
                            </div>

                            <div class="form-outline mb-4">
                            <input type="password" name="userpass" id="userpass" class="form-control form-control-lg" require placeholder="Contraseña" />
                            
                            </div>
                            <div class="form-outline mb-4 text-center">
                                <input type="button" value="Acceder" id="btn_log" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                            </div>
                            

                        </form>
                        <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                    </div>

                </div>
            </div>    
        </div>
    </div>
    <br>

<?php require_once("footer.php"); ?>