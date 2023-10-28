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
                <h2 class="text-center bg-warning"><i class="halflings-icon edit"></i><span class="break text-danger  mb-2"></span>Create sub Category</h2>

            </div>

            <div class="box-content">
                <form class="form-horizontal" action="{{url('/sub-categories/')}}" method="post" >
                    @csrf

                    <fieldset>

                        <div class="control-group" >
                            <label class="control-label" for="date01">Category Name</label>
                            <div class="controls">
                                <select class=" form-select ml-2" aria-label="Default select" name="cat_id" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="date01">Sub Category Name</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge form-control" name="name" required>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" rows="3" required></textarea>
                            </div>

                        </div>




                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{route('dashboard')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
    </div><!--/row-->
    </div><!--/row-->

@endsection
