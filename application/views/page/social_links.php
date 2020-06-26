<div class="row mt-5">
    <!-- <div class="col-md-8" style="margin-top:-1em;margin-left:-1em;">
        <img src="<?=$youtube_profile_pic?>" alt="" class="img-responsive img-circle">
    </div> -->
    <div class="col-md-4" style="margin-top:1em;margin-left:1em;">
        <h5 class="text-danger"><?=$youtube_channel_name?></h5>
        <small class="text-success">Subscribers : <?=$subscriber?></small><br/>
    </div>
    <div class="col-md-4" style="margin-left:1em; margin-top:1em;">
        <div class="g-ytsubscribe" data-channelid="UC1t1vRGxruecjfUb2V5c6Pg" data-layout="full" data-count="default"></div>    
    </div>

</div>

<div class="row" style="margin-top:1em;">
<div class="col-md">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?=$latestVideo?>?rel=0"></iframe>
        </div>
    </div>
</div>