<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            font-size: 0.6rem;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 2px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 10px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div id="header">
        <table width="100%">
            <tr>
                <td width="30" align="right"><img src="assets_landing/images/logokotatimur.png" width="40%"></td>
                <td width="60" align="center">
                    <div id="title">
                        <h3>Data Pertumbuhan Penduduk Kec.Kotim</h3>
                    </div>
                </td>
                <td width="20" align="left">
                </td>
            </tr>
        </table>
    </div>

    <hr>

    <table id="customers">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Kelurahan</th>
                <th colspan="3">Penduduk Awal</th>
                <th colspan="3">Lahir Bulan Ini</th>
                <th colspan="3">Mati Bulan Ini</th>
                <th colspan="3">Pendatang Bulan Ini</th>
                <th colspan="3">Pindah Bulan Ini</th>
                <th colspan="3">Penduduk Akhir Bulan Ini</th>
            </tr>
            <tr>
                <th>L</th>
                <th>P</th>
                <th>L+P</th>
                <th>L</th>
                <th>P</th>
                <th>L+P</th>
                <th>L</th>
                <th>P</th>
                <th>L+P</th>
                <th>L</th>
                <th>P</th>
                <th>L+P</th>
                <th>L</th>
                <th>P</th>
                <th>L+P</th>
                <th>L</th>
                <th>P</th>
                <th>L+P</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $kelurahan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $kelurahan['kelurahan'] }}</td>
                    <td>{{ $kelurahan['penduduk_awal']['laki-laki'] }}</td>
                    <td>{{ $kelurahan['penduduk_awal']['perempuan'] }}</td>
                    <td>{{ $kelurahan['penduduk_awal']['total'] }}</td>
                    <td>{{ $kelurahan['lahir']['laki-laki'] }}</td>
                    <td>{{ $kelurahan['lahir']['perempuan'] }}</td>
                    <td>{{ $kelurahan['lahir']['total'] }}</td>
                    <td>{{ $kelurahan['mati']['laki-laki'] }}</td>
                    <td>{{ $kelurahan['mati']['perempuan'] }}</td>
                    <td>{{ $kelurahan['mati']['total'] }}</td>
                    <td>{{ $kelurahan['pendatang']['laki-laki'] }}</td>
                    <td>{{ $kelurahan['pendatang']['perempuan'] }}</td>
                    <td>{{ $kelurahan['pendatang']['total'] }}</td>
                    <td>{{ $kelurahan['pindah']['laki-laki'] }}</td>
                    <td>{{ $kelurahan['pindah']['perempuan'] }}</td>
                    <td>{{ $kelurahan['pindah']['total'] }}</td>
                    <td>{{ $kelurahan['penduduk_akhir']['laki-laki'] }}</td>
                    <td>{{ $kelurahan['penduduk_akhir']['perempuan'] }}</td>
                    <td>{{ $kelurahan['penduduk_akhir']['total'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
