<x-guest-layout>
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <x-jet-validation-errors class="mb-4" />
                                <form class="form-stl" action="{{route('register')}}" name="frm-login" method="POST" >
                                    @csrf
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Create an account</h3>
                                        <h4 class="form-subtitle">Personal Information</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">Full Name*</label>
                                        <input type="text" id="frm-reg-fullName" name="fullName" placeholder="Your full Name*" :value="fullName" required autofocus autocomplete="fullName">
                                    </fieldset>   {{--Full Name--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">User Name*</label>
                                        <input type="text" id="frm-reg-userName" name="userName" placeholder="User Name*" :value="userName" required autofocus>
                                    </fieldset>   {{--User Name--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Email Address*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Email address*"  :value="email" required>
                                    </fieldset>   {{--Email Address--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Phone*</label>
                                        <input type="text" id="frm-reg-phone" name="phone" placeholder="Phone*"  :value="phone" required autofocus autocomplete="phone">
                                    </fieldset>     {{--Phone--}}
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Address*</label>
                                        <input type="text" id="frm-reg-address" name="address" placeholder="Address*"  :value="address" required autofocus autocomplete="address">
                                    </fieldset>     {{--Address--}}
                                    <fieldset class="wrap-input">
                                        <label class="col-md-4 control-label">User Type*</label>
                                        <div class="custom-select" style="border: 7px solid #e6e6e6;margin-top: 41px;">
                                            <select class="form-control input-md" name="uType" required>
                                                <option value="0">User Type:</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Writer</option>
                                                <option value="3">Viewer</option>
                                            </select>
                                        </div>
                                    </fieldset>     {{--User Type--}}
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Login Information</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">Password *</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">Confirm Password *</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    </fieldset>
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </main>
</x-guest-layout>

