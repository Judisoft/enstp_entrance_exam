<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <title>ENSTP Entrance Exams Registration</title>
    <style>
        p{
            font-size: 10px;
            font-weight: 700 !important;
            padding: 0 !important;
            text-align: center;
        }
        .dotted{
            text-align: center;
            padding: 0 !important;
            border-bottom: 1px dotted #ddd;
        }
        .logo-reg{
            margin-top: 0 !important;
            padding-top: 0 !important;
        }
        .table-header{
            table-layout: fixed;
            width: 100%;
            margin: auto;
        }
        thead{
            width:100%;
            text-align: center !important;
        }
        .table-body{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="body_wrapper frm-vh-md-100">
        <div class="formify_body" data-bg-color="#F3F7F9">
            <div class="f_content">
                <div class="col-lg-6 formify_box_three formify_box_four formify_login pt-3" id="print">
                    <div class="container custom_height">
                        <table class="table-header table-borderless">
                            <thead>
                                <tr>
                                    <td>
                                        <p>MINISTERE DES TRAVAUX PUBLICS</p><p class="dotted"></p>
                                        <p>SECRETARIAT GENERAL</p><p class="dotted"></p>
                                        <p>ECOLE NATIONAL SUPERIEUR DES TRAVAUX PUBLICS</p><p class="dotted"></p>
                                        <p>BP 510 Yaounde-Cameroun</p><p class="dotted"></p>
                                        <p>Tel: (237) 222 23 09 44 <br>Fax: (237) 222 22 18 16 <br> www.enstp.cm</p>
                                        <p class="dotted"></p>
                                    </td>
                                    <td>
                                        <img src="{{ asset('img/logo.png') }}" alt="">
                                    </td>
                                    <td>
                                        <p>MINISTRY OF PUBLIC WORKS</p><p class="dotted"></p>
                                        <p>GENERAL SECRETARIATE</p><p class="dotted"></p>
                                        <p>NATIONAL ADVANCED SCHOOL OF PUBLIC WORKS</p><p class="dotted"></p>
                                        <p>BP 510 Yaounde-Cameroon</p><p class="dotted"></p>
                                        <p>Tel: (237) 222 23 09 44 <br>Fax: (237) 222 22 18 16 <br> www.enstp.cm</p>
                                        <p class="dotted"></p>
                                    </td>
                                </tr>
                            </thead>
                        </table>
                        <table class="table table-bordered border-dark">
                            <colgroup>
                                <col style="width:30%">
                                <col style="width:40%">
                                <col style="width:30%">
                            </colgroup>  
                            <tr class="text-center">
                                <td class="border border-dark">Centre de depot / <em>submission centre</em></td>
                                <th class="border border-dark p-3" style="line-height: 2;">FICHE DE CANDIDATURE ENSTP YAOUNDE<br> <em>APPLICATION FORM NASPW YAOUNDE</em></th>
                                <td class="border border-dark" style="height:150px;"><p>PHOTO</p></td>
                            </tr>
                        </table>
                        <table class="table table-body table-borderless">
                            <colgroup>
                                <col style="width:60%">
                                <col style="width:30%">
                                <col style="width:20%">
                              </colgroup>  
                            <tbody>
                                <tr class="border border-dark">
                                    <td scope="row" class="border-right border-dark">Numero d'enregistrement / <em>Registration number: </em><strong> {{ $application->id }}</strong> </td>
                                    <td class="border-right border-dark"><p>Timbre fiscal<br> <em>Fiscal stamp</em></p></td>
                                    <td class="border-dark text-centre"><p>Annee academique<br><em>Academic year: 2022/2023</em></p></td>
                                </tr>
                                <tr><td></td></tr>
                                <tr class="border border-dark">
                                    <th scope="row mt-3" class="text-uppercase text-right">Cycle: {{ $application->program_choice }}</th>
                                    <td> </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>I - CANDIDATE'S INFORMATION</strong></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="mt-3">Nom et Prenoms du candidat: <span class="text-uppercase"></span></td>
                                    <th colspan="2" class="text-uppercase">{{ $application->user->first_name.' '.$application->user->last_name }}</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="mt-3">Telephone: <span class="text-uppercase"></span></td>
                                    <th colspan="2" class="text-uppercase">{{ $application->user->telephone }}</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="mt-3">Region d'origine / <em>Region of origin</em> <span class="text-uppercase"></span></td>
                                    <th colspan="2" class="text-uppercase">{{ $application->user->region_of_origin }}</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="mt-3">Centre d'examen <br> <em>Examination center</em> <span class="text-uppercase"></span></td>
                                    <th colspan="2" class="text-uppercase">{{ $application->writing_center }}</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="mt-3">NB: Les candidats composeront exclusivement dans le centre d'examen choisi
                                        <em>The candidate will write the exams exclusively at the center chosen</em>
                                    </td>
                                    <th></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>II - PARTIE RESERVEE A L'ADMINISTRATION / <em> FOR OFFICIAL USE ONLY</em></th>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-bordered table-sm">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">Observations</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>copie l'acte de naissance certifie / <em>certified true copy of birth certificate</em></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>copie du diplome certifie / <em>A certified true copy of certificate</em></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Extrait du casier judiciare bulletin no. 3 / <em>A certificate of non-conviction (B3)</em></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <td>certificat medical / <em>a medical certificate of fitness</em></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <td>Recu de versement des frais du concour / <em>A receipt showing the amount as examination fee</em></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <td>Lettre de parainage / <em>A letter of sponsorship</em></td>
                                <td></td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <td>Autorisation de concourir(pour les fonctionnaires) / <em>An autorisation for examination (for state agents only)</em></td>
                                <td></td>
                              </tr>
                            </tbody>
                        </table>
                        <h6 class="text-right p-5">A/<em>At</em>........................................ le/<em>the ..............................2022</em></h6>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center bg-light">
                    <div class="p-3 text-center"><a href="#" class="btn btn-block btn-primary rounded-0" onclick="printAppForm(); return false;"><span class="iconify" data-icon="ion:print-outline" style="color: white;"></span> Print</a></div>
                    <div class="p-3 text-center"><a href="{{ route('view-application', auth()->user()->id) }}" class="btn btn-block btn-primary rounded-0" ><span class="iconify" data-icon="akar-icons:arrow-back" style="color: white;"></span> Back</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        let content = document.getElementById('print').innerHTML

        function printAppForm() {

            let doc = window.open('', '_parent', 'height=500, width=560')
            doc.document.write('<html>')
            doc.document.write('<body>')
            doc.document.write('<br>')
            doc.document.write(content)
            doc.document.write('<br>')
            doc.document.write('</body></html>')
            doc.document.close()
            doc.print()
        }
    </script>
</body>

</html>