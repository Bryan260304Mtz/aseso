<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($title) ? $title : 'Sistema de Asistencia' ?></title>
  <!-- Cargar el helper de URL -->
  
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Bootstrap y SweetAlert -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>

  <!-- jQuery y Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <!-- Scripts personalizados -->
  <script src="<?= base_url('public/assets/js/login.js') ?>"></script>
  <script src="<?= base_url('public/assets/js/transicionLogin.js') ?>"></script>
  <script src="<?= base_url('public/assets/js/resetPassword.js') ?>"></script>

</head>
<body>
  <div class="container register">
    <div class="row">
      <div class="col-md-3 register-left">
      <img src="<?= base_url('public/assets/img/upa.png'); ?>" alt="" />

        <p>Here you can create your account for English tutoring</p>

        <a href="<?= base_url('register/registerView'); ?>">
          <input type="submit" value="Signup now" />
        </a>
        <p>👆🏼👆🏼👆🏼 <br>Not a member?</p>

        <div class="forgot-pass">
          <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Forgot Password?</button>
        </div>
      </div>
      <div class="col-md-9 register-rig ht">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="false">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="true">Admin</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- Form Admin -->
          <div class="contendorLogin">
            <div class="" id="admin" role="tabpanel" aria-labelledby="admin-tab">
              <div class="text">Login Admin</div>
              <form id="adminLogin">
                <input type="hidden" name="formType" value="admin"> <!-- Campo oculto -->
                <div class="field">
                  <input required type="text" class="input" name="adminId" id="adminId" placeholder="Admin Id">
                  <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path>
                      </g>
                    </svg></span>
                </div>
                <div class="field">
                  <input required type="password" class="input" name="adminPassword" id="adminPassword" placeholder="Password">
                  <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <path class="" data-original="#000000" fill="#595959" d="M336 192h-16v-64C320 57.406 262.594 0 192 0S64 57.406 64 128v64H48c-26.453 0-48 21.523-48 48v224c0 26.477 21.547 48 48 48h288c26.453 0 48-21.523 48-48V240c0-26.477-21.547-48-48-48zm-229.332-64c0-47.063 38.27-85.332 85.332-85.332s85.332 38.27 85.332 85.332v64H106.668zm0 0"></path>
                      </g>
                    </svg></span>
                </div>

                <button class="button" name="btnAdminLogin" id="btnAdminLogin"> Sign in</button>
              </form>
            </div>

            <!-- End from Admin -->

            <!-- Form Teacher -->
            <div class=" " id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
              <div class="text">Login Teacher</div>
              <form id="teacherLogin">
                <input type="hidden" name="formType" value="teacher"> <!-- Campo oculto -->
                <div class="field">
                  <input required type="text" class="input" name="teacherId" id="teacherId" placeholder="Teacher Id">
                  <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path>
                      </g>
                    </svg></span>
                </div>
                <div class="field">
                  <input required type="password" class="input" name="teacherPassword" id="teacherPassword" placeholder="Password">
                  <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <path class="" data-original="#000000" fill="#595959" d="M336 192h-16v-64C320 57.406 262.594 0 192 0S64 57.406 64 128v64H48c-26.453 0-48 21.523-48 48v224c0 26.477 21.547 48 48 48h288c26.453 0 48-21.523 48-48V240c0-26.477-21.547-48-48-48zm-229.332-64c0-47.063 38.27-85.332 85.332-85.332s85.332 38.27 85.332 85.332v64H106.668zm0 0"></path>
                      </g>
                    </svg></span>
                </div>
                <button class="button" name="btnTeacherLogin" id="btnTeacherLogin"> Sign in</button>
              </form>
            </div>

            <!-- End from Teacher -->

            <!-- Form Student -->
            <div class="" id="student" role="tabpanel" aria-labelledby="student-tab">
              <div class="text">Login Student</div>
              <form id="studentLogin">
                <input type="hidden" name="formType" value="student"> <!-- Campo oculto -->
                <div class="field">
                  <input required type="text" class="input" name="studentId" id="studentId" placeholder="Student Id">
                  <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path>
                      </g>
                    </svg></span>
                </div>
                <div class="field">
                  <input required type="password" class="input" name="studentPassword" id="studentPassword" placeholder="Password">
                  <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <path class="" data-original="#000000" fill="#595959" d="M336 192h-16v-64C320 57.406 262.594 0 192 0S64 57.406 64 128v64H48c-26.453 0-48 21.523-48 48v224c0 26.477 21.547 48 48 48h288c26.453 0 48-21.523 48-48V240c0-26.477-21.547-48-48-48zm-229.332-64c0-47.063 38.27-85.332 85.332-85.332s85.332 38.27 85.332 85.332v64H106.668zm0 0"></path>
                      </g>
                    </svg></span>
                </div>
                <button class="button" name="btnStudentLogin" id="btnStudentLogin"> Sign in</button>
              </form>
            </div>
          </div>
          <!-- End from Student -->

        </div>
        <!-- Modal para Forgot Password -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="resetPassword">
                  <div class="form-group">
                    <label for="userRole">Select Role:</label>
                    <select class="form-control" id="userRole" name="userRole" required>
                      <option value="" disabled selected>Select your role</option>
                      <option value="admin">Admin</option>
                      <option value="teacher">Teacher</option>
                      <option value="student">Student</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="id" class="col-form-label">Id:</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Enter your id">
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                  </div>
                  <button type="button" id="btnSendEmail" name="btnSendEmail" class="btn btn-primary">Send Reset Link</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>