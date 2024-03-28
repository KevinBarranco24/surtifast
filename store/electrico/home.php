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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wzNTYwMnxpbWFnZS93ZWJwfGltYWdlcy9oYjIvaDY3LzkyODY1ODcxNTQ0NjIud2VicHwxYjgzMTllMjU5YTA4NWEzNzFhMjA5MTQ3NDk1NjZjM2U1Y2FjNzllMjZkZDRmMmI0YzViOGM0Y2NkODRmZTU5"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Manguera Poliducto 1/2" Negra Lisa C40 100Mt, Rollo</p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">GENERICO</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                <td>MXN 417.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wzMzUzOHxpbWFnZS93ZWJwfGltYWdlcy9oNjUvaGYyLzkyODQ3MjIyOTQ4MTQud2VicHw5NmQyNTFjM2RjNjI5NDYzZGI4YTgwMDQ3YzU4MTdhMjhiMzliMjQ5ZTE0NjFhNWUyY2ViZGI3Mzg4ZWJlNTdj"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Cable Thw Blanco 1 X 8,100 M, Rollo</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">KOBREX</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                
                <td>MXN 3950.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wyMDkxNHxpbWFnZS93ZWJwfGltYWdlcy9oYTEvaGZjLzkyNzg5MTUzNzkyMzAud2VicHw0YTkzYTUzM2ZmZmU0MDQ5N2VlM2ExYTVlYjQzNzIxOTdhNjNkMDUyNjc0YmVlNWM2MjE2MWE5YTVlYzRjNjI4"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Foco 23 W, Espiral Mini, T2, Pieza</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">VOLTECK</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                
                <td>MXN 62.00</td>
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