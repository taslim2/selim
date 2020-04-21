@extends('layout.user.logged.master')
@section('ptitle','Requested services')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="about-info">

            <div class="col-md-6 col-sm-6">
                <div class="footer-thumb">
                    <br><a href="{{ url('profileedit') }}"><h2>Manage your profile?</h2></a>
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Requested Services List</h4>
                    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    <table class="w3-table-all w3-hoverable">
                        <thead>
                        <tr class="w3-light-grey">
                            <th>Date</th>
                            <th>Test name</th>
                            <th>Hostipat</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tr>
                            <td>Jill</td>
                            <td>Smith</td>
                            <td>50</td>
                            <td>5</td>
                        </tr>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection

