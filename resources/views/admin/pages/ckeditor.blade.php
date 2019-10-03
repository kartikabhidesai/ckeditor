@extends('admin.layout.app')
@section('content')
<div id="maincontainer" class="clearfix">
    <div id="contentwrapper">
        <div class="main_content">
            <div id="jCrumbs" class="breadCrumb module">
                <ul>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i></a>
                    </li>
                    <li>
                        <a href="#">CK editor</a>
                    </li>

                </ul>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <form name="ckeditor" method="post" enctype='multipart/form-data'>{{ csrf_field() }}
                        <div id="editor">
                            <h2>Sample</h2>

                            <p>This is an instance of the <a href="https://ckeditor.com/docs/ckeditor5/latest/builds/guides/overview.html#inline-editor">inline editor build</a>.</p>

                            <figure class="image">
                                    <img src="{{ url('public/assest/tests/manual/sample.jpg') }}" alt="Autumn fields" />
                            </figure>

                            <p>You can use this sample to validate whether your <a href="https://ckeditor.com/docs/ckeditor5/latest/builds/guides/development/custom-builds.html">custom build</a> works fine.</p>
                    </div>
                        
                        <div class="form-actions">
                            <button class="btn btn-default" type="submit">Save changes</button>
                            <button class="btn btn-default">Cancel</button>
			</div>
                    </form>
                </div>
            </div>       
        </div>
    </div>

</div>


@endsection
