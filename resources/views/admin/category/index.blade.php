@extends( 'admin.layout.master' )

@section( 'content' )
    <div class="row">

        <div class="col-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">دسته بندی ها <a href="{{route('categories.create')}}" class="btn btn-outline-primary"><span class="fa fa-plus-circle"></span> جدید</a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>والد</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach( $categories as $category )
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{optional( $category->parent )->title}}</td>
                                    <td><a class="btn btn-secondary" href="{{route('categories.edit', $category)}}"><span class="fa fa-edit"></span></a></td>
                                    <td>
                                        <form action="{{route('categories.destroy', $category)}}" method="post">
                                            @csrf
                                            @method( 'DELETE' )
                                            <input type="submit" class="btn btn-danger" value="حذف">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>والد</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <!-- /.col -->
    </div>
@endsection

@section( 'script' )
    <!-- This is data table -->
    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Superieur Admin for Data Table -->
    <script src="/admin/js/pages/data-table.js"></script>
@endsection
