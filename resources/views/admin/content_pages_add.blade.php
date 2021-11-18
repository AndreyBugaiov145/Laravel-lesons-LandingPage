<div class="wrapper container-fluid">
    {!! Form::open(['url'=>route('pagesAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('name','Название',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Введите название страницы']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('alias','псеводним:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('alias',old('alias'),['class'=>'form-control','placeholder'=>'Введите псеводним страницы']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text','Текст',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text',old('text'),['id'=>'editor','class'=>'form-control','placeholder'=>'Введите тукст страницы']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('images','Изображение',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('images',old('images'),['class'=>'filestyle','data-buttonText'=>'Выберите изображание','data-buttonName'=>'btn-primary','data-placeholder'=>'изображениея нету']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-8">
            {!! Form::button('Сохранить',['class'=>'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    <script>
        $(":file").filestyle();
        CKEDITOR.replace('editor');
        // ClassicEditor.create( document.querySelector( '#editor' ) )
    </script>
</div>