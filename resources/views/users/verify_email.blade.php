@include('users.includes.header')
<link rel="stylesheet" href="/users/css/advsearch.css">
<div class="container">
    <header>@lang("Verify Your Email Address")</header>
    @if (session('resent'))
      <div class="alert alert-success" role="alert">
          {{ __('A fresh verification link has been sent to your email address.') }}
      </div>
    @endif
      <form action="{{ route('resend.verify_email') }}" method="post">
        @csrf
          <div class="form first">
            <div class="form-gr6oup col-12">
              <div class="input-field">
                {{-- <label class="details">Email</label> --}}
                {{ __('Before proceeding, please check your email for a verification link.') }} {{ __('If you did not receive the email') }},
                {{-- <input type="text" placeholder="Enter Email" class="form-control" name="email" required=""> --}}
              </div>
            </div>
         <button name="submit" class="nextBtn">
          <span class="btnText">{{ __("Click to request another.")}}</span>
        </button>
    </div>
    </form>
      </div>
        </div>
@include('users.includes.footer')