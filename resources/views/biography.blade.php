<!DOCTYPE html>
<html lang="en">
<head>

     <title>HOME</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/vegas.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

    
     <link rel="stylesheet" href="ass/css/st.css">
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color:#fff0;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #4700D8;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}



.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #4700D8;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<body>







     

     <div class="about-section">
  <h1>MUHAMAD abdulla</h1>
  <p>about me</p>
  
  <a href="/profile" style="color:white;">my profile</a>                            
  <a href="/biography" style="color:white;">
  
  biography</a>
  
</div>

<h2 style="text-align:center">Our project</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/ass/img/l.jpg"  style="width:100%">
      <div class="container">
        <p><button class="button">LIKE</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/ass/img/b.jpg" style="width:100%">
      <div class="container">
        <p><button class="button">LIKE</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/ass/img/a.jpg"  style="width:100%">
      <div class="container">
        <p><button class="button">LIKE</button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>