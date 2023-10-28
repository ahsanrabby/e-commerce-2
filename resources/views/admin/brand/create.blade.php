@extends('admin.master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2 class="text-danger text-center"><i class="halflings-icon edit"></i><span class="break"></span>Create Brand</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('save.brand')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Brand Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge form-control" name="name" required>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Brand Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required></textarea>
                            </div>

                        </div>

                        <div class="control-group">
                            <label class="control-label">Brand Image</label>
                            <div class="controls">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Create Brand</button>
                            <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->

@endsection
