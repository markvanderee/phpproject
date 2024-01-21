<!DOCTYPE html>
<!--[if IE 8]> <html lang="nl" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="nl" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="nl">
<!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Zonnepanelen</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Bouw-Energie Admin" name="description" />
    <meta content="Bouw-Energie" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/fonts/css/open-sans.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/mc/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/mc/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/mc/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/mc/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="css/jquery-ui-slider-pips.css" rel="stylesheet" type="text/css" />
    <link href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/styles/mc/global/css/components.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/styles/mc/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <link href="img/logo/favicon.ico" rel="shortcut icon" type="image/ico" />
    <!-- BEGIN CUSTOM STYLES -->
    <link href="css/custom.css?random=65abfcce6860c" rel="stylesheet" type="text/css" />
    <link href="css/custom_steps.css?random=65abfcce6864a" rel="stylesheet" type="text/css"/>
    <!-- END CUSTOM STYLES -->
<link rel="stylesheet" href="/nordsec-vMwYEtW6SWq62w9F/stylesheet?id=NezwAfDlASoY63J4"></head>
<!-- END HEAD -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper" style="max-width:1140px;margin:0px">
    <!-- BEGIN CONTENT BODY -->
    <div class="content">

        <div class="row">
            <div class="col-sm-12">
                <div class="portlet box default">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject bold uppercase">Zonnepanelen</span>
                        </div>
                        <div class="actions">

                        </div>
                    </div>
                    <div class="portlet-body">

                        <form class="form-horizontal" role="form" id="form_inputs" action="">
                            <input id="taal_keuze" name="taal_keuze" value="NL" style="display:none">
                            <input id="date_unix" name="date_unix" value="" style="display:none">
                            <div class="form-body">

                                <div id="rootwizard" class="rootwizard-adjust">
                                    <div class="steps clearfix">
                                        <ul>
                                            <li class="first"><a href="#tab1" data-toggle="tab">1</a></li>
                                            <li class="inactief"><a href="#tab2" data-toggle="tab">2</a></li>
                                            <li class="inactief"><a href="#tab3" data-toggle="tab" id="li_step_3">3</a></li>
                                        </ul>
                                    </div>
                                    <ul class="pager pager-top wizard">
                                        <li class="previous first" style="display:none"><a class="btn-previous" href="#">EERSTE</a></li>
                                        <li class="previous"><a class="btn-previous" onfocus="this.blur();" href="#"><i class="fa fa-angle-left fa-lg fa-adjust"></i></a></li>
                                        <li class="next last" style="display:none"><a class="btn-next" href="#">LAATSTE</a></li>
                                        <li class="next"><a class="btn-next" onfocus="this.blur();" href="#" id="next_button" class="">VOLGENDE <i class="fa fa-angle-right fa-lg fa-adjust"></i></a></li>
                                        <li id="button_verzend_rapport" style="display:none;float:right"><a class="btn-next" data-toggle="modal" href="#modal_email" onfocus="this.blur();">VERZEND RAPPORT <i class="fa fa-angle-right fa-lg fa-adjust"></i></a></li>
                                    </ul>

                                    <!-- /.modal -->
                                    <div class="modal fade" id="modal_info" tabindex="-1" role="dialog" aria-hidden="true" style="max-width:980px">
                                        <div class="modal-dialog modal-lg" style="margin-top:65px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="hideRapportField"></button>
                                                    <h4 class="modal-title">Meer info</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p><b>Sack zelfbouw biedt je fotovoltaïsche systemen met toprendement.</b><br><br>Je installateur werkt voor fotovoltaïsche installaties samen met Sack zelfbouw (sackzelfbouw.be). Wij zijn een elektrotechnische groothandel die zich eveneens specialiseert in de distributie van fotovoltaïsche installaties. Sack zelfbouw kiest uitsluitend voor Europese kwaliteitsmerken en –producten. De installatie plaatsen is specialistenwerk. Dit vertrouwen we daarom toen aan onze klanten, de gespecialiseerde installateur.<br><br><b>Kwaliteit voor een fotovoltaïsche installatie, wat betekent dat?</b><br><br>Wanneer we spreken over de kwaliteit van een fotovoltaïsche installatie, dan hebben we het eigenlijk over de betrouwbaarheid en duurzaamheid van alle componenten. Een defect zal je wel merken, maar wat met mindere opbrengst of een slechte bevestiging?<br><br>Er bestaat wel degelijk een kwaliteitsverschil in de diverse componenten. Sack zelfbouw kiest als verdeler van de fotovoltaïsche oplossingen resoluut voor topkwaliteit van Europese fabrikanten.<br><br>&bull; Hanwha Qcells behoort wereldwijd tot de top 5 van producenten van zonnepanelen (productiecapaciteit » 6GW). Het bedrijf combineert Duitse engineering/kwaliteitscontrole en Koreaanse productie. De fabrikant biedt een uitstekende mix van kwaliteit, hightech producten en kostenefficiëntie. Hanwha Qcells maakt deel uit van de Zuid-Koreaanse groep Hanwha, die heel wat andere activiteiten heeft dan de PV business. Dit komt de financiële stabiliteit van de groep ten goede.<br>&bull; SMA is een gerenommeerd Duits bedrijf dat wereldwijd een leidende positie inneemt in de productie en ontwikkeling van zonne-energie omvormers. De omvormer zet de geproduceerde gelijkstroom om in wisselstroom en is het technische en technologische hart van elke fotovoltaïsche installatie. De producten van SMA blinken uit op het vlak van betrouwbaarheid en duurzaamheid.<br>&bull; Schletter is als Duits bedrijf een topspeler op het gebied van montage- en bevestigingsmaterialen voor fotovoltaïsche installaties. Dit is een niet te onderschatten component van de installatie. De dakconstructie is bepalend voor het gebruik van het type bevestiging. Schletter beschikt over een productgamma dat voor elke type dak en alle omstandigheden een lichte maar heel stevige oplossing biedt.<br>&bull; Dehn is een Duitse toonaangevende producent van overspanningsbeveiliging. Beveiliging tegen blikseminslag is in het kader van (brand)veiligheid essentieel bij elke fotovoltaïsche installatie.<br>&bull; Enphase Energy, opgericht in 2006 in Californië, vindt dat schone energie voor iedereen beschikbaar moet zijn. Dankzij hun technologische innovaties zijn zij in staat om voor elk budget een duurzame oplossing in zonne-energie aan te bieden. Kwaliteit, betrouwbaarheid, gemak en veiligheid zijn de kernwaarden van het bedrijf. Met een energie systeem van Enphase behaalt u het maximale uit uw investering en bent u tevens voorbereid op de toekomst.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn blue" data-dismiss="modal">Sluiten</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->

                                    <!-- /.modal -->
                                    <div class="modal fade" id="modal_email" tabindex="-1" role="dialog" aria-hidden="true" style="max-width:980px">
                                        <div class="modal-dialog" style="margin-top:65px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="hideRapportField"></button>
                                                    <h4 class="modal-title">Verzend rapport naar uw e-mailadres</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="col-md-4 control-label">
                                                                    e-mail                                                                </label>
                                                                <div class="col-md-8">
                                                                    <input class="form-control input-sm" id="email_showroom" name="email_showroom">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn blue" data-dismiss="modal" onclick="send_report();">Verzenden</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->

                                    <div class="tab-content">
                                        <div class="tab-pane tab-min-height" id="tab1">

                                            <div class="row">
                                                <div class="col-sm-6 margin-bottom-10 border-right-transparent">
                                                    <div class="row margin-bottom-5">
                                                        <div class="col-sm-12">
                                                            <div class="subtitle">Oriëntatie van je dak</div>
                                                            <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                                                <img src="img/orientatie/orientatie_z_nl.png" class="img-responsive center-block margin-bottom-15" id="img_orientatie" alt="">
                                                            </div>
                                                            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                                                <div id="slider_orientatie" class="margin-bottom-40"></div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input type="hidden" class="form-control input-sm" id="orientatie" name="orientatie">
                                                                <input type="hidden" class="form-control input-sm" id="orientatie_text" name="orientatie_text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="subtitle margin-bottom-40">Kies jouw type dak</div>
                                                            <div class="row margin-bottom-30">
                                                                <div class="col-sm-3">
                                                                    <img src="img/helling/dak_plat.png" class="img-responsive center-block margin-bottom-10" alt="">
                                                                    <div class="text-center">
                                                                        <input type="radio" id="radio_helling_dak_1" name="radio_helling_dak">
                                                                        <br>
                                                                        plat dak                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <img src="img/helling/dak_licht_hellend.png" class="img-responsive center-block margin-bottom-10" alt="">
                                                                    <div class="text-center">
                                                                        <input type="radio" id="radio_helling_dak_2" name="radio_helling_dak">
                                                                        <br>
                                                                        licht hellend                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <img src="img/helling/dak_normaal_hellend.png" class="img-responsive center-block margin-bottom-10" alt="">
                                                                    <div class="text-center">
                                                                        <input type="radio" id="radio_helling_dak_3" name="radio_helling_dak" checked>
                                                                        <br>
                                                                        normaal hellend                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <img src="img/helling/dak_steil_hellend.png" class="img-responsive center-block margin-bottom-10" alt="">
                                                                    <div class="text-center">
                                                                        <input type="radio" id="radio_helling_dak_4" name="radio_helling_dak">
                                                                        <br>
                                                                        sterk hellend                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-9 control-label">of vul het aantal graden in</label>
                                                                <div class="col-sm-3">
                                                                    <input class="form-control input-sm text-right" name="helling_dak" id="helling_dak" value="38">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 margin-bottom-10 border-left-color">
                                                    <div class="row margin-bottom-5">
                                                        <div class="col-sm-12">
                                                            <div class="subtitle margin-bottom-0">Aantal bewoners</div>
                                                            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                                                <img src="img/aantal_bewoners/bewonersaantal_4.png" class="img-responsive center-block" id="img_aantal_bewoners" alt="">
                                                            </div>
                                                            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                                                <div id="slider_aantal_bewoners" class="margin-bottom-40"></div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input type="hidden" class="form-control input-sm" id="aantal_bewoners" name="aantal_bewoners">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="subtitle margin-bottom-40">Verbruik</div>
                                                            <div class="col-sm-10 col-sm-offset-1 col-xs-12">
                                                                <div id="slider_verbruik_bewoners" class="margin-bottom-30"></div>
                                                                <p class="text-center margin-bottom-10">kWh / jaar</p>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <input type="hidden" class="form-control input-sm" id="verbruik_bewoners" name="verbruik_bewoners">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="subtitle margin-bottom-10">Project</div>
                                                            <div class="form-group">
                                                                <label class="col-sm-6 control-label">type woning</label>
                                                                <div class="col-sm-6">
                                                                    <select class="form-control input-sm" name="type_woning" id="type_woning">
                                                                        <option value="option_nieuwbouw">nieuwbouw (21% BTW)</option>
                                                                        <option value="option_jonger_dan_10_jaar">jonger dan 10 jaar (21% BTW)</option>
                                                                        <option value="option_ouder_dan_10_jaar" selected>ouder dan 10 jaar (6% BTW)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-6 control-label">type panelen</label>
                                                                <div class="col-sm-6">
                                                                    <select class="form-control input-sm" name="type_panelen" id="type_panelen">
                                                                        <option value="Q CELLS PV PANEEL MONO DUO G9 ALL BLACK">Q CELLS PV PANEEL MONO DUO G9 ALL BLACK</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-6 control-label">postcode</label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control input-sm" name="postcode" id="postcode" value="">
                                                                </div>
                                                            </div>
                                                            <div id="div_bruikbaar_vloeroppervlak" style="display:none">
                                                                <div class="form-group">
                                                                    <label class="col-sm-6 control-label">bruikbare vloeroppervlakte</label>
                                                                    <div class="col-sm-6">
                                                                        <select class="form-control input-sm" id="bruikbaarVloeroppervlakKeuze" name="bruikbaarVloeroppervlakKeuze">
                                                                            <option value="option_bruikbaar_vloeroppervlak_klein">kleine woning (165m²)</option>
                                                                            <option value="option_bruikbaar_vloeroppervlak_gemiddeld" selected>gemiddelde woning (250m²)</option>
                                                                            <option value="option_bruikbaar_vloeroppervlak_groot">grote woning (400m²)</option>
                                                                            <option value="option_bruikbaar_vloeroppervlak_zelf_invullen">zelf invullen</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group" id="div_bruikbaar_vloeroppervlak_zelf_invullen" style="display:none">
                                                                    <label class="col-sm-6 control-label"></label>
                                                                    <div class="col-sm-6">
                                                                        <div class="input-group input-group-sm">
                                                                            <input class="form-control text-right" id="bruikbaarVloeroppervlak" name="bruikbaarVloeroppervlak" value="250">
                                                                            <span class="input-group-addon">m²</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" style="display:none">
                                                                <label class="col-sm-6 control-label">prijs installatie gekend</label>
                                                                <div class="col-sm-6">
                                                                    <select class="form-control input-sm" name="prijs_installatie_gekend" id="prijs_installatie_gekend">
                                                                        <option value="option_ja">ja</option>
                                                                        <option value="option_nee" selected>nee</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" id="div_prijs_installatie" style="display:none">
                                                                <label class="col-sm-6 control-label">prijs installatie</label>
                                                                <div class="col-sm-6">
                                                                    <div class="input-group input-group-sm">
                                                                        <input class="form-control text-right" name="prijs_installatie" id="prijs_installatie">
                                                                        <span class="input-group-addon">€</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-6 control-label">zelfverbruik <i class="tooltips fa fa-question-circle font-blue" data-container="body" data-placement="left" data-html="true" title="Het zelfverbruik geeft aan hoeveel procent van de geproduceerde energie meteen verbruikt wordt. Voor normale gezinnen ligt dit rond de 15% en als er overdag steeds iemand aanwezig is ligt dit iets hoger met 30%. Door te werken met een batterij kan je de geproduceerde energie opslaan en hierdoor stijgt het zelfverbruik tot rond de 60%."></i></label>
                                                                <div class="col-sm-6">
                                                                    <select class="form-control input-sm" name="zelfverbruik" id="zelfverbruik">
                                                                        <option value="15" selected>normaal (15%)</option>
                                                                        <option value="30">veel thuis (30%)</option>
                                                                        <option value="60">batterij aanwezig (60%)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-6 control-label">extra parameters</label>
                                                                <div class="col-sm-6">
                                                                    <select class="form-control input-sm" name="extra_parameters" id="extra_parameters">
                                                                        <option value="option_ja">ja</option>
                                                                        <option value="option_nee" selected>nee</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div id="div_extra_parameters" style="display:none">
                                                                <div class="form-group">
                                                                    <label class="col-sm-6 control-label">gewenste dekking eigen verbruik</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="input-group input-group-sm">
                                                                            <input class="form-control text-right" name="gewenste_dekking_eigen_verbruik" id="gewenste_dekking_eigen_verbruik" value="85">
                                                                            <span class="input-group-addon">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-6 control-label">stijging elektriciteitsprijs</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="input-group input-group-sm">
                                                                            <input class="form-control text-right" name="stijging_elektriciteitsprijs" id="stijging_elektriciteitsprijs" value="2.5">
                                                                            <span class="input-group-addon">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-6 control-label">daling rendement panelen</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="input-group input-group-sm">
                                                                            <input class="form-control text-right" name="daling_rendement_panelen" id="daling_rendement_panelen" value="0.5">
                                                                            <span class="input-group-addon">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-6 control-label">rente op een spaarboekje</label>
                                                                    <div class="col-sm-6">
                                                                        <div class="input-group input-group-sm">
                                                                            <input class="form-control text-right" name="rente_op_een_spaarboekje" id="rente_op_een_spaarboekje" value="1">
                                                                            <span class="input-group-addon">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-link" style="font-size:20px;font-weight:300;text-decoration:none;float:left;padding:20px 0 0 0" data-toggle="modal" href="#modal_info">Meer info</a>

                                        </div>
                                        <div class="tab-pane tab-min-height" id="tab2">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="subtitle">Geef je e-mailadres nog even door?</div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                        </label>
                                                        <div class="col-sm-5">
                                                            Wanneer u de onderstaande gegevens invult, wordt het rapport verstuurd naar het ingevulde e-mailadres. Velden met een * zijn verplicht in te vullen.                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group" style="display:none">
                                                        <label class="col-sm-4 control-label">
                                                            particulier/installateur                                                        </label>
                                                        <div class="col-sm-3">
                                                            <select class="form-control input-sm" id="particulier_installateur" name="particulier_installateur">
                                                                <option value="option_particulier">particulier</option>
                                                                <option value="option_installateur" selected>installateur</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            startdatum van jouw project *
                                                        </label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control input-sm" id="maand_start_datum_project" name="maand_start_datum_project" onchange="">
                                                                <option value="" hidden>-</option>
                                                                <option value="01">januari</option>
                                                                <option value="02">februari</option>
                                                                <option value="03">maart</option>
                                                                <option value="04">april</option>
                                                                <option value="05">mei</option>
                                                                <option value="06">juni</option>
                                                                <option value="07">juli</option>
                                                                <option value="08">augustus</option>
                                                                <option value="09">september</option>
                                                                <option value="10">oktober</option>
                                                                <option value="11">november</option>
                                                                <option value="12">december</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <select class="form-control input-sm" id="jaar_start_datum_project" name="jaar_start_datum_project" onchange="">
                                                                <option value="" hidden>-</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            naam *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="naam" id="naam" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            voornaam *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="voornaam" id="voornaam" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="div_bedrijf" style="display:none">
                                                        <label class="col-sm-4 control-label">
                                                            bedrijf *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="bedrijf" id="bedrijf" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            e-mail *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="email" id="email" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            straat & huisnummer *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="straat_nr" id="straat_nr" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="div_btw_nummer" style="display:none">
                                                        <label class="col-sm-4 control-label">
                                                            BTW-nummer *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="btw_nummer" id="btw_nummer" placeholder="BE1234123123" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="div_klantnummer" style="display:none">
                                                        <label class="col-sm-4 control-label">
                                                            klantennummer                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="klantnummer" id="klantnummer">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">
                                                            telefoon *
                                                        </label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control input-sm" name="telefoon" id="telefoon">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label"> </label>
                                                        <div class="col-sm-8" style="font-size:13px">
                                                            <input type="checkbox" name="checkbox_terms" id="checkbox_terms">&nbsp;&nbsp;Ik ga akkoord met de <a href="https://vdrsupport.com" target="_blank">voorwaarden</a>.                                                            <div id="error_checkbox_terms"></div>
                                                        </div>
                                                    </div>
                                                    <div id="div_vraag_installateur_1" style="display:none">
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">
                                                                heeft u een installateur?                                                            </label>
                                                            <div class="col-sm-3">
                                                                <select class="form-control input-sm" name="vraag_installateur" id="vraag_installateur">
                                                                    <option value="option_nee" selected>nee</option>
                                                                    <option value="option_ja">ja</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div id="div_vraag_installateur_2" style="display:none">
                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label">
                                                                    naam                                                                </label>
                                                                <div class="col-sm-5">
                                                                    <input class="form-control input-sm" name="vraag_installateur_naam" id="vraag_installateur_naam">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label">
                                                                    gemeente                                                                </label>
                                                                <div class="col-sm-5">
                                                                    <input class="form-control input-sm" name="vraag_installateur_gemeente" id="vraag_installateur_gemeente">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane tab-min-height" id="tab3">

                                            <div class="row">
                                                <div class="col-sm-12" id="div_alert_info_text">
                                                    <div class="alert alert-info alert-dismissable margin-bottom-10">
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                                        <strong>MELDING</strong> - Het rapport is correct verzonden naar uw e-mailadres.                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="subtitle">Resultaten</div>
                                                </div>
                                                <div class="col-sm-6 margin-bottom-10 border-right-transparent">
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">aangeraden panelen</label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control input-sm" name="aangeraden_systeem" id="aangeraden_systeem" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">vermogen installatie</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="vermogen_installatie" id="vermogen_installatie" readonly>
                                                                <span class="input-group-addon">Wp</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">vermogen omvormer</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="vermogen_omvormer" id="vermogen_omvormer" readonly>
                                                                <span class="input-group-addon">VA</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">aantal panelen</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="aantal_panelen" id="aantal_panelen" readonly>
                                                                <span class="input-group-addon"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="div_minimum_verplicht_aantal_panelen" style="display:none">
                                                        <label class="col-sm-6 control-label">min. verplicht aantal panelen</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="minimum_verplicht_aantal_panelen" id="minimum_verplicht_aantal_panelen" readonly>
                                                                <span class="input-group-addon"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">benodigde dakoppervlakte <i class="tooltips fa fa-question-circle font-blue" data-container="body" data-placement="right" data-html="true" title="Benodigde netto dakoppervlakte in m² voor een standaard opstelling. Op deze oppervlakte mogen zich geen storende elementen bevinden zoals ramen en/of een schoorsteen."></i></label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="benodigde_dakoppervlakte" id="benodigde_dakoppervlakte" readonly>
                                                                <span class="input-group-addon">m²</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 margin-bottom-10 border-left-color">
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">richtprijs systeem <i class="tooltips fa fa-question-circle font-blue" data-container="body" data-placement="left" data-html="true" title="In het bepalen van deze richtprijs wordt rekening gehouden met: PV-panelen, omvormer, bevestigings of plaatsingsmateriaal. Er wordt hier geen rekening gehouden met de prijs voor de plaatsing."></i></label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="kostprijs_systeem" id="kostprijs_systeem" readonly>
                                                                <span class="input-group-addon">€ (incl. BTW)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">premie</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="premies" id="premies" readonly>
                                                                <span class="input-group-addon">€</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">prosumentenvergoeding</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="prosumentenvergoeding" id="prosumentenvergoeding" value="0" readonly>
                                                                <span class="input-group-addon">€/jaar</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">opbrengst</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="opbrengst" id="opbrengst" readonly>
                                                                <span class="input-group-addon">€/jaar</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">terugverdientijd</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="terugverdientijd" id="terugverdientijd" readonly>
                                                                <span class="input-group-addon">jaar</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 control-label">winst op 25 jaar</label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group input-group-sm">
                                                                <input class="form-control text-right" name="winst_op_25_jaar" id="winst_op_25_jaar" readonly>
                                                                <span class="input-group-addon">€</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="subtitle">Grafiek</div>
                                                    <div id="chart_1" style="width:100%;height:350px;margin-bottom:20px"></div>
                                                    <input type="hidden" class="form-control input-sm" id="url_grafiek" name="url_grafiek">
                                                    <ul>
                                                        <li>Na 15 jaar moet de omvormer vervangen worden. Vandaar de "dip" in de grafiek bij 15 jaar.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-12" style="margin-top:35px ">
                                                    <p style="text-align: center"></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <ul class="pager wizard">
                                        <li class="previous first" style="display:none"><a class="btn-previous" href="#">EERSTE</a></li>
                                        <li class="previous"><a class="btn-previous" onfocus="this.blur();" href="#"><i class="fa fa-angle-left fa-lg fa-adjust"></i></a></li>
                                        <li class="next last" style="display:none"><a class="btn-next" href="#">LAATSTE</a></li>
                                        <li class="next"><a class="btn-next" onfocus="this.blur();" href="#" id="next_button" class="">VOLGENDE <i class="fa fa-angle-right fa-lg fa-adjust"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--=== Extra Data ===-->
                            <div id="extra_data" style="display:none">
                                <input id="source" name="source" value="pv_panelen"><br>
                                <input id="lang" name="lang" value="nl">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->

