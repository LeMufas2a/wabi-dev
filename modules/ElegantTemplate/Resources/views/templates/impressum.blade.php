<!-- impressum-->
<section class='section section-areas'>
    <div class='packer'>
        <div class='package'>
            <div class='content'>
                <div class='heading'>
                    <h2 style='text-align:center;'>{{$restorant->getConfig('impressum_title','')}}</h2>
                </div>
                <div class='' style='text-align:center;'>
                    <?php echo $restorant->getConfig('impressum_value',''); ?>
                </div>
            </div>
        </div>
    </div>
</section>