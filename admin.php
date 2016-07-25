<!DOCTYPE html>
<html lang="de">

<head>
  <title>Studentenverwaltung</title>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="data:text/css;charset=utf-8," data-href="../dist/css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

   <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" type="text/css" href="style.css">
<script src="css.js"></script>

</head>

<body>

  <header class="container">
      <div class="row">
        <h1 class="col-xs-7">Studentenverwaltung</h1>

        <nav class="navbar navbar-inverse navbar-fixed-right col-xs-5">
          <div class="container-fluid">
           <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
             <li ><a href="/search.php">Such Bereich</a></li>
             <li class="active"><a href="/admin.php">Admin Bereich</a></li>
             <li><a href="#logout">Logout</a></li>

           </ul>
         </div><!--/.nav-collapse -->
       </div>
     </nav>
      </div>
    </header>


<!-- Navigations bar Links - für um auf der Seite zu navigieren-->
    <section class="container">
      <div class="row">
        <div class="col-sm-3 ">
          <nav class="navbar navbar-inverse  navbar-fixed-left">
            <div class="container-fluid">
             <div class="navbar-collapse collapse">
               <ul class="nav navbar-inverse">
                 <li class="active"><a href="#createPerson">Person hinzufügen</a></li>
                 <li><a href="#editPerson">Person bearbeiten</a></li>
                 <li><a href="#createGremium">Gremium hinzufügen</a></li>
                 <li><a href="#editGremium">Gremium bearbeiten</a></li>
                 <li><a href="#createFS">Fachschaft hinzufügen</a></li>
                 <li><a href="#editFS">Fachschaft bearbeiten</a></li>
             </ul>
           </div>
         </div>


       </nav>

      </div>

      <subsection class="col-sm-8">
        <h2 >Admin Bereich</h2>


        <div  id = "createPerson" class="panel panel-default">
          <div class="panel-heading">Person hinzufügen</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form">
              <table class="table">
                <tr>
                  <th> <input type="text" class="form-control" id="sName" placeholder="Name"> </th>
                  <th> <input type="text" class="form-control" id="fName" placeholder="Vorname"> </th>
                  <th> <input type="text" class="form-control" id="mtrl" placeholder="Matrikelnr."> </th>
                  <th> <input type="text" class="form-control" id="fs" placeholder="Fachschaft"> </th>
                  <th> <input type="text" class="form-control" id="grem" placeholder="Gremium"> </th>
                </tr>
              </table>
              <div class="text-right">
               <button type="submit" class="btn btn-primary btn-default">Hinzufügen</button>
             </div>
             <div class="text-left">
              <button type="button" class="btn btn-circle btn-primary btn-default">+</button>
            </div>
            </form>
          </div>
        </div>


        <div id = "editPerson"  class="panel panel-default">
          <div class="panel-heading">Person bearbeiten</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form">
              <div class" row">
                <div class ="col-xs-4"> <p> Wen wollen Sie bearbeiten? </p> </div>
                <div class= "col-xs-3">  <input type="text" class="form-control" id="matrikel" placeholder="Matrikelnummer">  </div>
                <div class ="col-xs-1"> <p> oder </p>   </div>
                <div class ="col-xs-4"> <input type="text" class="form-control" id="email" placeholder="E-Mail">    </div>
              </div>

          <span class = "label label-danger"> Änderungen sind noch nicht gespeichert </span>

              <div class="row">
                <div class ="col-xs-3"> <input type="text" class="form-control" id="sName" placeholder="Name"> </div>
                <div class= "col-xs-3"> <input type="text" class="form-control" id="fName" placeholder="Vorname"> </div>
                <div class ="col-xs-3"> <input type="text" class="form-control" id="email" placeholder="EMail">  </div>
                <div class= "col-xs-3">  <input type="text" class="form-control" id="matrikel" placeholder="Matrikelnummer">  </div>
              </div>



                <div class="row">
                  <div class = " col-xs-8">
                     <div class="panel panel-default">
                         <div class="panel-heading">Fachschaft</div>
                           <div class="panel-body">
                             <div class = "row">
                               <div class = "col-xs-2">  von </div>
                                <div class = "col-xs-2">  <p> datum </p> </div>

                                <div class = "col-xs-2">  bis </div>
                                <div class = "col-xs-4">
                                <div class="input-group date" data-provide="datepicker">
                                  <input type="text" class="form-control">
                                   <div class="input-group-addon">
                                       <span class="glyphicon glyphicon-th"></span>
                                   </div>
                                 </div>
                                 </div>
                           </div>
                           </div>
                     </div>
                   </div>
                   </div>

                     <div class="row">
                       <div class = " col-xs-8">
                 <div class="panel panel-default">
                           <div class="panel-heading">Gremium</div>
                             <div class="panel-body">
                               <div class = "row">
                                 <div class = "col-xs-2">  von </div>
                                  <div class = "col-xs-2">  <p> datum </p> </div>

                                  <div class = "col-xs-2">  bis </div>
                                  <div class = "col-xs-4">
                                  <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control">
                                     <div class="input-group-addon">
                                         <span class="glyphicon glyphicon-th"></span>
                                     </div>
                                   </div>
                                   </div>
                             </div>
                             </div>
                       </div> </th>

                     </div>
                     </div>
              <div class="text-right">
               <button type="submit" class="btn btn-primary btn-default">Ändern</button>
             </div>

            </form>
          </div>
        </div>

        <div id="createGremium" class="panel panel-default">
          <div class="panel-heading">Gremium hinzufügen</div>
          <div class="panel-body">

            <form class="form-horizontal" role="form">
              <table class="table">

                <tr>
                  <th> <input type="text" class="form-control" id="grbezeichnung" placeholder="Bezeichnung"> </th>
                  <th> <input type="text" class="form-control" id="grbeschreibung" placeholder="Beschreibung"> </th>
                </tr>
              </table>
              <div class="text-right">
               <button type="submit" class="btn btn-primary btn-default">Hinzufügen</button>
             </div>
             <div class="text-left">
              <button type="button" class="btn btn-circle btn-primary btn-default">+</button>
            </div>
            </form>
          </div>
        </div>

        <div id="editGremium"  class="panel panel-default">
          <div class="panel-heading">Gremium bearbeiten</div>
          <div class="panel-body">

            <form class="form-horizontal" role="form">
              <table class="table">
  <span class = "label label-danger"> Änderungen sind noch nicht gespeichert </span>
                <tr>
                  <th>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdowngremium" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Bezeichnung
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu" aria-labelledby="dropdowngremuim">
                        <li><a href="#">StuRa</a></li>
                        <li><a href="#">Fachschaft 1</a></li>
                        <li><a href="#">Fachschaft 2</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">mehr?</a></li>
                      </ul>
                    </div>
                  </th>
                  <th> <input type="text" class="form-control" id="grbeschreibung" placeholder="Beschreibung"> </th>
                </tr>
              </table>
              <div class="text-right">
               <button type="submit" class="btn btn-primary btn-default">Ändern</button>
             </div>
            </form>
          </div>
        </div>

        <div id="createFS" class="panel panel-default">
          <div class="panel-heading">Fachschaft hinzufügen</div>
          <div class="panel-body">

            <form class="form-horizontal" role="form">
              <table class="table">

                <tr>
                  <th> <input type="text" class="form-control" id="grbezeichnung" placeholder="Bezeichnung"> </th>
                  <th> <input type="text" class="form-control" id="grbeschreibung" placeholder="Beschreibung"> </th>
                </tr>
              </table>
              <div class="text-right">
               <button type="submit" class="btn btn-primary btn-default">Hinzufügen</button>
             </div>
             <div class="text-left">
              <button type="button" class="btn btn-circle btn-primary btn-default">+</button>
            </div>
            </form>
          </div>
        </div>

        <div id="editFS"  class="panel panel-default">
          <div class="panel-heading">Fachschaft bearbeiten</div>
          <div class="panel-body">

            <form class="form-horizontal" role="form">
              <table class="table">
  <span class = "label label-danger"> Änderungen sind noch nicht gespeichert </span>
                <tr>
                  <th>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdowngremium" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Bezeichnung
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu" aria-labelledby="dropdowngremuim">
                        <li><a href="#">Fachschaft 1</a></li>
                        <li><a href="#">Fachschaft 2</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">mehr?</a></li>
                      </ul>
                    </div>
                  </th>
                  <th> <input type="text" class="form-control" id="grbeschreibung" placeholder="Beschreibung"> </th>
                </tr>
              </table>
              <div class="text-right">
               <button type="submit" class="btn btn-primary btn-default">Ändern</button>
             </div>
            </form>
          </div>
        </div>

      </subsection>


      </div>
    </section>


    <footer class="container">
      <div class="row">
        <p class="col-sm-12">&copy; 2016 Daten und Webtechniken | Tabea Sims | Edith Hansch</p>

      </div>
    </footer>

</body>

</html>
