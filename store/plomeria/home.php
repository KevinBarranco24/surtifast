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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wxNTgxNnxpbWFnZS93ZWJwfGltYWdlcy9oYmMvaDczLzkyNzg1NzMyODEzMTAud2VicHxmZWQ4ZTVhMjA2MDliYWE0M2MxNDlmNjhlYzMyODQ3NGIyNTUzYjk3M2JjOGVjMzliNzhhYTYxZmEzMmM0MGFh"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Tubo De Pvc Sanitario De 4" De 6 M. De Largo, Metro Lineal</p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">CRESCO</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                <td>MXN 511.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wyMzk0NHxpbWFnZS93ZWJwfGltYWdlcy9oMWEvaDFlLzkyNzU5OTAyMTI2Mzgud2VicHwwNmI2NjIyNzkxYjVhNWM5ZTUyZjczMDFmYTlkMzQ4ODk0ODlkNGY5YTc0YjFjYmM0NDZjNGI5YzFlNTk1ZjM2"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Tinaco Básico 450 L Tricapa, Pieza</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">ROTOPLAS</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                
                <td>MXN 2480.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3w0MjQ4NHxpbWFnZS93ZWJwfGltYWdlcy9oMzkvaGU4LzkyNzcyMTk0MDU4NTQud2VicHwwYmJlYzk1ZGVkNGQ1NzlmMzE3YTM3ODFjMmUwODMyN2VlMzQ3ZDQ4ODk3NmZjM2M1MzFlZDM2MjlhOTE2YzM5"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Bomba Centrifuga 2H 0.50Hp 110/220V, Pieza</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">EVANS</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                
                <td>MXN 2840.00</td>
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