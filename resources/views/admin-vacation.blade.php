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
          <a href="{{ url('admin') }}" class="menu-item">Zaposlenici</a>
          <a href="{{ url('admin-vacation') }}" class="menu-item">Godišnji odmor</a>
          <a href="{{ url('admin-enter-employee') }}" class="menu-item">Unesi zaposlenika</a>
        </div>
      </div>

      
    <table>
      <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Na godišnjem</th>
      </tr>
    </table>
  </body>
</html>
