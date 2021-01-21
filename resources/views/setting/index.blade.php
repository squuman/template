@extends('layouts.app')

@section('title', 'Настройки')

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Панель управления
            </h3>
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="module-tab" data-toggle="pill" href="#module" role="tab">Модуль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="shop-tab" data-toggle="pill" href="#shop" role="tab">Магазин</a>
                </li>
            </ul>

            <form action="setting/store" method="post">
                <div class="tab-content">
                    <div class="tab-pane active" id="module" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                @include('/setting/_module')
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="shop" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                @include('/setting/_store')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success pull-right btn-submit"><i class="far fa-save"></i>
                        Сохранить
                    </button>
                    <button class="btn btn-primary pull-right btn-submit"><i class="fas fa-sync"></i>Обновить настройки
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
