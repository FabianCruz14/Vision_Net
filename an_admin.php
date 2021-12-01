<!doctype html>
<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <title>an_admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/an_admin.css" rel="stylesheet">
    <script src="jscookmenu.min.js"></script>
    <script>
        var cmMenuBar1 =
        {
            mainFolderLeft: '',
            mainFolderRight: '',
            mainItemLeft: '',
            mainItemRight: '',
            folderLeft: '',
            folderRight: '',
            itemLeft: '',
            itemRight: '',
            mainSpacing: 0,
            subSpacing: 0,
            delay: 100,
            offsetHMainAdjust: [30, 0],
            offsetSubAdjust: [0, 0]
        };
        var cmMenuBar1HSplit = [_cmNoClick, '<td class="MenuBar1MenuSplitLeft"><div></div></td>' +
            '<td class="MenuBar1MenuSplitText"><div></div></td>' +
            '<td class="MenuBar1MenuSplitRight"><div></div></td>'];
        var cmMenuBar1MainVSplit = [_cmNoClick, '<div><table width="15" cellspacing="0"><tr><td class="MenuBar1HorizontalSplit"></td></tr></table></div>'];
        var cmMenuBar1MainHSplit = [_cmNoClick, '<td colspan="3" class="MenuBar1MainSplitText"><div></div></td>'];
        document.addEventListener('DOMContentLoaded', function (event) {
            cmDrawFromText('MenuBar1', 'hbr', cmMenuBar1, 'MenuBar1');
        });
    </script>
</head>

