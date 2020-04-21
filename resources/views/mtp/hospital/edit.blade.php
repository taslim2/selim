@extends('layout.mtp.master')
@section('ptitle','Edit hospital')
@section('content')
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="{{ asset('images/hospital.jpg') }}" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="{{ url('hospital/update',$hospital->id) }}">
                    @csrf
                    <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Edit Hospital</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Hospital Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $hospital->name }}" placeholder="Hospital Name">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $hospital->address }}" placeholder="Address">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="{{ $hospital->phoneno }}" placeholder="Phone">
                                <button type="submit" class="form-control" id="cf-submit" >Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
