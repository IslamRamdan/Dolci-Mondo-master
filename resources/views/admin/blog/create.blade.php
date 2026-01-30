@extends('adminlte::page')

@section('title', 'إضافة منتج ')

@section('content_header')
    <h1>إضافة منتج جديد</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- الكاتيجوري --}}
                <div class="form-group">
                    <label>الكاتيجوري</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- اختر الكاتيجوري --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name_ar }} - {{ $category->name_en }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- العنوان عربي --}}
                <div class="form-group mt-3">
                    <label>الاسم (عربي)</label>
                    <input type="text" name="title_ar" class="form-control" placeholder="الاسم بالعربي" required>
                </div>

                {{-- العنوان انجليزي --}}
                <div class="form-group mt-3">
                    <label>الاسم (English)</label>
                    <input type="text" name="title_en" class="form-control" placeholder="Name in English" required>
                </div>

                {{-- سعر الجملة --}}
                <div class="form-group mt-3">
                    <label>سعر الجملة</label>
                    <input type="text" step="0.01" name="wholesale_price" class="form-control" required>
                </div>

                {{-- سعر البيع --}}
                <div class="form-group mt-3">
                    <label>سعر البيع</label>
                    <input type="text" step="0.01" name="sale_price" class="form-control" required>
                </div>

                {{-- الصورة --}}
                <div class="form-group mt-3">
                    <label>الصورة (اختياري)</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button class="btn btn-success mt-4" type="submit">
                    حفظ
                </button>
            </form>

        </div>
    </div>

@stop
