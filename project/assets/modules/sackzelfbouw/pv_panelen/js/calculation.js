function send_to_calculation() {
    var helling = Math.round(document.getElementById("helling_dak").value);
    var orientatie = document.getElementById("orientatie").value;
    var verbruikElektriciteit = document.getElementById("verbruik_bewoners").value;
    var bruikbaarVloeroppervlak = document.getElementById("bruikbaarVloeroppervlak").value;
    var postcode = document.getElementById("postcode").value;
    var dekkingEigenVerbruik = document.getElementById("gewenste_dekking_eigen_verbruik").value;
    var zelf_verbruik = document.getElementById("zelfverbruik").value;

    // Op te nemen panelen
    var piek_vermogen_panelen;
    var prijs_panelen;
    var type_panelen = document.getElementById("type_panelen").value;

    console.log("ok");
    console.log(helling);
    console.log(type_panelen);

    // Zie mail "RE: SPF ViolationRe: SPF ViolationFwd: inschatting prijs PV installatie" van jef.debaere@sackzelfbouw.be op 01/06/2022
    // Opmerking Jef: Deze prijzen zijn inclusief PV panelen, omvormer + bevestigingsmaterialen
    if (helling == 0) {
        if (type_panelen == 'Q CELLS PV PANEEL MONO DUO G9 ALL BLACK') {
            piek_vermogen_panelen = 335;
            prijs_panelen = 1.3;
        }
    } else {
        if (type_panelen == 'Q CELLS PV PANEEL MONO DUO G9 ALL BLACK') {
            piek_vermogen_panelen = 335;
            prijs_panelen = 1.2;
        }
    }

    console.log(type_panelen);
    console.log(piek_vermogen_panelen);
    console.log(prijs_panelen);

    var stijgingElektriciteitsprijs;
    var dalingRendementVanDePanelen;
    var renteOpEenSpaarboekje;

    if (document.getElementById("extra_parameters").value == "option_ja") {
        var stijgingElektriciteitsprijs = document.getElementById("stijging_elektriciteitsprijs").value / 100;
        var dalingRendementVanDePanelen = document.getElementById("daling_rendement_panelen").value / 100;
        var renteOpEenSpaarboekje = document.getElementById("rente_op_een_spaarboekje").value / 100;
    } else {
        // Als deze getallen nul zijn wordt de waarde uit de database overgenomen	
        var stijgingElektriciteitsprijs = 0;
        var dalingRendementVanDePanelen = 0;
        var renteOpEenSpaarboekje = 0;
    }

    $.post("https://www.bouw-energie-projects.be/assets/modules/ROI_berekeningen/PV_installatie/factorEPB.php", {
        q: orientatie,
        y: helling
    }, function(result) {
        var factorEPB = result;
        var aangepasteFactorEPB = 1.175 * factorEPB; // EPB is een beetje streng, dus we schatten dit 17.5% beter in dan EPB

        var gewensteProductieElektriciteit = verbruikElektriciteit * dekkingEigenVerbruik / 100;
        var aantalPanelen = Math.ceil(gewensteProductieElektriciteit / (aangepasteFactorEPB * piek_vermogen_panelen));
        var vermogen_PV_installatie = piek_vermogen_panelen * aantalPanelen;

        var vermogen_omvormer;
        var prijs_omvormer;

        // Besproken met Jef De Baere: omvormer moet juist iets groter zijn dan 25% van de installatie.
        vermogen_omvormer = 0.75 * vermogen_PV_installatie;
        check = 0;
        if (vermogen_omvormer <= 1500 && check == 0) {
            vermogen_omvormer = 1500;
            check = 1;
        } else if (vermogen_omvormer <= 2000 && check == 0) {
            vermogen_omvormer = 2000;
            check = 1;
        } else if (vermogen_omvormer <= 2500 && check == 0) {
            vermogen_omvormer = 2500;
            check = 1;
        } else if (vermogen_omvormer <= 3000 && check == 0) {
            vermogen_omvormer = 3000;
            check = 1;
        } else if (vermogen_omvormer <= 3600 && check == 0) {
            vermogen_omvormer = 3600;
            check = 1;
        } else if (vermogen_omvormer <= 4000 && check == 0) {
            vermogen_omvormer = 4000;
            check = 1;
        } else if (vermogen_omvormer <= 5000 && check == 0) {
            vermogen_omvormer = 5000;
            check = 1;
        } else if (vermogen_omvormer <= 6000 && check == 0) {
            vermogen_omvormer = 6000;
            check = 1;
        } else {
            vermogen_omvormer = 8000;
        }

        // Prijzen omvormers hebben we van Cebeo gekregen
        if (vermogen_PV_installatie <= 2143) {
            prijs_omvormer = 872;
        }
        if (vermogen_PV_installatie > 2143 && vermogen_PV_installatie <= 2857) {
            prijs_omvormer = 1030;
        }
        if (vermogen_PV_installatie > 2857 && vermogen_PV_installatie <= 3571) {
            prijs_omvormer = 1174;
        }
        if (vermogen_PV_installatie > 3571 && vermogen_PV_installatie <= 4286) {
            prijs_omvormer = 1477.5;
        }
        if (vermogen_PV_installatie > 4286 && vermogen_PV_installatie <= 5143) {
            prijs_omvormer = 1398;
        }
        if (vermogen_PV_installatie > 5143 && vermogen_PV_installatie <= 5714) {
            prijs_omvormer = 1618.5;
        }
        if (vermogen_PV_installatie > 5714 && vermogen_PV_installatie <= 7143) {
            prijs_omvormer = 1730.5;
        }
        if (vermogen_PV_installatie > 7143 && vermogen_PV_installatie <= 8571) {
            prijs_omvormer = 2110;
        }
        if (vermogen_PV_installatie > 8571) {
            prijs_omvormer = 2532;
        }

        var prijs_particulier_excl_btw;

        if (document.getElementById("prijs_installatie_gekend").value === 'option_ja') {
            prijs_particulier_excl_btw = 1 * document.getElementById("prijs_installatie").value;
        } else {
            prijs_particulier_excl_btw = vermogen_PV_installatie * prijs_panelen; // Voor Sack zit de prijs van de omvormer in de Wpiekprijs van hierboven en verder wordt de installatiekost nie in rekening gebracht.
        }

        var type_project;
        if (document.getElementById("type_woning").value === 'option_ouder_dan_10_jaar') {
            type_project = 'verbouwing';
        } else {
            type_project = 'nieuwbouw';
        }


        var benodigdDakoppervlak;
        if (helling == 0) {
            benodigdDakoppervlak = 16 * vermogen_PV_installatie / 1000;
        } else {
            benodigdDakoppervlak = 8 * vermogen_PV_installatie / 1000;
        }

        // als geproduceerde_energie niet gekend is -> 0 invullen en orriëntatie en helling meegeven
        // Voor 06/2022 werd ook ", zelfbouw: 1" als parameter meegestuurd naar ROI_PV_installatie_v3.php en dan krijg je geen subsidie omdat installatie niet door gecertificeerde installateur geplaatst is.
        $.post("https://www.bouw-energie-projects.be/assets/modules/ROI_berekeningen/PV_installatie/ROI_PV_installatie_v3.php", {
            vermogen_PV_installatie: vermogen_PV_installatie,
            vermogen_omvormer: vermogen_omvormer,
            geproduceerde_energie: 0,
            prijs_omvormer: prijs_omvormer,
            prijs_particulier_excl_btw: prijs_particulier_excl_btw,
            type_project: type_project,
            postcode: postcode,
            helling: helling,
            orientatie: orientatie,
            bruikbaarVloeroppervlak: bruikbaarVloeroppervlak,
            piek_vermogen_panelen: piek_vermogen_panelen,
            stijgingElektriciteitsprijs: stijgingElektriciteitsprijs,
            dalingRendementVanDePanelen: dalingRendementVanDePanelen,
            renteOpEenSpaarboekje: renteOpEenSpaarboekje,
            zelf_verbruik: zelf_verbruik
        }, function(data_string) {

            var data = JSON.parse(data_string);
            console.log(data);

            document.getElementById("aangeraden_systeem").value = type_panelen;
            document.getElementById("vermogen_installatie").value = Math.round(vermogen_PV_installatie);
            document.getElementById("vermogen_omvormer").value = Math.round(vermogen_omvormer);
            document.getElementById("aantal_panelen").value = aantalPanelen;
            document.getElementById("minimum_verplicht_aantal_panelen").value = Math.round(data.minimumAantalPanelenAfgerond);
            document.getElementById("benodigde_dakoppervlakte").value = Math.round(benodigdDakoppervlak);
            document.getElementById("kostprijs_systeem").value = Math.round(data.prijs_particulier_incl_btw);
            document.getElementById("premies").value = Math.round(data.premie_PV_installatie);
            document.getElementById("opbrengst").value = Math.round(data.opbrengst);
            document.getElementById("terugverdientijd").value = data.terugverdientijd;
            document.getElementById("winst_op_25_jaar").value = Math.round(data.winst_op_25_jaar);

            var graph_netto_gecumuleerde_inkomsten = data.graph_netto_gecumuleerde_inkomsten;

            // redraw the chart
            var chart1 = $('#chart_1').highcharts();
            chart1.series[0].setData(graph_netto_gecumuleerde_inkomsten, false);
            chart1.series[0].options.color = "#00cc66";
            chart1.series[0].options.negativeColor = "#ee2d24";
            chart1.series[0].update(chart1.series[0].options);
            $('#chart_1').highcharts().redraw();
        });
    });

}