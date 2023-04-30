@extends('layouts.app', ['page' => 'New Product', 'pageSlug' => 'products', 'section' => 'inventory'])
@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{__('translation.New_Product')}}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">{{__('translation.Back_to_List')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{__('translation.Product_Information')}}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('product_category_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{__('translation.Category')}}</label>
                                    <select name="product_category_id" data-toggle="tooltip" data-placement="top" title="{{__('translation.why_category')}}" id="input-category" class="form-select form-select-sm{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                        @foreach ($categories as $category)
                                            @if($category['id'] == old('document'))
                                                <option value="{{$category['id']}}" selected>{{$category['name']}}</option>
                                            @else
                                                <option value="{{$category['id']}}">{{$category['name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'product_category_id'])
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{__('translation.Product_Name')}}</label>
                                    <input data-toggle="tooltip" data-placement="top" title="{{__('translation.why_name')}}" type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           placeholder="{{__('translation.Product_Name')}}" value="{{ old('name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-description">{{__('translation.Description')}}</label>
                                    <input data-toggle="tooltip" data-placement="top" title="{{__('translation.why_description')}}" type="text" name="description" id="input-description" class="form-control form-control-alternative"
                                           placeholder="{{__('translation.Description')}}" value="{{ old('description') }}" required>
                                    @include('alerts.feedback', ['field' => 'description'])
                                </div>
                                
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-stock">{{__('translation.Stock')}}</label>
                                            <input data-toggle="tooltip" data-placement="top" title="{{__('translation.why_stock')}}" type="number" name="stock" id="input-stock" class="form-control form-control-alternative"
                                                   placeholder="{{__('translation.Stock')}}" value="{{ old('stock') }}" required>
                                            @include('alerts.feedback', ['field' => 'stock'])
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group{{ $errors->has('stock_defective') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-stock_defective">{{__('translation.Defective_Stock')}}</label>
                                            <input data-toggle="tooltip" data-placement="top" title="{{__('translation.why_defective')}}" type="number" step=".01" name="stock_defective" id="input-stock_defective" class="form-control form-control-alternative" placeholder="{{__('translation.Defective_Stock')}}" value="{{ old('stock_defective') }}" required>
                                            @include('alerts.feedback', ['field' => 'stock_defective'])
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-price">{{__('translation.Price')}}</label>
                                            <input data-toggle="tooltip" data-placement="top" title="{{__('translation.why_price')}}" type="number" step=".01" name="price" id="input-price" class="form-control form-control-alternative" placeholder="{{__('translation.Price')}}" value="{{ old('price') }}" required>
                                            @include('alerts.feedback', ['field' => 'price'])
                                        </div>
                                    </div>                                    

                                    {{--------------------------------Here Goes Photo--------------------------------------}}
                                    <div class="row">
                                        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-stock">{{__('translation.Photo')}}</label>
                                                <div id="dev-upload" data-toggle="tooltip" data-placement="top" title="{{__('translation.why_photo')}}" class="dropzone-wrapper">
                                                    <div class="dropzone-desc">
                                                        <p>{{__('translation.Choose_an_image')}}</p>
                                                        <input  id="input-image" type="file" name="image" class="dropzone" required>
                                                        <!-- @include('alerts.feedback', ['field' => 'image']) -->
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    {{--------------------------------Here Ends Photo--------------------------------}}
                                    
                                </div>
                            </div> <!--Row tag-->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{__('translation.Save')}}</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function readFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var htmlPreview =
                        '<img width="200" src="' + e.target.result + '" />' +
                        '<p>' + input.files[0].name + '</p>';
                    var wrapperZone = $(input).parent();
                    var previewZone = $(input).parent().parent().find('.preview-zone');
                    var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

                    wrapperZone.removeClass('dragover');
                    // previewZone.removeClass('hidden');
                    boxZone.empty();
                    boxZone.append(htmlPreview);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function reset(e) {
            e.wrap('<form>').closest('form').get(0).reset();
            e.unwrap();
        }

        $(".dropzone").change(function() {
            readFile(this);
        });

        $('.dropzone-wrapper').on('dragover', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).addClass('dragover');
        });

        $('.dropzone-wrapper').on('dragleave', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).removeClass('dragover');
        });

        $('.remove-preview').on('click', function() {
            var boxZone = $(this).parents('.preview-zone').find('.box-body');
            var previewZone = $(this).parents('.preview-zone');
            var dropzone = $(this).parents('.form-group').find('.dropzone');
            boxZone.empty();
            previewZone.addClass('hidden');
            reset(dropzone);
        });
    </script>
@endpush

