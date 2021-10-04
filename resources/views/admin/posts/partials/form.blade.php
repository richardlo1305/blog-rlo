
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del posts.']) !!}

        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

        @error('slug')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categorias') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <p class="font-weight-bold">Etiquetas</p>
        @foreach ($tags as $tag)
            <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{ $tag->name }}
            </label>
        @endforeach

        @error('tags')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="row">
        <div class="col mb-3">
            <div class="image-wrapper">
                @isset($post->image)
                    <img id="picture" src="{{asset('storage') }}/{{$post->image->url}}" >
                @else
                    <img id="picture" src="https://cdn.pixabay.com/photo/2021/08/26/18/31/road-6576857_960_720.jpg">
                @endisset
            </div>
            
        </div>
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
                {!! Form::file('file', ['calss' => 'form-control-file', 'accept' => 'image/*']) !!}

                @error('file')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui rerum excepturi itaque, natus possimus numquam inventore optio labore expedita nostrum sequi cum autem id tempore quo sapiente ex dolore ad!</p>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('extract', 'Extracto') !!}
        {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

        @error('extract')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        
        <p class="font-weight-bold">Estado</p>
        <label>
            {!! Form::radio('status', 1, true) !!}
            Borrador
        </label>

        <label>
            {!! Form::radio('status', 2) !!}
            Publicado
        </label>
        
        @error('status')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>

    <div class="form-group">
        {!! Form::label('body', 'Cuerto del post') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

        @error('body')
            <br>
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>