@extends('layouts.base')
@section('content')
<head>
    <style>
        label {
            display: inline-block;
            width: 100px;
            text-align: justify;
        }
    </style>
</head>


<div class="header">
    <h1 class="header-title">
      Pembekal
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Kemaskini Maklumat Pembekal</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

        <form method="POST" action="/Pembekal/{{$pembekal->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <fieldset>
                
                <div class="mb-3 row">
                    <label class= "col-form-label col-sm-3 ">Jenis Akaun </label>
                <div class="mb-2 col-sm-7">
                    <input type=text name=pembekal_jenis_akaun class="form-control" value="{{$pembekal->pembekal_jenis_akaun}}" readonly>
                </div>
            </div>

             {{-- <div class="form-check">
                            <input type="checkbox" name="pembekal_jenis_akaun[]" value="Akaun Asas" class="form-check-input">Akaun Asas
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="pembekal_jenis_akaun[]" value="Bekalan & Perkhidmatan(MOF)"
                                class="form-check-input">Bekalan dan Perkhidmatan (MOF)
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="pembekal_jenis_akaun[]" value="Kerja" class="form-check-input">CIDB
                        </div>
                  
         --}}

                <legend>Maklumat Syarikat</legend>
                <br><br>

                <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 ">Nama Syarikat</label>
                    <div class="mb-2 col-sm-7">
                        <input type=text name=pembekal_company_name class="form-control" value="{{$pembekal->pembekal_company_name}}">
                    </div>
                </div>

                <div class="mb-3 row">
                       <label class= "col-form-label col-sm-3 ">Jenis Perniagaan</label>
                    <div class="mb-2 col-sm-7">
                        <input type=text name=pembekal_jenis_company class="form-control" value="{{$pembekal->pembekal_jenis_company}}">
                    </div>
                </div>

          
                <div class="mb-3 row">
                       <label class= "col-form-label col-sm-3 ">No Pendaftaran SSM</label>
                    <div class="mb-2 col-sm-7">
                        <input type=text name=pembekal_no_pendaftaran class="form-control" value="{{$pembekal->pembekal_no_pendaftaran}}">
                    </div>
                </div>

                
                <div class="mb-3 row">
                    <label class= "col-form-label col-sm-3">Salinan Sijil SSM</label>
                    <div class= "mb-2 col-sm-7">
                        <a href="/storage/{{$pembekal->pembekal_sijil_ssm}}" target="_blank" download>Muat Turun Fail</a>
                    </div>
                </div>
             

              
                    <div class="mb-3 row">
                       <label class= "col-form-label col-sm-3 ">Lesen Perniagaan</label>
                        <div class="mb-2 col-md-7">
                            <a href="/storage/{{$pembekal->pembekal_lesen_perniagaan}}" target="_blank" download>Muat Turun Fail</a>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 ">Tarikh Penubuhan</label>
                        <div class="mb-2 col-md-7">
                            <input type=date name=pembekal_date_establish class="form-control" value={{$pembekal->pembekal_date_establish}}>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 ">No Cukai Pendapatan</label>
                        <div class="mb-2 col-md-7">
                            <input type=text name=pembekal_income_tax_no class="form-control" value="{{$pembekal->pembekal_income_tax_no}}">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label class= "col-form-label col-sm-3 ">Alamat Syarikat</label>
                        <div  class="mb-2 col-md-7">
                            <input type=text name=pembekal_company_address class="form-control" value="{{$pembekal->pembekal_company_address}}">
                        </div>
                    </div>

         
                    <div class="mb-3 row">
                       <label class= "col-form-label col-sm-3 ">Bandar</label>
                       <div  class="mb-2 col-md-7">
                            <input type=text name=pembekal_city class="form-control" value="{{$pembekal->pembekal_city}}">
                        </div>
                    </div>
             
                    <div class="mb-3 row">
                       <label class= "col-form-label col-sm-3 ">Poskod</label>
                       <div  class="mb-2 col-md-7">
                            <input type=number name=pembekal_postcode class="form-control" value={{$pembekal->pembekal_postcode}}>
                        </div>
                    </div>
                
                    <div class="mb-3 row">
                       <label class= "col-form-label col-sm-3 ">Negeri</label>
                       <div  class="mb-2 col-md-7">
                            <select name=pembekal_state class="form-select">
                                <option @if ($pembekal->pembekal_state == 'Johor') selected @endif value='Johor'>Johor</option>
                                <option @if ($pembekal->pembekal_state == 'Kedah') selected @endif value='Kedah'>Kedah</option>
                                <option @if ($pembekal->pembekal_state == 'Kelantan') selected @endif value='Kelantan'>Kelantan</option>
                                <option @if ($pembekal->pembekal_state == 'W.P Kuala Lumpur') selected @endif value='W.P Kuala Lumpur'>W.P Kuala Lumpur</option>
                                <option @if ($pembekal->pembekal_state == 'W.P Labuan') selected @endif value='W.P Labuan'>W.P Labuan</option>
                                <option @if ($pembekal->pembekal_state == 'Melaka') selected @endif value='Melaka'>Melaka</option>
                                <option @if ($pembekal->pembekal_state == 'Negeri Sembilan') selected @endif value='Negeri Sembilan'>Negeri Sembilan</option> 
                                <option @if ($pembekal->pembekal_state == 'Pahang') selected @endif value='Pahang'>Pahang</option>
                                <option @if ($pembekal->pembekal_state == 'Pulau Pinang') selected @endif value='Pulau Pinang'>Pulau Pinang</option>
                                <option @if ($pembekal->pembekal_state == 'Perlis') selected @endif value="Perlis">Perlis</option>
                                <option @if ($pembekal->pembekal_state == 'Perak') selected @endif value='Perak'>Perak</option>
                                <option @if ($pembekal->pembekal_state == 'W.P Putrajaya') selected @endif value='W.P Putrajaya'>W.P Putrajaya</option>
                                <option @if ($pembekal->pembekal_state == 'Sabah') selected @endif value='Sabah'>Sabah</option>
                                <option @if ($pembekal->pembekal_state == 'Sarawak') selected @endif value='Sarawak'>Sarawak</option>
                                <option @if ($pembekal->pembekal_state == 'Selangor') selected @endif value='Selangor'>Selangor</option>
                                <option @if ($pembekal->pembekal_state == 'Terengganu') selected @endif value='Terengganu'>Terengganu</option>
                                <option @if ($pembekal->pembekal_state == 'Johor') selected @endif value='Johor'>Johor</option>

                            </select> 
                        </div>
                    </div>
            </fieldset>
