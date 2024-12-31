<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

        <div class="container">
            <h2>پنل کاربری</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('user.panel.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">نام:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">ایمیل:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">رمز عبور جدید (اختیاری):</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">تکرار رمز عبور جدید:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
            </form>
        </div>


</body>

</html>
