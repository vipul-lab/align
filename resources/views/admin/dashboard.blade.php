@extends('admin.layouts.app')
@section('content')
    <div class="p-4">
        <div class="flex items-center flex-col justify-center bg-white h-full text-center">
            <img src="assets/images/empty-img.svg">
            <p class="font-semibold text-lg my-2">No workout found</p>
            <p class="text-gray-500 text-sm">Add a workout by tapping the button</p>
            <button class="kt-btn kt-btn-primary mt-4"><i class="fa-solid fa-plus"></i> Add New</button>
        </div>
    </div>
@endsection