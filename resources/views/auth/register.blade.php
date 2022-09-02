<!doctype html>
<html data-theme="cupcake" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng kí</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="">
    <div class="flex items-center gap-2 justify-center pt-16 pb-8 text-3xl font-semibold text-blue-400">
        <img class="h-14" src="https://res.cloudinary.com/dpxcdkpmn/image/upload/v1661224628/image-removebg-preview_2_vpdx7a.png" alt="logo">
    </div>
    <div class="flex justify-center">
        <div class="bg-white w-[500px] rounded-lg px-6 py-8 shadow">
            <div class="">
                <div class="text-xl font-semibold">{{ __('Register') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mt-4">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Họ và tên') }}</label>

                            <div class="mt-3">
                                <input id="name" type="text" class="px-2 py-2  rounded border border-blue-300 w-full focus:outline-none focus:ring-2 focus:ring-blue-300 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="mt-3">
                                <input id="email" type="email" class="px-2 py-2  rounded border border-blue-300 w-full focus:outline-none focus:ring-2 focus:ring-blue-300 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                            <div class="mt-3">
                                <input id="password" type="password" class="px-2 py-2  rounded border border-blue-300 w-full focus:outline-none focus:ring-2 focus:ring-blue-300 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Nhập lại mật khẩu') }}</label>

                            <div class="mt-3">
                                <input id="password-confirm" type="password" class="px-2 py-2  rounded border border-blue-300 w-full focus:outline-none focus:ring-2 focus:ring-blue-300" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="flex justify-end">
                                <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded">
                                    {{ __('Đăng kí') }}
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-center text-sm mt-4">
                            <a href="{{route('login')}}" class="hover:text-blue-400">Bạn đã có tài khoản? Đăng nhập ngay</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


