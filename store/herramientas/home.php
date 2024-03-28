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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wzMjgwMnxpbWFnZS93ZWJwfGltYWdlcy9oNmQvaGEzLzkyNzg5ODM2MzQ5NzQud2VicHw2NzE0MzhiNzJjZmY1NjRmYzM1YzliNzc4Y2IxZWMxNDgwZjY3YzljNzRiODdiOGVmMzA1ZWU0ZjkzZGJjZDhj"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Escalera Tijera Aluminio Tipo-Iii Base Con Imán 6 Escalones, Pieza</p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">CUPRUM</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                <td>MXN 1870.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3wxMTU4NHxpbWFnZS93ZWJwfGltYWdlcy9oM2YvaDk1LzkyNzkwNjM1MjMzNTgud2VicHwxZGM0YjQ4NDY0NTQ1ODYyZTVkZTY4ZjM3ZjFlN2UyYWNkMTVhMWMzNWNhMWZhYWVkMzQ0OTYwYzQ5ZTBkZWM0"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Pala Tru Glass cuadrada mango largo 50', Pieza</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">TRUPER</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                
                <td>MXN 315.00</td>
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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3w5NzYzMHxpbWFnZS93ZWJwfGltYWdlcy9oY2MvaGViLzkyODMzMjk3MjAzNTAud2VicHwzZWI5YWUxNDU3NWEzYWQwMTdhMWNjNzM3YzNjNWMyYWIyZGE4YTQxZDMwNzU0OTRiZDBlNjg5NWEyNDIzMTVi"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Malla De Seguridad - 30.5 Metros, Rollo</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">TRUPER</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                
                <td>MXN 650.00</td>
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