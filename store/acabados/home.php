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
                        src="https://www.construrama.com/medias/?context=bWFzdGVyfGltYWdlc3w1MjI2MHxpbWFnZS93ZWJwfGltYWdlcy9oN2EvaDRhLzkyODgyMTcxOTg2MjIud2VicHw0YzFmZDAzMGE1MjEzNTJmM2Q1NjMxMTcyNjlhYjMyOTRjMTJlNzA2ODdmZjMwOTRkODJhMmQxNDE0YTQ1OWE2"
                        alt=""
                        style="width: 120px; height: 120px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Cemix, Pegamix Pisos Y Mármol Blanco 20 Kg </p>
                        <!--<p class="text-muted mb-0">john.doe@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Cemix</p>
                    <!--<p class="text-muted mb-0">IT department</p>-->
                </td>
                
                <td>MXN 160.00</td>
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
                        src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRAAWa_ZlNgn-DRWBkMwKaEtSUCsrvJupthyi0xs9NmPLOFQAhO7FwdEKGAcs3Xoioqd1cvYmM7JdfSrbEbWNbhEyNrabsjip6K-Z_kkhyqCOneL4YtwI1dCQ"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Kalostone Blanco, Cubeta</p>
                        <!--<p class="text-muted mb-0">alex.ray@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">Berel</p>
                    <!--<p class="text-muted mb-0">Finance</p>-->
                </td>
                
                <td>MXN 1999.00</td>
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
                        src="https://llanodelatorremx.vtexassets.com/arquivos/ids/312170-1600-auto?v=638461205698900000&width=1600&height=auto&aspect=true"
                        class="rounded-circle"
                        alt=""
                        style="width: 120px; height: 120px"
                        />
                    <div class="ms-3">
                        <p class="fw-bold mb-1">Junteador Con Arena Cancún S10Kg</p>
                        <!--<p class="text-muted mb-0">kate.hunington@gmail.com</p>-->
                    </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1">PERDURA</p>
                    <!--<p class="text-muted mb-0">UI/UX</p>-->
                </td>
                
                <td>MXN 175.00</td>
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