@extends('layouts.admin')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> {{ __('admin/product.main') }}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.products') }}">
                                    {{ __('admin/product.products') }} </a>
                            </li>
                            <li class="breadcrumb-item active"> {{ __('admin/product.add new product') }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-form"> {{ __('admin/product.add new product') }} </h4>
                                <a class="heading-elements-toggle"><i
                                        class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            @include('admin.includes.alerts.success')
                            @include('admin.includes.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form"
                                          action="{{route('admin.store.product.step.three')}}"
                                          method="POST"
                                          enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> {{ __('admin/product.store data') }}   </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> {{ __('admin/product.product code') }}
                                                        </label>
                                                        <input type="text" id="sku"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('sku')}}"
                                                               name="sku">
                                                        @error("sku")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ __('admin/product.product status') }}
                                                        </label>
                                                        <select name="in_stock" class="select2 form-control" >
                                                            <optgroup label="{{ __('admin/product.please choose') }}">
                                                                <option value="1">{{ __('admin/product.available') }}</option>
                                                                <option value="0"> {{ __('admin/product.not available') }} </option>
                                                            </optgroup>
                                                        </select>
                                                        @error('in_stock')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ __('admin/product.store tracking') }}
                                                        </label>
                                                        <select name="manage_stock" class="select2 form-control" id="manageStock">
                                                            <optgroup label="{{ __('admin/product.please choose type') }}">
                                                                <option value="1">{{ __('admin/product.enable tracking') }}</option>
                                                                <option value="0" selected>{{ __('admin/product.disable tracking') }}</option>
                                                            </optgroup>
                                                        </select>
                                                        @error('manage_stock')
                                                        <span class="text-danger"> {{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 hidden"  id="qtyDiv">
                                                    <div class="form-group">
                                                        <label for="projectinput1">{{ __('admin/product.qty') }}
                                                        </label>
                                                        <input type="text" id="sku"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('qty')}}"
                                                               name="qty">
                                                        @error("qty")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                <i class="ft-x"></i> {{ __('admin/product.back') }}
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> {{ __('admin/product.save') }}
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
</div>
@endsection
