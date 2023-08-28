<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Contact Us</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">

                    {{-- header form --}}

                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i></span>
                                </div>
                                <div class="text">
                                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone" style="color: #fff !important"></span>
                                </div>
                                <div class="text">
                                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane" style="color: #fff !important"></span>
                                </div>
                                <div class="text">
                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span><i class="fa-solid fa-earth-europe" style="color: #ffffff;"></i></span>
                                </div>
                                <div class="text">
                                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- section form --}}

                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contact Us</h3>

                                {{-- Manage error --}}

                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>

                                {{-- form --}}

                                <form method="POST" action="{{ route('send') }}" id="contactForm" name="contactForm"
                                    class="contactForm" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="name" id="name" placeholder="Full Name"
                                                    value="{{ old('name') }}">
                                                <div class="text-danger">
                                                    @error('name')
                                                        {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                                    placeholder="Email@example.com" value="{{ old('email') }}">
                                                    <div class="text-danger">
                                                        @error('email')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Cell Phone</label>
                                                <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" id="number"
                                                    placeholder="Number" value="{{ old('number') }}">
                                                    <div class="text-danger">
                                                        @error('number')
                                                            {{$message}}
                                                        @enderror
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" cols="30" rows="4" placeholder="Message">{{ old('message') }}</textarea>
                                                <div class="text-danger">
                                                    @error('message')
                                                        {{$message}}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            {{-- form btn --}}

                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                {{-- img contact us --}}

                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5 img" style="background-image: url(/img-form.jpeg);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
