<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Brgy Clearance</title>
</head>
<style>
    body {
        font-family: "Times New Roman";
        margin: 0px;
    }

    body.long-size {
        width: 8.5in;
        height: 11in;
        /*border: solid 1px black;*/
        page-break-after: always;
    }

    .text {
        font-size: 8px;
    }

    .header {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    /* td {
        border: solid black 1px;
        border-collapse: collapse;
    } */

    

    #logo1 {
        position: absolute;
        top: 5px;
        left: 100px;

    }

    #logo2 {
        position: absolute;
        top: 5px;
        left: 635px;
    }

    #logo-bg {
        position: absolute;
        opacity: 7%;
    }

    .border {
        border: solid black 1px;
        border-collapse: collapse;
    }

    .content {
        width: 100%;
        float: left;
        /*display: block;*/
        font-size: x-large;
    }

    .title {
        font-weight: bold;
        font-size: 14pt;
    }

    .data {
        font-size: 12pt;
    }

    .title-indent {
        text-indent: 30px;
    }

    .data-indent {
        text-indent: 30px;
    }

    ul.d {
        list-style-type: lower-alpha;
    }

    .font-normal {
        font-size: 12pt;
    }

    .font-11 {
        font-size: 11pt;
    }

    .bold {
        font-weight: bold;
    }

    .bolder {
        font-weight: bolder;
    }

    .underline {
        text-decoration: underline;
    }

    .text-justify {
        text-align: justify;
    }

    .text-center {
        text-align: center;
    }

    .bg-gray {
        background-color: lightblue;

    }

    .border-bottom {
        border-bottom: solid 2px black;
    }

    .border-top {
        border-top: solid 2px black;
    }

    .qr {
        /*border: 1px solid black;*/
        background-repeat: no-repeat;
        display: inline-flex;
        left: 688px;
        top: 545px;
        position: absolute;

    }

    .margin-top-2 {
        margin-top: 10px;
    }

    .picture {
        left: 688px;
        top: 119px;
        width: 1in;
        height: 1in;
        border: solid 1px black;
        position: absolute;
    }

    

    nav {
        float: left;
        width: 30%;
        /* only for demonstration, should be removed */
        background: #ccc;
        padding: 5px;
        text-align: center;
        border: solid 1px black;
    }


    /* Style the list inside the menu */
    nav ul {
        list-style-type: none;
        padding: 0;
    }

    article {
        float: left;
        padding: 10px;
        width: 66%;
        /* background-color: #f1f1f1; */
        /* only for demonstration, should be removed */
    }
</style>

