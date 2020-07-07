<?php foreach ($halloffameread as $v) : ?>
    <!-- value reaction -->
    <ul style="list-style:none;">
        <li style="float:left; margin-left:0.5em">
            <small class="text-emoji text-danger text-center text-react<?= trim(str_replace(" ", "", $v->nama)) ?>-1" style="margin-left:-0.2em;"><?= $v->love ?></small>
        </li>
        <li style="float:left; margin-left:0.5em">
            <small class="text-emoji text-danger text-center text-react<?= trim(str_replace(" ", "", $v->nama)) ?>-2" style="margin-left:-0.5em;"><?= $v->like ?></small>
        </li>
        <li style="float:left; margin-left:0.5em">
            <small class="text-emoji text-danger text-center text-react<?= trim(str_replace(" ", "", $v->nama)) ?>-3" style="margin-left:-0.5em;"><?= $v->clapping ?></small>
        </li>
        <li style="float:left; margin-left:0.5em">
            <small class="text-emoji text-danger text-center text-react<?= trim(str_replace(" ", "", $v->nama)) ?>-4" style="margin-left:-0.7em;"><?= $v->biceps ?></small>
        </li>
        <li style="float:left; margin-left:0.5em">
            <small class="text-emoji text-danger text-center text-react<?= trim(str_replace(" ", "", $v->nama)) ?>-5" style="margin-left:-0.7em;"><?= $v->fire ?></small>
        </li>
    </ul>

<?php endforeach; ?>