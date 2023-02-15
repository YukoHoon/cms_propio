<h3>
    <a href="<?php echo $_SESSION['home'] ?>" title="Inicio">Inicio</a> <span>| </span>
    <a href="<?php echo $_SESSION['home'] ?>noticias" title="Noticias">Noticias</a> <span>| </span>
    <span><?php echo $datos->title ?></span>
</h3>
<div class="row">
    <article class="col s12">
        <div class="card horizontal large noticia">
            <div class="card-image">
                <img src="<?php echo $_SESSION['public']."img/".$datos->image ?>" alt="<?php echo $datos->title ?>">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h4><?php echo $datos->title ?></h4>
                    <p><?php echo $datos->subtitle ?></p>
                    <p><?php echo $datos->text ?></p>
                    <br>
                    <p>
                        <strong>Fecha</strong>: <?php echo date("d/m/Y", strtotime($datos->date)) ?><br>
                        <strong>Autor</strong>: <?php echo $datos->author ?>
                    </p>
                </div>
            </div>
        </div>
    </article>
</div>
