{{ html()->form('POST', '/')->id('form-create-section')->open() }}
    @include('models.sections.form')
{{ html()->form()->close() }}