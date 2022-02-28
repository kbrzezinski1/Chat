<?php include 'includes/register.php'; ?>

<script src="js/validation.js"></script>

<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100 position-absolute top-50 start-50 translate-middle">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-4">
            <h2 class="text-uppercase text-center mb-5">Załóż konto</h2>

            <form method="POST" action="registration.php" class="was-validated">

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

                  <input type="password" id="password" class="form-control form-control-lg" name="password" required minlength="6" maxlength="30" onchange="form.password2.pattern = RegExp.escape(this.value);" title="Hasło ma od 6 do 30 znaków" />

                </div>
              </div>
              <div class="row align-items-center pt-4 pb-3">
                <div class="col-md-3 ps-5">

                  <h6 class="mb-0">Powtórz hasło</h6>

                </div>
                <div class="col-md-9 pe-5">
                  <input type="password" id="password2" class="form-control form-control-lg" name="password2" required minlength="6" maxlength="30" title="Hasła muszą się zgadzać" />
                </div>

                <div class="d-flex justify-content-center px-5 py-4">
                  <input type="submit" class="btn btn-primary" value="Zarejestruj się" name="reg_user">
                </div>

                <p class="text-center text-muted mt-2 mb-0">Masz konto? <a href="/login" class="fw-bold text-body"><u>Zaloguj się</u></a></p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  if (!RegExp.escape) {
    RegExp.escape = function(s) {
      return String(s).replace(/[\\^$*+?.()|[\]{}]/g, '\\$&');
    };
  }
</script>