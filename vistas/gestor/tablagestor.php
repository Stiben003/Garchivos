<div class="row">
    <div class="col-sm-12">
        <div class="table-response">
            <table class="table table-hover table-striped table-dark " id="tablaGestorDataTable">
                <thead>
                    <tr>
                        <th>Nombre libro</th>
                        <th>Tipo libro</th>
                        <th>Descargar libro</th>
                        <th>Visualisar libro</th>
                        <th>Eliminar libro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="btn btn-danger btn-sm">
                                <span class="fas fa-trash"></span>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tablaGestorDataTable').dataTable();
    });
</script>