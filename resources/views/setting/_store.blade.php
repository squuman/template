<div class="card">
    <div class="card-header">
        <div class="card-header__beetwen">
            <h3 class="card-title">Настройки магазина</h3>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('shopSave') }}" method="post">
            @csrf
            <div class="form-group field-setting-retail_api_url @if($errors->has('retail_api_url')) has-error @endif">

                <label for="retail_site_name" class="control-label">Название магазина</label>
                <input type="text" class="form-control" name="retail_site_name" placeholder="Название">
                <label for="retail_site_code" class="control-label">Символьный код магазина</label>
                <input type="text" class="form-control" name="retail_site_code" placeholder="Символьный код магазина">
            </div>

            <button type="submit" class="btn btn-success pull-right btn-submit"><i class="fas fa-plus"></i>
                Добавить магазин
            </button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-header__beetwen">
            <h3 class="card-title">Список магазинов</h3>
        </div>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            @php
                $clientId = session()->get('clientId');
            @endphp
            <tr>
                <th scope="col">Наимнование</th>
                <th scope="col">Символьный код</th>
                <th scope="col">Удалить магазин</th>
                <th scope="col">Создание решения</th>
            </tr>
            @foreach(DB::select("select * from shops where clientId=\"$clientId\"") as $shop)
                <tr>
                    <td>{{$shop->name}}</td>
                    <td>{{$shop->code}}</td>
                    <td>
                    <form action="{{route('shopDelete')}}" method="post">
                        @csrf
                        <input type="text" name="id" value="{{$shop->id}}" style="display: none;">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                    </td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
