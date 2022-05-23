<footer>
    <div class="container__footer">
        <div class="box__footer">
            <div class="logo">
                <img src="/src/img/logo.png" alt="">
            </div>
        </div>
        <div class="box__footer">
            <?php if($id_pagina == 1){?>
                <h2>Miembros del equipo</h2>
            <?php }else if($id_pagina == 2){?>
                <h2>Team members</h2>
            <?php }else if($id_pagina == 3){?>
                <h2>Teammitglieder</h2>
            <?php }else if($id_pagina == 4){?>
                <h2>Membres de l'équipe</h2>
            <?php }?>
            <p>Castillo Ramírez Laura Adaia</p>
            <p>Cruz López Claudia Sofia Guadalupe</p>
            <p>Duarte Gaytán Cristian Daniel</p>    
            <p>Gómez Calvario Sebastián</p>    
            <p>Nolazco Lagunas Carlos</p>    
        </div>
        <div class="box__footer">
            <?php if($id_pagina == 1){?>
                <h2>Redes Sociales</h2>
            <?php }else if($id_pagina == 2){?>
                <h2>Social media</h2>
            <?php }else if($id_pagina == 3){?>
                <h2>Sozialen Medien</h2>
            <?php }else if($id_pagina == 4){?>
                <h2>Réseaux sociaux</h2>
            <?php }?>
            <a href="#"> <i class="fa-brands fa-facebook"></i> @ElRolPorManzanillo</a>
            <a href="#"> <i class="fa-brands fa-tiktok"></i> @ElRolPorManzanillo</a>
            <a href="#"> <i class="fa-brands fa-instagram"></i> @ElRolPorManzanillo</a>
            <a href="#"> <i class="fa-brands fa-twitter"></i> @ElRolPorManzanillo</a>
        </div>
    </div>
    <div class="box__copyright">
        <hr>
        <?php if($id_pagina == 1){?>
            <p>Todos los derechos reservados © 2022</p>
        <?php }else if($id_pagina == 2){?>
            <p>All rights reserved © 2022</p>
        <?php }else if($id_pagina == 3){?>
            <p>Alle Rechte vorbehalten © 2022</p>
        <?php }else if($id_pagina == 4){?>
            <p>Tous droits réservés © 2022</p>
        <?php }?>
    </div>
</footer>