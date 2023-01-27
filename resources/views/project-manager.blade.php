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
            <a href="{{ url('project-manager') }}" class="menu-item">Projekti</a>
            <a href="{{ url('project-manager-vacation') }}" class="menu-item">Godišnji odmor</a>
        </div>
      </div>

      
    <table>
      <tr>
        <th>Projekt</th>
        <th>Članovi projekta</th>
      </tr>
    </table>
  </body>
</html>
