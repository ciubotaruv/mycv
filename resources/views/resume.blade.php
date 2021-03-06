<!--- Sarcina de test pentru Orange System "JUMP" Intership
CV : Ciubotaru Viorel Jr.
--->
<!DOCTYPE html>
<html>
<head>
    <title> CV - Ciubotaru Viorel </title>

    <style>

        body {
            background-color: #525659;
        }


        .main {
            width: 750px;
            height: 1100px;
            margin: 0 auto;
            margin-top: 60px;

            background-color: white;

            border: 1px solid black;
            padding-top: 45px;
            padding-left: 65px;
            padding-right: 45px;
            padding-bottom: 50px;
            boredr

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .main2 {
            width: 750px;
            height: 1100px;
            margin: 0 auto;
            margin-top: 60px;

            background-color: white;

            border: 1px solid black;
            padding-top: 45px;
            padding-left: 65px;
            padding-right: 45px;
            padding-bottom: 50px;

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .head h5, img {

            font-family: 'Open Sans', sans-serif !important;
            color: #94d6ff;

        }

        .head {
            width: 750px;
            height: 50px;
            display: inline-block;
            padding-bottom: 25px;
            float: left;

        }

        .footer {
            width: 750px;
            height: 50px;
            display: inline-block;
        }

        .logo {
            display: inline-block;
            padding-right: 10px;

        }

        .text-head {
            display: inline-block;
            color: #4697d8;
            font-family: Courier New;


        }

        .text-head-name {
            display: inline-block;
            color: #4697d8;
            font-family: Courier New;
            padding-bottom: 20px;
            float: right;
        }

        .data-footer, .text-footer, .pag-footer {
            display: inline-block;
            color: #4697d8;

        }

        .data-footer {

        }

        .text-footer {
            padding-right: 110px;
            padding-left: 110px;
        }

        .content {

            width: 750px;
            height: 700px;
            display: inline-block;


        }

        .caption {
            display: inline-block;
            width: 184px;
            height: 50px;
            text-align: right;
            font-family: 'Open Sans', sans-serif !important;
            line-height: 1.4;

            font-size: 15px;
            color: #4697d8;
            padding-right: 15px;
        }

        .caption2 {

            display: inline-block;
            width: 200px;

            font-family: 'Open Sans', sans-serif !important;

            font-size: 20px;


        }

        .block {
            width: 178px;
            height: 100px;
            text-align: right;
            font-size: 15px;
            color: #4697d8;
            padding-right: 15px;
            display: inline-block;
        }

        .block img {
            width: 110px;
            height: 143px;
        }

        .area1 {

        }

        .area2 {
            display: inline-block;
            margin-bottom: 60px;
        }

        .suq {

            width: 525px;
            height: 20px;
            border-bottom: 1px #4697d8 solid;

        }

        .square {
            display: inline-block;
            width: 10px;
            height: 10px;
            background: #4697d8;
            border-bottom: 1px #4697d8 solid;
        }

        .subcaption {
            display: inline-block;
            width: 545px;
            color: #4697d8;
        }

        .subcaption p {
            font-size: 13px;
            color: black;
            margin-bottom: 0px;
            margin-top: 0px;
            padding-bottom: 10px;
        }

        .captionx {
            display: inline-block;
            width: 184px;

            text-align: right;
            font-size: 15px;
            color: #4697d8;
            padding-right: 15px;

        }

        .box {
            padding-bottom: 10px;
        }
    </style>

</head>
<body>
<div class="main">
    <!-- start head info -->
    <div class="head">

        <div class="logo"><img src="{{ asset('images/logo.png') }}"></div>

        <div class="text-head "><h5 style="float:  left;"> Curriculum vitae</h5></div>

    </div>
    <!-- end head info -->


    <!-- start content info -->
    <div class="content">


        <div class="personal">
            <div>
                <div class="caption"><h5> INFORMA??II PERSONALE </h5></div>

                <div class="caption2"> Ciubotaru Viorel Jr.</div>

            </div>

            <div class="block"><img src="{{asset('images/foto.jpg')}}"></div>
            <div class="area2">
                <table class="peronaltable">
                    <tr>
                        <td><img src="{{asset('images/icon_adr.png')}}"></td>
                        <td>Str.Studen??ilor 7/1, Chi??in??u (Republica Moldova)</td>
                    </tr>
                    <tr>
                        <td><img src="{{asset('images/icon-tel.png')}}"></td>
                        <td>+ 373 60 473 611</td>
                    </tr>

                    <tr>
                        <td><img src="{{asset('images/icon-email.png')}}"></td>
                        <td> ciubotaru.viorell@gmail.com</td>
                    </tr>

                </table>


            </div>
        </div>

        <!--- Personal info -->

        <div>
            <div class="caption"><h5> POZI??IA</h5></div>

            <div class="caption2"> Front-end</div>

        </div>

        <div class="caption"><h5> EXPERIEN??A PROFESIONAL??</h5></div>

        <div class="caption2 suq"></div>
        <div class="square">
        </div>

        <!--- Position info -->

        <div class="box">
            <div class="captionx">
                01/03/2017???01/08/2017

            </div>

            <div class="subcaption">
                <b>Intership Technical Support Agent at ThemeFuse</b>
                <p> Tfuse Consulting SRL </p>
                <p>- Ajutarea clien??ii vorbitori de limba englez??, pentru rezolvarea anumitor probleme tehnice legate de
                    wordpress.</p>
                <p>- Simularea ??i testarea codului. </p>
                <p>- Optimizarea codului ??i testarea intregului concept.</p>

            </div>

        </div>

        <!--- box info -->
        <div class="box">
            <div class="captionx">
                01/06/2017???Prezent

            </div>

            <div class="subcaption">
                <b>Mentor Coder Dojo</b>
                <p>- Predarea copiilor s?? dezvolte site-uri web, aplica??ii ?? jocuri.
                </p>
                <p>
                    - Dezvoltare abilit????ilor de lucru ??n echip??, g??ndire critic?? ??i comunicare.</p>


            </div>
        </div>
        <!--- end box info -->

        <!--- education box info -->
        <div class="caption"><h5> EDUCA??IE ??I FORMARE</h5></div>

        <div class="caption2 suq"></div>
        <div class="square"></div>
        <!--- end education box info -->
        <div class="box">
            <div class="captionx">
                2017???Prezent

            </div>

            <div class="subcaption">
                <b> Diplom?? de licen????</b>
                <p> Universitatea Tehnic?? a Moldovei, Chi??in??u</p>
                <p>Facultatea Calculatoare Informatica Microelectronic??</p>
                <p>Tehnologia Informa??iei </p>


            </div>
        </div>

        <div class="box">
            <div class="captionx">
                2016-2017

            </div>

            <div class="subcaption">
                <b>Certificat CCNA R&S</b>
                <p>Routing and Switching
                </p>
                <p>
                    Cisco Networking Academy?? course</p>


            </div>
        </div>
        <div class="box">
            <div class="captionx">
                2016-2017

            </div>

            <div class="subcaption">
                <b>Certificat IT Essentials</b>
                <p>PC Hardware and Software.
                </p>
                <p>
                    Cisco Networking Academy?? program.
                </p>


            </div>
        </div>
        <div class="box">
            <div class="captionx">
                2013-2017

            </div>

            <div class="subcaption">
                <b>Lucrare de Diplom??</b>
                <p>Colegiul Financiar-Bancar Chi??in??u (CFBC)

                </p>
                <p>
                    Informatica</p>


            </div>
        </div>
        <div class="box">
            <div class="captionx">
                2016 -2017

            </div>

            <div class="subcaption">
                <b>Academy + Moldova</b>
                <p>Academy + Moldova
                </p>


            </div>
        </div>


    </div>
    <!-- end content info -->

    <!-- start footer info -->
    <div class="footer">
        <div class="data-footer"> 24/5/18</div>

        <div class="text-footer"><h5> ?? Uniunea European??, 2002-2018 | http://europass.cedefop.europa.eu </h5></div>

        <div class="pag-footer"> Pagina 1 / 2</div>

    </div>
    <!-- end footer info -->


</div>


<!--- end first page -->
<!-- start second page  -->
<div class="main">
    <!-- start head info -->
    <div class="head">

        <div class="logo"><img src="logo2.png"></div>

        <div class="text-head"><h5> Curriculum vitae</h5></div>
        <div class="text-head-name"><h5> Ciubotaru Viorel Jr.</h5></div>

    </div>
    <!-- end head info -->


    <!-- start content info -->
    <div class="content">


        <div class="box">
            <div class="captionx">
                2013 -2017

            </div>

            <div class="subcaption">
                <b>Diplom?? Bacalaureat</b>
                <p>Colegiul Financiar-Bancar Chi??in??u (CFBC)
                </p>


            </div>
        </div>

        <div class="caption"><h5> COMPETEN??E PERSONALE</h5></div>

        <div class="caption2 suq"></div>
        <div class="square">
        </div>


        <div class="box">
            <div class="captionx">
                Limba(i) matern??(e)
            </div>

            <div class="subcaption">

                <p>rom??n??
                </p>


            </div>
        </div>

        <div class="box">
            <div class="captionx">
                Alte limbi str??ine cunoscute
            </div>

            <div class="subcaption">
                <table style="width:100%">
                    <tr>
                        <th colspan="2">??N??ELEGERE</th>
                        <th colspan="2">VORBIRE</th>
                        <th>VORBIRE</th>
                    </tr>
                    <tr>
                        <td>Ascultare</td>
                        <td>Citire</td>
                        <td>Participare la
                            conversa??ie
                        </td>
                        <td>Discurs oral</td>
                    </tr>


                    <tr>
                        <td class="noborder">C1</td>
                        <td>C1</td>
                        <td>B2</td>
                        <td>B2</td>
                        <td>C1</td>
                    </tr>
                    <tr>
                        <td>C2</td>
                        <td>C2</td>
                        <td>C2</td>
                        <td>C2</td>
                        <td>C1</td>
                    </tr>
                </table>


                Niveluri: A1 ??i A2: Utilizator elementar - B1 ??i B2: Utilizator independent - C1 ??i C2: Utilizator
                experimentat
                <p><u>Cadrul european comun de referin???? pentru limbi str??ine </u></p>

            </div>
        </div>


        <div class="box">
            <div class="captionx">
                Competen??e de comunicare
            </div>

            <div class="subcaption">

                <p>- excelente abilit????i de comunicare, dob??ndite prin activitatea de antrenor voluntar la Coder
                    Dojo.</p>

                <p>- spirit de echip?? dob??ndite prin activitatea experie??elor ??nc?? din colegiu, c??nd am participat la
                    diferite
                    activit????i precum Hackthon, StartUp Weekend Moldova, stagii de practic??. </p>

                <p>- Capacitate de adaptare sporita.</p>

                <p>- Seriozitate, capacitate de asimilare de noi informa??ii ??i abilita??i, disponibilitate pentru
                    implicare ??n
                    activit????i socioculturale,organizare ??i ini?? iativ??,autocontrol, creativitate ??i punctualitate.
                </p>


            </div>
        </div>

        <div class="box">
            <div class="captionx">
                Competen??e dob??ndite la locul de
                munc??
            </div>

            <div class="subcaption">


                <p>Lucru ??n echip??, familiarizarea cu instrumentele IDE, Git</p>

            </div>
        </div>

        <!-- table -->

        <div class="box">
            <div class="captionx">
                Competen??ele digitale
            </div>

            <div class="subcaption">


                <table>

                    <tr>


                        <th colspan="5">AUTOEVALUARE</th>
                    </tr>

                    <tr>

                        <td>Procesarea informatiei</td>
                        <td> Comunicare</td>
                        <td> Creare de
                            con??inut
                        </td>
                        <td> Securitate</td>
                        <td>Rezolvarea de
                            probleme
                        </td>
                    </tr>
                    <tr>
                        <td><p> Utilizator
                            experimentat</p>
                        </td>
                        <td><p> Utilizator
                            experimentat</p></td>
                        <td><p> Utilizator
                            experimentat</td>
                        <td><p>Utilizator elementar</p></td>
                        <td><p> Utilizator elementar</p></td>
                    </tr>
                </table>
                <p><u>Competen ele digitale - Gril?? de auto-evaluare </u></p>

            </div>
        </div>

        <!-- endtable -->


        <div class="box">
            <div class="captionx">
                Alte competen??e
            </div>

            <div class="subcaption">


                <p>- o bun?? st??p??nire a limbajelor:</p>
                <p>C, C++, MySql, HTML, CSS, Bootstrap, JavaScript, PHP5(POO/MVC), Codegniter, Wordpres.</p>
                <p>- o bun?? st??p??nire a programelor grafice: Corel Draw, Photoshop</p>

            </div>
        </div>

        <!--- more information -->
        <div class="caption"><h5> INFORMA??II SUPLIMENTARE</h5></div>

        <div class="caption2 suq"></div>
        <div class="square">
        </div>


        <div class="box">
            <div class="captionx">
                Cursuri
            </div>

            <div class="subcaption">

                <p>IT Essentials , CCNA Routing and Switching, Academy + Moldova
                </p>


            </div>
        </div>


    </div>
    <!-- end content info -->

    <!-- start footer info -->
    <div class="footer" style="
    padding-top: 140px;
">
        <div class="data-footer"> 24/5/18</div>

        <div class="text-footer"><h5> ?? Uniunea European??, 2002-2018 | http://europass.cedefop.europa.eu </h5></div>

        <div class="pag-footer"> Pagina 2 / 2</div>

    </div>
    <!-- end footer info -->


</div>


<!--- end first page -->
</body>
</html>
