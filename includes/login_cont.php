<?php include 'includes/log_on.php'; ?>

<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100 position-absolute top-50 start-50 translate-middle">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Zaloguj się</h2>

            <form action="login.php" method="POST" class="was-validated">

              <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">Login</h6>

                </div>
                <div class="col-md-9 pe-5">

                <input type="text" id="login" class="form-control is-valid" name="login" required pattern="^(?=.{6,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$" title="Login ma od 6 do 20 znaków, może zawierać litery i cyfry" />

                </div>
              </div>
              <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">Hasło</h6>

                </div>
                <div class="col-md-9 pe-5">

                <input type="password" id="password" class="form-control is-valid" name="password" required minlength="6" maxlength="30" title="Hasło ma od 6 do 30 znaków" />

                </div>
              </div>

              <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="Zaloguj się" name="log_user">

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>