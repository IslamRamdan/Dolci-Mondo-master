@extends('adminlte::page')

@section('title', 'الكاتيجوري')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">قائمة الكاتيجوري</h3>
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary float-right">
                إضافة كاتيجوري
            </a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عربي</th>
                        <th>English</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name_ar }}</td>
                            <td>{{ $category->name_en }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
