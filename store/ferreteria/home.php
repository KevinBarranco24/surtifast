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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wxMTU3OHxpbWFnZS93ZWJwfGltYWdlcy9oZjgvaGVjLzkyODQ3NjgzMzM4NTQud2VicHwxNzQ1YTQ4MjQ0MzU2OWRlMGI4Y2NjN2UwODgyNWE5ZGEyMWIzNzA4MWE0MTNhYzk4YWQwZDQ5ZTliNmY0NDQ2"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Fumigador Doméstico, 2 L, Pieza</p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">TRUPER</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                <td>MXN 150.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wzMDk2NnxpbWFnZS93ZWJwfGltYWdlcy9oZmYvaDNhLzkyODQ4Nzc3NDYyMDYud2VicHwxMWQ0OTY4NjJjNjgwM2U2ZjA1MGM0NjdhMmU2ODlmM2U2NzdjNjRlOWU3NzU5NmEzYTViZTZkMWNkNjMzN2Mz"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Pistola Metálica 8 Funciones, Pieza</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">TRUPER</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                
                <td>MXN 142.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3w5MDM4MnxpbWFnZS93ZWJwfGltYWdlcy9oZjEvaDlmLzkyODQ4NTc0OTU1ODIud2VicHxmOGJhZmJmZTBhODY0MWNiYWI0MDc2MTNjNzM4MTE5OWY5MjcyZTZlNmJmM2FkNzFlZDc5NTA5NzIzNjA1YWEx"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Manguera 1/2' reforzada 3 capas 10 m, Pieza</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">PRETUL</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                
                <td>MXN 153.00</td>
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