<div class="card">
    <div class="card-header">
        <div class="card-header__beetwen">
            <h3 class="card-title">Настройки модуля</h3>
        </div>
    </div>
    <div class="card-body">

        <p><b>Настройки retailCRM</b></p>

        <div class="form-group field-setting-retail_api_url @if($errors->has('retail_api_url')) has-error @endif">
            <label for="retail_api_url" class="control-label">Ссылка на аккаунт retailCRM</label>
            <input type="text" class="form-control" name="retail_api_url" placeholder="Ссылка на аккаунт retailCRM">
            @if($errors->has('retail_api_url'))
                <p class="help-block help-block-error">{{ $errors->first('retail_api_url') }}</p>
            @endif
        </div>
        <div class="form-group field-setting-retail_api_url @if($errors->has('retail_api_key')) has-error @endif">

            <label for="retail_api_url" class="control-label">API-ключ</label>
            <input type="text" class="form-control" name="retail_api_url" placeholder="API-ключ">

            @if($errors->has('retail_api_key'))
                <p class="help-block help-block-error">{{ $errors->first('retail_api_key') }}</p>
            @endif
        </div>
    </div>
</div>