<body>
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="vista_user.php" class="pull-left">
                        <!-- visible-md visible-lg -->
                        <div class="hidden-xs hidden-sm" id="logo-img"></div>
                    </a>

                    <div class="navbar-brand">
                        <a href="vista_user.php">
                            <h1>VISION_NET</h1>
                        </a>
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#collapsable-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="collapsable-nav" class="collapse navbar-collapse">
                    <ul id="nav-list" class="nav navbar-nav navbar-right">
                        <li>
                            <a href="vista_user.php">
                                CUENTA</a>
                        </li>
                        <li>
                            <a href="inventario.html">
                                INVENTARIO</a>
                        </li>
                        <li>
                            <a href="ventas.php">
                                VENTAS</a>
                        </li>
                        <li>
                            <a href="an_admin.html">
                                ADMINISTRADORES</a>
                        </li>
                        <li>
                            <a id="s-up" href="index.html">
                                Cerrar sesi&oacuten</a>
                        </li>
                    </ul><!-- #nav-list -->
                </div><!-- .collapse .navbar-collapse -->
            </div><!-- .container -->
        </nav><!-- #header-nav -->
    </header>

    </div>


    <div id="wb_LayoutGrid2">
        <div id="LayoutGrid2">
            <div class="row">
                <div class="col-1">
                    <div id="wb_Text1">
                        <span style="color:#0000CD;font-family:Arial;font-size:27px;">ADMINISTRADORES</span>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-2-padding">
                        <a href="add_admin.html" id="s-up" style="color: #000000!important;text-align:center;padding-top:10px;display:inline-block;width:180px;height:43px;z-index:4;">
                        Anadir administrador</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require("connection.php");

        $query="SELECT * FROM administradores";
        $result=mysqli_query($connection, $query) or die ("Query error");

        
        $pedidos="<div id=\"wb_LayoutGrid3\">
        <div id=\"LayoutGrid3\">
            <div class=\"row\">
                <div class=\"col-1\">
                </div>
                <div class=\"col-2\">
                    <table style=\"display:table;width:100%;height:680px;z-index:5;\" id=\"Table1\">
        ";

        while($fila=mysqli_fetch_assoc($result)){
            $cliente=$fila['id'];
            $fecha=$fila['nameA'];
            $fPago=$fila['vigencia'];
            $fEnvio=$fila['email'];
            $status=$fila['status'];
            $pedidos=$pedidos."<tr id=\"tabla_de_productos\"><td>".$cliente."</td><td>".$fecha."</td><td>".$fPago."</td><td>".$fEnvio."</td><td>".$status."<a href=\"venta_cliente.html\"><img src=\"./images/edit.png\" width=\"20px\" height=\"20px\"></a></td></tr>";
        }

        $pedidos=$pedidos."</div></table></div>";
        
        echo $pedidos;
        mysqli_close($connection);
    ?>

    
                        <tr>
                            <td class="cell0">
                                <p>&nbsp;<img alt="" width="128" height="128" src="images/Table1_cell01.png"></p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp;<span style="color:#F8F6E2;">Juan Carlos</span></p>
                                <p style="color:#F8F6E2;">ID: A001</p>
                                <p style="color:#F8F6E2;">Vigencia: 20/11/2022</p>
                                <p style="color:#F8F6E2;">Email:&nbsp; Juan@Gmail.Com</p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp; <span style="color:#F8F6E2;">Permisos:</span></p>
                                <p style="color:#F8F6E2;">-Edición de Productos</p>
                                <p style="color:#F8F6E2;">-Lectura</p>
                            </td>
                            <td class="cell1">
                                <a style="color: white;" href="#">Eliminar administrador</a>
                            </td>
                            <td class="cell1">
                                <a style="color: white;" href="edit_admin.html">Editar Cuenta</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell0">
                                <p>&nbsp;<img alt="" width="128" height="128" src="images/Table1_cell51.png"></p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp;<span style="color:#F8F6E2;">Nancy</span></p>
                                <p style="color:#F8F6E2;">ID: A000</p>
                                <p style="color:#F8F6E2;">Vigencia: Permanente</p>
                                <p style="color:#F8F6E2;">Email:&nbsp; Nancy@gmail.com</p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp; <span style="color:#F8F6E2;">Permisos:</span></p>
                                <p style="color:#F8F6E2;">-Edición de Productos</p>
                                <p style="color:#F8F6E2;">-Edición de Administradores</p>
                                <p style="color:#F8F6E2;">-Lectura</p>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="#">Eliminar administrador</a>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="edit_admin.html">Editar Cuenta</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell0">
                                <p>&nbsp;<img alt="" width="128" height="128" src="images/Table1_cell101.png"></p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp;<span style="color:#F8F6E2;">Fabian</span></p>
                                <p style="color:#F8F6E2;">ID: A003</p>
                                <p style="color:#F8F6E2;">Vigencia: 05/12/2022</p>
                                <p style="color:#F8F6E2;">Email:&nbsp; Fabian@gmail.com</p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp; <span style="color:#F8F6E2;">Permisos:</span></p>
                                <p style="color:#F8F6E2;">-Lectura</p>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="#">Eliminar administrador</a>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="edit_admin.html">Editar Cuenta</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell0">
                                <p>&nbsp;<img alt="" width="128" height="128" src="images/Table1_cell151.png"></p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp;<span style="color:#F8F6E2;">Hector</span></p>
                                <p style="color:#F8F6E2;">ID: A002</p>
                                <p style="color:#F8F6E2;">Vigencia: 05/12/2022</p>
                                <p style="color:#F8F6E2;">Email:&nbsp; Hector@gmail.com</p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp;<span style="color:#F8F6E2;">Permisos:</span></p>
                                <p style="color:#F8F6E2;">-Edición de Administradores</p>
                                <p style="color:#F8F6E2;">-Lectura</p>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="#">Eliminar administrador</a>
                            </td>
                            <td class="cell1">
                                <p> Editar Cuenta</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="cell0">
                                <p>&nbsp;<img alt="" width="128" height="128" src="images/Table1_cell201.png"></p>
                            </td>
                            <td class="cell1">
                                <p> Luis</p>
                                <p>ID: A004</p>
                                <p>Vigencia: 17/11/2022</p>
                                <p>Email:&nbsp; Luis@gmail.com</p>
                            </td>
                            <td class="cell0">
                                <p>&nbsp;<span style="color:#F8F6E2;">Permisos:</span></p>
                                <p style="color:#F8F6E2;">-Edición de Productos</p>
                                <p style="color:#F8F6E2;">-Lectura</p>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="#">Eliminar administrador</a>
                            </td>
                            <td class="cell0">
                                <a style="color: white;" href="edit_admin.html">Editar Cuenta</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-3">
                </div>
            </div>
        </div>
    </div>
    <div id="wb_LayoutGrid4">
        <div id="LayoutGrid4">
            <div class="row">
                <div class="col-1">
                    <a href="vista_user.php" id="s-up" style="color: #000000!important;text-align:center;padding-top:10px;display:inline-block;width:180px;height:43px;z-index:4;">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>