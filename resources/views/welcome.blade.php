{{ include}}
    <body>
        <div class="flex-center full-height">
            <div class="content">
                <div class="title m-b-md">
                    Lasse's Legeplads
                </div>
                <div class="subtitle m-b-md">
                    Her vil komme noget en dag!
                </div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                <div class="form-group">
                    {!! Form::label('Your Name') !!}
                    {!! Form::text('name', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your name')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your E-mail Address') !!}
                    {!! Form::text('email', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your e-mail address')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Your Message') !!}
                    {!! Form::textarea('message', null,
                        array('required',
                              'class'=>'form-control',
                              'placeholder'=>'Your message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Contact Us!',
                      array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
