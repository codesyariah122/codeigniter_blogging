

<div id="colorlib-work">
    <div class="container">
        <div class="row text-center">
        <h5 class="bold" style="font-size:8em; margin-top:5rem;"><?=$index_title?></h5>
        </div>
        <div class="row">
        <div class="col">
            <?= $pagination ?>
        </div>
            <?php foreach ($page as $k) : //echo "<h1>".$k->link."</h1>";
            ?>
                <?php $content = strlen($k->content); //echo "<h1>".$content."</h1>";1
                ?>
                <div class="col-md-12">
                    <div class="work-entry-flex animate-box js-fullheight">
                        <div class="col-three-forth js-fullheight">
                            <div class="row no-gutters">
                                <div class="col-md-12 
									<?php
                                    $id_awal = 8;
                                    if ($k->id % 2 == 0) :
                                        echo 'col-md-push-10';
                                    else :
                                        echo 'no-gutters';
                                    endif;
                                    ?>">
                                    <div class="work-img js-fullheight" style="background-image: url(
											<?php
                                            if ($k->img == NULL) :
                                                echo base_url("assets/images/page/slider6.jpg");
                                            else :
                                                echo $page_img . $k->img;
                                            endif;
                                            ?>
											);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-one-forth js-fullheight">
                            <div class="row no-gutters">
                                <div class="col-md-12 
										<?php
                                        if ($k->id % 2 == 0) :
                                            echo 'col-md-pull-12';
                                        else :
                                            echo 'no-gutters';
                                        endif;
                                        ?>">
                                    <div class="display-t js-fullheight">
                                        <div class="display-tc js-fullheight">
                                            <div class="text-inner text-inner-justify">
                                                <h2 style="color:silver !important;"><a href="<?= $k->link ?>"><?= ucwords($k->judul); ?></a></h2>
                                                <?php if($uri === "office"):?>
                                                <h3>
                                                <?php endif;?>
                                                <p style="color:gray;">
                                                    <!-- manipulasi akan dimulai dari sini -->
                                                    <?php if($uri !== "customerservice"):?>
                                                        <?= substr($k->content, 0, $num_char = 100); ?><br />
                                                    <?php elseif($uri === "customerservice"):?>
                                                        <?=$k->content?>
                                                    <?php endif;?>
                                                    <?php if($uri === "office"):?>
                                                    </h4>
                                                    <?php endif;?>
                                                </p>
                                                <p id="p1">
                                                    <?php if($k->content >! $num_char AND $k->judul !== "Legality And Business Plan" AND $uri !== "customerservice" AND $uri !== "office"):?>
                                                    <a href="<?= base_url() ?>page/read/<?= $k->url ?>" class="btn-view btn-block text-center">Read More</a>
                                                    <?php endif;?>
                                                    <?php if($k->judul === "Legality And Business Plan"): ?>
                                                      <a href="<?=base_url()?>page/read/<?=$k->url?>" class="btn-view btn-block text-center">Read More</a>
                                                    <?php endif;?>  
                                                </p>
                                                <br /><br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <?= $pagination ?>
            <a href="<?= base_url() ?>main/home"><button type="button" class="btn btn-warning btn-block">Kembali</button></a>
        </div>
    </div>
</div>

