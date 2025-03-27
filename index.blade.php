@extends('layouts.app')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@section('title', 'Danh sách sản phẩm')

@section('content')
<div class="container">
    <h2 class="mb-3">Danh sách sản phẩm</h2>
    
    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Thêm sản phẩm</a>

    <form action="{{ route('products.index') }}" method="get" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" 
                   placeholder="Tìm kiếm sản phẩm..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th>Số lượng</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ number_format($pr->price) }} đ</td>
                <td>{{ $pr->category_name }}</td>
                <td>{{ $pr->quantity }}</td>
                <td>{{ $pr->description }}</td>
                <td>{{ $pr->status ? 'Hoạt động' : 'Tạm dừng' }}</td>
                <td>
                    <a href="{{ route('products.edit', $pr->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('products.destroy', $pr->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                    <a href="{{ route('products.show', $pr->id) }}" class="btn btn-info btn-sm">Xem chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $product->links() }}
    </div>
</div>
@endsection
