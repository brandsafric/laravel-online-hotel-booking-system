<div class="col {{isset($property->fillation_rules['width'] ) ? $property->fillation_rules['width'] : 'col-md-12'}}">
    <a class="btn btn-outline-blue" data-toggle="modal" data-target="#mdl-file-manager" data-backdrop="true" id="a-{{$property->field}}"
       onclick="$('#multi_selection').val({{  isset($property->fillation_rules['multi_selection'])?1:0}});
               $('#property-title').val('{{$property->field}}');$('#document-type').val('videos');$('#attributes-to-display').val('')">
        {{isset($property->locales[app()->getLocale()])?$property->locales[app()->getLocale()]:$property->field}}
    </a>

    <div class="row">
        <div class="col col-md-12">
            <br>
        </div>
    </div>

    <div class="row" id="rw-selected-images-{{$property->field}}">
        <div class="col col-sm-12">
            <h5 class="center">تصاویر انتخابی</h5>
        </div>

        @if(isset($property->assigned ) and (is_array($property->assigned) or is_object($property->assigned)))
            @foreach($property->assigned as $s_img)
                <div class="col col-md-6 col-sm-12">
                    <input type="hidden" name="{{$property->field}}[]" value="{{$s_img->value}}">
                    <video width="400" controls>
                        <source src="{{$s_img->value}}" type="video/mp4">
                    </video>
                </div>
            @endforeach
        @endif

    </div>
    <br>
    <br>
    <br>
</div>