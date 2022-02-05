<div class="form-group text-center">
    <label class="form-control-label" for="input-name">{{ $image['label'] }}</label>
    @isset($image['help'])
       <br /> <span class="small">{{ $image['help'] }}</span>
    @endisset
    <div class="text-center">
        <div class="fileinput fileinput-new" data-provides="fileinput">
            <!-- <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="{{ $image['style'] }}">
              <img id="previewImg" class="{{ $image['name'] }}" src="{{ $image['value'] }}" alt="..." /> 
              <div class="gallery"></div>
            </div> -->
            
        </div>
        <div class="slim" data-post="output" 
                 data-force-size="{{ $image['dimensions'] }}"  data-edit="true"
                 >
                <!-- <span class="btn btn-outline-secondary btn-file"> -->
                <!-- <span class="fileinput-new" >{{ __('Select image') }}</span> -->
                <!-- <span class="fileinput-exists">{{ __('Change') }}</span> -->
                
                <img src="{{ $image['value']}}" alt=""/>
                <input type="file" id="imgfile" name="{{ $image['name'] }}" >
                </span>
                <!-- <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">{{ __('Remove') }}</a> -->
            </div>
    </div>
</div>