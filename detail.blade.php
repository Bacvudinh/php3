@extends('layouts.app')

@section('title', 'Xem chi tiết sản phẩm')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4>Chi tiết sản phẩm</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" value="{{ $product->name }}" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Giá:</label>
                <input type="text" class="form-control" value="{{ number_format($product->price) }} VND" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Danh mục:</label>
                <input type="text" class="form-control" value="{{ $product->category_name }}" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Số lượng:</label>
                <input type="text" class="form-control" value="{{ $product->quantity }}" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">Mô tả:</label>
                <textarea class="form-control" rows="3" readonly>{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Trạng thái:</label>
                <input type="text" class="form-control" 
                    value="{{ $product->status == 1 ? 'Hoạt động' : 'Tạm dừng' }}" readonly>
            </div>

            <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>
@endsection
