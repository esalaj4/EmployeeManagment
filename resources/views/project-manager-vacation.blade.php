<!DOCTYPE html>
<html>
<head>
  <title>Voditelj tima - Prihvaćanje GO</title>
  
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

  <div class="main-container">
    <h2>Prihvaćanje godišnjeg odmora</h2>
    <table>
      <tr>
        <th>Ime i prezime</th>
        <th>Datum početka</th>
        <th>Datum završetka</th>
        <th>Kvalificiran</th>
        <th>Prihvati</th>
        <th>Odbij</th>
      </tr>
      <tr>
        <td>John Doe</td>
        <td>01.01.2022</td>
        <td>15.01.2022</td>
        <td>da</td>
        <td><button>Prihvati</button></td>
        <td><button>Odbij</button></td>
      </tr>
    </table>
  </div>
</body>
</html>
