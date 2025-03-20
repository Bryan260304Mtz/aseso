<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="<?= base_url('public/assets/css/styles.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url('public/assets/js/transicionRegister.js'); ?>" type="text/javascript"></script>
</head>

<body>
  <div class="container register">
    <div class="row">
      <div class="col-md-3 register-left">
        <img src="<?= base_url('public/assets/img/upa.png'); ?>" alt="" />

        <p>Here you can create your account for English tutoring</p>
        <a href="<?= base_url('login/loginView'); ?>">
        <input type="submit" name="" value="Login" /><br />
        </a>
        <p>👆🏼👆🏼👆🏼 <br>If you already have an account, Login here</p>
      </div>
      <div class="col-md-9 register-right">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="Student-tab" data-toggle="tab" href="#Student" role="tab" aria-controls="Student" aria-selected="true">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Teacher-tab" data-toggle="tab" href="#Teacher" role="tab" aria-controls="Teacher" aria-selected="false">Teacher</a>
          </li>
        </ul>

        <!-- Registro para Alumnos -->
        <form id="StudentRegister">
          <input type="hidden"  name="formType" value="student"> <!-- Campo oculto -->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Student" role="tabpanel" aria-labelledby="Student-tab">
              <h3 class="register-heading">Student Registration</h3>
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="studentId">Student Id *</label>
                    <input type="text" class="form-control" id="studentId" name="studentId" placeholder="Student Id" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="studentName">Name *</label>
                    <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter Name" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="studentSurname">Surname *</label>
                    <input type="text" class="form-control" id="studentSurname" name="studentSurname" placeholder="Enter Surname" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="studentGroup">Group e.g. "ISC701" *</label>
                    <input type="text" class="form-control" id="studentGroup" name="studentGroup" placeholder='Group e.g. "ISC701"' required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="studentEmail">Your Email *</label>
                    <input type="email" class="form-control" id="studentEmail" name="studentEmail" placeholder="Your Email" required  autocomplete="username"/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group position-relative">
                    <label for="studentPassword">Password *</label>
                    <input
                      type="password" class="form-control" id="studentPassword" name="studentPassword" placeholder="Password" required required autocomplete="new-password" />
                    <span class="toggle-password" onclick="togglePassword('studentPassword')">
                      <i class="fa fa-eye" id="eyeIcon1"></i>
                    </span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group position-relative">
                    <label for="studentConfirmPassword">Confirm Password *</label>
                    <input
                      type="password" class="form-control" id="studentConfirmPassword"  name="studentConfirmPassword" placeholder="Confirm Password" required  required autocomplete="new-password"/>
                    <span class="toggle-password" onclick="togglePassword('studentConfirmPassword')">
                      <i class="fa fa-eye" id="eyeIcon2"></i>
                    </span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label id="studentPhone">Your Phone *</label>
                    <input type="text" minlength="10" maxlength="10" name="studentPhone" class="form-control" id="studentPhone" placeholder="Your Phone" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  </div>
                </div>
                <div class="col-md-6">
                  <input type="submit" id="btnRegisterStudent" name="btnRegisterStudent" class="btnRegister btn btn-primary" value="Register" />
                </div>
              </div>
            </div>
          </div>

        </form>
        <!-- Fin de Registro para alumnos -->

        <!-- Registro para docentes -->
        <form id="TeacherRegister">
          <input type="hidden" name="formType" value="teacher"> <!-- Campo oculto -->
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Teacher" role="tabpanel" aria-labelledby="Teacher-tab">
              <h3 class="register-heading">Teacher Registration</h3>
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="teacherId">Teacher Id *</label>
                    <input type="text" class="form-control " id="teacherId" name="teacherId" placeholder="Enter Teacher Id" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="teacherName">Name *</label>
                    <input type="text" class="form-control" id="teacherName" name="teacherName" placeholder="Enter Name" required />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="teacherSurname">Surnames *</label>
                    <input type="text" class="form-control" id="teacherSurname" name="teacherSurname" placeholder="Enter Surnames" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="teacherEmail">Email *</label>
                    <input type="email" class="form-control" id="teacherEmail" name="teacherEmail" placeholder="Enter Email" required  autocomplete="username"/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="teacherPassword">Password *</label>
                    <input type="password" class="form-control" id="teacherPassword" name="teacherPassword" placeholder="Enter Password" required required autocomplete="new-password"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="confirmPassword">Confirm Password *</label>
                    <input type="password" class="form-control " id="teacherConfirmPassword" name="teacherConfirmPassword" placeholder="Confirm Password" required autocomplete="new-password"  />
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="text" maxlength="10" minlength="10" class="form-control " id="phone" name="teacherPhone" placeholder="Enter Phone Number" required />
                  </div>
                </div>

                <div class="col-md-6">
                  <input type="submit" id="btnRegisterTeacher" name="btnRegisterTeacher" class="btnRegister btn btn-primary" value="Register" />
                </div>
              </div>
            </div>
          </div>
        </form>
        <!--Fin Registro para docentes -->
      </div>
    </div>
</body>

<script src="<?= base_url('public/assets/js/registrar.js'); ?>"></script>
<script>
    const baseUrl = "<?= base_url(); ?>";
</script>

</html>