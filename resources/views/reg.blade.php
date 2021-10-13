<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Registration form</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/reg-style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="header">
  <img class="logo" src="https://raw.githubusercontent.com/evansmbithi/ushindi/Maestro/img/ushindi_logo.svg">
  <h1 class="title">Member Registration</h1>
</div>

<div class="container">
  <form class="form-group">
    <div class="heading">
      <h2>
        Personal details
      </h2>
      <hr>
    </div>
    <div class="input-group">
      <input type="text" class="input-field" placeholder="First name" required>
      <input type="text" class="input-field" placeholder="Second name" required>
      <input type="text" class="input-field" placeholder="Last name" required>

      <input type="text" class="input-field" placeholder="ID Number" required>
      <input type="text" class="input-field" placeholder="Tel" required>
      <input type="text" class="input-field" placeholder="Address" required>
    </div>

    <div class="heading">
      <h2>
        Residence
      </h2>
      <hr>
    </div>
    <div class="input-group">
      <input type="text" class="input-field" placeholder="County" required>
      <input type="text" class="input-field" placeholder="Sub-county" required>
      <input type="text" class="input-field" placeholder="Location" required>
    </div>

    <div class="heading">
      <h2>
        Born in:
      </h2>
      <hr>
    </div>
    <div class="input-group">
      <input type="text" class="input-field" placeholder="Year" required>
      <input type="text" class="input-field" placeholder="Month" required>
      <input type="text" class="input-field" placeholder="Day" required>
    </div>

    <div class="submit">
      <button type="submit" id="submit-btn" class="las la-chevron-circle-right"></button>
      <!--       <a href="" class="las la-chevron-circle-right"></a> -->
    </div>
  </form>

</div>
<!-- partial -->
  
</body>
</html>
