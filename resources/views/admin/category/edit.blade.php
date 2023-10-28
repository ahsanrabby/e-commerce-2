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
                <h2 class="text-danger text-center"><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{route('category.update',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <input type="text" value="{{$category->name}}" class="input-xlarge form-control" name="name" required>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <div class="controls">
                                <textarea class="cleditor"  name="description" rows="3" required>{{$category->description}}</textarea>
                            </div>

                        </div>

                        <div class="control-group">
                            <label class="control-label">Image</label>
                            <div class="controls">
                                <input type="file" name="image" class="form-control"><br>
                                <img src="{{asset($category->image)}}" alt="no image found" style="height: 100px;">
                            </div>
                        </div>


                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                            <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->

@endsection
