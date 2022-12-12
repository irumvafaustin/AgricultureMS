<!DOCTYPE html>
    <html lang="en-US">
      <head>
          <meta charset="utf-8">
      
          <!-- Laravel App CSS -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

          <!-- Bootstrap core CSS     -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <!--  Material Dashboard CSS    -->
          <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />

          <!--     Fonts and icons     -->
          <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
          <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

      </head>
      
      <body>
          <div class="row">
            <div class="col-lg-12">
              <h2>Hello, {{ $data->fname }} {{ $data->lname }}!</h2>
              <h3>You have requested for a password reset.</h3>
              <p style:"color:red">This feature is currently not available, sorry for the inconvincies</p><br>
              <br><small>Note: you may also copy this and paste it on your address bar.</small>
            </div>
          </div>
      </body>
    </html>