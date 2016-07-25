<!DOCTYPE html>
<html lang="de">

<head>
  <title>Studentenverwaltung</title>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="data:text/css;charset=utf-8," data-href="../dist/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

   <script src="css.js"></script>


   <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

  <header class="container">
      <div class="row">
        <h1 class="col-xs-7">Studentenverwaltung</h1>

        <nav class="navbar navbar-inverse navbar-fixed-right col-xs-5">
          <div class="container-fluid">
           <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li  class="active"><a href="/search.php">Such Bereich</a></li>
             <li ><a href="/admin.php">Admin Bereich</a></li>
             <li><a href="#logout">Logout</a></li>

           </ul>
         </div><!--/.nav-collapse -->
       </div>
     </nav>
      </div>
    </header>

    <section class="container">
      <div class="row">
          <div class="col-xs-3 "> </div>
          <div class="col-xs-8">   <h2 >Such Bereich</h2> </div>

          <div class="col-xs-3 ">
          <div id="searchPerson" class="panel panel-black">
            <div class="panel-heading"> <h3>Personensuche </h3></div>
            <div class="panel-body">


          <p> Wen suchen Sie?  </p>

          <div class="row">
          <form class="form" role="form">

            <table class="table ">
              <tr>
                <th> <p> Name: </p> </th>
                <th> <input type="text" class="form-control" id="name" placeholder="Name"> </div> </th>
              </tr>
              <tr>
                <th> <p> Vorname: </p> </th>
                <th> <input type="text" class="form-control" id="fname" placeholder="Vorname"> </div> </th>
              </tr>
              <tr>
                <th> <p> Matrikelnr.: </p> </th>
                <th> <input type="text" class="form-control" id="mtrl" placeholder="Matrikelnr."> </th>
              </tr>
              <tr>
                  <th> <p> Fachschaft: </p> </th>
                <th>
                   <div class="dropdown dropdown-toggle">
                    <button class="btn btn-primary " type="button" id="dropdownfs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fachschaft
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownfs">
                        <li><a href="#fs1">Fachschaft 1</a></li>
                        <li><a href="#fs2">Fachschaft 2</a></li>
                      </ul>
                    </div>
                  </th>
                </tr>
                <tr>
                    <th> <p> Gremium: </p> </th>
                  <th>
                      <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdowngremium" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Gremium
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu" aria-labelledby="dropdowngremuim">
                        <li><a href="#">StuRa</a></li>
                        <li><a href="#">Fachschaftsrat 1</a></li>
                        <li><a href="#">Fachschaftsrat 2</a></li>
                      </ul>
                    </div>
                  </th>
                </tr>

                <tr>
                  <th> <p> Wahlperiode: </p> </th>
                  <th>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownperi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Wahlperiode
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownperi">
                        <li><a href="#">WS 16/17</a></li>
                        <li><a href="#">SS 17</a></li>
                    </ul>
                    </div>
</th>
              </tr>

            </table>

          </div>
            <div class="text-right row">
             <button type="submit" class="btn btn-primary btn-default">Suchen</button>
           </div>
          </form>
        </div>
          </div>


        </div>
        <div class="col-xs-8 "> da ne hübsche ergebnistabelle (also noch ohne werte)   </div>
    </div>

    </section>



    <footer class="container">
      <div class="row">
        <p class="col-sm-12">&copy; 2016 Daten und Webtechniken | Tabea Sims | Edith Hansch</p>

      </div>
    </footer>

</body>

</html>
