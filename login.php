<div class="container">
      <div class="row mt-md-5 justify-content-end pt-5">
        <div class="col-md-6">
            <div class="card py-4 shadow">
              <form id="userLoginForm">
              <h2 class="text-center py-4">STUDENT LOGIN</h2>

              <div class="col-11 mx-auto">
                <div class="form-floating mb-4">
                    <input type="text" class="form-control shadow-none" name="userRollNumber"  placeholder="name@example.com">
                    <label for="floatingInput">Roll Number</label>
                </div>

              </div>
              <div class="col-11 mx-auto">
                <div class="form-floating mb-4">
                    <input type="password" class="form-control shadow-none" name="userPassword"  placeholder="name@example.com">
                    <label for="floatingInput">Password</label>
                </div>

              </div>
                <div class="col-11 mx-auto">
                  <div class="row">
                    <div class="col-6">
                      <div class="d-flex  mb-4 ">
                        <a onclick="ajaxRegisterPageCall()" type="button"  class="forgot mr-4" rel="noopener noreferrer">New Student ?</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="d-flex  mb-4 justify-content-end">
                        <a onclick="ajaxForgotPasswordPageCall()"  class="forgot mr-4" type="button" rel="noopener noreferrer">Forgot Password ?</a>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="col-11 mx auto">
                  <div class="row">
                      <div class="col-6 login-response text-danger fw-bold">
                      </div>
                  </div>
                </div>
                <div class="col-11 mx-auto">
                  <div class="d-grid mb-4 gap-2">
                    <button class="btn py-3 LOGIN" onclick="studentLogin()" type="button">LOGIN</button>
                  </div>
                </div>
              </form>
            </div>

        </div>
      </div>
      </div>