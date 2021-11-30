<!doctype html>
<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <title>login_user</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- para que las versiones del explorador usen la ultima version-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- para que funcione en la escala de any device-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/vista_user.css" rel="stylesheet">
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
    <?php
        #require("connection.php");
        require("session.php");
    ?>
    
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.html" class="pull-left">
                        <!-- visible-md visible-lg -->
                        <div class="hidden-xs hidden-sm" id="logo-img"></div>
                    </a>

                    <div class="navbar-brand">
                        <a href="index.html">
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
                            <a href="edit_admin.html">
                                Cuenta</a>
                            <!--cuenta -->
                        </li>
                        <li>
                            <a id="s-up" href="signup.html">
                                Cerrar Sesion</a>
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
                        <span style="color:#000000;font-family:Arial;font-size:53px;">BIENVENIDO, <i><?php echo $login_session; ?></i></span><span
                            style="color:#000000;font-family:Arial;font-size:35px;"><br></span>
                    </div>
                    <div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:4;">
                        <img src="images/Usuario.png" id="Image1" alt="">
                    </div>
                    <div id="wb_Text2">
                        <span style="color:#000000;font-family:Arial;font-size:20px;"><br><br></span><span
                            style="color:#000000;font-family:Arial;font-size:24px;">Tu ID es: A001 con fecha de
                            creacion<br> 06/10/2021 y expira el 06/10/2022</span>
                    </div>
                </div>
                <div class="col-2">
                    <div class="col-2-padding">
                        <div id="wb_Text3">
                            <span style="color:#000000;font-family:Arial;font-size:20px;"><br><br>Elige que quieres
                                ver:<br><br><br><br></span>
                        </div>
                        <div id="NavigationBar1" style="display:inline-block;width:380px;height:330px;z-index:7;">
                            <ul class="navbar">
                                <li><a href="inventario.html"><img src="images/img0001_over.png"
                                            class="hover"><span><img src="images/img0001.png"></span></a></li>
                                <li><a href="ventas.html"><img src="images/img0002_over.png" class="hover"><span><img
                                                src="images/img0002.png"></span></a></li>
                                <li><a href="an_admin.html"><img src="images/img0003_over.png" class="hover"><span><img
                                                src="images/img0003.png"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>