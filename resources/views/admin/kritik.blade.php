<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 p-0 ">
                @include('layouts.sidebar')
            </div>
            <!-- Content -->
            <div class="col-md-9">
                <h1 class="my-5">Kritik Saran</h1>
                {{-- <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahKritik">
                    Tambah Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="tambahKritik" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="namakritik" class="form-label">Nama Pengkritik</label>
                                        <input type="text" class="form-control" id="namakritik"
                                            placeholder="Masukkan Nama Pengkritik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telepon" class="form-label">Telepon</label>
                                        <input type="tel" class="form-control" id="telepon"
                                            placeholder="Masukkan Nomor Telepon">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Masukkan Alamat Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pesan" class="form-label">Pesan</label>
                                        <textarea class="form-control" id="pesan" rows="3" placeholder="Masukkan Pesan atau Saran"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row mt-4">
                    <div class="shadow-sm col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{ $row->id }}</th>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->tujuan }}</td>
                                    <td>{{ $row->pesan }}</td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>