@extends('admin_layout')
@section('admin_content')
 <div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục bài viết
                </header>
                <?php 
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert">'.$message.'</span>' ;
                            Session::put('message',null);
                        }
                    ?>
                <div class="panel-body">
                    
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-category-news')}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục bài viết</label>
                            <input type="text" name="category_news_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục bài viết">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="8" name="category_news_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="category_news_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        
                        <button type="submit" name="add_category_news" class="btn btn-info">Thêm danh mục bài viết</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>   
@endsection
