@extends('admin.master')

@section('content')

    <div class="row-fluid sortable" >
        <div class="box span12 " >
            <div class="box-header" style="margin-bottom: 20px" data-original-title>
                <h2 style="color: #ff0080;font-size: 25px"><i class="halflings-icon user"></i><span class="break text-center" ></span>All Categories</h2>
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
                <a href="{{url('/create-brand')}}" class="btn btn-success btn-sm "  ><i class="halflings-icon plus"></i> Add Brand</a>
            </div>
            <div class="span2"></div>
            <p class="text-center text-success">{{session('message')}}</p>
            <div class="box-content">
                <table class="table table-responsive table-hover table-active table-dark table-striped table-bordered bootstrap-datatable ">
                    <thead>
                    <tr class="text-center text-danger" style="text-align: center;font-size: 18px; color: #ff0080 ">
                        <th>Sl NO</th>
                        <th>Category Name</th>
                        <th style="" class="text-center">Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    @foreach($brands as $brand)
                        <tbody>
                        <tr style="text-align: center">
                            <td style="width: 5%">{{$loop->iteration}}</td>
                            <td style="width: 10%" class="text-center">{{$brand->name}}</td>
                            <td style="width: 40%" class="text-center">{!! $brand->description !!}</td>
                            <td style="width: 15%" >
                                <img src="{{asset($brand->image)}}" alt="{{$brand->name}}" style="height: 70px">
                            </td>
                            <td class="text-center">
                                @if($brand->status==1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-warning">Deactive</span>
                                @endif
                            </td>
                            <td class="row">
                                <div class="span3"></div>
                                <div class="span2">
                                    @if($brand->status==1 )
                                        <a  href="{{url('brand-status'.$brand->id)}}" class="btn btn-success">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>
                                    @else
                                        <a  href="{{url('brand-status'.$brand->id)}}" class="btn btn-danger">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @endif
                                </div>
                                <div class="span2">
                                    <a href="{{route('edit.brand',['id'=>$brand->id])}}" class="btn btn-info" >
                                        <i  class="halflings-icon white edit"></i>
                                    </a></div>
                                <div class="span2">

                                    <form action="{{route('delete.brand')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$brand->id}}" name="id" >
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
