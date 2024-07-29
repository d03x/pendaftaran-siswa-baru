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
             'value' => auth()->user()->name,
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
             'type' => 'select',
             'name' => 'agama',
             'label' => 'Agama',
                'options' => [
                    'Islam',
                    'Kristen',
                    'Hindu',
                    'Budha',

                ]
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
             'type' => 'select',
             'name' => 'cita_cita',
             'label' => 'Cita-cita',
             'options' => ['Dokter', 'Guru', 'Insinyur', 'Pengusaha', 'Pilot', 'Polisi'],
         ],

             ['type' => 'select',
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

                <div class="tw-grid gap-3 tw-grid-cols-1 md:tw-grid-cols-2">
                    @foreach($form as $item)
                        <div class="form-group tw-justify-end md:tw-flex tw-items-center tw-gap-3">
                            <label class="tw-whitespace-nowrap tw-font-semibold tw-text-sm" for="{{$item['name']}}">{{$item['label']}}:</label>
                            @if($item['type'] !== 'select')
                                <input value="{{$item['value'] ?? ''}}" required="true" placeholder="{{$item['label']}}" name="{{$item['name']}}" type="{{$item['type']}}"  class="form-control md:tw-w-96 ">
                                @else
                                <select required class="form-control form-select md:tw-w-96" name="{{$item['name']}}">
                                    @foreach($item['options'] as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="reviewModalLabel">Review</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" modal-review-content>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit"  class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
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
