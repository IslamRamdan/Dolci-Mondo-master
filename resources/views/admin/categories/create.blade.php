@extends('adminlte::page')

@section('title', 'إضافة كاتيجوري')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">إضافة كاتيجوري جديدة</h3>
        </div>

        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <div class="card-body">

                <div class="form-group">
                    <label>اسم الكاتيجوري (عربي)</label>
                    <input type="text" name="name_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>اسم الكاتيجوري (English)</label>
                    <input type="text" name="name_en" class="form-control" required>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success">حفظ</button>
            </div>
        </form>
    </div>
@endsection
