<div>
    {{ html()->form('POST', route('sections.store'))->id('form-create-section')->acceptsFiles()->autocomplete(false)->open() }}
        @include('models.sections.form')
    {{ html()->form()->close() }}
</div>