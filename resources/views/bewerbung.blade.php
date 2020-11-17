@extends('layouts.app')
@section('content')
    <!-- Header start -->
    @include('includes.header')
    <!-- Header end -->
    <!-- Inner Page Title start -->
    @include('includes.inner_page_title', ['page_title'=>__('Initiative-Bewerbung')])
    <!-- Inner Page Title end -->

    <div class="colorat" style="color: #003A65;padding-bottom: 12px;">
        <section id="blog-content">
            <div class="container">

                <!-- Blog start -->
                <div class="row" style="padding-top: 20px;">
                    <div class="col-lg-12">

                        <section class="ce_accordionStart ce_accordion block">
                            {{--id="aff"  id="cash"--}}
                           <div class="toggler ui-accordion-header ui-corner-top ui-state-default ui-accordion-icons ui-accordion-header-active ui-state-active active">

                                <i class="material-icons" style="position:relative;top: 10px;">error_outline</i> Sie haben bereits ein Profil? <u>Hier
                                    einloggen.</u>
                               </div> <br><br>



                        </section>
                    </div>
                </div>

                       <div class="row">
                           <div class="col-lg-12">
                                <div class="accordion ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active"
                                 aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="display: none">
                                <div>

                                    <div class="half">
                                        <div class="ce_text block">
                                            <div class="content"><h2 style="color: #C60C30">1-Click Bewerbung</h2><br><br><br>
                                                <p>Sie haben bereits ein Profil bei HAPEKO?<br>Bitte melden Sie sich an,
                                                    um Ihr Bewerbungsformular automatisch auszufüllen.</p></div>
                                        </div>

                                    </div>
                                    <div class="half">
                                        <!-- indexer::stop -->
                                        <div class="mod_login two_column tableform login block">
                                            <div class="login-container">
                                                <div class="inner">

                                                    <div class="col-lg-9">
                                                        <div class="f-left" style="background-color: #003A65;color: white;font-size: 20px;padding:16px;margin-bottom:15px;font-weight: bold;width: 100%"><span style="margin-left: 14px;">Login</span></div>
                                                        <form class="form-horizontal" method="POST"
                                                              action="{{ route('login') }}" style="border: 1px solid black;padding: 20px;background-color: white;">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="candidate_or_employer"
                                                                   value="candidate"/>
                                                            <div class="formpanel">
                                                                <div class=" {{ $errors->has('email') ? ' has-error' : '' }}">
                                                                    <tr>
                                                                        <td> <label  style="margin-bottom: 10px;">E-Mail-Adresse</label></td>
                                                                         <td><input id="email" type="email" class="form-control form-control-sm" name="email" style="width: 300px" required></td>
                                                                    </tr>

                                                                </div><br>
                                                                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                    <tr>
                                                                        <td><label style="margin-bottom: 10px;">Passwort</label></td>
                                                                        <td> <input id="password" type="password" class="form-control form-control-sm" name="password"  style="width: 300px" required></td>

                                                                    </tr>

                                                                </div><br>
                                                                <input type="submit" class="form-control form-control-sm"  style="width: 300px" value="{{__('Anmelden')}}"><br>
                                                                <span style="position: relative;left:200px;"><a href="passwort-reset" title="Sie haben Ihr Passwort vergessen">Passwort vergessen?</a></span>
                                                            </div>
                                                            <!-- login form  end-->
                                                        </form>
                                                        <!-- sign up form -->

                                                        <!-- sign up form end-->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- indexer::continue -->

                                    </div>
                                </div>
                            </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
    <div class="container">
    <div class="row" style="color: #003A65;">



       <form action="{{ route('bewerbung.save') }}" method="post" enctype="multipart/form-data" class="validate">
           {{ csrf_field() }}
            <div class="formbody">

                <div class="widget widget-explanation explanation"  style="margin-left: 22px;">
                    <p class="h2">Initiativbewerbung</p></div>

                <div class="widget widget-explanation explanation widget-headline headline"  style="margin-left: 22px;">
                    <h6>Persönliche Informationen</h6></div>

                <div>

                            <legend  style="margin-left: 12px;">
                                Anrede<span class="mandatory">*</span>
                            </legend><br>

                            <div class="row" style="margin-left: 15px;">
                        <div class="col-lg-1"> <input type="radio" name="anrede" id="herr" class="form-check-input" value="Herr" checked="" required=""> <label for="herr" >Herr</label></div>

                           <div class="col-lg-1"> <input type="radio" name="anrede" id="frau" class="form-check-input" value="Frau" required=""> <label for="frau">Frau</label></div>

                            </div>


                </div><br>



             <div class="row">

                    <div class="col-lg-4">
                        <label for="ctrl_13">Titel</label>
                        <input type="text" name="titel"  class="form-control form-control-sm">
                    </div>
                    <div class="col-lg-4 form-group">
                        <label for="ctrl_15"> Vorname<span>*</span>
                        </label>
                        <input type="text" name="vorname" class="form-control form-control-sm"  required="" maxlength="50"><p class="error_message important idctrl_15"></p>
                    </div>

                    <div class="col-lg-4 form-group">
                        <label for="ctrl_14">
                              Nachname<span class="mandatory">*</span>
                        </label>
                        <input type="text" name="nachname" class="form-control form-control-sm" required="" maxlength="50"><p class="error_message important idctrl_14"></p>
                    </div>

            </div><br>


        <div class="row">

                <div class="col-lg-12">
                    <label for="ctrl_16"> Straße, Hausnummer<span class="mandatory">*</span>
                    </label>
                    <input type="text" name="strabe" class="form-control form-control-sm"  required="" maxlength="50">
                </div>

        </div><br>


                <div class="row">

                    <div class="col-lg-4">
                        <label for="ctrl_470" >
                            PLZ-Ländercode<span class="mandatory">*</span>
                        </label>
                        <select name="country"  class="form-control form-control-sm" required="">

                            <option value="de" selected="">Deutschland</option>

                            <option value="at">Österreich</option>

                            <option value="ch">Schweiz</option>

                            <option value="ot">Andere</option>

                        </select>
                    </div>


                    <div class="col-lg-4">
                        <label for="ctrl_17" >
                             PLZ<span class="mandatory">*</span>
                        </label>
                        <input type="text" name="plz" id="ctrl_17" class="form-control form-control-sm" value="" required="" maxlength="10">
                    </div>

                    <div class="col-lg-4">
                        <label for="ctrl_66" >
                             Ort<span class="mandatory">*</span>
                        </label>
                        <input type="text" name="ort" id="ctrl_66"  class="form-control form-control-sm" value="" required="">
                    </div>


                </div><br>



          <div class="row">


                <div class="col-lg-4">

                    <label for="ctrl_66" class="form_city mandatory">
                        Geburtsdatum<span class="mandatory">*</span>
                    </label>
                    <select name="birth_d"  class="form-control form-control-sm" required="">

                        <option value="" selected="">Tag</option>

                        <option value="01">01</option>

                        <option value="02">02</option>

                        <option value="03">03</option>

                        <option value="04">04</option>

                        <option value="05">05</option>

                        <option value="06">06</option>

                        <option value="07">07</option>

                        <option value="08">08</option>

                        <option value="09">09</option>

                        <option value="10">10</option>

                        <option value="11">11</option>

                        <option value="12">12</option>

                        <option value="13">13</option>

                        <option value="14">14</option>

                        <option value="15">15</option>

                        <option value="16">16</option>

                        <option value="17">17</option>

                        <option value="18">18</option>

                        <option value="19">19</option>

                        <option value="20">20</option>

                        <option value="21">21</option>

                        <option value="22">22</option>

                        <option value="23">23</option>

                        <option value="24">24</option>

                        <option value="25">25</option>

                        <option value="26">26</option>

                        <option value="27">27</option>

                        <option value="28">28</option>

                        <option value="29">29</option>

                        <option value="30">30</option>

                        <option value="31">31</option>
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="ctrl_66" class="form_city mandatory">

                    </label><br>
                    <select name="birth_m" id="ctrl_388" class="form-control form-control-sm" required="">

                        <option value="">Monat</option>

                        <option value="01">01</option>

                        <option value="02">02</option>

                        <option value="03">03</option>

                        <option value="04">04</option>

                        <option value="05">05</option>

                        <option value="06">06</option>

                        <option value="07">07</option>

                        <option value="08">08</option>

                        <option value="09">09</option>

                        <option value="10">10</option>

                        <option value="11">11</option>

                        <option value="12">12</option>

                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="ctrl_66" class="form_city mandatory">

                    </label><br>
                    <select name="birth_y"   class="form-control form-control-sm" required="">

                        <option value="">Jahr</option>

                        <option value="2004">2004</option>

                        <option value="2003">2003</option>

                        <option value="2002">2002</option>

                        <option value="2001">2001</option>

                        <option value="2000">2000</option>

                        <option value="1999">1999</option>

                        <option value="1998">1998</option>

                        <option value="1997">1997</option>

                        <option value="1996">1996</option>

                        <option value="1995">1995</option>

                        <option value="1994">1994</option>

                        <option value="1993">1993</option>

                        <option value="1992">1992</option>

                        <option value="1991">1991</option>

                        <option value="1990">1990</option>

                        <option value="1989">1989</option>

                        <option value="1988">1988</option>

                        <option value="1987">1987</option>

                        <option value="1986">1986</option>

                        <option value="1985">1985</option>

                        <option value="1984">1984</option>

                        <option value="1983">1983</option>

                        <option value="1982">1982</option>

                        <option value="1981">1981</option>

                        <option value="1980">1980</option>

                        <option value="1979">1979</option>

                        <option value="1978">1978</option>

                        <option value="1977">1977</option>

                        <option value="1976">1976</option>

                        <option value="1975">1975</option>

                        <option value="1974">1974</option>

                        <option value="1973">1973</option>

                        <option value="1972">1972</option>

                        <option value="1971">1971</option>

                        <option value="1970">1970</option>

                        <option value="1969">1969</option>

                        <option value="1968">1968</option>

                        <option value="1967">1967</option>

                        <option value="1966">1966</option>

                        <option value="1965">1965</option>

                        <option value="1964">1964</option>

                        <option value="1963">1963</option>

                        <option value="1962">1962</option>

                        <option value="1961">1961</option>

                        <option value="1960">1960</option>

                        <option value="1959">1959</option>

                        <option value="1958">1958</option>

                        <option value="1957">1957</option>

                        <option value="1956">1956</option>

                        <option value="1955">1955</option>

                        <option value="1954">1954</option>

                        <option value="1953">1953</option>

                        <option value="1952">1952</option>

                    </select><p class="clearBoth error_message important idctrl_389"> </p><p class="clearBoth error_message important idctrl_388"> </p><p class="clearBoth error_message important idctrl_18"> </p>
                </div>

          </div><br>

               <div class="row">

                <div class="col-lg-6">
                    <label for="ctrl_19" >
                         Fon, tagsüber<span class="mandatory">*</span>
                    </label>
                    <input type="text" name="telefon"  class="form-control form-control-sm" value="" required="" maxlength="20">
                </div>


               </div><br>


           <div class="row">


                <div class="col-lg-6">
                    <label for="ctrl_20" >
                         E-Mail<span class="mandatory">*</span>
                    </label>
                    <input type="email" name="email" id="mail" class="form-control form-control-sm" value="" required="" maxlength="100">
                </div>

                <div class="col-lg-6">
                    <label for="ctrl_381">
                         E-Mail Bestätigen<span class="mandatory">*</span>
                    </label>
                    <input type="email" name="email_repeat" id="mails_repeat" class="form-control form-control-sm" value="" required="" maxlength="100">
                </div>


           </div><br>

                    <h6  style="margin-left: 22px;">Berufserfahrung</h6>


                <div class="row">

                    <div class="col-lg-12">
                        <label for="ctrl_21">
                             Aktuelle/letzte Position<span class="mandatory">*</span>
                        </label>
                        <input type="text" name="position" class="form-control form-control-sm" value="" required="" maxlength="150">
                    </div>

                </div><br>

            <div class="row">
                <div class="col-lg-6">

                        <label for="ctrl_408" class="select profile_type mandatory">
                            Profiltyp<span class="mandatory">*</span>
                        </label>
                        <select name="profiltyp"  class="form-control form-control-sm" required="">

                            <option value="">Bitte wählen</option>

                            <option value="3">Assistenz</option>

                            <option value="4">Einkauf</option>

                            <option value="1">Finanzen</option>

                            <option value="9">Geschäftsleitung</option>

                            <option value="10">Informatik</option>

                            <option value="7">Ingenieurwesen</option>

                            <option value="8">Logistik</option>

                            <option value="6">Marketing</option>

                            <option value="13">Medien/Verlage</option>

                            <option value="2">Personalwesen</option>

                            <option value="11">Rechtswesen</option>

                            <option value="12">Sonstiges</option>

                            <option value="5">Vertrieb</option>

                        </select>

                </div>

                <div class="col-lg-6">


                        <label for="ctrl_364" class="select category mandatory">
                             Bedeutendste Branchenerfahrung<span class="mandatory">*</span>
                        </label>

                        <select name="bedeutendste" class="form-control form-control-sm" required="">

                            <option value="">Bitte wählen</option>


                            <option value="K">Allgemeine Dienstleistungen</option>


                            <option value="J">Banken &amp; Versicherungen</option>


                            <option value="F">Baugewerbe</option>


                            <option value="C">Bergbau &amp; Gewinnung von Rohstoffen</option>


                            <option value="E">Energie- und Wasserversorgung</option>


                            <option value="M">Erziehung &amp; Unterricht</option>


                            <option value="B">Fischerei &amp; Fischzucht</option>


                            <option value="H">Gastgewerbe</option>


                            <option value="N">Gesundheits- &amp; Sozialwesen</option>


                            <option value="G">Handel (Groß-/ Außen-/ Einzel- &amp; KFZ)</option>


                            <option value="A">Land- &amp; Forstwirtschaft</option>


                            <option value="I">Logistik &amp; Telekommunikation</option>


                            <option value="L">Öffentliche Verwaltung, Verteidigung, Sozialversicherung</option>


                            <option value="D">Produktion / Herstellung von ...</option>


                            <option value="Z">Sonstiges</option>

                        </select>
                    </div>


                </div> <br>

                {{--
                                  <div class="widget widget-select tl_member_experience_sub.label label ASC tl_member_experience_sub.value   select noDisplay ukat">

                                    {{--  <select name="ukat1" id="ctrl_72" class="select noDisplay ukat">

                                          <option value="">Bitte spezifizieren</option>


                                          <option value="65">Bank</option>


                                          <option value="22.1">Verlage</option>


                                          <option value="40">Energieversorgung</option>


                                          <option value="41">Wasserversorgung</option>


                                          <option value="50">KFZ Handel &amp; Werkstätten &amp; Tankstellen</option>


                                          <option value="51">Groß- &amp; Außenhandel</option>


                                          <option value="52">Einzelhandel</option>


                                          <option value="60.1">Eisenbahnverkehr</option>


                                          <option value="60.2">Straßenverkehr (Personen &amp; Güter)</option>


                                          <option value="61">Schifffahrt (Transport &amp; Fähren)</option>


                                          <option value="62">Luftfahrt</option>


                                          <option value="63.1">Lagerwirtschaft</option>


                                          <option value="63.4">Spedition</option>


                                          <option value="64.1">Zustellung von Post, Paketen &amp; Zeitungen</option>


                                          <option value="63.3">Reisebüro &amp; Veranstalter</option>


                                          <option value="64.3">Telekommunikation &amp; Mobilfunk</option>


                                          <option value="33.5">Uhren</option>


                                          <option value="66">Versicherung</option>


                                          <option value="74.87">Vermögensberatung</option>


                                          <option value="72">IT (Software &amp; Services)</option>


                                          <option value="74.14">Unternehmensberatung</option>


                                          <option value="74.12">Wirtschaftprüfung &amp; Steuerberatung</option>


                                          <option value="74.11">Juristerei &amp; Notariat</option>


                                          <option value="74.20">Ingenieurbüro</option>


                                          <option value="74.73">Forschung &amp; Entwicklung</option>


                                          <option value="74.30">Technische, physikalische &amp; chemische Untersuchung</option>


                                          <option value="74.40">Werbung</option>


                                          <option value="74.13">Marktforschung</option>


                                          <option value="74.50">Personaldienstleistung</option>


                                          <option value="74.60">Sicherheit</option>


                                          <option value="74.70">Reinigung</option>


                                          <option value="70">Grundstücks- &amp; Wohnungwesen</option>


                                          <option value="28">Metallerzeugnisse</option>


                                          <option value="34">Automotive</option>


                                          <option value="17">Bekleidung</option>


                                          <option value="24">Chem. Erzeugnisse</option>


                                          <option value="30">Computer &amp; Kopierer &amp; sonst. Hardware</option>


                                          <option value="22.2">Druck</option>


                                          <option value="35.2">Eisenbahnen &amp; Schienenfahrzeuge</option>


                                          <option value="31">Elektrotechnik</option>


                                          <option value="35.3">Flugzeuge &amp; Satelliten &amp; Raketen</option>


                                          <option value="26">Glas &amp; Keramik</option>


                                          <option value="25">Gummi &amp; Kunststoffe</option>


                                          <option value="20">Holz</option>


                                          <option value="15">Lebensmittel</option>


                                          <option value="29">Maschinenbau</option>


                                          <option value="33.1">Medizintechnik</option>


                                          <option value="33.2">Mess- &amp; Prüftechnik</option>


                                          <option value="74.82">Abfüllung &amp; Verpackung</option>


                                          <option value="27">Metallerzeugung &amp; -bearbeitung</option>


                                          <option value="23">Mineralöl</option>


                                          <option value="36.1">Möbel</option>


                                          <option value="35.4">Motorräder &amp; Fahrräder</option>


                                          <option value="36.3">Musikinstrumente</option>


                                          <option value="33.4">Optik</option>


                                          <option value="21">Papier</option>


                                          <option value="33.3">Prozesssteuerung</option>


                                          <option value="37">Recycling</option>


                                          <option value="32">Rundfunk- &amp; Nachrichtentechnik</option>


                                          <option value="35.1">Schiffe &amp; Boote</option>


                                          <option value="36.2">Schmuck &amp; Bestecke</option>


                                          <option value="36.6">Schreibgeräte</option>


                                          <option value="36.5">Spielwaren</option>


                                          <option value="36.4">Sportgeräte</option>

                                      </select>
                    </div>

                </div> --}}

                <div class="row">


                    <div class="col-lg-12">
                        <label for="ctrl_54" class="select category">
                            Weitere Branchenerfahrung  </label>

                        <select name="weitere"  class="form-control form-control-sm">

                            <option value="">Bitte wählen</option>

                            <option value="K">Allgemeine Dienstleistungen</option>

                            <option value="J">Banken &amp; Versicherungen</option>

                            <option value="F">Baugewerbe</option>

                            <option value="C">Bergbau &amp; Gewinnung von Rohstoffen</option>

                            <option value="E">Energie- und Wasserversorgung</option>

                            <option value="M">Erziehung &amp; Unterricht</option>

                            <option value="B">Fischerei &amp; Fischzucht</option>

                            <option value="H">Gastgewerbe</option>

                            <option value="N">Gesundheits- &amp; Sozialwesen</option>

                            <option value="G">Handel (Groß-/ Außen-/ Einzel- &amp; KFZ)</option>

                            <option value="A">Land- &amp; Forstwirtschaft</option>

                            <option value="I">Logistik &amp; Telekommunikation</option>

                            <option value="L">Öffentliche Verwaltung, Verteidigung, Sozialversicherung</option>

                            <option value="D">Produktion / Herstellung von ...</option>

                            <option value="Z">Sonstiges</option>

                        </select>
                    </div>

                    {{--  <div class="">

                     -- <select name="ukat2" id="ctrl_73" class="form-control form-control-sm">

                             <option value="">Bitte spezifizieren</option>


                             <option value="65">Bank</option>


                             <option value="22.1">Verlage</option>


                             <option value="40">Energieversorgung</option>


                             <option value="41">Wasserversorgung</option>


                             <option value="50">KFZ Handel &amp; Werkstätten &amp; Tankstellen</option>


                             <option value="51">Groß- &amp; Außenhandel</option>


                             <option value="52">Einzelhandel</option>


                             <option value="60.1">Eisenbahnverkehr</option>


                             <option value="60.2">Straßenverkehr (Personen &amp; Güter)</option>


                             <option value="61">Schifffahrt (Transport &amp; Fähren)</option>


                             <option value="62">Luftfahrt</option>


                             <option value="63.1">Lagerwirtschaft</option>


                             <option value="63.4">Spedition</option>


                             <option value="64.1">Zustellung von Post, Paketen &amp; Zeitungen</option>


                             <option value="63.3">Reisebüro &amp; Veranstalter</option>


                             <option value="64.3">Telekommunikation &amp; Mobilfunk</option>


                             <option value="33.5">Uhren</option>


                             <option value="66">Versicherung</option>


                             <option value="74.87">Vermögensberatung</option>


                             <option value="72">IT (Software &amp; Services)</option>


                             <option value="74.14">Unternehmensberatung</option>


                             <option value="74.12">Wirtschaftprüfung &amp; Steuerberatung</option>


                             <option value="74.11">Juristerei &amp; Notariat</option>


                             <option value="74.20">Ingenieurbüro</option>


                             <option value="74.73">Forschung &amp; Entwicklung</option>


                             <option value="74.30">Technische, physikalische &amp; chemische Untersuchung</option>


                             <option value="74.40">Werbung</option>


                             <option value="74.13">Marktforschung</option>


                             <option value="74.50">Personaldienstleistung</option>


                             <option value="74.60">Sicherheit</option>


                             <option value="74.70">Reinigung</option>


                             <option value="70">Grundstücks- &amp; Wohnungwesen</option>


                             <option value="28">Metallerzeugnisse</option>


                             <option value="34">Automotive</option>


                             <option value="17">Bekleidung</option>


                             <option value="24">Chem. Erzeugnisse</option>


                             <option value="30">Computer &amp; Kopierer &amp; sonst. Hardware</option>


                             <option value="22.2">Druck</option>


                             <option value="35.2">Eisenbahnen &amp; Schienenfahrzeuge</option>


                             <option value="31">Elektrotechnik</option>


                             <option value="35.3">Flugzeuge &amp; Satelliten &amp; Raketen</option>


                             <option value="26">Glas &amp; Keramik</option>


                             <option value="25">Gummi &amp; Kunststoffe</option>


                             <option value="20">Holz</option>


                             <option value="15">Lebensmittel</option>


                             <option value="29">Maschinenbau</option>


                             <option value="33.1">Medizintechnik</option>


                             <option value="33.2">Mess- &amp; Prüftechnik</option>


                             <option value="74.82">Abfüllung &amp; Verpackung</option>


                             <option value="27">Metallerzeugung &amp; -bearbeitung</option>


                             <option value="23">Mineralöl</option>


                             <option value="36.1">Möbel</option>


                             <option value="35.4">Motorräder &amp; Fahrräder</option>


                             <option value="36.3">Musikinstrumente</option>


                             <option value="33.4">Optik</option>


                             <option value="21">Papier</option>


                             <option value="33.3">Prozesssteuerung</option>


                             <option value="37">Recycling</option>


                             <option value="32">Rundfunk- &amp; Nachrichtentechnik</option>


                             <option value="35.1">Schiffe &amp; Boote</option>


                             <option value="36.2">Schmuck &amp; Bestecke</option>


                             <option value="36.6">Schreibgeräte</option>


                             <option value="36.5">Spielwaren</option>


                             <option value="36.4">Sportgeräte</option>

                         </select>
                    </div>--}}

                   {{-- <div class="col-lg-6">
                        <label for="ctrl_55" class="select category">
                            Weitere Branchenerfahrung          </label>

                        <select name="kat3" id="ctrl_55" class="form-control form-control-sm">
                            <option value="">Bitte wählen</option>

                            <option value="K">Allgemeine Dienstleistungen</option>

                            <option value="J">Banken &amp; Versicherungen</option>

                            <option value="F">Baugewerbe</option>

                            <option value="C">Bergbau &amp; Gewinnung von Rohstoffen</option>

                            <option value="E">Energie- und Wasserversorgung</option>

                            <option value="M">Erziehung &amp; Unterricht</option>

                            <option value="B">Fischerei &amp; Fischzucht</option>

                            <option value="H">Gastgewerbe</option>

                            <option value="N">Gesundheits- &amp; Sozialwesen</option>

                            <option value="G">Handel (Groß-/ Außen-/ Einzel- &amp; KFZ)</option>

                            <option value="A">Land- &amp; Forstwirtschaft</option>

                            <option value="I">Logistik &amp; Telekommunikation</option>

                            <option value="L">Öffentliche Verwaltung, Verteidigung, Sozialversicherung</option>

                            <option value="D">Produktion / Herstellung von ...</option>

                            <option value="Z">Sonstiges</option>

                        </select>

                    </div>--}}

                    {{--      <div class="widget widget-select tl_member_experience_sub.label label ASC tl_member_experience_sub.value   select noDisplay ukat">



                     {{-- <select name="ukat3" id="ctrl_74" class="select noDisplay ukat">

                                <option value="">Bitte spezifizieren</option>


                                <option value="65">Bank</option>


                                <option value="22.1">Verlage</option>


                                <option value="40">Energieversorgung</option>


                                <option value="41">Wasserversorgung</option>


                                <option value="50">KFZ Handel &amp; Werkstätten &amp; Tankstellen</option>


                                <option value="51">Groß- &amp; Außenhandel</option>


                                <option value="52">Einzelhandel</option>


                                <option value="60.1">Eisenbahnverkehr</option>


                                <option value="60.2">Straßenverkehr (Personen &amp; Güter)</option>


                                <option value="61">Schifffahrt (Transport &amp; Fähren)</option>


                                <option value="62">Luftfahrt</option>


                                <option value="63.1">Lagerwirtschaft</option>


                                <option value="63.4">Spedition</option>


                                <option value="64.1">Zustellung von Post, Paketen &amp; Zeitungen</option>


                                <option value="63.3">Reisebüro &amp; Veranstalter</option>


                                <option value="64.3">Telekommunikation &amp; Mobilfunk</option>


                                <option value="33.5">Uhren</option>


                                <option value="66">Versicherung</option>


                                <option value="74.87">Vermögensberatung</option>


                                <option value="72">IT (Software &amp; Services)</option>


                                <option value="74.14">Unternehmensberatung</option>


                                <option value="74.12">Wirtschaftprüfung &amp; Steuerberatung</option>


                                <option value="74.11">Juristerei &amp; Notariat</option>


                                <option value="74.20">Ingenieurbüro</option>


                                <option value="74.73">Forschung &amp; Entwicklung</option>


                                <option value="74.30">Technische, physikalische &amp; chemische Untersuchung</option>


                                <option value="74.40">Werbung</option>


                                <option value="74.13">Marktforschung</option>


                                <option value="74.50">Personaldienstleistung</option>


                                <option value="74.60">Sicherheit</option>


                                <option value="74.70">Reinigung</option>


                                <option value="70">Grundstücks- &amp; Wohnungwesen</option>


                                <option value="28">Metallerzeugnisse</option>


                                <option value="34">Automotive</option>


                                <option value="17">Bekleidung</option>


                                <option value="24">Chem. Erzeugnisse</option>


                                <option value="30">Computer &amp; Kopierer &amp; sonst. Hardware</option>


                                <option value="22.2">Druck</option>


                                <option value="35.2">Eisenbahnen &amp; Schienenfahrzeuge</option>


                                <option value="31">Elektrotechnik</option>


                                <option value="35.3">Flugzeuge &amp; Satelliten &amp; Raketen</option>


                                <option value="26">Glas &amp; Keramik</option>


                                <option value="25">Gummi &amp; Kunststoffe</option>


                                <option value="20">Holz</option>


                                <option value="15">Lebensmittel</option>


                                <option value="29">Maschinenbau</option>


                                <option value="33.1">Medizintechnik</option>


                                <option value="33.2">Mess- &amp; Prüftechnik</option>


                                <option value="74.82">Abfüllung &amp; Verpackung</option>


                                <option value="27">Metallerzeugung &amp; -bearbeitung</option>


                                <option value="23">Mineralöl</option>


                                <option value="36.1">Möbel</option>


                                <option value="35.4">Motorräder &amp; Fahrräder</option>


                                <option value="36.3">Musikinstrumente</option>


                                <option value="33.4">Optik</option>


                                <option value="21">Papier</option>


                                <option value="33.3">Prozesssteuerung</option>


                                <option value="37">Recycling</option>


                                <option value="32">Rundfunk- &amp; Nachrichtentechnik</option>


                                <option value="35.1">Schiffe &amp; Boote</option>


                                <option value="36.2">Schmuck &amp; Bestecke</option>


                                <option value="36.6">Schreibgeräte</option>


                                <option value="36.5">Spielwaren</option>


                                <option value="36.4">Sportgeräte</option>

                            </select>
                        </div>--}}

{{--

                    <select name="sub_groups" class="noDisplay" id="sub_groups"><option data-group="D" value="74.82">Abfüllung &amp; Verpackung</option><option data-group="D" value="34">Automotive</option><option data-group="D" value="17">Bekleidung</option><option data-group="D" value="24">Chem. Erzeugnisse</option><option data-group="D" value="30">Computer &amp; Kopierer &amp; sonst. Hardware</option><option data-group="D" value="22.2">Druck</option><option data-group="D" value="35.2">Eisenbahnen &amp; Schienenfahrzeuge</option><option data-group="D" value="31">Elektrotechnik</option><option data-group="D" value="35.3">Flugzeuge &amp; Satelliten &amp; Raketen</option><option data-group="D" value="26">Glas &amp; Keramik</option><option data-group="D" value="25">Gummi &amp; Kunststoffe</option><option data-group="D" value="20">Holz</option><option data-group="D" value="15">Lebensmittel</option><option data-group="D" value="29">Maschinenbau</option><option data-group="D" value="33.1">Medizintechnik</option><option data-group="D" value="33.2">Mess- &amp; Prüftechnik</option><option data-group="D" value="28">Metallerzeugnisse</option><option data-group="D" value="27">Metallerzeugung &amp; -bearbeitung</option><option data-group="D" value="23">Mineralöl</option><option data-group="D" value="36.1">Möbel</option><option data-group="D" value="35.4">Motorräder &amp; Fahrräder</option><option data-group="D" value="36.3">Musikinstrumente</option><option data-group="D" value="33.4">Optik</option><option data-group="D" value="21">Papier</option><option data-group="D" value="33.3">Prozesssteuerung</option><option data-group="D" value="37">Recycling</option><option data-group="D" value="32">Rundfunk- &amp; Nachrichtentechnik</option><option data-group="D" value="35.1">Schiffe &amp; Boote</option><option data-group="D" value="36.2">Schmuck &amp; Bestecke</option><option data-group="D" value="36.6">Schreibgeräte</option><option data-group="D" value="36.5">Spielwaren</option><option data-group="D" value="36.4">Sportgeräte</option><option data-group="D" value="33.5">Uhren</option><option data-group="D" value="22.1">Verlage</option><option data-group="E" value="40">Energieversorgung</option><option data-group="E" value="41">Wasserversorgung</option><option data-group="G" value="50">KFZ Handel &amp; Werkstätten &amp; Tankstellen</option><option data-group="G" value="51">Groß- &amp; Außenhandel</option><option data-group="G" value="52">Einzelhandel</option><option data-group="I" value="60.1">Eisenbahnverkehr</option><option data-group="I" value="60.2">Straßenverkehr (Personen &amp; Güter)</option><option data-group="I" value="61">Schifffahrt (Transport &amp; Fähren)</option><option data-group="I" value="62">Luftfahrt</option><option data-group="I" value="63.1">Lagerwirtschaft</option><option data-group="I" value="63.4">Spedition</option><option data-group="I" value="64.1">Zustellung von Post, Paketen &amp; Zeitungen</option><option data-group="I" value="63.3">Reisebüro &amp; Veranstalter</option><option data-group="I" value="64.3">Telekommunikation &amp; Mobilfunk</option><option data-group="J" value="65">Bank</option><option data-group="J" value="66">Versicherung</option><option data-group="J" value="74.87">Vermögensberatung</option><option data-group="K" value="72">IT (Software &amp; Services)</option><option data-group="K" value="74.14">Unternehmensberatung</option><option data-group="K" value="74.12">Wirtschaftprüfung &amp; Steuerberatung</option><option data-group="K" value="74.11">Juristerei &amp; Notariat</option><option data-group="K" value="74.20">Ingenieurbüro</option><option data-group="K" value="74.73">Forschung &amp; Entwicklung</option><option data-group="K" value="74.30">Technische, physikalische &amp; chemische Untersuchung</option><option data-group="K" value="74.40">Werbung</option><option data-group="K" value="74.13">Marktforschung</option><option data-group="K" value="74.50">Personaldienstleistung</option><option data-group="K" value="74.60">Sicherheit</option><option data-group="K" value="74.70">Reinigung</option><option data-group="K" value="70">Grundstücks- &amp; Wohnungwesen</option></select>
--}}


                </div><br>

                <div class="row">

                <div class="col-lg-6">
                    <label for="ctrl_24" class="form_salary clearBoth mandatory">
                         Aktuelles Jahresbruttogehalt inkl. Boni in € (z.B. 78000, ohne Punkte)<span class="mandatory">*</span>
                    </label>
                    <input type="number" name="gehalt" id="ctrl_24" class="form-control form-control-sm" value="" required="" maxlength="20" step="any">
                </div>

                <div class="col-lg-6">
                    <label for="ctrl_25" class="form_dismissal mandatory">
                         Kündigungsfrist<span class="mandatory">*</span>
                    </label>
                    <input type="text" name="kuendigung" id="ctrl_25" class="form-control form-control-sm" value="" required="" maxlength="30">
                </div>


                </div><br>




                    <h6  style="margin-left: 22px;">Räumliche Verfügbarkeit</h6>


                <div class="row" style="margin-left: 30px;">

                    <div class="col-lg-6" class="checkbox_container">

                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_0" class="form-check-input" value="Baden-Württemberg">
                            <label id="lbl_26_0" for="opt_26_0" class="form-check-label">Baden-Württemberg</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_2" class="form-check-input" value="Berlin">
                            <label id="lbl_26_2" for="opt_26_2" class="form-check-label">Berlin</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_4" class="form-check-input" value="Bremen">
                            <label id="lbl_26_4" for="opt_26_4" class="form-check-label">Bremen</label>
                        </div>



                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_6" class="form-check-input" value="Hessen">
                            <label id="lbl_26_6" for="opt_26_6" class="form-check-label">Hessen</label>
                        </div>



                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_8" class="form-check-input" value="Niedersachsen">
                            <label id="lbl_26_8" for="opt_26_8" class="form-check-label">Niedersachsen</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_10" class="form-check-input" value="Rheinland-Pfalz">
                            <label id="lbl_26_10" for="opt_26_10" class="form-check-label">Rheinland-Pfalz</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_12" class="form-check-input" value="Sachsen">
                            <label id="lbl_26_12" for="opt_26_12" class="form-check-label">Sachsen</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_14" class="form-check-input" value="Schleswig-Holstein">
                            <label id="lbl_26_14" for="opt_26_14" class="form-check-label">Schleswig-Holstein</label>
                        </div>

                    </div>




                    <div class="col-lg-6">

                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_1" class="form-check-input" value="Bayern">
                            <label id="lbl_26_1" for="opt_26_1" class="form-check-label">Bayern</label>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_3" class="form-check-input" value="Brandenburg">
                            <label id="lbl_26_3" for="opt_26_3" class="form-check-label">Brandenburg</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_5" class="form-check-input" value="Hamburg">
                            <label id="lbl_26_5" for="opt_26_5" class="form-check-label">Hamburg</label>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_7" class="form-check-input" value="Mecklenburg-Vorpommern">
                            <label id="lbl_26_7" for="opt_26_7" class="form-check-label">Mecklenburg-Vorpommern</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_9" class="form-check-input" value="Nordrhein-Westfalen">
                            <label id="lbl_26_9" for="opt_26_9" class="form-check-label">Nordrhein-Westfalen</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_11" class="form-check-input" value="Saarland">
                            <label id="lbl_26_11" for="opt_26_11" class="form-check-label">Saarland</label>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_13" class="form-check-input" value="Sachsen-Anhalt">
                            <label id="lbl_26_13" for="opt_26_13" class="form-check-label">Sachsen-Anhalt</label>
                        </div>


                        <div class="form-group">
                            <input type="checkbox" name="raem[]" id="opt_26_15" class="form-check-input" value="Thüringen">
                            <label id="lbl_26_15" for="opt_26_15" class="form-check-label">Thüringen</label>
                        </div>

                    </div>



                </div> <br>

        <div class="row">

                <div class="col-lg-12">
                    <label for="ctrl_27">Kommentar</label><br>
                    <textarea name="kommentar" id="ctrl_27" class="form-control form-control-sm" rows="4" cols="35" maxlength="2000"></textarea>
                    <div class="charleft originalDisplayInfo" style="width: 918.812px;">0 Zeichen | 2000 Zeichen übrig</div><br>
                </div>

        </div><br>


                    <h6  style="margin-left: 22px;">Bewerbungsunterlagen</h6>

               <div class="row" style="margin-left: 22px;">
                <div>
                    <p style="color: #C60C30;"><span class="warning"><span style="text-decoration: underline;">Pro Auswahlfeld</span> kann <span style="text-decoration: underline;">nur eine Datei</span> (max. 8 MB) ausgewählt werden.</span><span style="color: #003f72;"><br>Ein Anschreiben ist <span style="text-decoration: underline;">nicht</span> erforderlich, außer es wird in der Anzeige ausdrücklich darauf hingewiesen. Haben Sie mehrere Zeugnisse, fassen Sie diese bitte in einer Datei zusammen.</span></p>
                    <p>Folgende Dateiendungen sind erlaubt: <br>pdf,doc,docx,odt,rtf,jpg,jpeg,gif,png,tiff,bmp</p>
                </div>
               </div> <br>
        <div class="row">

                <div class="col-lg-5 offset-lg-1 colordiv" style="border:1px solid #003A65;padding:10px;margin-bottom: 20px;color:#003A65;">
                    <div class="widget widget-upload mandatory">
                        <label for="ctrl_29" class="mandatory">
                            <i class="material-icons" style="position: relative;top:6px;margin-right: 5px;">cloud_upload</i> <span class="label">Lebenslauf hochladen</span>
                        </label>
                        <input type="file" name="" id="ctrl_29" class="upload mandatory" style="display: none">
                    </div>

                </div>
                <div class="col-lg-5 offset-lg-1 colordiv" style="border:1px solid #003A65;padding:10px;margin-bottom: 20px;color:#003A65;">
                    <div class="widget widget-upload">
                        <label for="ctrl_406">
                            <i class="material-icons" style="position: relative;top:6px;margin-right: 5px;">cloud_upload</i> <span class="label">Anschreiben / Motivationsschreiben hochladen</span>
                        </label>
                        <input type="file" name="" id="ctrl_406" class="upload" style="display: none">
                    </div>

                </div>

            </div>

                <div class="row">

                <div class="col-lg-5 offset-lg-1 colordiv" style="border:1px solid #003A65;padding:10px;margin-bottom: 20px;color:#003A65;">
                    <div class="widget widget-upload">
                        <label for="ctrl_30">
                            <i class="material-icons" style="position: relative;top:6px;margin-right: 5px;">cloud_upload</i> <span class="label">Foto hochladen</span>
                        </label>
                        <input type="file" name="" id="ctrl_30" class="upload" style="display: none">
                    </div>

                </div>
                <div class="col-lg-5 offset-lg-1 colordiv" style="border:1px solid #003A65;padding:10px;margin-bottom: 20px;color:#003A65;">
                    <div class="widget widget-upload">
                        <label for="ctrl_31">
                            <i class="material-icons" style="position: relative;top:6px;margin-right: 5px;">cloud_upload</i> <span class="label">Zeugnisse hochladen</span>
                        </label>
                        <input type="file" name="" id="ctrl_31" class="upload" style="display: none">
                    </div>
                </div>

                </div><br>

                <div class="row">
                <div class="col-lg-5 offset-lg-7">



                        <p>Die Übertragung Ihrer Bewerbung kann&nbsp;<strong style="font-weight: bold">mehrere Minuten</strong> dauern.<br>Bitte warten Sie, bis Sie auf eine Bestätigungsseite weitergeleitet werden.</p>
                        <p>Notwendige Information gem. DSGVO zum <a title="Datenschutzerklärung" href="#" target="_blank" rel="noopener"><span class="warning" style="text-decoration: underline;color: #C60C30;">Umgang mit Ihren Daten</span></a></p>
                    

                    <div class="widget widget-submit">
                        <button type="submit" id="ctrl_36" class="btn" style="background-color: #003A65;color:white;margin-top: 20px;">Absenden</button>
                    </div>

                    <div id="spinner" style="display: none; text-align: center;">
                        <img src="files/hapeko/template/img/ajax-loader.gif">
                    </div>
                    <div class="widget widget-explanation explanation">
                        <p>&nbsp;</p>
                        <p><span class="important">*</span> Pflichtfelder</p></div>


                </div>
                </div>
                    <script type="text/javascript" src="/files/template/js/jquery.textareaCounter.plugin.js"></script> <script> var options = { 'maxCharacterSize': 2000, 'originalStyle': 'originalDisplayInfo', 'warningStyle': 'warningDisplayInfo', 'warningNumber': 40, 'displayFormat': '#input Zeichen | #left Zeichen übrig' }; $('#ctrl_27').textareaCount(options); </script>
                    <script type="text/javascript">
                        jQuery.noConflict();
                        (function( $ ) {
                            $(function() {
                                $(".ce_user").next().hide();

                                $(".profil.submit").click(function() {
                                    if($(this).hasClass('abort')){
                                        $(this).parent().parent().prev().show();
                                    }else{
                                        $(this).parent().parent().next().show();
                                    }

                                    $(this).parent().parent().hide();
                                });
                            });
                        })(jQuery);
                    </script>
                    <script type="text/javascript" src="files/template/js/jquery.check_bewerbung.js"></script>    </div>


           {{--  </form>--}}



    </div>
    </div>

    @include('includes.footer')
@endsection
@push('styles')
    <style>
        .colordiv:hover > div{

            color: #C60C30;
        }
        .ce_form.bewerbung .widget {
            margin-top: 10px;
        }
        .ce_form .widget {
            margin-bottom: 20px;
        }
        .formbody > * {
            margin-right: 10px;
            margin-left: 10px;
        }
        .schnellbewerbung .validate .widget.form_file label, .click-bewerbung .validate .widget.form_file label, .kontaktformular .validate .widget.form_file label, .newsletter-subscribe .validate .widget.form_file label {
            border: 1px solid #ccc;
            display: block;
            padding: 0px 12px 9px 12px;
            cursor: pointer;
        }
        .ce_form label {
            display: block;
            color: #003a65;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin: 2px 0;
        }
        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        .login-marker .ce_accordion .toggler {
            background-position: 100% -48px;
        }
        .schnellbewerbung .validate .widget.form_file input[type="file"], .click-bewerbung .validate .widget.form_file input[type="file"], .kontaktformular .validate .widget.form_file input[type="file"], .newsletter-subscribe .validate .widget.form_file input[type="file"] {
            display: none;
        }
        .ce_form.bewerbung .widget input {
            width: 100%;
            margin: 0;
        }
        .ce_form input, .ce_form select, .ce_form textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            background: #fff;
        }
        input, textarea {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            border: 1px solid #ccc;
        }
        input, button, textarea, select {
            font-family: inherit;
            font-size: 99%;
            font-weight: inherit;
        }
        body, div, h1, h2, h3, h4, h5, h6, p, blockquote, figure, pre, code, ol, ul, li, dl, dt, dd, table, th, td, form, fieldset, legend, input, textarea {
            margin: 0;
            padding: 0;
        }
        select, input, textarea {
            font-size: 99%;
        }
        input, button, textarea, select {
            font-family: inherit;
            font-size: 99%;
            font-weight: inherit;
        }
        body, div, h1, h2, h3, h4, h5, h6, p, blockquote, pre, code, ol, ul, li, dl, dt, dd, figure, table, th, td, form, fieldset, legend, input, textarea {
            margin: 0;
            padding: 0;
        }
        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        user agent stylesheet
        input[type="file" i] {
            appearance: initial;
            background-color: initial;
            cursor: default;
            align-items: baseline;
            color: inherit;
            text-align: start !important;
            padding: initial;
            border: initial;
        }
        user agent stylesheet
        input {
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            color: -internal-light-dark(black, white);
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: start;
            appearance: textfield;
            background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
            -webkit-rtl-ordering: logical;
            cursor: text;
            margin: 0em;
            font: 400 13.3333px Arial;
            padding: 1px 2px;
            border-width: 2px;
            border-style: inset;
            border-color: -internal-light-dark(rgb(118, 118, 118), rgb(195, 195, 195));
            border-image: initial;
        }
        .schnellbewerbung .validate .widget.form_file label:hover, .click-bewerbung .validate .widget.form_file label:hover, .kontaktformular .validate .widget.form_file label:hover, .newsletter-subscribe .validate .widget.form_file label:hover {
            color: #c60c30;
            background-color: #f5f5f5;
        }
        .schnellbewerbung .validate .widget.form_file label, .click-bewerbung .validate .widget.form_file label, .kontaktformular .validate .widget.form_file label, .newsletter-subscribe .validate .widget.form_file label {
            border: 1px solid #ccc;
            display: block;
            padding: 0px 12px 9px 12px;
            cursor: pointer;
        }
        .ce_form label {
            display: block;
            color: #003a65;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin: 2px 0;
        }
        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        .schnellbewerbung .validate .widget.form_email, .click-bewerbung .validate .widget.form_email, .kontaktformular .validate .widget.form_email, .newsletter-subscribe .validate .widget.form_email, .schnellbewerbung .validate .widget.form_profiletype, .click-bewerbung .validate .widget.form_profiletype, .kontaktformular .validate .widget.form_profiletype, .newsletter-subscribe .validate .widget.form_profiletype, .schnellbewerbung .validate .widget.form_category, .click-bewerbung .validate .widget.form_category, .kontaktformular .validate .widget.form_category, .newsletter-subscribe .validate .widget.form_category, .schnellbewerbung .validate .widget.form_salary, .click-bewerbung .validate .widget.form_salary, .kontaktformular .validate .widget.form_salary, .newsletter-subscribe .validate .widget.form_salary, .schnellbewerbung .validate .widget.form_dismissal, .click-bewerbung .validate .widget.form_dismissal, .kontaktformular .validate .widget.form_dismissal, .newsletter-subscribe .validate .widget.form_dismissal, .schnellbewerbung .validate .widget.form_phone, .click-bewerbung .validate .widget.form_phone, .kontaktformular .validate .widget.form_phone, .newsletter-subscribe .validate .widget.form_phone, .schnellbewerbung .validate .widget.form_file, .click-bewerbung .validate .widget.form_file, .kontaktformular .validate .widget.form_file, .newsletter-subscribe .validate .widget.form_file {
            float: left;
            width: 48%;
        }
        .schnellbewerbung .validate .widget, .click-bewerbung .validate .widget, .kontaktformular .validate .widget, .newsletter-subscribe .validate .widget {
            margin: 0 1% 20px 1%;
        }
        .toggler.ui-state-active {
            color: #c60c30;
            background-position: 100% 5px;
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        .toggler.ui-state-active {
            color: #c60c30;
            background-position: 100% 5px;
        }

        .ce_accordion .toggler, .toggler.ui-state-default {
            margin-bottom: 8pt;
            padding-right: 40px;
            background-repeat: no-repeat;
            font-size: 10pt;
            font-weight: bold;
            cursor: pointer;
            background-position: 100% -55px;
            margin-right: 10px;
        }

        .login-marker i {
            position: relative;
            top: 5px;
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            font-feature-settings: 'liga';
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        user agent stylesheet
        i {
            font-style: italic;
        }

        .toggler.ui-state-active {
            color: #c60c30;
            background-position: 100% 5px;
        }

        .ce_accordion .toggler, .toggler.ui-state-default {
            margin-bottom: 8pt;
            padding-right: 40px;

            background-repeat: no-repeat;
            font-size: 10pt;
            font-weight: bold;
            cursor: pointer;
            background-position: 100% -55px;
            margin-right: 10px;
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        user agent stylesheet
        u {
            text-decoration: underline;
        }

        .toggler.ui-state-active {
            color: #c60c30;
            background-position: 100% 5px;
        }

        .half {
            width: 50%;
            float: left;
        }

        .block {
            overflow: hidden;
        }

        .mod_article h2, .h2 {
            font-size: 24px;
        }

        .mod_article h2, .h2 {
            font: 20px "GillSansStdLight", Arial, Helvetica, sans-serif;
            color: #c60c30;
        }

        .mod_article h2, .h2 {
            font-size: 24px;
        }

        .mod_article h2, .h2 {
            font: 20px "GillSansStdLight", Arial, Helvetica, sans-serif;
            color: #c60c30;
        }

        .half {
            width: 50%;
            float: left;
        }

        .click-bewerbung-top .login {
            padding: 40px 40px 20px 40px;
        }

        .mod_article [class*=ce_], .mod_article [class*=mod_] {
            margin-left: 10px;
            margin-right: 10px;
        }

        .block {
            overflow: hidden;
        }

        .click-bewerbung-top .login .login-container .inner {
            background: #fff;
            border: 1px solid #efefef;
            -webkit-box-shadow: 0px 0 24px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0 24px 0px rgba(0, 0, 0, 0.2);
            padding: 20px 30px;
            position: relative;
        }

        .click-bewerbung-top .login .login-container .inner {
            background: #fff;
            border: 1px solid #efefef;
            -webkit-box-shadow: 0px 0 24px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 0 24px 0px rgba(0, 0, 0, 0.2);
            padding: 20px 30px;
            position: relative;
        }

        .click-bewerbung-top .login .login-container .login-header {
            background: #003a65;
            color: #fff;
            padding: 10px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 16px;
            position: absolute;
            top: -40px;
            left: 0;
            width: 101%;
            padding-left: 30px;
            border: 1px solid #003a65;
            margin-left: -1px;
        }

        .f-left {
            float: left;
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        user agent stylesheet
        div {
            display: block;
        }

        .click-bewerbung-top .login .login-container .login-header {
            background: #003a65;
            color: #fff;
            padding: 10px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 16px;
            position: absolute;
            top: -40px;
            left: 0;
            width: 101%;
            padding-left: 30px;
            border: 1px solid #003a65;
            margin-left: -1px;
        }

        .f-right {
            float: right;
        }

        .login-marker .register {
            opacity: 0;
            visibility: hidden;
            display: none;
            height: 0;
        }

        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        .colorat{
            background-color: #F0F0F0;
        }
        label,h6{
            margin-bottom: 10px;
        }


        .schnellbewerbung .validate .widget.form_file label i, .click-bewerbung .validate .widget.form_file label i, .kontaktformular .validate .widget.form_file label i, .newsletter-subscribe .validate .widget.form_file label i {
            font-size: 30px;
            position: relative;
            margin-right: 6px;
            top: 5px;
        }
        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
            font-feature-settings: 'liga';
        }
        * {
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }
        user agent stylesheet
        i {
            font-style: italic;
        }
        .schnellbewerbung .validate .widget.form_file label, .click-bewerbung .validate .widget.form_file label, .kontaktformular .validate .widget.form_file label, .newsletter-subscribe .validate .widget.form_file label {
            border: 1px solid #ccc;
            display: block;
            padding: 0px 12px 9px 12px;
            cursor: pointer;
        }
        .ce_form label {
            display: block;
            color: #003a65;
            margin-bottom: 10px;
        }
        user agent stylesheet
        label {
            cursor: default;
        }

    </style>
@endpush
@push('scripts')
    @include('includes.immediate_available_btn')
    <script>

        $(function(){

            $('#aff').click(function(){

                $('#cash').show('slow');
            });

            $('#aff').mouseenter(function(){

                $('#cash').hide('5000');
            });

        });


    </script>
@endpush