<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sistemaCondor</title>

  <!-- bower:css -->
  <link rel="stylesheet" href="../../vendor/bower_components/bootstrap-table/src/bootstrap-table.css" />
  <link rel="stylesheet" href="../../vendor/bower_components/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="../../vendor/bower_components/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" href="../../vendor/bower_components/bootstrap-datepicker/css/datepicker3.css" />
  <!-- endbower -->

  {{-- <link href="/css/app.css" rel="stylesheet"> --}}

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  @include('parciales.navbar')

  <div class="container">
    @include('flash::message')
  </div>

  @yield('contenido')

  <!-- bower:js -->
  <script src="../../vendor/bower_components/jquery/dist/jquery.js"></script>
  <script src="../../vendor/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/bootstrap-table.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/extensions/filter/bootstrap-table-filter.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/extensions/export/bootstrap-table-export.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/extensions/flatJSON/bootstrap-table-flatJSON.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-zh-CN.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-da-DK.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-el-GR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-hu-HU.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-en-US.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-pt-PT.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-zh-TW.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-pl-PL.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-ja-JP.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-sv-SE.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-ko-KR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-nl-NL.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-es-CR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-sk-SK.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-ru-RU.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-es-AR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-ur-PK.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-it-IT.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-pt-BR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-es-NI.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-tr-TR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-uk-UA.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-ms-MY.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-fr-FR.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-vi-VN.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-th-TH.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-cs-CZ.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-de-DE.js"></script>
  <script src="../../vendor/bower_components/bootstrap-table/src/locale/bootstrap-table-fr-BE.js"></script>
  <script src="../../vendor/bower_components/bootstrap/dist/js/bootstrap.js"></script>
  <script src="../../vendor/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <!-- endbower -->
</body>
</html>
