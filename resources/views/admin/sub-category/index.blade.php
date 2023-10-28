@extends('admin.master')

@section('content')

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" style="margin-bottom: 20px" data-original-title>
                <h2 style="color: #0ea01c; font-size: 20px"><i class="halflings-icon user"></i><span class="break"></span>Manage Sub-Categories</h2>
                <div class="box-icon">

                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="mt-3">
            </div>
            <div class="span3"></div>
            <div class="span3"></div>
            <div class="span3"></div>


            <div class="mt-5">
                <a href="{{url('/sub-categories/create')}}" class="btn btn-success btn-sm "  ><i class="halflings-icon plus"></i>Add sub-Category</a>
            </div>
            <div class="span2"></div>
            <div class="bg-warning">
                <h1 class="text-center text-success bg-info ">{{session('message')}}</h1>

            </div>
            <div class="box-content">
                <table class="table table-responsive table-hover table-active table-dark table-striped table-bordered bootstrap-datatable ">
                    <thead>
                    <tr class="" style="text-align: center; color: #0a53be;font-size: 18px" >

                        <th>Subcategory id</th>
                        <th>Sub Category Name</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($subcategories as $subcategory)
                        <tbody>
                        <tr style="text-align: center">
                            <td style="width: 5%">{{$loop->iteration}}</td>
                            <td style="width: 10%" class="text-center">{{$subcategory->name}}</td>
                            <td style="width: 10%" class="text-center">{{$subcategory->category->name}}</td>
                            <td style="width: 40%" class="text-center">{!! $subcategory->description!!}</td>

                            <td class="text-center">
                                @if($subcategory->status==1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-warning">Deactive</span>
                                @endif
                            </td>
                            <td class="row">
                                <div class="span3"></div>
                                <div class="span2 mr-2">
                                    @if($subcategory->status==1 )
                                        <a  href="{{url('subcat-status'.$subcategory->id)}}" class="btn btn-success p-5">
                                            <i class="halflings-icon white thumbs-down"></i>

                                        </a>
                                    @else
                                        <a  href="{{url('subcat-status'.$subcategory->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>

                                        </a>
                                    @endif
                                </div>
                                <div class="span2">
                                    <a href="{{route('subCategory.edit',['id'=>$subcategory->id])}}" class="btn btn-info" >
                                        <i  class="halflings-icon white edit"></i>
                                    </a></div>
                                <div class="span2">

                                    <form action="{{route('subCategory.delete',['id'=>$subcategory->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$subcategory->id}}" name="id" >
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you wants to delete this data')"><i class="halflings-icon white trash"></i></button>
                                    </form>
                                </div>
                                <div class="span3"></div>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach

                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection
