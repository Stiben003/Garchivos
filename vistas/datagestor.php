<?php include "header.php"; ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Gestor de Libros</h1>
        <div id="tablaGestordeLibros"></div>
    </div>
</div>

<?php include "footer.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tablaGestordeLibros').load("gestor/tablagestor.php");
    });
</script>