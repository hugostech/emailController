@extends('master')

@section('content')
    {!! Form::open(['url'=>'sendEmail']) !!}
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::text('email_subject',null,['class'=>'form-control','required','placeholder'=>'subject']) !!}
        </div>
        <div class="form-group">
            <textarea name="email_content" id="editor1" rows="20" cols="80" required placeholder="Email Content">

            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </div>
        <div class="form-group">
            {!! Form::submit('Send',['class'=>'btn btn-primary']) !!}
        </div>

    </div>
    {!! Form::close() !!}
@endsection