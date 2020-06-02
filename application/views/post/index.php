<br /><br />

<div id="colorlib-work">
    <div class="container">
        <div class="row text-center">
            <h2 class="bold" style="font-size:10em;"><?= $index_title ?></h2>
        </div>
        <div class="row">
        <div class="col" style="margin-top:2em; margin-bottom:1em;">
            <?= $pagination ?>
        </div>
            <?php foreach ($post as $k) : //echo "<h1>".$k->link."</h1>";
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
                                            if ($k->image == NULL) :
                                                echo base_url("assets/images/post/business.png");
                                            else :
                                                echo $post_img . $k->image;
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
                                                <h2><a href="<?= $k->url ?>"><?= ucwords($k->judul) ?></a></h2>
                                                <p>
                                                    <!-- manipulasi akan dimulai dari sini -->
                                                    <?= substr($k->content, 0, $num_char = 100); ?><br />
                                                </p>
                                                <small class="text-info">Author : <?= $k->author ?></small><br />
                                                <small class="text-success">Last Update : <?php if($k->date_post_update == 0): echo '-'; else: echo date('d F Y', $k->date_post_update); endif; ?></small><br />
                                                <p id="p1">
                                                    <a href="<?= base_url() ?>post/read/<?= $k->url ?>" class="btn-view btn-block text-center">Read More</a>
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

