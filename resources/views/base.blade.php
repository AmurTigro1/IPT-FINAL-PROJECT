<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Reset some default styles */
        /* nav {
            background-color:rosybrown  ;
            color: black;
            text-align: center;
            padding: 20px 0;
        }
        nav a:hover {
            background-color:brown;
        }

        nav a {
            color: black;
            text-decoration: none;
            margin: 0 20px;
            border: solid black;
            padding: 10px;
            border-radius:5px;
        }
         */
         /* Table style */
.table {
  width: 100%;
  border-collapse: collapse;
  font-family: Arial, sans-serif;
}

/* Header styles */
.table th {
  background-color: #f2f2f2;
  border: 1px solid #ccc;
  padding: 8px;
}

/* Body styles */
.table td {
  border: 1px solid #ccc;
  padding: 8px;
}

/* Alternate row color */
.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}
.container {
  text-align: center;
   padding: 20px;
}

 h1 {
  display:flex;
  align-items: center;
  justify-content: center;
              
}

p {
  font-size: 16px;
  margin-bottom: 20px;
}
img {
  height: 100vh;
  width: 100%;
}
    
    </style>
</head>
<body>
    <header>
        <h1>Final Project</h1>
    </header>
    
    <nav class="navbar navbar-light nav-pills nav-fill" style="background-color: #e3f2fd;">
      <a href="{{ url('/base') }}" class="{{ (Request::is('base')) ? 'active' : '' }} nav-link">Home</a>
      <a href="{{ url('/manhwas') }}" class="{{ (Request::is('manhwas')) ? 'active' : '' }} nav-link">Manhwa</a>
      <a href="{{ url('/characters') }}" class="{{ (Request::is('characters')) ? 'active' : '' }} nav-link">Characters</a>
      <a href="{{ url('/skills') }}" class="{{ (Request::is('skills')) ? 'active' : '' }} nav-link">Skills</a>
    </nav>
    
        

    <!-- <div class="container">
        <h1>Home Page</h1>
        <p>This is the home page content.</p>
    </div> -->
    
    <div class="container">
        @yield('content')
    </div>
    <div class="center">
      <img src="{{ asset('images/bgg.png') }}" alt="Example Image">
      


    </div>
</body>
</html>
