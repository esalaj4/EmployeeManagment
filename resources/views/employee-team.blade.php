<!DOCTYPE html>
<html>
  <head>
    <title>Zaposlenik - projekti</title>
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body>

    <div class="logo-container">
        <img src="logo.jpg" alt="Company Logo">
        <h1 class="company-name">Company Name</h1>
      </div>
      

    <div class="menu-container">
        <div class="menu">
          <a href="{{ url('employee-projects/') }}" class="menu-item">Projekti</a>
          <a href="{{ url('employee-team') }}" class="menu-item ">Tim</a>
          <a href="{{ url('employee-vacation') }}" class="menu-item ">Godišnji odmor</a>
        </div>
      </div>

      
    <table>
      <tr>
        <th>Ime</th>
        <th>Prezime</th>
    </table>
  </body>
</html>
