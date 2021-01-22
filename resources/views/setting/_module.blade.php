<div class="card">
    <div class="card-header">
        <div class="card-header__beetwen">
            <h3 class="card-title">Настройки модуля</h3>
        </div>
    </div>
    @php
        if (session()->get('clientId')) {
            $user = isset(\App\Http\Controllers\UserController::getUserData()[0]) ? \App\Http\Controllers\UserController::getUserData()[0] : [];
        }
    @endphp
    <div class="card-body">

        <p><b>Настройки retailCRM</b></p>
        <form action="{{route('settingsSave')}}" method="post">
            @csrf
            <div class="form-group field-setting-retail_api_url @if($errors->has('retail_api_url')) has-error @endif">
                <label for="retail_api_url" class="control-label">Ссылка на аккаунт retailCRM</label>
                <input type="text" class="form-control" name="retail_api_url"
                       placeholder="Ссылка на аккаунт retailCRM" value="{{isset($user->url) ? $user->url : ''}}">
                @if($errors->has('retail_api_url'))
                    <p class="help-block help-block-error">{{ $errors->first('retail_api_url') }}</p>
                @endif
            </div>
            <div class="form-group field-setting-retail_api_url @if($errors->has('retail_api_key')) has-error @endif">
                <label for="retail_api_key" class="control-label">API-ключ</label>
                <input type="text" class="form-control" name="retail_api_key"
                       placeholder="API-ключ" value="{{isset($user->key) ? $user->key : ''}}">
                @if($errors->has('retail_api_key'))
                    <p class="help-block help-block-error">{{ $errors->first('retail_api_key') }}</p>
                @endif
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success pull-right btn-submit"><i class="far fa-save"></i>
                    Сохранить
                </button>
            </div>
        </form>
    </div>
</div>
