<div class="pl-lg-4">
    <form id="restorant-form" method="post" action="{{ route('admin.restaurants.update', $restorant) }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @method('put')
            <input type="hidden" name="info_images" value="1" />
            <div class="row">
                <?php
                    $images=[
                        ['dimensions'=>'650,120','id'=>'#resto_wide_logo','name'=>'resto_wide_logo','label'=>__('Restaurant wide logo'),'value'=>$restorant->logowide,'style'=>'width: 200px; height: 62px;','help'=>"PNG 650x120 recomended"],
                        ['dimensions'=>'650,120','id'=>'#resto_wide_logo_dark','name'=>'resto_wide_logo_dark','label'=>__('Dark restaurant wide logo'),'value'=>$restorant->logowidedark,'style'=>'width: 200px; height: 62px;','help'=>"PNG 650x120 recomended"],
                        ['dimensions'=>'590,400','id'=>'#resto_logo','name'=>'resto_logo','label'=>__('Restaurant Image'),'value'=>$restorant->logom,'style'=>'width: 295px; height: 200px;','help'=>"JPEG 590 x 400 recomended"],
                        ['dimensions'=>'2000,1000','id'=>'#resto_cover','name'=>'resto_cover','label'=>__('Restaurant Cover Image'),'value'=>$restorant->coverm,'style'=>'width: 200px; height: 100px;','help'=>"JPEG 2000 x 1000 recomended"]
                    ]
                ?>
                @foreach ($images as $image)
                    <div class="col-md-12">
                        @include('partials.images',$image)
                    </div>
                @endforeach
            </div>


        <div class="text-center">
            <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
        </div>
        <input type="hidden" id="#chnge_resto_wide_logo" name="change_resto_wide_logo" value="<?php echo $restorant->logowide;?>">
        <input type="hidden" id="#chnge_resto_wide_logo_dark" name="change_resto_wide_logo_dark" value="<?php echo $restorant->logowidedark;?>"  >
        <input type="hidden" id="#chnge_resto_logo" name="change_resto_logo" value="<?php echo $restorant->logom;?>"  >
        <input type="hidden" id="#chnge_resto_cover" name="change_resto_cover" value="<?php echo $restorant->coverm;?>"  >
    </form>
</div>

