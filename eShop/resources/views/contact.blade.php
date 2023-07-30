@extends('layouts.app')

@section('content')
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
        <h2 class="w3-wide w3-center">LIÊN HỆ VỚI CHÚNG TÔI</h2>
        <p class="w3-opacity w3-center"><i>Nếu bạn có gì không hài lòng</i></p>
        <div class="w3-row w3-padding-32">
            <div class="w3-col m6 w3-large w3-margin-bottom">
                <i class="fa fa-map-marker" style="width:30px"></i> Soc Trang, VN<br>
                <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
                <i class="fa fa-envelope" style="width:30px"></i> Email: duongthaitan13@mail@mail.com<br>
            </div>
            <div class="w3-col m6">
                <!-- Add the id attribute to the form -->
                <form id="contact-form" action="{{ route('submit.form') }}" method="POST">
                    <!-- Add CSRF protection token -->
                    @csrf
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Họ và tên" required name="Name>
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Tin nhắn" required name="Message">
                    <button class="w3-button w3-black w3-section w3-right" type="submit">GỬI NGAY</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Add a div to display the status notification -->
    <div id="status-notification"></div>
    <script>
        // Your JavaScript code for form submission and notification goes here (same as before)
    </script>
@endsection
