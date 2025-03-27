@extends('layouts.app')

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

@section('title', 'Chỉnh sửa sản phẩm')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4>Chỉnh sửa sản phẩm</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Tên sản phẩm</label>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Giá</label>
                    <input type="number" name="price" value="{{ $product->price }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Số lượng</label>
                    <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Danh mục</label>
                    <select name="category_id" class="form-select" required>
                        @foreach($categories as $cate)
                            <option value="{{ $cate->id }}" {{ $product->category_id == $cate->id ? 'selected' : '' }}>
                                {{ $cate->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select name="status" class="form-select">
                        <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Hoạt động</option>
                        <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Tạm dừng</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
</div>
@endsection
