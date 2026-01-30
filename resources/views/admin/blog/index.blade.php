@extends('adminlte::page')

@section('title', 'عرض العناصر')

@section('content_header')
    <h1>عرض جميع المنتجات</h1>
@stop

@section('content')

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">

            <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">
                إضافة منتج جديد
            </a>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الصورة</th>
                        <th>الاسم (عربي)</th>
                        <th>الاسم (English)</th>
                        <th>الكاتيجوري</th>
                        <th>سعر الجملة</th>
                        <th>سعر البيع</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            {{-- الصورة --}}
                            <td>
                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" width="80" class="img-thumbnail">
                                @else
                                    لا يوجد صورة
                                @endif
                            </td>

                            {{-- الاسم عربي --}}
                            <td>{{ $blog->title_ar }}</td>

                            {{-- الاسم انجليزي --}}
                            <td>{{ $blog->title_en }}</td>

                            {{-- الكاتيجوري --}}
                            <td>{{ $blog->category->name_ar ?? '-' }}</td>

                            {{-- الأسعار --}}
                            <td>{{ $blog->wholesale_price }}</td>
                            <td>{{ $blog->sale_price }}</td>

                            {{-- الإجراءات --}}
                            <td>
                                <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">
                                    تعديل
                                </a>

                                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                    style="display:inline-block;"
                                    onsubmit="return confirm('هل أنت متأكد من حذف هذا العنصر؟');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        حذف
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@stop
