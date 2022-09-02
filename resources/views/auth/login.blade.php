<!doctype html>
<html data-theme="cupcake" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen">
        <div class="flex items-center justify-center pt-16 pb-8 text-4xl font-semibold text-blue-400">
            <span class="text-[#65c3c8]">Fake</span><span class="text-[#291334]">Book</span>
        </div>
        <div class="flex justify-center">
            <div class="bg-white w-[500px] rounded-lg px-6 py-8 shadow">
                <div class="">
                    <div class="text-xl font-semibold">{{ __('Đăng nhập') }}</div>

                    <div class="">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mt-4">
                                <label for="email" class="">{{ __('Email') }}</label>

                                <div class="mt-3">
                                    <input id="email" type="email" class="px-2 py-2  rounded border border-blue-300 w-full focus:outline-none focus:ring-2 focus:ring-blue-300 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="pt-2 text-sm text-red-500" role="alert">
                                            <h1 class="mt-2">{{ $message }}</h1>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Mật khẩu') }}</label>

                                <div class="mt-3">
                                    <input id="password" type="password" class="px-2 py-2  rounded border border-blue-300 w-full focus:outline-none focus:ring-2 focus:ring-blue-300  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="pt-2 text-sm text-red-500" role="alert">
                                            <h1 class="mt-2">{{ $message }}</h1>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="">
                                    <div class="flex items-center gap-1">
                                        <input class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-300" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Ghi nhớ tôi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=" mt-4">
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-blue-400 rounded-lg px-4 py-2 text-white hover:bg-blue-500">
                                        {{ __('Đăng nhập') }}
                                    </button>
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="text-center mt-6 text-gray-600">
                                        @if (Route::has('password.request'))
                                            <a class="text-[14px] hover:text-blue-400" href="{{ route('password.request') }}">
                                                {{ __('Quên mật khẩu?') }}
                                            </a>
                                        @endif
                                    </div>
                                @endif
                                <div class="text-center mt-2 text-gray-600">
                                    <a class="text-[14px] hover:text-blue-400" href="{{ route('register') }}">
                                        {{ __('Bạn chưa có tài khoản? Tạo tài khoản mới.') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
