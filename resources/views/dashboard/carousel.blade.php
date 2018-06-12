{{--
    Copyright 2018 The Lost Island : Battle Royale

    This file is part of TLIBR Web. TLIBR Web is distributed with the hope of
    attracting more community contributions to the core ecosystem of The Lost Island : Battle Royale.

    TLIBR Web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    TLIBR Web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.
    
    You should have received a copy of the GNU Affero General Public License
    along with TLIBR Web. If not, see <http://www.gnu.org/licenses/>.
--}}

@extends('master', ['titlePrepend' => 'Dashboard', 'currentSection' => 'Carousel'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.dashboard_sidepanel')
        </div>

        <div class="col-lg-9">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-italic font-weight-light text-muted">Image size must be exactly 900 x 250 px</p>
                    <hr>
                    {!! Form::open([
                        'route'  => 'dashboard.carousel.store',
                        'class'  => 'needs-validation',
                        'method' => 'POST',
                        'files'  => true,
                    ]) !!}
                        <div class="form-group">
                            <div class="custom-file">
                                {!! Form::file('carousel_image', [
                                    'class' => 'custom-file-input'.($errors->has('carousel_image') ? ' is-invalid' : ''),
                                ]) !!}
                                {!! Form::label('carousel_image', 'Image Filename&hellip;',[
                                    'id'    => 'carousel_image_info',
                                    'class' => 'custom-file-label',
                                    'style' => 'overflow: hidden !important;',
                                ]) !!}
                                @if ($errors->has('carousel_image'))
                                    <div class="invalid-feedback">
                                        {!! $errors->first('carousel_image') !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                        {!! Form::hidden('_method', 'POST') !!}
                        {!! Form::submit('Upload Image', [
                            'class' => 'btn btn-primary btn-lg',
                        ]) !!}
                    {!! Form::close() !!}
                </div>
            </div>

            @if (count($images) > 0)
                <div class="card rounded-0">
                    <div class="card-body">
                        @if (count($images) > 1) 
                            {!! Form::button('Save Sort Order', [
                                'class'   => 'btn btn-primary btn-lg mb-2',
                                'onclick' => 'saveSort();',
                            ]) !!}
                        @endif
                        
                        <div id="ui-sortable">
                            @foreach ($images as $carousel)
                                <div class="tlibr-carousel-imgs" style="position: relative;">
                                    {!! Form::button('Remove', [
                                        'class'   => 'btn btn-danger btn-lg tlibr-shadow',
                                        'style'   => 'position: absolute; top: 10px; right: 10px;',
                                        'onclick' => 'event.preventDefault(); $(\'#delete-image-'.$carousel->id.'\').submit();',
                                    ]) !!}
                                    <img id="{{ $carousel->id }}" class="tlibr-shadow d-block w-100 rounded-0" src="{{ url('/storage/carousel/' . $carousel->image) }}">
                                </div>
                                
                                {!! Form::open([
                                    'route'    => ['dashboard.carousel.delete', $carousel->id],
                                    'id'       => 'delete-image-'.$carousel->id,
                                    'method'   => 'POST',
                                    'onsubmit' => 'return confirmDelete()',
                                    'style'    => 'visibility: none;',
                                ]) !!}
                                    {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::close() !!}
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

{!! Form::open([
    'route'  => 'dashboard.carousel.update.sortorder',
    'id'     => 'update-sort',
    'method' => 'POST',
    'style'  => 'visibility: none;',
]) !!}
    {!! Form::hidden('sort_order', null, ['id' => 'sort_order']) !!}
    {!! Form::hidden('_method', 'PUT') !!}
{!! Form::close() !!}
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $("#ui-sortable img").css("max-width", $("#ui-sortable img").width() + "px");
});

/**
 * Remove fakepath
 */
$('[name="carousel_image"]').change(function() {
    var path = $(this).val().substring($(this).val().lastIndexOf("\\") + 1, $(this).val().length);
    $('#carousel_image_info').html(path);
});

/**
 * For Sort Order
 */
function saveSort() {
    var selectedLanguage = new Array();
    $('#ui-sortable img').each(function() {
        selectedLanguage.push($(this).attr("id"));
    });
    $("#sort_order").val(selectedLanguage);
    $('#update-sort').submit();
}

/**
 * Confirm Delete
 * Just call it
 */
function confirmDelete() {
    if (!confirm('Do you want to delete this item?')) {
        event.preventDefault();
    }
}
</script>
@endsection