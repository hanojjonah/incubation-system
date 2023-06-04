<?php
include('validation/validate_registration_form.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootstrap links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- sweet alert link -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- JSquery Ui datepicker links -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <title>Registration Form</title>
  <style>
    body {
      background-color: #0F416F;
    }

    .btn-color {
      background-color: #0F416F;
    }

    .custom-img {
      height: 100%;
      width: 100%;
      padding-left: 0;
      filter: blur(1.25px);
      /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
      Replace with your image path
      background-size: cover;
      background-position: center; */
    }
  </style>

  <script>
    function text(x) {
      if (x == 0) document.getElementById("registration").style.display = "block";
      else document.getElementById("registration").style.display = "none";
      return;
    }
  </script>
</head>

<body onload="text(1)">
  <div class="container my-4">
    <div class="row d-flex justify-content-center shadow rounded mt-1 bg-light">
      <!-- image block -->
      <div class="col d-none d-lg-block">
        <img src="images/register.jpg" alt="" class="img-fluid custom-img">
      </div>

      <div class="col-md-10 col-lg-8 col-xl-7">
        <form class="row g-2  px-5 mt-1 mb-2 pb-1 text-body needs-validation" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" novalidate enctype="multipart/form-data">
          <h3 class="text-center border-bottom pb-1 border-dark text-body-secondary">REGISTRATION FORM</h3>

          <!-- name field -->
          <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="<?php echo $name ?>" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['name']; ?></div>
          </div>

          <!-- ID Number -->
          <div class="col-md-6">
            <label for="id_number" class="form-label">ID Number:</label>
            <input type="text" class="form-control" id="id_number" name="id_number" autocomplete="off" value="<?php echo $id_number ?>" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['id_number']; ?></div>
          </div>

          <!-- email -->
          <div class="col-md-6">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control " name="email" id="email" autocomplete="off" value="<?php echo $email; ?>" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['email']; ?></div>
          </div>

          <!-- phone number -->
          <div class="col-md-6">
            <label for="tel" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="tel" id="tel" autocomplete="off" value="<?php echo $tel ?>" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['tel']; ?></div>
          </div>

          <!-- KU student -->
          <div class="col-md-6 form-group">
            <label for="kuOrNonKuStudent">Are you a KU student?</label>
            <div class="form-check">
              <input class="form-check-input " type="radio" name="ku_student" id="ku_student" value="yes" required onclick="text(0)">
              <label class="form-check-label" for="ku_student">
                Yes
              </label>

              <!-- registration -->
              <div id="registration" class="col-12">
                <label for="regNumber" class="form-label">Registration Number</label>
                <input type="text" class="form-control" name="regNumber" id="regNumber">
              </div>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="ku_student" id="nonKUstudent" value="no" required onclick="text(1)">
              <label class="form-check-label" for="nonKUstudent">
                No
              </label>
            </div>

            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['ku_student']; ?></div>
          </div>

          <!-- IP -->
          <div class="col-md-6 form-group">
            <label for="RegisteredIP">Is your IP registered?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="IP_registered" id="IPregistered" value="yes" <?php echo isset($IP_registered) && $IP_registered === 'yes' ? 'checked' : ''; ?> required>
              <label class="form-check-label" for="IPregistered">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="IP_registered" id="IPnotregistered" value="no" <?php echo isset($IP_registered) && $IP_registered === 'no' ? 'checked' : ''; ?> required>
              <label class="form-check-label" for="IPnotregistered">
                No
              </label>
            </div>

            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['IP_registered']; ?></div>
          </div>

          <!-- date Incubated -->
          <div class="col-md-6">
            <label for="date_incubated" class="form-label">Date Incubated</label>
            <input type="text" class="form-control" id="date_incubated" name="date_incubated" value="<?php echo $date_incubated; ?>" readonly autocomplete="off" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['date_incubated']; ?></div>
          </div>

          <!-- passport size -->
          <div class="col-md-6">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" id="photo" value="<?php $fileName; ?>" required>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['photo']; ?></div>
          </div>

          <!-- Names of key partners / investors if any -->
          <div class="col-12">
            <label for="partner" class="form-label">Names of key partners/investors if any</label>
            <input type="text" class="form-control" id="partner" name="partner" value="<?php echo $partner; ?>" autocomplete="off">
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['partner']; ?></div>
          </div>



          <!-- category of Innovation -->
          <div class="col-12">
            <label for="innovation_category">Category of your innovation</label>
            <select name="innovation_category" id="innovation_category" class="form-select" required>
              <option value="" selected disabled>Choose...</option>
              <option value="Business and Professional Services" <?php if (isset($innovation_category) && $innovation_category == "Business and Professional Services") echo "selected"; ?>>Business and Professional Services</option>
              <option value="Information  and Communication Technology" <?php if (isset($innovation_category) && $innovation_category == "Information  and Communication Technology") echo "selected"; ?>>Information and Communication Technology</option>
              <option value="Marketing and Communication" <?php if (isset($innovation_category) && $innovation_category == "Marketing and Communication") echo "selected"; ?>>Marketing and Communication</option>
              <option value="Manufacturing and Construction" <?php if (isset($innovation_category) && $innovation_category == "Manufacturing and Construction") echo "selected"; ?>>Manufacturing and Construction</option>
              <option value="Transport and Logistics" <?php if (isset($innovation_category) && $innovation_category == "Transport and Logistics") echo "selected"; ?>>Transport and Logistics</option>
              <option value="Bio and Nano-Technology" <?php if (isset($innovation_category) && $innovation_category == "Bio and Nano-Technology") echo "selected"; ?>>Bio and Nano-Technology</option>
              <option value="Health and Nutrition" <?php if (isset($innovation_category) && $innovation_category == "Health and Nutrition") echo "selected"; ?>>Health and Nutrition</option>
              <option value="Green and ecological business" <?php if (isset($innovation_category) && $innovation_category == "Green and ecological business") echo "selected"; ?>>Green and ecological business</option>
              <option value="Tourism and eco-tourism" <?php if (isset($innovation_category) && $innovation_category == "Tourism and eco-tourism") echo "selected"; ?>>Tourism and eco-tourism</option>
              <option value="Fine and Performing Arts" <?php if (isset($innovation_category) && $innovation_category == "Fine and Performing Arts") echo "selected"; ?>>Fine and Performing Arts</option>
              <option value="Sports, Leisure and Entertainment" <?php if (isset($innovation_category) && $innovation_category == "Sports, Leisure and Entertainment") echo "selected"; ?>>Sports, Leisure and Entertainment</option>
              <option value="Water and Sanitation" <?php if (isset($innovation_category) && $innovation_category == "Water and Sanitation") echo "selected"; ?>>Water and Sanitation</option>
              <option value="Energy" <?php if (isset($innovation_category) && $innovation_category == "Energy") echo "selected"; ?>>Energy</option>
              <option value="Media and entertainment" <?php if (isset($innovation_category) && $innovation_category == "Media and entertainment") echo "selected"; ?>>Media and entertainment</option>
            </select>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['innovation_category']; ?></div>
          </div>

          <!-- Stage of innovation -->
          <div class="col-12">
            <label for="innovation_stage" class="form-label">Stage of Innovation</label>
            <select name="innovationStage" id="innovation_stage" class="form-select" required>
              <option value="" selected disabled>Choose...</option>
              <option value="Idea phase" <?php if (isset($innovationStage) && $innovationStage == "Idea phase") echo "selected"; ?>>Idea phase</option>
              <option value="Research and Development" <?php if (isset($innovationStage) && $innovationStage == "Research and Development") echo "selected"; ?>>Research and Development</option>
              <option value="Prototype phase" <?php if (isset($innovationStage) && $innovationStage == "Prototype phase") echo "selected"; ?>>Prototype phase</option>
              <option value="Start up" <?php if (isset($innovationStage) && $innovationStage == "Start up") echo "selected"; ?>>Start Up</option>
              <option value="Market phase" <?php if (isset($innovationStage) && $innovationStage == "Market phase") echo "selected"; ?>>Market phase</option>
              <option value="Scaling pu phase" <?php if (isset($innovationStage) && $innovationStage == "Scaling pu phase") echo "selected"; ?>>Scaling up phase</option>
              <option value="Other" <?php if (isset($innovationStage) && $innovationStage == "Other") echo "selected"; ?>>Other</option>
            </select>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['innovationStage']; ?></div>
          </div>

          <!-- description -->
          <div class="col-12">
            <label for="description" class="form-label">A Brief description of your Innovation.(not exceeding 250 words)</label>
            <textarea class="form-control" name="description" id="description" cols="40" rows="5" autocomplete="off" required>
              <?php echo $description; ?>
            </textarea>
            <div class="invalid-feedback">
              Please fill the above field.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
            <!-- php form validation error -->
            <div class="text-danger"><?php echo $errors['description']; ?></div>
          </div>

          <!-- submit button -->
          <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary border-0 btn-color">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Bootstrap Js links -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <!--datepicker -->
  <script>
    $(function() {
      $("#date_incubated").datepicker({
        maxDate: 0
      });
    });


     // Example starter JavaScript for disabling form submissions if there are invalid fields
     (() => {
       'use strict'
     
       // Fetch all the forms we want to apply custom Bootstrap validation styles to
       const forms = document.querySelectorAll('.needs-validation')
     
       // Loop over them and prevent submission
       Array.from(forms).forEach(form => {
         form.addEventListener('submit', event => {
           if (!form.checkValidity()) {
             event.preventDefault()
             event.stopPropagation()
           }
     
           form.classList.add('was-validated')
         }, false)
       })
     })()
  </script>
</body>

</html>