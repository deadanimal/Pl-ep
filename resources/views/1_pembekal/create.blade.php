<!DOCTYPE html>
<html lang="en">

{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="/PL.png">
    
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Responsive Bootstrap 4 Admin &amp; Dashboard Template">
            <meta name="author" content="Bootlab">
    
    
            {{-- <title>{{ config('app.name', 'ePerolehan') }}</title> --}}
            <title>Sistem ePerolehan</title>
            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
            <!-- Styles -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href=https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" src=https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js></script>


            <script src="sweetalert2.min.js"></script>
            <link rel="stylesheet" href="sweetalert2.min.css">
    
            @yield('styles')
            
            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <link href="/css/modern.css" rel="stylesheet">
            <script src="/js/settings.js"></script>
    
            <style>
                table,input[type=text]{
                    text-transform: capitalize;
            }
            </style>
    </head>
    <div class="wrapper">
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                   Pembekal
                </h1>
                <nav aria-label="breadcrumb">
                    <p class="header-subtitle">Pendaftaran Pembekal Baharu</p>
                </nav>
            </div>
            
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <h6 class="card-subtitle text-muted">The Fixed Header DataTables extension ensures the table headers don't leave the user's
                                viewport when scrolling down". See official documentation</h6> --}}
                        </div>
                        <div class="card-body">
                            
                <form method="POST" action="/Pembekal" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                    
                            <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Pilih Jenis Akaun
                                     <span class="text-danger">*</span></label>
                         
                                <div class="mb-2 col-sm-7">
                                    <div class="form-check">
                                        <input type="checkbox" name="pembekal_jenis_akaun[]" value="Bekalan & Perkhidmatan(MOF)" class="form-check-input">
                                        Perbendaharaan Malaysia Sabah (MOF)
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="pembekal_jenis_akaun[]" value="Kerja" class="form-check-input" >Kerja – PPK, SPKK (CIDB), STB (MEDEC)
                                    </div>
                                </div>
                            </div>

                        <legend>Maklumat Syarikat</legend>

                        <div class="mb-3 row">
                            <label class= "col-form-label col-sm-3 text-sm-end">Nama Syarikat<span class="text-danger">*</span></label>
                            <div class="mb-2 col-sm-7 text-sm-end">
                                <input type="text"   name=pembekal_company_name class="form-control">
                            </div>
                        </div>

                        {{-- 
                                                    <div class="mb-2 col-sm-7"> 
                                                        <label class= "col-form-label col-sm-3 text-sm-end">Jenis Pembekal<span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="mb-2 col-sm-7"> 
                                                        <input type="text"   name=pembekal_jenis class="form-control">
                                                    </div>
                                                </div> --}}

                        <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Jenis Perniagaan<span class="text-danger">*</span></label>
                                <div class="mb-2 col-sm-7">
                                    <input type="text"   name=pembekal_jenis_company class="form-control">
                                </div>
                        </div>

                        <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">No Pendaftaran SSM<span class="text-danger">*</span></label>
                            <div class="mb-2 col-sm-7">
                                <input type="text"   name=pembekal_no_pendaftaran class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Salinan Sijil SSM<span class="text-danger">*</span></label>
                                <div class="mb-2 col-sm-7">
                                    <input type="file"  name=pembekal_sijil_ssm class="form-control">
                                </div>
                        </div>



                        <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Tarikh Penubuhan<span class="text-danger">*</span></label>
                                <div class="mb-2 col-sm-7"> 
                                    <input type=date name=pembekal_date_establish class="form-control">
                                </div>
                        </div>

                        
                        <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">No Cukai Pendapatan</label>
                                <div class="mb-2 col-sm-7"> 
                                    <input type="text"  name=pembekal_income_tax_no class="form-control">
                                </div>
                        </div>


                        
                         <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Alamat Syarikat<span class="text-danger">*</span></label>
                            
                                <div class="mb-2 col-sm-7"> 
                                    <input type="text"   name=pembekal_company_address class="form-control">
                                </div>
                         </div>

                        
                        <div class="mb-3 row">
                            <label class= "col-form-label col-sm-3 text-sm-end">Bandar<span class="text-danger">*</span></label>
                            <div class="mb-2 col-sm-7"> 
                                <input type="text"   name=pembekal_city class="form-control">
                            </div>
                        </div>


                        
                         <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Poskod<span class="text-danger">*</span></label>
                   
                            <div class="mb-2 col-sm-7"> 
                                <input type=number name=pembekal_postcode class="form-control">
                            </div>
                        </div>


                        
                            <div class="mb-3 row">
                                <label class= "col-form-label col-sm-3 text-sm-end">Negeri<span class="text-danger">*</span></label>
                                <div class="mb-2 col-sm-7"> 
                                    <select name=pembekal_state class="form-select">
                                        <option hidden value="">Sila Pilih</option>
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="W.P Kuala Lumpur">W.P Kuala Lumpur</option>
                                        <option value="W.P Labuan">W.P Labuan</option>
                                        <option value="Melaka">Melaka</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Pulau Pinang">Pulau Pinang</option>
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
        <br><br>

            <fieldset>
                <legend> Maklumat Pemilik Syarikat</legend>


                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end"> Nama Pemilik Syarikat<span class="text-danger">*</span></label>
                
                    <div class="mb-2 col-sm-7"> 
                        <input type="text"   name=pembekal_pemilik class="form-control">
                    </div>
                </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Kewarganegaraan<span class="text-danger">*</span></label>
                    
                    <div class="mb-2 col-sm-7"> 
                        <input type="text"   name=pembekal_citizenship class="form-control">
                    </div>
                </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Jenis Pengenalan<span class="text-danger">*</span></label>
                    <div class="mb-2 col-sm-7"> 
                        <select name=pembekal_identity_type class="form-select">
                            <option hidden value="">Sila Pilih</option>
                            <option value="kad pengenalan">Kad Pengenalan</option>
                            <option value="pasport">Pasport</option>
                        </select>
                    </div>
                </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">No Kad Pengenalan / No Pasport<span class="text-danger">*</span></label>
                   
                    <div class="mb-2 col-sm-7"> 
                        <input type="text"   name=pembekal_identity_no class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class= "col-form-label col-sm-3 text-sm-end">Email<span class="text-danger">*</span></label>
               
                <div class="mb-2 col-sm-7"> 
                    <input type="email"   name=pembekal_email class="form-control">
                </div>
            </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">No Telefon Bimbit<span class="text-danger">*</span></label>
                    <div class="mb-2 col-sm-7"> 
                        <input type="number" name=pembekal_tel_no class="form-control">
                    </div>
                </div>

            </fieldset>
            <br><br>

            <fieldset>
                <legend>Maklumat Cukai Barang dan Perkhidmatan</legend>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">No Cukai Barang dan Perkhidmatan</label>
                    <div class="mb-2 col-sm-7"> 
                        <input type="text"  name=pembekal_cbp_no class="form-control" >
                    </div>
                </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Tarikh Sah Laku</label>
                    <div class="mb-2 col-sm-7"> 
                        <input type=date name=pembekal_cbp_effective_date class="form-control">
                    </div>
                </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Tarikh Kelulusan</label>
                    <div class="mb-2 col-sm-7"> 
                        <input type=date name=pembekal_cbp_approval_date class="form-control">
                    </div>
                </div>


                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Tarikh Tamat Tempoh</label>
                    <div class="mb-2 col-sm-7"> 
                        <input type=date name=pembekal_cbp_end_date class="form-control">
                    </div>
                </div>

                
                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Lampiran Dokumen</label>
                    <div class="mb-2 col-sm-7"> 
                        <input type="file"  name=pembekal_cbp_approval_doc class="form-control">
                    </div>
                </div>

            </fieldset>
            <br><br>
            <fieldset>
                <legend>Maklumat Bank </legend>

                
                    <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">Nama Bank<span class="text-danger">*</span></label>
                   
                    <div class="mb-2 col-sm-7"> 
                        <select name="pembekal_bank" class="form-select">
                            <option hidden value="">Sila Pilih</option>
                            <option value=ABNAMYK> THE ROYAL BANK OF SCOTLAND</option>
                            <option value=AFBQMYKL>ASIAN FINANCE BANK BHD</option>
                            <option value=AGOBMYKL>AGRO BANK</option>
                            <option value=AIBBMYKL>AFFIN ISLAMIC BANK BERHAD</<option>
                            <option value=AISLMYKL>AMISLAMIC BANK BERHAD</option>
                            <option value=AMMB9999>AM INVESTMENT BANK BERHAD SPI</option>
                            <option value=AMMBMYKL>AM INVESTMENT BANK BERHAD</option>
                            <option value=ARBKMYKL>AM BANK BERHAD</option>
                            <option value=AVSSMYK1>AVENUE SECURITIES SDN BHD</option>
                            <option value=BIMBMYKL>BANK ISLAM MALAYSIA BERHAD</option>
                            <option value=BKCHMYKL>BANK OF CHINA MALAYSIA BHD</option>
                            <option value=BKKBMYKL>BANGKOK BANK</option>
                            <option value=BKRMMYKL>BANK KARJASAMA RAKYAT MALAYSIA BERHAD</option>
                            <option value=BMMBMYKL>BANK MUAMALAT MALAYSIA BERHAD</option>
                            <option value=BNMAMYKL>BANK NEGARA MALAYSIA</option>
                            <option value=BOFAMY2X>BANK OF AMERICA MALAYSIA BERHAD</option>
                            <option value=BOTKMYKX>BANK OF TOKYO-MITSUBISHI (M) BERHAD</option>
                            <option value=BSNA9999>BANK SIMPANAN NASIONAL SPI</option>
                            <option value=BSNAMYK1>BANK SIMPANAN NASIONAL</option>
                            <option value=CAGA9999>CAGAMAS BHD SPI</option>
                            <option value=CAGAMYK1>CAGAMAS BHD</option>
                            <option value=CHASMYKX>JP MORGAN CHASE BANK BHD</option>
                            <option value=CIBBMYKL>CIMB BANK BERHAD</<option>
                            <option value=CITI9999>CITIBANK SPI</option>
                            <option value=CITIMYKL>CITIBANK BERHAD</option>
                            <option value=COIM9999>CIMB INVESTMENT BANK BHD SPI</option>
                            <option value=COIMMYK1>CIMB INVESTMENT BANK BHD</option>
                            <option value=CTBBMYKL>CIMB ISLAMIC BANK BHD</option>
                            <option value=DEUTMYKL>DEUTSCHE BANK (MALAYSIA) BERHAD</option>
                            <option value=EIBBMYKL>EONCAP ISLAMIC BANK BHD</option>
                            <option value=EOBBMYKL>EON BANK BERHAD</option>
                            <option value=HBMB9999>HONGKONG BANK MALAYSIA BHD SPI</option>
                            <option value=HBMBMYKL>HONGKONG BANK MALAYSIA BHD</option>
                            <option value=HDSBMY2P>HWANG-DBS SECURITIES BERHAD</option>
                            <option value=HLBBMYKL>HONG LEONG BANK</option>
                            <option value=KAFD9999>KAF INVESTMENT BANK BHD SPI</option>
                            <option value=KAFDMYK1>KAF INVESTMENT BANK BHD</option>
                            <option value=KFHOMYKL>KUWAIT FINANCE HOUSE MALAYSIA BERHAD</option>
                            <option value=KKENMYK1>KENANGA INVESTMENT BANK BERHAD</option>
                            <option value=KWAPMYK1>Bank Negara Malaysia</option>
                            <option value=KWSPMYK1>KUMPULAN WANG SIMPANAN PEKERJA</option>
                            <option value=MBAM9999>ALLIANCE INVESTMENT BANK BHD SPI</option>
                            <option value=MBAMMYK1>ALLIANCE INVESTMENT BANK BHD</< /option>
                            <option value=MBBE9999>MALAYAN BANKING BHD SPI</option>
                            <option value=MBBEMYKL>MALAYAN BANKING BERHAD</option>
                            <option value=MBEA9999>ASEAMBANKERS SPI</option>
                            <option value=MBEAMYK1>ASEAMBANKERS MALAYSIA BERHAD</option>
                            <option value=MFBB9999>ALLIANCE BANK MALAYSIA BHD SPI</option>
                            <option value=MFBBMYKL>ALLIANCE BANK MALAYSIA BERHAD</option>
                            <option value=MIMBMYKL>MIMB INVESTMENT BANK BERHAD</option>
                            <option value=NOSCMYKL>THE BANK OF NOVA SCOTIA BERHAD</option>
                            <option value=OCBC9999>OCBC BANK MALAYSIA BHD SPI</option>
                            <option value=OCBCMYKL>OCBC BANK MALAYSIA BHD</option>
                            <option value=OSSBMYK1>OSK SECURITIES BERHAD</option>
                            <option value=PAMBMYK1>AFFIN INVESTMENT BANK BHD</option>
                            <option value=PBBE9999>PUBLIC BANK BHD SPI</option>
                            <option value=PBBEMYKL>PUBLIC BANK BERHAD</option>
                            <option value=PERDMYK1>SOUTHERN INVESTMENT BANK BHD</option>
                            <option value=PHBMMYKL>AFFIN BANK BERHAD</option>
                            <option value=RHBAMYKL>RHB ISLAMIC BANK BHD</option>
                            <option value=RHBBMYKL>RHB BANK BERHAD</option>
                            <option value=RHBMMYK1>RHB INVESTMENT BANK BHD</option>
                            <option value=RJHIMYKL>AL-RAJHI BANKING & INVESTMENT</option>
                            <option value=SCBL9999>STANDARD CHARTERED BANK BHD SPI</option>
                            <option value=SCBLMYKX>STANDARD CHARTERED BANK MALAYSIA BHD</option>
                            <option value=SMBBMYK1>PUBLIC INVESTMENT BANK BHD</option>
                            <option value=UMBB9999>MIDF AMANAH INVESTMENT BANK BHD SPI</option>
                            <option value=UMBBMYK1>MIDF AMANAH INVESTMENT BANK BHD</option>
                            <option value=UOVBMYKL>UNITED OVERSEAS BANK MALAYSIA BEHAD</option>
                            </select>
                        </div>
                    </div>

                
                    <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 text-sm-end">No Akaun<span class="text-danger">*</span></label>
                    <div class="mb-2 col-sm-7"> 
                        <input type=number name=pembekal_akaun_no class="form-control">
                    </div>
                    </div>




                </fieldset>

                <br><br>
                <div align="right"
                <button class="btn btn-primary" type="submit">Daftar</button>
                </div>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

