@extends('layouts.base')

@section('content')

    <h3>Pendaftaran Pembekal</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="/Pembekal" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-10 ">Pilih Jenis Akaun</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        {{-- <div class="form-check">
                                                <input type="checkbox" name="pembekal_jenis_akaun[]" value="Akaun Asas" class="form-check-input">Akaun Asas
                                            </div> --}}

                        <div class="form-check">
                            <input type="checkbox" name="pembekal_jenis_akaun[]" value="Bekalan & Perkhidmatan(MOF)"
                                class="form-check-input">Bekalan dan Perkhidmatan (MOF)
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="pembekal_jenis_akaun[]" value="Kerja" class="form-check-input">CIDB
                        </div>
                    </div>
                </div>

                <legend>Maklumat Syarikat</legend>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Nama Syarikat</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=text style=text-transform:uppercase name=pembekal_company_name class="form-control">
                    </div>
                </div>

                {{-- <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="col-form-label col-sm-6 ">Jenis Pembekal</label>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <input type=text style=text-transform:uppercase name=pembekal_jenis class="form-control">
                                            </div>
                                        </div> --}}

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Jenis Perniagaan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=text style=text-transform:uppercase name=pembekal_jenis_company class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">No Pendaftaran Syarikat</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=text style=text-transform:uppercase name=pembekal_no_pendaftaran class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Sijil SSM</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=file name=pembekal_sijil_ssm class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Lesen Perniagaan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=file name=pembekal_lesen_perniagaan class="form-control">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Tarikh Penubuhan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=date name=pembekal_date_establish class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">No Cukai Pendapatan</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=text style=text-transform:uppercase name=pembekal_income_tax_no class="form-control"
                            style=text-transform:uppercase>
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Alamat Syarikat</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=text style=text-transform:uppercase name=pembekal_company_address
                            class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Bandar</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=text style=text-transform:uppercase name=pembekal_city class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Poskod</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <input type=number name=pembekal_postcode class="form-control">
                    </div>
                </div>


                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Negeri</label>
                    </div>
                    <div class="mb-3 col-md-6">
                        <select name=pembekal_state class="form-control">
                            <option hidden>Sila Pilih</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="W.P Kuala Lumpur">W.P Kuala Lumpur</option>
                            <option value="W.P Labuan">W.P Labuan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Penang">Penang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="W.P Putrajaya">W.P Putrajaya</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                        </select>
                    </div>
                </div>
            </fieldset>
    </div>


    <fieldset>
        <legend> Maklumat Pemilik Syarikat</legend>


        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 "> Nama Pemilik Syarikat</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=text style=text-transform:uppercase name=pembekal_pemilik class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Kewarganegaraan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=text style=text-transform:uppercase name=pembekal_citizenship class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Jenis Pengenalan</label>
            </div>
            <div class="mb-3 col-md-6">
                <select name=pembekal_identity_type class="form-control">
                    <option hidden>Sila Pilih</option>
                    <option value="kad pengenalan">Kad Pengenalan</option>
                    <option value="pasport">Pasport</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">No Kad Pengenalan / No Pasport</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=text style=text-transform:uppercase name=pembekal_identity_no class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">No Telefon Bimbit</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type="number" name=pembekal_tel_no class="form-control">
            </div>
        </div>

    </fieldset>


    `

    <fieldset>
        <legend>Maklumat Cukai Barang dan Perkhidmatan</legend>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">No Cukai Barang dan Perkhidmatan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=text name=pembekal_cbp_no class="form-control" style=text-transform:uppercase>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Tarikh Sah Laku</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=date name=pembekal_cbp_effective_date class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Tarikh Kelulusan</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=date name=pembekal_cbp_approval_date class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Tarikh Tamat Tempoh</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=date name=pembekal_cbp_end_date class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Lampiran Dokumen</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=file name=pembekal_cbp_approval_doc class="form-control">
            </div>
        </div>

    </fieldset>
    <br><br>
    <fieldset>
        <legend>Maklumat Bank </legend>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">Nama Bank</label>
            </div>
            <div class="mb-3 col-md-6">
                <select name="pembekal_bank" class="form-control">
                    <option hidden>Sila Pilih</option>
                    <option value=”ABNAMYK”> THE ROYAL BANK OF SCOTLAND</option>
                    <option value=”AFBQMYKL”>ASIAN FINANCE BANK BHD</option>
                    <option value=”AGOBMYKL”>AGRO BANK</option>
                    <option value=”AIBBMYKL”>AFFIN ISLAMIC BANK BERHAD</<option>
                    <option value=”AISLMYKL”>AMISLAMIC BANK BERHAD</option>
                    <option value=”AMMB9999”>AM INVESTMENT BANK BERHAD SPI</option>
                    <option value=”AMMBMYKL”>AM INVESTMENT BANK BERHAD</option>
                    <option value=”ARBKMYKL”>AM BANK BERHAD</option>
                    <option value=”AVSSMYK1”>AVENUE SECURITIES SDN BHD</option>
                    <option value=”BIMBMYKL”>BANK ISLAM MALAYSIA BERHAD</option>
                    <option value=”BKCHMYKL”>BANK OF CHINA MALAYSIA BHD</option>
                    <option value=”BKKBMYKL”>BANGKOK BANK</option>
                    <option value=”BKRMMYKL”>BANK KARJASAMA RAKYAT MALAYSIA BERHAD</option>
                    <option value=”BMMBMYKL”>BANK MUAMALAT MALAYSIA BERHAD</option>
                    <option value=”BNMAMYKL”>BANK NEGARA MALAYSIA</option>
                    <option value=”BOFAMY2X”>BANK OF AMERICA MALAYSIA BERHAD</option>
                    <option value=”BOTKMYKX”>BANK OF TOKYO-MITSUBISHI (M) BERHAD</option>
                    <option value=”BSNA9999”>BANK SIMPANAN NASIONAL SPI</option>
                    <option value=”BSNAMYK1”>BANK SIMPANAN NASIONAL</option>
                    <option value=”CAGA9999”>CAGAMAS BHD SPI</option>
                    <option value=”CAGAMYK1”>CAGAMAS BHD</option>
                    <option value=”CHASMYKX”>JP MORGAN CHASE BANK BHD</option>
                    <option value=”CIBBMYKL”>CIMB BANK BERHAD</<option>
                    <option value=”CITI9999”>CITIBANK SPI</option>
                    <option value=”CITIMYKL”>CITIBANK BERHAD</option>
                    <option value=”COIM9999”>CIMB INVESTMENT BANK BHD SPI</option>
                    <option value=”COIMMYK1”>CIMB INVESTMENT BANK BHD</option>
                    <option value=”CTBBMYKL”>CIMB ISLAMIC BANK BHD</option>
                    <option value=”DEUTMYKL”>DEUTSCHE BANK (MALAYSIA) BERHAD</option>
                    <option value=”EIBBMYKL”>EONCAP ISLAMIC BANK BHD</option>
                    <option value=”EOBBMYKL”>EON BANK BERHAD</option>
                    <option value=”HBMB9999”>HONGKONG BANK MALAYSIA BHD SPI</option>
                    <option value=”HBMBMYKL”>HONGKONG BANK MALAYSIA BHD</option>
                    <option value=”HDSBMY2P”>HWANG-DBS SECURITIES BERHAD</option>
                    <option value=”HLBBMYKL”>HONG LEONG BANK</option>
                    <option value=”KAFD9999”>KAF INVESTMENT BANK BHD SPI</option>
                    <option value=”KAFDMYK1”>KAF INVESTMENT BANK BHD</option>
                    <option value=”KFHOMYKL”>KUWAIT FINANCE HOUSE MALAYSIA BERHAD</option>
                    <option value=”KKENMYK1”>KENANGA INVESTMENT BANK BERHAD</option>
                    <option value=”KWAPMYK1”>Bank Negara Malaysia</option>
                    <option value=”KWSPMYK1”>KUMPULAN WANG SIMPANAN PEKERJA</option>
                    <option value=”MBAM9999”>ALLIANCE INVESTMENT BANK BHD SPI</option>
                    <option value=”MBAMMYK1”>ALLIANCE INVESTMENT BANK BHD</< /option>
                    <option value=”MBBE9999”>MALAYAN BANKING BHD SPI</option>
                    <option value=”MBBEMYKL”>MALAYAN BANKING BERHAD</option>
                    <option value=”MBEA9999”>ASEAMBANKERS SPI</option>
                    <option value=”MBEAMYK1”>ASEAMBANKERS MALAYSIA BERHAD</option>
                    <option value=”MFBB9999”>ALLIANCE BANK MALAYSIA BHD SPI</option>
                    <option value=”MFBBMYKL”>ALLIANCE BANK MALAYSIA BERHAD</option>
                    <option value=”MIMBMYKL”>MIMB INVESTMENT BANK BERHAD</option>
                    <option value=”NOSCMYKL”>THE BANK OF NOVA SCOTIA BERHAD</option>
                    <option value=”OCBC9999”>OCBC BANK MALAYSIA BHD SPI</option>
                    <option value=”OCBCMYKL”>OCBC BANK MALAYSIA BHD</option>
                    <option value=”OSSBMYK1”>OSK SECURITIES BERHAD</option>
                    <option value=”PAMBMYK1”>AFFIN INVESTMENT BANK BHD</option>
                    <option value=”PBBE9999”>PUBLIC BANK BHD SPI</option>
                    <option value=”PBBEMYKL”>PUBLIC BANK BERHAD</option>
                    <option value=”PERDMYK1”>SOUTHERN INVESTMENT BANK BHD</option>
                    <option value=”PHBMMYKL”>AFFIN BANK BERHAD</option>
                    <option value=”RHBAMYKL”>RHB ISLAMIC BANK BHD</option>
                    <option value=”RHBBMYKL”>RHB BANK BERHAD</option>
                    <option value=”RHBMMYK1”>RHB INVESTMENT BANK BHD</option>
                    <option value=”RJHIMYKL”>AL-RAJHI BANKING & INVESTMENT</option>
                    <option value=”SCBL9999”>STANDARD CHARTERED BANK BHD SPI</option>
                    <option value=”SCBLMYKX”>STANDARD CHARTERED BANK MALAYSIA BHD</option>
                    <option value=”SMBBMYK1”>PUBLIC INVESTMENT BANK BHD</option>
                    <option value=”UMBB9999”>MIDF AMANAH INVESTMENT BANK BHD SPI</option>
                    <option value=”UMBBMYK1”>MIDF AMANAH INVESTMENT BANK BHD</option>
                    <option value=”UOVBMYKL”>UNITED OVERSEAS BANK MALAYSIA BEHAD</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="col-form-label col-sm-6 ">No Akaun</label>
            </div>
            <div class="mb-3 col-md-6">
                <input type=number name=pembekal_akaun_no class="form-control">
            </div>
        </div>
    </fieldset>

    <br><br>

    <button class="btn btn-success" type="submit">Daftar</button>
    </form>



@stop
