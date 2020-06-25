@extends('pages.app')

@section('content')
    <div id="banner">
        <div class="container">
            <div class="row d-flex justify-content-center mt-5 pt-5">
                <div class="col-md-6 col-sm-12 col-xs-12 mt-5 pt-5">
                    <h1 class="text-center my-5 font-weight-bold text-white siapa">Siapa nih?</h1>
                    <h2 class="text-center text-white">Cari tahu nomor handphone mu...</h2>
                    <form action="/findphone" method="post" id="form" class="px-4 pt-4">
                        @csrf
                        <div class="form-group input-group shadow-lg">
                            <input type="number" pattern="[0-9]" class="form-control form-control-lg search disabled" placeholder="Enter phone number..." name="phone_number" id="phone_number" maxlength="16">
                            <div class="input-group-append">
                                <button class="btn btn-lg btn-danger" type="submit" id="btn-search"><i class="fa fa-search" id="fa"></i> Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        // Make input only number 
        // $('#phone_number').on('keydown', function(e)  {
        //   -1!==$
        //     .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
        //     .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
        //     || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
        //     && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        // });

        // Form on submit event 
        $('#form').on('submit', function(e) {
            e.preventDefault();

            if($('#phone_number').val() != '') {
                $.ajax({
                    url: '{{ url('find-phone') }}',
                    type: 'post',
                    data: $(this).serialize(),
                    beforeSend: function() {
                        $('#fa').removeClass('fa fa-search');
                        $('#fa').addClass('fa fa-spinner fa-spin');
                        $('#btn-search').prop('disabled', true);
                        $('#phone_number').prop('disabled', true);
                        $('.card').html('');
                    },
                    complete: function() {
                        $('#fa').removeClass('fa fa-spinner fa-spin');
                        $('#fa').addClass('fa fa-search');
                        $('#btn-search').prop('disabled', false);
                        $('#phone_number').prop('disabled', false);
                    },
                    success: function(response) {
                        // $('#fa').removeClass('fa fa-spinner fa-spin');
                        // $('#fa').addClass('fa fa-search');
                        // $('#btn-search').prop('disabled', false);
                        // console.log(response.data.tasks.account_holder);
                        // if(response.status == true) {
                            $('.card').html(`
                                <div class="card-header">
                                    <h3 class="m-0 card-title">Result</h3>
                                </div>
                                <div class="card-body">
                                    <p>NAMA ACCOUNT : <b class="text-uppercase">${response.status == true ? response.tasks.account_holder : 'Data tidak ditemukan!' }</b></p>
                                </div>
                            `);
                        // }
                    },
                    error: function(xhr, stat, err) {
                        console.log(err);
                    }
                });
            }
        });
    });
</script>
@endsection