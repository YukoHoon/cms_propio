<h3>Inicio</h3>
<div class="row">
    <?php foreach ($datos as $row){ ?>
        <article class="col m12 l6">
            <div class="card horizontal small">
                <div class="card-image">
                    <img src="<?php echo $_SESSION['public']."img/".$row->image ?>" alt="<?php echo $row->title ?>">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h4><?php echo $row->title ?></h4>
                        <p><?php echo $row->subtitle ?></p>
                    </div>
                    <div class="card-info">
                        <p><?php echo date("d/m/Y", strtotime($row->access_date)) ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?php echo $_SESSION['home']."noticia/".$row->slug ?>">Más información</a>
                    </div>
                </div>
            </div>
        </article>
    <?php } ?>
</div>