<br><br>

    <fieldset>
        <legend> Maklumat Pemilik Syarikat</legend>
        
            <div class="mb-3 row">
                <label class= "col-form-label col-sm-3 "> Nama Pemilik Syarikat</label>
                <div  class="mb-2 col-md-7">
                    <input type=text name=pembekal_pemilik class="form-control" value="{{$pembekal->pembekal_pemilik}}">
                </div>
            </div>
       

            <div class="mb-3 row">
                <label class= "col-form-label col-sm-3 ">Kewarganegaraan</label>
                <div  class="mb-2 col-md-7">
                    <input type=text name=pembekal_citizenship class="form-control" value="{{$pembekal->pembekal_citizenship}}">
                </div>
            </div>
  

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">Jenis Pengenalan</label> 
               <div  class="mb-2 col-md-7">
                    <select name=pembekal_identity_type class="form-select">
                        <option @if($pembekal->pembekal_identity_type=='kad pengenalan') selected @endif value='kad pengenalan'>Kad Pengenalan</option>
                        <option @if($pembekal->pembekal_identity_type=='pasport') selected @endif value="pasport">Pasport</option>
                    </select>
                </div>
            </div>
       

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">No Kad Pengenalan / No Pasport</label>
               <div  class="mb-2 col-md-7">
                    <input type=text name=pembekal_identity_no class="form-control"  value="{{$pembekal->pembekal_identity_no}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class= "col-form-label col-sm-3 ">Email</label>
                <div  class="mb-2 col-md-7">
                     <input type=email name=pembekal_email class="form-control"  value="{{$pembekal->pembekal_email}}">
                 </div>
             </div>
    

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">No Telefon Bimbit</label>
               <div  class="mb-2 col-md-7">
                    <input type="number" name=pembekal_tel_no class="form-control" value="{{$pembekal->pembekal_tel_no}}">
                </div>
            </div>

        </fieldset>
    <br><br>

    <fieldset>
        <legend>Maklumat Cukai Barang dan Perkhidmatan</legend>

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">No Cukai Barang & Perkhidmatan</label>
               <div  class="mb-2 col-md-7">
                    <input type=text name=pembekal_cbp_no class="form-control" value="{{$pembekal->pembekal_cbp_no}}">
                </div>
            </div>
        

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">Tarikh Sah Laku</label>
                <div  class="mb-2 col-md-7">
                    <input type=date name=pembekal_cbp_effective_date class="form-control" value="{{$pembekal->pembekal_cbp_effective_date}}">
                </div>
            </div>
            

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">Tarikh Kelulusan</label>
                <div  class="mb-2 col-md-7">
                    <input type=date name=pembekal_cbp_approval_date class="form-control" value="{{$pembekal->pembekal_cbp_approval_date}}">
                </div>
            </div>
       

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">Tarikh Tamat Tempoh</label>
                <div  class="mb-2 col-md-7">
                    <input type=date name=pembekal_cbp_end_date class="form-control" value="{{$pembekal->pembekal_cbp_end_date}}">
                </div>
            </div>


            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">Lampiran Dokumen</label>
                <div  class="mb-2 col-md-7">
                 <a href="/storage/{{$pembekal->pembekal_cbp_approval_doc}}" target="_blank" download>Muat Turun Fail</a>
                </div>

            </div>
        
    </fieldset>
    <br><br>

    <fieldset>
        <legend>Maklumat Bank </legend>

        
            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">Nama Bank</label>
                <div  class="mb-2 col-md-7">
                    <select name="pembekal_bank" class="form-select">
                        <option @if($pembekal->pembekal_bank=='ABNAMYK')selected @endif value='ABNAMYK'> THE ROYAL BANK OF SCOTLAND</option>
                        <option @if($pembekal->pembekal_bank=='AFBQMYKL')selected @endif value='AFBQMYKL'>ASIAN FINANCE BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='AGOBMYKL')selected @endif value='AGOBMYKL'>AGRO BANK</option>
                        <option @if($pembekal->pembekal_bank=='AIBBMYKL')selected @endif value='AIBBMYKL'>AFFIN ISLAMIC BANK BERHAD</<option>
                        <option @if($pembekal->pembekal_bank=='AISLMYKL')selected @endif value='AISLMYKL'>AMISLAMIC BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='AMMB9999')selected @endif value='AMMB9999'>AM INVESTMENT BANK BERHAD SPI</option>
                        <option @if($pembekal->pembekal_bank=='AMMBMYKL')selected @endif value='AMMBMYKL'>AM INVESTMENT BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='ARBKMYKL')selected @endif value='ARBKMYKL'>AM BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='AVSSMYK1')selected @endif value='AVSSMYK1'>AVENUE SECURITIES SDN BHD</option>
                        <option @if($pembekal->pembekal_bank=='BIMBMYKL')selected @endif value='BIMBMYKL'>BANK ISLAM MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='BKCHMYKL')selected @endif value='BKCHMYKL'>BANK OF CHINA MALAYSIA BHD</option>
                        <option @if($pembekal->pembekal_bank=='BKKBMYKL')selected @endif value='BKKBMYKL'>BANGKOK BANK</option>
                        <option @if($pembekal->pembekal_bank=='BKRMMYKL')selected @endif value='BKRMMYKL'>BANK KARJASAMA RAKYAT MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='BMMBMYKL')selected @endif value='BMMBMYKL'>BANK MUAMALAT MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='BNMAMYKL')selected @endif value='BNMAMYKL'>BANK NEGARA MALAYSIA</option>
                        <option @if($pembekal->pembekal_bank=='BOFAMY2X')selected @endif value='BOFAMY2X'>BANK OF AMERICA MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='BOTKMYKX')selected @endif value='BOTKMYKX'>BANK OF TOKYO-MITSUBISHI (M) BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='BSNA9999')selected @endif value='BSNA9999'>BANK SIMPANAN NASIONAL SPI</option>
                        <option @if($pembekal->pembekal_bank=='BSNAMYK1')selected @endif value='BSNAMYK1'>BANK SIMPANAN NASIONAL</option>
                        <option @if($pembekal->pembekal_bank=='CAGA9999')selected @endif value='CAGA9999'>CAGAMAS BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='CAGAMYK1')selected @endif value='CAGAMYK1'>CAGAMAS BHD</option>
                        <option @if($pembekal->pembekal_bank=='CHASMYKX')selected @endif value='CHASMYKX'>JP MORGAN CHASE BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='CIBBMYKL')selected @endif value='CIBBMYKL'>CIMB BANK BERHAD</<option>
                        <option @if($pembekal->pembekal_bank=='CITI9999')selected @endif value='CITI9999'>CITIBANK SPI</option>
                        <option @if($pembekal->pembekal_bank=='CITIMYKL')selected @endif value='CITIMYKL'>CITIBANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='COIM9999')selected @endif value='COIM9999'>CIMB INVESTMENT BANK BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='COIMMYK1')selected @endif value='COIMMYK1'>CIMB INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='CTBBMYKL')selected @endif value='CTBBMYKL'>CIMB ISLAMIC BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='DEUTMYKL')selected @endif value='DEUTMYKL'>DEUTSCHE BANK (MALAYSIA) BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='EIBBMYKL')selected @endif value='EIBBMYKL'>EONCAP ISLAMIC BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='EOBBMYKL')selected @endif value='EOBBMYKL'>EON BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='HBMB9999')selected @endif value='HBMB9999'>HONGKONG BANK MALAYSIA BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='HBMBMYKL')selected @endif value='HBMBMYKL'>HONGKONG BANK MALAYSIA BHD</option>
                        <option @if($pembekal->pembekal_bank=='HDSBMY2P')selected @endif value='HDSBMY2P'>HWANG-DBS SECURITIES BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='HLBBMYKL')selected @endif value='HLBBMYKL'>HONG LEONG BANK</option>
                        <option @if($pembekal->pembekal_bank=='KAFD9999')selected @endif value='KAFD9999'>KAF INVESTMENT BANK BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='KAFDMYK1')selected @endif value='KAFDMYK1'>KAF INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='KFHOMYKL')selected @endif value='KFHOMYKL'>KUWAIT FINANCE HOUSE MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='KKENMYK1')selected @endif value='KKENMYK1'>KENANGA INVESTMENT BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='KWAPMYK1')selected @endif value='KWAPMYK1'>Bank Negara Malaysia</option>
                        <option @if($pembekal->pembekal_bank=='KWSPMYK1')selected @endif value='KWSPMYK1'>KUMPULAN WANG SIMPANAN PEKERJA</option>
                        <option @if($pembekal->pembekal_bank=='MBAM9999')selected @endif value='MBAM9999'>ALLIANCE INVESTMENT BANK BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='MBAMMYK1')selected @endif value='MBAMMYK1'>ALLIANCE INVESTMENT BANK BHD< /option>
                        <option @if($pembekal->pembekal_bank=='MBBE9999')selected @endif value='MBBE9999'>MALAYAN BANKING BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='MBBEMYKL')selected @endif value='MBBEMYKL'>MALAYAN BANKING BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='MBEA9999')selected @endif value='MBEA9999'>ASEAMBANKERS SPI</option>
                        <option @if($pembekal->pembekal_bank=='MBEAMYK1')selected @endif value='MBEAMYK1'>ASEAMBANKERS MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='MFBB9999')selected @endif value='MFBB9999'>ALLIANCE BANK MALAYSIA BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='MFBBMYKL')selected @endif value='MFBBMYKL'>ALLIANCE BANK MALAYSIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='MIMBMYKL')selected @endif value='MIMBMYKL'>MIMB INVESTMENT BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='NOSCMYKL')selected @endif value='NOSCMYKL'>THE BANK OF NOVA SCOTIA BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='OCBC9999')selected @endif value='OCBC9999'>OCBC BANK MALAYSIA BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='OCBCMYKL')selected @endif value='OCBCMYKL'>OCBC BANK MALAYSIA BHD</option>
                        <option @if($pembekal->pembekal_bank=='OSSBMYK1')selected @endif value='OSSBMYK1'>OSK SECURITIES BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='PAMBMYK1')selected @endif value='PAMBMYK1'>AFFIN INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='PBBE9999')selected @endif value='PBBE9999'>PUBLIC BANK BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='PBBEMYKL')selected @endif value='PBBEMYKL'>PUBLIC BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='PERDMYK1')selected @endif value='PERDMYK1'>SOUTHERN INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='PHBMMYKL')selected @endif value='PHBMMYKL'>AFFIN BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='RHBAMYKL')selected @endif value='RHBAMYKL'>RHB ISLAMIC BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='RHBBMYKL')selected @endif value='RHBBMYKL'>RHB BANK BERHAD</option>
                        <option @if($pembekal->pembekal_bank=='RHBMMYK1')selected @endif value='RHBMMYK1'>RHB INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='RJHIMYKL')selected @endif value='RJHIMYKL'>AL-RAJHI BANKING & INVESTMENT</option>
                        <option @if($pembekal->pembekal_bank=='SCBL9999')selected @endif value='SCBL9999'>STANDARD CHARTERED BANK BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='SCBLMYKX')selected @endif value='SCBLMYKX'>STANDARD CHARTERED BANK MALAYSIA BHD</option>
                        <option @if($pembekal->pembekal_bank=='SMBBMYK1')selected @endif value='SMBBMYK1'>PUBLIC INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='UMBB9999')selected @endif  value='UMBB9999'>MIDF AMANAH INVESTMENT BANK BHD SPI</option>
                        <option @if($pembekal->pembekal_bank=='UMBBMYK1')selected @endif value='UMBBMYK1'>MIDF AMANAH INVESTMENT BANK BHD</option>
                        <option @if($pembekal->pembekal_bank=='UOVBMYKL')selected @endif value='UOVBMYKL'>UNITED OVERSEAS BANK MALAYSIA BEHAD</option>
                    </select>
                </div>
            </div>
       

            <div class="mb-3 row">
               <label class= "col-form-label col-sm-3 ">No Akaun</label>
            <div  class="mb-2 col-md-7">
                <input type=number name=pembekal_akaun_no class="form-control" value="{{$pembekal->pembekal_akaun_no}}">
            </div>
        </div>
    
    </fieldset>

    <br><br>
    <div style=float-right>
        <button class="btn btn-primary" type="submit" name="status_pembekal" value="Ditolak"> Ditolak</button> 
        <button  class="btn btn-success" type="submit" name="status_pembekal" value="Diluluskan">Diluluskan</button> 
       </div>
    </form>

@stop