</div>

<!--[if lt IE 9]>
<script src="https://www.bouw-energie-projects.be/assets/styles/mc/global/plugins/respond.min.js"></script>
<script src="https://www.bouw-energie-projects.be/assets/styles/mc/global/plugins/excanvas.min.js"></script>
<script src="https://www.bouw-energie-projects.be/assets/styles/mc/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/assets/styles/mc/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/assets/styles/mc/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/styles/mc/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/assets/plugins/highcharts/code/highcharts.js" type="text/javascript"></script>
<script src="/assets/plugins/highcharts/code/modules/exporting.js" type="text/javascript"></script>
<script src="/assets/styles/mc/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-slider-pips.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/assets/styles/mc/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/assets/styles/mc/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<!-- BEGIN BE SCRIPTS -->
<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script>
    // showroom init
    var isShowroomActive = getUrlVars()['showroom'] === 'true';

    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    // basic functions
    $('[name=radio_helling_dak]').change(function(){
        if ($('#radio_helling_dak_1').prop('checked')) {
            $('#helling_dak').val(0);
        }
        else if ($('#radio_helling_dak_2').prop('checked')) {
            $('#helling_dak').val(30);
        }
        else if ($('#radio_helling_dak_3').prop('checked')) {
            $('#helling_dak').val(38);
        }
        else if ($('#radio_helling_dak_4').prop('checked')) {
            $('#helling_dak').val(50);
        }
    });

    $('#type_woning').change(function(){
        if ($(this).val() === 'option_nieuwbouw') {
            $('#div_bruikbaar_vloeroppervlak').show();
            $('#div_minimum_verplicht_aantal_panelen').show();
        }
        else {
            $('#div_bruikbaar_vloeroppervlak').hide();
            $('#div_minimum_verplicht_aantal_panelen').hide();
        }
    });

    $('#bruikbaarVloeroppervlakKeuze').change(function(){
        if ($(this).val() === 'option_bruikbaar_vloeroppervlak_klein') {
            $('#div_bruikbaar_vloeroppervlak_zelf_invullen').hide();
            $('#bruikbaarVloeroppervlak').val(165);
        }
        if ($(this).val() === 'option_bruikbaar_vloeroppervlak_gemiddeld') {
            $('#div_bruikbaar_vloeroppervlak_zelf_invullen').hide();
            $('#bruikbaarVloeroppervlak').val(250);
        }
        if ($(this).val() === 'option_bruikbaar_vloeroppervlak_groot') {
            $('#div_bruikbaar_vloeroppervlak_zelf_invullen').hide();
            $('#bruikbaarVloeroppervlak').val(400);
        }
        if ($(this).val() === 'option_bruikbaar_vloeroppervlak_zelf_invullen') {
            $('#div_bruikbaar_vloeroppervlak_zelf_invullen').show();
            $('#bruikbaarVloeroppervlak').val(250);
        }
    });

    $('#prijs_installatie_gekend').change(function(){
        if ($(this).val() === 'option_ja') {
            $('#div_prijs_installatie').show();
        }
        else {
            $('#div_prijs_installatie').hide();
        }
    });

    $('#extra_parameters').change(function(){
        if ($(this).val() === 'option_ja') {
            $('#div_extra_parameters').show();
        }
        else {
            $('#div_extra_parameters').hide();
        }
    });

    $('#particulier_installateur').change(function(){
        if ($(this).val() === 'option_particulier') {
            $('#div_bedrijf').hide();
            $('#div_btw_nummer').hide();
            $('#div_klantnummer').hide();
            $('#div_vraag_installateur_1').show();
        }
        if ($(this).val() === 'option_installateur') {
            $('#div_bedrijf').show();
            $('#div_btw_nummer').show();
            $('#div_klantnummer').show();
            $('#div_vraag_installateur_1').hide();
        }
    });

    $('#vraag_installateur').change(function(){
        if ($(this).val() === 'option_ja') {
            $('#div_vraag_installateur_2').show();
        }
        if ($(this).val() === 'option_nee') {
            $('#div_vraag_installateur_2').hide();
        }
    });

    // slider orientatie
    var taal_keuze = $('#taal_keuze').val().toLowerCase();
    var labels_orientatie;
    if (taal_keuze === 'nl') {
        labels_orientatie = ['N', '', 'NW', '', 'W', '','ZW','', 'Z', '', 'ZO', '','O', '', 'NO', '', 'N'];
    }
    if (taal_keuze === 'fr') {
        labels_orientatie = ['N', '', 'NO', '', 'O', '','SO','', 'S', '', 'SE', '','E', '', 'NE', '', 'N'];
    }

    $('#slider_orientatie').slider({
        value: 9,
        min: 1,
        max: 17,
        step: 1,
        create: function(event, ui) {
            $('#orientatie').val(0);
            $('#orientatie_text').val('Z');
        },
        slide: function(event, ui) {
            var orientatie = ui.value;
            var img_orientatie = $('#img_orientatie');
            if (orientatie === 1) {
                $('#orientatie').val(180);
                $('#orientatie_text').val('N');
                img_orientatie.attr('src', 'img/orientatie/orientatie_n_' + taal_keuze + '.png');
            }
            if (orientatie === 2) {
                $('#orientatie').val(158);
                $('#orientatie_text').val('NNW');
                img_orientatie.attr('src', 'img/orientatie//orientatie_nnw_' + taal_keuze + '.png');
            }
            if (orientatie === 3) {
                $('#orientatie').val(135);
                $('#orientatie_text').val('NW');
                img_orientatie.attr('src', 'img/orientatie//orientatie_nw_' + taal_keuze + '.png');
            }
            if (orientatie === 4) {
                $('#orientatie').val(113);
                $('#orientatie_text').val('WNW');
                img_orientatie.attr('src', 'img/orientatie//orientatie_wnw_' + taal_keuze + '.png');
            }
            if (orientatie === 5) {
                $('#orientatie').val(90);
                $('#orientatie_text').val('W');
                img_orientatie.attr('src', 'img/orientatie//orientatie_w_' + taal_keuze + '.png');
            }
            if (orientatie === 6) {
                $('#orientatie').val(68);
                $('#orientatie_text').val('WZW');
                img_orientatie.attr('src', 'img/orientatie//orientatie_wzw_' + taal_keuze + '.png');
            }
            if (orientatie === 7) {
                $('#orientatie').val(45);
                $('#orientatie_text').val('ZW');
                img_orientatie.attr('src', 'img/orientatie//orientatie_zw_' + taal_keuze + '.png');
            }
            if (orientatie === 8) {
                $('#orientatie').val(23);
                $('#orientatie_text').val('ZZW');
                img_orientatie.attr('src', 'img/orientatie//orientatie_zzw_' + taal_keuze + '.png');
            }
            if (orientatie === 9) {
                $('#orientatie').val(0);
                $('#orientatie_text').val('Z');
                img_orientatie.attr('src', 'img/orientatie//orientatie_z_' + taal_keuze + '.png');
            }
            if (orientatie === 10) {
                $('#orientatie').val(338);
                $('#orientatie_text').val('ZZO');
                img_orientatie.attr('src', 'img/orientatie//orientatie_zzo_' + taal_keuze + '.png');
            }
            if (orientatie === 11) {
                $('#orientatie').val(315);
                $('#orientatie_text').val('ZO');
                img_orientatie.attr('src', 'img/orientatie//orientatie_zo_' + taal_keuze + '.png');
            }
            if (orientatie === 12) {
                $('#orientatie').val(293);
                $('#orientatie_text').val('OZO');
                img_orientatie.attr('src', 'img/orientatie//orientatie_ozo_' + taal_keuze + '.png');
            }
            if (orientatie === 13) {
                $('#orientatie').val(270);
                $('#orientatie_text').val('O');
                img_orientatie.attr('src', 'img/orientatie//orientatie_o_' + taal_keuze + '.png');
            }
            if (orientatie === 14) {
                $('#orientatie').val(248);
                $('#orientatie_text').val('ONO');
                img_orientatie.attr('src', 'img/orientatie//orientatie_ono_' + taal_keuze + '.png');
            }
            if (orientatie === 15) {
                $('#orientatie').val(225);
                $('#orientatie_text').val('NO');
                img_orientatie.attr('src', 'img/orientatie//orientatie_no_' + taal_keuze + '.png');
            }
            if (orientatie === 16) {
                $('#orientatie').val(203);
                $('#orientatie_text').val('NNO');
                img_orientatie.attr('src', 'img/orientatie//orientatie_nno_' + taal_keuze + '.png');
            }
            if (orientatie === 17) {
                $('#orientatie').val(180);
                $('#orientatie_text').val('N');
                img_orientatie.attr('src', 'img/orientatie//orientatie_n_' + taal_keuze + '.png');
            }
        }
    }).slider('pips', {
        step: 1,
        rest: 'label',
        labels: labels_orientatie
    });

    // slider verbruik bewoners
    $('#slider_aantal_bewoners').slider({
        value: 4,
        min: 1,
        max: 7,
        step: 1,
        create: function(event, ui) {
            $('#aantal_bewoners').val(4);
        },
        slide: function(event, ui) {
            $('#aantal_bewoners').val(ui.value);
            var aantal_bewoners = ui.value;
            var img_aantal_bewoners = $('#img_aantal_bewoners');
            if (aantal_bewoners === 1) {
                $('#slider_verbruik_bewoners').slider('value',1900);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_1.png');
            }
            if (aantal_bewoners === 2) {
                $('#slider_verbruik_bewoners').slider('value',3200);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_2.png');
            }
            if (aantal_bewoners === 3) {
                $('#slider_verbruik_bewoners').slider('value',3300);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_3.png');
            }
            if (aantal_bewoners === 4) {
                $('#slider_verbruik_bewoners').slider('value',4500);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_4.png');
            }
            if (aantal_bewoners === 5) {
                $('#slider_verbruik_bewoners').slider('value',5500);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_5.png');
            }
            if (aantal_bewoners === 6) {
                $('#slider_verbruik_bewoners').slider('value',5700);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_6.png');
            }
            if (aantal_bewoners === 7) {
                $('#slider_verbruik_bewoners').slider('value',5900);
                img_aantal_bewoners.attr('src', 'img/aantal_bewoners/bewonersaantal_7.png');
            }
        }
    }).slider('pips', {
        step: 1,
        rest: 'label'
    });

    // slider verbruik bewoners
    $('#slider_verbruik_bewoners').slider({
        value: 4500,
        min: 0,
        max: 10000,
        step: 100,
        create: function(event, ui) {
            $('#verbruik_bewoners').val(4500);
        },
        slide: function(event, ui) {
            $('#verbruik_bewoners').val(ui.value);
        }
    }).slider('pips', {
        step: 20,
        rest: 'label'
    }).slider('float');

    // Create the chart
    var chart1 = Highcharts.chart('chart_1', {

        chart : {
            backgroundColor: null,
            style: {
                fontFamily: 'proxima-nova,sans-serif'
            }
        },

        credits: {
            enabled: false
        },

        exporting: {
            enabled: false,
            sourceWidth: 864,
            sourceHeight: 360
        },

        title:{
            text: null
        },

        xAxis: {
            categories: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25'],
            title: {
                text: 'terugverdientijd (jaren)'
            },
            crosshair: true
        },
        yAxis: {
            title: {
                text: 'winst (€)'
            }
        },

        tooltip: {
            shared: true
        },

        legend: {
            enabled: false
        },

        plotOptions: {
            area: {
                fillOpacity: 0.2
            }
        },

        series: [{
            name: 'winst',
            type: 'area',
            color: '#00cc66',
            negativeColor: '#f23225',
            data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
            marker: {
                symbol: 'circle'
            },
            tooltip: {
                valuePrefix: '€ '
            }
        }]

    });

    $.validator.addMethod("notEqualDefault", function(value, element) {
        return value !== '-';
    });

    $.validator.addMethod("btw_nummer_check", function(value, element) {
        return ((value.substring(0, 2) === 'BE' || value.substring(0, 2) === 'be') && (97 - (value.substring(2, 10)%97)) === (1 * value.substring(10)));
    });

    $.validator.addMethod("email_point_check", function(value, element) {
        return (value.split("@")[1].indexOf(".") !== -1);
    });

    var $validator = $("#form_inputs").validate({
        rules: {
            postcode: {
                required: true,
                number: true,
                minlength: 4,
                maxlength: 4
            },
            prijs_excl_btw: {
                required: true,
                number: true
            },
            maand_start_datum_project: {
                required: true
            }
            ,
            jaar_start_datum_project: {
                required: true
            },
            voornaam: {
                required: true
            },
            naam: {
                required: true
            },
            email: {
                required: true,
                email: true,
                email_point_check: true
            },
            straat_nr: {
                required: true
            },
            telefoon: {
                required: true
            },
            checkbox_terms: {
                required: true
            },
            bedrijf: {
                required: true
            },
            btw_nummer: {
                required: true,
                minlength: 12,
                maxlength: 12,
                btw_nummer_check: true
            }
        },
        messages: {
            postcode: {
                required: "Vul een geldige postcode in.",
                number: "Vul een geldige postcode in.",
                minlength: "Vul een geldige postcode in.",
                maxlength: "Vul een geldige postcode in."
            },
            prijs_excl_btw: {
                required: "Vul een prijs in.",
                number: "Vul een prijs in."
            },
            maand_start_datum_project: {
                required: "Selecteer een optie."
            },
            jaar_start_datum_project: {
                required: "Selecteer een optie."
            },
            voornaam: {
                required: "Vul uw voornaam in."
            },
            naam: {
                required: "Vul uw naam in."
            },
            email: {
                required: "Vul een geldig e-mailadres in.",
                email: "Vul een geldig e-mailadres in.",
                email_point_check: "Vul een geldig e-mailadres in."
            },
            straat_nr: {
                required: "Vul uw straat en huisnummer in."
            },
            telefoon: {
                required: "Vul een waarde in."
            },
            checkbox_terms: {
                required: "De voorwaarden dienen aanvaard te worden."
            },
            bedrijf: {
                required: "Vul uw bedrijfsnaam in."
            },
            btw_nummer: {
                required: "Vul een geldig BTW-nummer in.",
                minlength: "Vul een geldig BTW-nummer in.",
                maxlength: "Vul een geldig BTW-nummer in.",
                btw_nummer_check: "Vul een geldig BTW-nummer in."
            }
        },
        errorPlacement: function(error, element) {
            var placement_input_group = $(element).parent('.input-group');

            if (placement_input_group.hasClass('input-group')) {
                $(placement_input_group).siblings('.error-placement').append(error);
            } else {
                error.insertAfter(element);
            }
        }
    });

    function send_graph_report() {
        highchartsSvgToImage($('#chart_1').highcharts(), 600, 300, 2, function(dataUrl) {
            $('#url_grafiek').val(dataUrl);
            console.log('graph report ok');
            send_report();
        });
    }

    function highchartsSvgToImage(chart, width, height, scale, callback) {
        let renderWidth = width * scale;
        let renderHeight = height * scale;

        let svg = chart.getSVG({
            options: JSON.stringify(chart.options)
        });

        let canvas = document.createElement('canvas');
        canvas.height = renderHeight;
        canvas.width = renderWidth;
        let image = new Image();
        image.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svg)));
        image.addEventListener('load', function() {
            let ctx = canvas.getContext('2d');
            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, renderWidth, renderHeight);
            ctx.drawImage(this, 0, 0, renderWidth, renderHeight);
            callback(canvas.toDataURL('image/jpeg'));
        }, false);
    }

    function send_report()
    {
        if (isShowroomActive === true) {
            $('#particulier_installateur').val('option_particulier').trigger('change');
            $('#naam').val('-');
            $('#email').val($('#email_showroom').val());
        }

        $.ajax({
            type: "POST",
            url: "https://www.bouw-energie-projects.be/assets/modules/sackzelfbouw/pv_panelen/report/report.php",
            data: $("#form_inputs").serializeArray(),
            success: function() {
                console.log('send report ok');
            },
            error: function (jqXHR, exception) {
                console.log(jqXHR);
            }
        });
    }

    $('#rootwizard').bootstrapWizard({
        onTabClick: function(tab, navigation, index) {
            return false;
        },
        onNext: function(tab, navigation, index) {
            var $valid = $("#form_inputs").valid();
            if (!$valid) {
                $validator.focusInvalid();
                return false;
            }
            $('li.active').addClass('done');
            $('li.active').next().removeClass('inactief');
            if (index == 2 || (isShowroomActive === true && index == 1)) {
                $.when(send_to_calculation()).done(function() {
                    setTimeout(function(){
                        chart1.reflow();
                    }, 10);
                    setTimeout(function(){
                        send_graph_report();
                    }, 2000);
                });
                if (isShowroomActive === true) {
                    $('#button_verzend_rapport').show();
                }
            }
        },
        onPrevious: function(tab, navigation, index) {
            $('li.active').prev().removeClass('done');
            $('li.active').addClass('inactief');
        }
    });

    if (isShowroomActive === true) {
        $('#rootwizard').bootstrapWizard('hide', 1);
        $('#li_step_3').html('2');
        $('#div_alert_info_text').hide();
    }
</script>
<script src="js/calculation.js?random=65abfcce68714"></script>
<script src="js/iframeResizer.contentWindow.min.js"></script>
<!-- END BE SCRIPTS -->
</body>

</html>
