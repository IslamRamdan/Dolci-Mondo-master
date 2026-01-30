@extends('adminlte::page')

@section('title', 'تعديل المنتج')

@section('content_header')
    <h1>تعديل المنتج</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- الكاتيجوري --}}
                <div class="form-group">
                    <label>الكاتيجوري</label>
                    <select name="category_id" class="form-control" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $blog->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name_ar }} - {{ $category->name_en }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- الاسم عربي --}}
                <div class="form-group mt-3">
                    <label>الاسم (عربي)</label>
                    <input type="text" name="title_ar" class="form-control" value="{{ $blog->title_ar }}" required>
                </div>

                {{-- الاسم انجليزي --}}
                <div class="form-group mt-3">
                    <label>الاسم (English)</label>
                    <input type="text" name="title_en" class="form-control" value="{{ $blog->title_en }}" required>
                </div>

                {{-- سعر الجملة --}}
                <div class="form-group mt-3">
                    <label>سعر الجملة</label>
                    <input type="text" step="0.01" name="wholesale_price" class="form-control"
                        value="{{ $blog->wholesale_price }}" required>
                </div>

                {{-- سعر البيع --}}
                <div class="form-group mt-3">
                    <label>سعر البيع</label>
                    <input type="text" step="0.01" name="sale_price" class="form-control"
                        value="{{ $blog->sale_price }}" required>
                </div>

                {{-- الصورة الحالية --}}
                <div class="form-group mt-3">
                    <label>الصورة الحالية</label><br>
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" width="120" class="img-thumbnail">
                    @else
                        <p>لا توجد صورة</p>
                    @endif
                </div>

                {{-- تغيير الصورة --}}
                <div class="form-group mt-3">
                    <label>تغيير الصورة</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button class="btn btn-success mt-4" type="submit">
                    تحديث
                </button>
            </form>

        </div>
    </div>

@stop
