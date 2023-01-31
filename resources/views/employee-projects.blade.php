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
          <a href="{{ url('employee-projects') }}" class="menu-item ">Projekti</a>
          <a href="{{ url('employee-team') }}" class="menu-item ">Tim</a>
          <a href="{{ url('employee-vacation') }}" class="menu-item ">Godišnji odmor</a>
        </div>
      </div>

      
    <table>
      <tr>
        <th>Ime projekta</th>
        <th>Voditelj</th>
        <th>Opis projekta</th>
        <th>Datum početka</th>
      </tr>
      @foreach($projects as $project)
      <tr>
        <td>{{ $project->projectName }}</td>
        <td>{{ $project->projectManagers ? $project->projectManagers->name : 'No project manager'}}</td>
        <td>{{ $project->description }}</td>
        <td>{{ $project->created_at }}</td>
      </tr>
    @endforeach
    </table>
  </body>
</html>
