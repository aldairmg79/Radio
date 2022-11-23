
<html>
      <head><title>Pagina inicial</title><head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
<!-- CSS de DataTables -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">        
<body style="background-color:#ffff;">
        <header>
            <nav>
                  <li><a href=""></a>home</li>
                  <li><a href=""></a>sd</li>
                  <li><a href=""></a>sd</li>
            </nav>
        </header>

        @yield('content')

      <!--Secciones-->
      <hr>
      <div class ="container";>
            <div class="row">
                  <?php
                  $obj = new ControladorVistas;
                  $obj -> cargarVista();
                  ?>
            </div>
      </div>
      <script
                src="https://code.jquery.com/jquery-3.6.1.slim.js"
                integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
                crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                $('#myTable').DataTable();
                } );
      </script>
</body>
</html>