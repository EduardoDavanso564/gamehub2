<?php
$url = "https://professorburnes.com.br/stem/api/banners.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

//print_r($dadosBanner);
?>
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <?php
            foreach($dadosBanner as $dados) {
                ?>
                <div class="carousel-item active">
                    <a href="game/<?=$dados->id_game?>">
                        <img src="<?=$dados->imagem?>" class="d-block w-100"           alt="<?=$dados->nome?>">
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>