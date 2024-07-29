<x-dashboard-layout title="Biodata Siswa">
    @php
        $form = [
            [
             'type' => 'text',
             'name' => 'nisn',
             'label' => 'NISN',
         ],
         [
             'type' => 'text',
             'name' => 'nama',
             'label' => 'Nama',
         ],
         [
             'type' => 'text',
             'name' => 'nik',
             'label' => 'NIK',
         ],
         [
             'type' => 'date',
             'name' => 'tanggal_lahir',
             'label' => 'Tanggal Lahir',
         ],
         [
             'type' => 'text',
             'name' => 'tempat_lahir',
             'label' => 'Tempat Lahir',
         ],
         [
             'type' => 'text',
             'name' => 'no_kk',
             'label' => 'No KK',
         ],
         [
             'type' => 'text',
             'name' => 'agama',
             'label' => 'Agama',
         ],
         [
             'type' => 'number',
             'name' => 'jumlah_saudara',
             'label' => 'Jumlah Saudara',
         ],
         [
             'type' => 'number',
             'name' => 'anak_ke',
             'label' => 'Anak Ke',
         ],
         [
             'type' => 'text',
             'name' => 'hobi',
             'label' => 'Hobi',
             'options' => ['Membaca', 'Menulis', 'Bersepeda', 'Memasak', 'Olahraga', 'Musik'],
         ],
         [
             'type' => 'text',
             'name' => 'cita_cita',
             'label' => 'Cita-cita',
             'options' => ['Dokter', 'Guru', 'Insinyur', 'Pengusaha', 'Pilot', 'Polisi'],
         ],

             ['type' => 'text',
             'name' => 'alamat_rumah',
             'label' => 'Alamat Rumah',
             'options' => ['Dokter', 'Guru', 'Insinyur', 'Pengusaha', 'Pilot', 'Polisi'
             ],
         ]
        ];
    @endphp
    <div class="card border-bottom-0 tw-border-r-0 tw-border-l-0 card-outline card-primary">
        <div class="card-header">
            <div class="card-title">
                <div>Biodata Siswa</div>
                <div class="tw-text-sm tw-flex tw-items-center tw-justify-start gap-2">
                    <b>Lengkap: </b> <span>
                        <i class="bi bi-x-circle-fill text-danger"></i>
{{--                        <i class="bi bi-check-circle-fill text-success"></i>--}}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form id="form-biodata-siswa" action="" method="POST" >
                @csrf
                @method("POST")
                <div class="tw-grid gap-3 tw-grid-cols-1 md:tw-grid-cols-2">
                    @foreach($form as $item)
                        <div class="form-group tw-justify-end md:tw-flex tw-items-center tw-gap-3">
                            <label class="tw-whitespace-nowrap tw-font-semibold tw-text-sm" for="{{$item['name']}}">{{$item['label']}}:</label>
                            @if($item['type'] !== 'select')
                                <input placeholder="{{$item['label']}}" name="{{$item['name']}}" type="{{$item['type']}}"  class="form-control md:tw-w-96 ">
                                @else
                                <select class="form-control form-select md:tw-w-96" name="{{$item['name']}}">
                                    @foreach($item['options'] as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                    @endforeach
                </div>




                <div class="tw-flex tw-mt-4 gap-2 float-end">
                    <button type="button" data-btn="review-biodata-siswa" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        SIMPAN
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
</x-dashboard-layout>