<body class="long-size">

    <div id="logo-bg">
        <img style="width: 8.5in" src="{{asset('storage/logo/'.$clearance->barangay->logo)}}">
    </div>

    <div id="logo1">
        <img style="width: 1in" src="{{asset('storage/lgumf-logo.png')}}">
    </div>

    <div id="logo2">
        <img style="width: 1in" src="{{asset('storage/logo/'.$clearance->barangay->logo)}}">
    </div>
    <div class="header">
        <table>
            <tr>
                <td style="font-size: 11pt; font-weight: semibold">REPUBLIC OF THE PHILIPPINES</td>
            </tr>
            <tr>
                <td style="font-size: 11pt; font-weight: semibold">PROVINCE OF BUKIDNON</td>
            </tr>
            <tr>
                <td style="font-size: 14pt; font-weight: bold">Municipality of Manolo Fortich</td>
            </tr>

        </table>
        <table>
            <tr>
                <td style="font-size: 12pt; font-weight: bold; padding-top: 10px">BARANGAY <span style="text-transform: uppercase;">{{$clearance->barangay->name}}</span></td>
            </tr>
        </table>
        <br>

        <table>
            <tr class="border-top">
                <td style="font-size: 14pt; font-weight: bold">OFFICE OF THE PUNONG BARANGAY</td>
            </tr>
        </table>
    </div>

    <br>



    <div class="content">
        <nav>
            <table>
                <tr>
                    <td class="font-11"><b>{{$clearance->barangay->pbname}}</b></td>
                </tr>
                <tr>
                    <td class="font-11">Punong Barangay</td>
                </tr>
            </table>

            <div style="padding-top: 10px;">
                <table>
                    <tr>
                        <td class="font-11"><b>Barangay Kagawads:</b></td>
                    </tr>
                </table>
            </div>

            @foreach($barangaymembers as $barangaymember)
            <div style="padding-top: 10px;">
                <table>
                    <tr>
                        <td class="font-11"><b>{{$barangaymember->name}}</b></td>
                    </tr>
                    <tr>
                        <td class="font-11">{{$barangaymember->position}}</td>
                    </tr>
                    <tr>
                        <td class="font-11">{{$barangaymember->designation}}</td>
                    </tr>
                </table>
            </div>
            @endforeach
        </nav>

        <br>
        <article>
            <div class="picture">
                <img style="width: 1in" src="{{asset('storage/photo/'.$clearance->photo)}}">
            </div>
            <table style="text-align: center">
                <tr>
                    <td style="font-size: 16pt; font-weight: bold">BARANGAY CLEARANCE</td>
                </tr>
            </table>
            <div style="padding-top: 10px">
                <table>
                    <tr>
                        <td style="font-size: 12pt; text-indent: 50px; text-align: justify">This is to Certify that <b>{{$clearance->person->fullname()}}</b> whose picture appears with Official Receipt No: {{$clearance->or}}, issued on {{$clearance->or_date}} at {{$clearance->barangay->name}}, Manolo Fortich, Bukidnon.</td>
                    </tr>
                </table>
            </div>
            <div style="padding-top: 10px">
                <table>
                    <tr>
                        <td style="font-size: 12pt">Address: <b>{{$clearance->person->address}}</b></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 10px">Civil Status: <b>{{$clearance->person->civilstatus}}</b></td>
                        <td style="font-size: 12pt; padding-top: 10px">Gender: <b>{{$clearance->person->gender}}</b></td>
                        <td style="font-size: 12pt; padding-top: 10px">Citizenship: <b>{{$clearance->person->citizenship}}</b></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 10px">Date of Birth: <b>{{$clearance->person->dateofbirth}}</b></td>
                        <td style="font-size: 12pt; padding-top: 10px">Place of Birth: <b>{{$clearance->person->placeofbirth}}</b></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 10px">Pupose: <b>{{$clearance->purpose}}</b></td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 10px">
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 10px">CTC No.: <b>{{$clearance->ctc_no}}</b></td>
                        <td style="font-size: 12pt; padding-top: 10px">CTC Issued: <b>{{$clearance->person->placeofbirth}}</b></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 10px">Pupose: <b>{{$clearance->purpose}}</b></td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 10px; text-align:center">
                <table>
                    <tr>
                        <td style="font-size: 14pt; padding-top: 10px">DATE ISSUED.: <b>{{$clearance->or_date}}</b></td>
                    </tr>
                    <tr>
                        <td style="font-size: 12pt"><b>This Clearance is valid for six (6) months from the date issued.</b></td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 50px">
                <table>
                    <tr>
                        <td style="font-size: 12pt; border-top:solid 2px black" width="250px">Signature of Interested Person</td>
                        <td style="font-size: 12pt; padding-top: 10px"></td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 20px">
                <table>
                    <tr>
                        <td style="font-size: 12pt" width="250px">Verified by :</b></td>
                        <td style="font-size: 12pt; padding-top: 10px"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 20px" width="250px"><b>{{$clearance->barangay->verified_name}}</b></td>
                        <td style="font-size: 12pt; padding-top: 10px"></td>
                    </tr>
                    <tr>
                        <td style="font-size: 12pt;" width="250px">{{$clearance->barangay->verified_position}}</td>
                        <td style="font-size: 12pt; padding-top: 10px"></td>
                    </tr>
                </table>
            </div>

            <div class="qr">
                <!-- <img style="width: 1in" src="{{asset('storage/photo/'.$clearance->photo)}}"> -->
                {!! QrCode::size(100)->generate('-Name: '.$clearance->person->fullname().' -Barangay: '.$clearance->barangay->name.' -Purpose: '.$clearance->purpose) !!}
            </div>

            <div style="padding-top: 20px">
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 20px" width="250px"></td>
                        <td style="font-size: 12pt; padding-top: 10px"><b>{{$clearance->barangay->pbname}}</b></td>
                    </tr>
                    <tr>
                        <td style="font-size: 12pt;" width="250px"></td>
                        <td style="font-size: 12pt">Punong Barangay</td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 20px">
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 20px" width="100px"></td>
                        <td style="font-size: 12pt; padding-top: 10px" width="600px"><b>In the absence of the Punong Barangay</b></td>
                    </tr>
                    <tr>
                        <td style="font-size: 12pt;" width="250px"></td>
                        <td style="font-size: 12pt; padding-top:20px">By:</td>
                    </tr>
                </table>
            </div>

            <div>
                <table>
                    <tr>
                        <td style="font-size: 12pt; padding-top: 20px" width="250px"></td>
                        <td style="font-size: 12pt; padding-top: 10px"><b>Kagawad on duty</b></td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 50px">
                <table>
                    <tr>
                        <td style="font-size: 11pt; color: red; text-align:center" width="250px"><b>Not Valid without dry seal</b></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="font-size: 11pt; background-color:coral" width="250px">Note: This Clearance is not valid for renewal / application of Business Permit</td>
                    </tr>
                    <tr>
                        <td style="font-size: 11pt">Any marks, erasure / altercation shall invalidates this clearance.</td>
                    </tr>
                </table>
            </div>

            <div style="padding-top: 30px">
                <table>
                    <tr>
                        <td style="font-size: 14pt; background-color:mediumpurple; text-align:center" width="250px"><b>REMARKS: NO DEROGATORY RECORDS</b></td>
                    </tr>
                </table>
            </div>
        </article>

    </div>


    <script>
        function printwindow() {
            window.print();
        }
    </script>
</body>

</html>