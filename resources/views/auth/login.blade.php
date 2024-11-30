@extends("layouts.layout")

@section('title', "Login")

@section("main")
<form method="POST" action="{{ route('login') }}" class="w-full h-screen flex flex-col items-center justify-center bg-slate-900">
    @csrf
    <div class="flex flex-col items-center mb-6">
        <input class="border-2  border-pink-500 rounded-2xl outline-none py-2 px-3 text-3xl bg-slate-900 text-white" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus  />
    </div>
    <div class="flex flex-col items-center">
        <input class="border-2  border-pink-500 rounded-2xl outline-none py-2 px-3 text-3xl bg-slate-900 text-white " id="password" placeholder="Password"  type="password" name="password" required />
    </div>
    <div>
        <button class="text-white mt-12 text-4xl rounded-xl py-4 px-16 bg-pink-500" >
            {{ __('Log in') }}
        </button>
    </div>
    @if ($errors->has('email') || $errors->has('password'))
    <div class="alert alert-danger">
        {{ __('These credentials do not match our records.') }}
    </div>
@endif
</form>
@endsection