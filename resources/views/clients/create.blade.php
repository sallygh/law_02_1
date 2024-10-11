@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                <div class="mt-8 text-2xl">
                    {{ __('إضافة موكل جديد') }}
                </div>
                <div class="mt-6 text-gray-500">
                    {{ __('قم بإدخال تفاصيل الموكل الجديد في النموذج أدناه.') }}
                </div>
            </div>

            <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="full_name">
                            {{ __('الاسم الثلاثي') }}
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="full_name" name="full_name" type="text" placeholder="الاسم الثلاثي" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone_number">
                            {{ __('رقم الهاتف') }}
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone_number" name="phone_number" type="text" placeholder="رقم الهاتف" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            {{ __('العنوان') }}
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" name="address" type="text" placeholder="العنوان" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="front_id_image_id">
                            {{ __('صورة الهوية الأمامية') }}
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="front_id_image_id" name="front_id_image_id" type="text" placeholder="معرف صورة الهوية الأمامية" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="back_id_image_id">
                            {{ __('صورة الهوية الخلفية') }}
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="back_id_image_id" name="back_id_image_id" type="text" placeholder="معرف صورة الهوية الخلفية" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="notes">
                            {{ __('ملاحظات') }}
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="notes" name="notes" placeholder="ملاحظات"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="btn btn-primary">{{ __('إضافة') }}</button>
                </form>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection