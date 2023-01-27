<!DOCTYPE html>
<html>
  <head>
    <title>Admin - Unos Zaposlenika</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
    <div class="container">
      <h1>Unos Zaposlenika</h1>
      <form>
        <label for="name">Ime:</label>
        <input type="text" id="name" name="name" required />
        
        <label for="lastname">Prezime:</label>
        <input type="text" id="lastname" name="lastname" required />
        
        <label for="position">Pozicija:</label>
        <input type="text" id="position" name="position" required />
        
        <input type="submit" value="Unesi zaposlenika" />
      </form>
    </div>
  </body>
</html>
