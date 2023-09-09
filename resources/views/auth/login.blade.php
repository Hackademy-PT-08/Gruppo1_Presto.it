<x-layout>

    <h3 class="mt-5 text-center">Login</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="/login" method="POST">
                    @csrf
                        <body class="login">

                                <div class="animated slideInLeft" id="squareLogin">
                                <div class="animated bounceInUp" id="leftSquareLogin">
                                <div class="animated bounceInUp" id="circleLogin">
                                <img class="brandLogin img-responsive" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/827672/branding.png" />

                                </div>

                                <h2 id="titleLogin">Benvenuti su Presto</h2>
                                <h3 id="subtitleLogin">Accedi per comprare evendere i tuoi prodotti preferiti.</h3>

                            </div>

                                <div class="animated bounceInDown" id="rightSquareLogin">
                                    <div id="containerLogin">
                                    <h1 class="signupLogin">Sign Up </h1>
                                    <form className="animated slideInLeft">

                                    <input type="email" name="email" class="optinLogin" id="email" placeholder="email"
                                         aria-describedby="emailHelp">
                                     @error('email')
                                     <p> {{ $message }} </p>
                                    @enderror
                                    <input class="optinLogin " type="password" placeholder="password" name="password" id="password" />
                                    @error('password')
                                    <p> {{ $message }} </p>

                                     @enderror</form>
                                     
                                    <button class="animated infinite pulse buttonLogin btn btn-info" type="submit">
                                     <span id="twitter">Accedi</span>
                                    </button>
                                    <h3 id="footerLogin">By continuing you agree to our <span id="termsLogin">terms & conditions.</span></h3>
                                    </div>

                            </div>


                            </div>


                        {{-- </body>
                    <div class="mb-3">
                        <label for="email" class="form-label mt-5">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non condivideremo la tua e-mail con nessuno!
                        </div>
                        @error('email')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                            <p> {{ $message }} </p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger">Accedi</button>
                </form>
            </div>
        </div>
    </div> --}}






</x-layout>
