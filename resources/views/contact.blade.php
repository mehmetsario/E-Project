@extends('layouts.site')

@section('content')
    <!-- Begin Contact Main Page Area -->
    <div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                    <div class="contact-page-side-content">
                        <h3 class="contact-page-title">Contact Us</h3>
                        <p class="contact-page-message mb-25">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                        <div class="single-contact-block">
                            <h4><i class="fa fa-fax"></i> Address</h4>
                            <p>123 Main Street, Anytown, CA 12345 – USA</p>
                        </div>
                        <div class="single-contact-block">
                            <h4><i class="fa fa-phone"></i> Phone</h4>
                            <p>Mobile: (08) 123 456 789</p>
                            <p>Hotline: 1009 678 456</p>
                        </div>
                        <div class="single-contact-block last-child">
                            <h4><i class="fa fa-envelope-o"></i> Email</h4>
                            <p>yourmail@domain.com</p>
                            <p>support@hastech.company</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                    <div class="contact-form-content pt-sm-55 pt-xs-55">
                        <h3 class="contact-page-title">Tell Us Your Message</h3>
                        <div class="contact-form">
                            <form   action="{{route('sendMessage')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" name="name" id="customername" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" name="email" id="customerEmail" required>
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" id="contactSubject">
                                </div>
                                <div class="form-group mb-30">
                                    <label>Your Message</label>
                                    <textarea name="message" id="contactMessage" ></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" value="submit" id="submit" class="li-btn-3" name="submit">send</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Contact Main Page Area End Here -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session()->has('msg'))
        <div class="alert alert-success">
            {{ Session('msg') }}
        </div>
    @endif

@endsection
