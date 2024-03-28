<?php
    require "../header.php";
?>
<body>
    <div class="container shadow" >
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
                        src="https://ceramatmx.vteximg.com.br/arquivos/ids/157280-1000-1000/07304.png?v=637562589636300000"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Varilla de acero "3/8" </p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Aceros Murillo</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                <!--<td>
                    <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>-->
                <td>MXN 180</td>
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
                        src="https://www.ferrecon.mx/wp-content/uploads/2023/03/ARMSENC1515.jpg"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Castillo ARMEX "15x15"</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Poliacero</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                <!--<td>
                    <span class="badge badge-primary rounded-pill d-inline"
                        >Onboarding</span
                    >
                </td>-->
                <td>MXN 144</td>
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
                        src="https://eltropico.mx/wp-content/uploads/2020/06/ALAMBRE-RECOCIDO.jpg"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Alambre recocido Cal 16 x KG</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Truper</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                <!--<td>
                    <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                </td>-->
                <td>MXN 25.00</td>
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