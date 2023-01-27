<!DOCTYPE html>
<html>
<head>
  <title>Zaposlenik - Zahtjev za godišnji odmor</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="logo-container">
        <img src="logo.jpg" alt="Company Logo">
        <h1 class="company-name">Company Name</h1>
      </div>
      
 

  <div class="menu-container">
    <div class="menu">
      <a href="{{ url('employee-projects') }}" class="menu-item">Projekti</a>
      <a href="{{ url('employee-team') }}" class="menu-item">Tim</a>
      <a href="{{ url('employee-vacation') }}" class="menu-item">Godišnji odmor</a>
    </div>
  </div>

  <div class="form-container">
    <form>
      <h2>Zahtjev za godišnji odmor</h2>
      <label for="start-date">Datum početka:</label>
      <br>
      <input type="date" id="start-date" name="start-date">
      <br>
      <label for="end-date">Datum završetka:</label>
      <br>
      <input type="date" id="end-date" name="end-date">
      <br>
      <label for="reason">Razlog:</label>
      <br>
      <textarea id="reason" name="reason"></textarea>
      <br>
      <input type="submit" value="Pošalji zahtjev">
    </form>
  </div>
</body>
</html>
