@extends( 'admin.layout.master' )

@section( 'content' )
    <div class="row">

        <div class="col-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">ویرایش دسته بندی <a href="{{route('categories.index')}}" class="btn btn-outline-primary"><span class="fa fa-list"></span> بازگشت به لیست </a></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{route('categories.update', $category)}}" method="post">
                        @csrf
                        @method( 'PATCH' )
                        <div class="form-group">
                            <label for="title">عنوان دسته بندی</label>
                            <input type="text" id="title" class="form-control" value="{{$category->title}}" placeholder="عنوان دسته بندی" name="title">
                        </div>
                        <div class="form-group">
                            <label for="category_id">دسته بندی والد</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option disabled selected value="">انتخاب دسته بندی والد</option>
                                @foreach( $categories as $parent )
                                    <option value="{{$parent->id}}"
                                            @if( $category->category_id === $parent->id )
                                                selected
                                            @endif
                                    >{{$parent->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">ثبت دسته بندی</button>
                        </div>
                    </form>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <!-- /.col -->
        </div>
@endsection
