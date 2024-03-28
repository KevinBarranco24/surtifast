<?php
    require "../header.php";
?>
<body>
    <div class="container shadow">
        <div class="row">
            <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                <th>Producto</th>
                <th>Marca</th>
                <!--<th>Status</th>-->
                <th>Precio</th>
                <th>Disponibles</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                    <img
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wzODc2NHxpbWFnZS93ZWJwfGltYWdlcy9oMDcvaGQ5LzkyODY5NzY4NjQyODYud2VicHxkNzExYmJkMzE0YzY0NTc2YWNhMDFhYzNjNjVkNjcwOWM4NzhlMzg2NWIyNDA1Yjc1NzA2MWE0NzRjMDExNjg0"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Block Sólido 14 X 20 X 40 cm, Pieza</p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">GENERICO</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                
                <td>MXN 16.20</td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                    Edit
                    </button>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                    <img
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wxODQ5MHxpbWFnZS93ZWJwfGltYWdlcy9oMzUvaGRhLzkyODY5NjM3ODk4NTQud2VicHxjMjcxMGVlN2RhOGQ3ODcxNTkzYjg2MjU5ZDJlYzIyMTY0Y2YyN2U2YjU3NjdlMmEyODFjODIzNWFjODk1MjE1"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">USG REDIMIX Compuesto Multiusos 28 Kg, Cubeta</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">USG</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                
                <td>MXN 660.00</td>
                <td>
                    <button
                            type="button"
                            class="btn btn-link btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark"
                            >
                    Edit
                    </button>
                </td>
                </tr>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                    <img
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wyNTEzMHxpbWFnZS9qcGVnfGltYWdlcy9oZjYvaGMxLzkzNTc2NTYzMjYxNzQuanBnfDk2OTAxY2NlNjc4ZTU1ZjMyMmNkMzkyZDdiYWZhZjI1MGI4YWE1YmMwN2NlNWE0MjIwMGMyZWYyZjQ2MDNlMmY"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">USG DUROCK® FORTE, Tablero de Cemento ½” 1.22M x 2.44M, Pieza</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">USG</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                
                <td>MXN 750.00</td>
                <td>
                    <button
                            type="button"
                            class="btn btn-link btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark"
                            >
                    Edit
                    </button>
                </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <?php include_once("../../footer.php"); ?>