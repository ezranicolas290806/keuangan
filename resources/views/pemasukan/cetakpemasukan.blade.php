@section('title'.'cetak pengeluaran')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss','resources/js/app.js'])

</head>
<body>
    
    <h4 class="text-center mt-5" style="color: #137FA3;">Laporan Pemasukan</h4>
    <div class="position-absolute top-0 start-50 translate-middle-x mt-5">
    <div class="card mt-5" style="width:77vw;">
            
        <div class="card-body">
            <table class="table table-bordered table-hovered DataTable" style="width: 73vw;">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Foto Struk</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php   
                    $no = 1;
                ?>
                        @foreach ($pemasukan as $pm)
                            
                    <tr  style="vertical-align: middle; font-size: 17px;" idPM={{ $pm->id_pemasukan }}>
                        <td class="col-1" style="text-align: center;"> {{ $no++ }} </td>
                            <td class="col-2" style="text-align: center">
                                {{ \Carbon\Carbon::parse($pm->tanggal)->format('j F Y') }}
                            </td>
                            <td class="col-2 text-capitalize text-center "> {{ $pm->deskripsi }} </td>
                            <td class="col-1 text-capitalize text-center "> {{ $pm->harga }} </td>
                            <td class="col-1" style="text-align: center">
                                @if ($pm->foto_struk)
                                    <img src="{{ asset('storage/' . $pm->foto_struk) }}" alt="Foto Struk"
                                        style="width: 90px; height: 90px;" class="rounded-circle object-fit-cover ">
                                @else
                                    <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                                @endif
                            </td>

                      

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    window.print()
</script>
</body>
</html>