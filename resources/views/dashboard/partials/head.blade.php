<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{ asset('dashboard1/styles.css') }}" />
@include('sweetalert::alert')


    <script>
      <script>
    $(document).ready(function () {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $('.btndelete').click(function (e) {
                e.preventDefault();
                var deletepengguna = $(this).closest("tr").find('.delete_id').val();
                swal({
                    title: "Apakah anda yakin?",
                    text: "Pengajuan ini akan di Hapus!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                        .then((willDelete) => {
                                if (willDelete) {

                                        var data = {
                                                "_token": $('input[name=_token]').val(),
                                                'id': deletepengguna,
                                        };
                                        $.ajax({
                                                type: "DELETE",

                                                url: 'pengguna/' + deletepengguna,

                                                data: data,
                                                success: function (response) {
                                                        swal(response.status, {
                                                                        icon: "success",
                                                                })
                                                                .then((result) => {
                                                                        location.reload();
                                                                });
                                                }
                                        });
                                }
                        });
        });

    });

</script>
    </script>
    