<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ \URL::asset('images/login/bg-02.jpg') }}');">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
                {{--<span class="login100-form-logo">
                    <img src="{{ \URL::asset('images/login/icons/lietadlo.svg')}}";>
                    <i class="zmdi zmdi-landscape"></i>
                </span>--}}

                <span class="login100-form-title p-b-55 p-t-5">
						Registrácia
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Používateľské meno" required>
                    <span class="focus-input100" data-placeholder="👤"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Heslo" required>
                    <span class="focus-input100" data-placeholder="🔒"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Heslo znovu" required>
                    <span class="focus-input100" data-placeholder="🔁"></span>
                </div>

                <div class="container-login100-form-btn p-t-30">
                    <button type="submit" class="login100-form-btn">
                        Zaregistrovať sa do systému
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="{{route('login')}}">
                        Už ste zaregistrovaní? Prihláste sa tu.
                    </a>
                </div>
                <div class="text-center p-t-20">
                    <a class="txt1" href="{{route('index')}}">
                        Späť na hlavnú stránku.
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
