var simplemaps_usmap_mapdata = {



  main_settings:{

    //General settings

    width: 'responsive', //'700' or 'responsive'

    background_color: '#fcfcfc',  

    background_transparent: 'no',

    border_color: '#ffffff',

    pop_ups: 'detect', //on_click, on_hover, or detect
    
    url_new_tab: 'yes',

  

    //State defaults #88A4BC- light blue

    state_description: 'No Status',

    state_color: '#d1d2d4', //#88A4BC

    state_hover_color: '#d1d2d4',//#3B729F

    state_url: '',

    border_size: 1.5,   

    all_states_inactive: 'no',

    all_states_zoomable: 'no',    

    

    //Location defaults

    location_description:  'Location description',

    location_color: '#FF0067',

    location_opacity: .8,

    location_hover_opacity: 1,

    location_url: '',

    location_size: 25,

    location_type: '', // circle, square, image

    location_image_source: 'frog.png', //name of image in the map_images folder   

    location_border_color: '#FFFFFF',

    location_border: 2,

    location_hover_border: 2.5,       

    all_locations_inactive: 'no',

    all_locations_hidden: 'no',

    

    //Labels

    label_color: '#444444', 

    label_hover_color: '#efefef',//#d5ddec    

    label_size: 20,

    label_font: 'Arial',

    hide_labels: 'no',

    hide_eastern_labels: 'no',

    

    //Zoom settings

    zoom: 'yes', //use default regions    

    back_image: 'no',   //Use image instead of arrow for back zoom        

    arrow_color: '#3B729F',

    arrow_color_border: '#88A4BC',

    initial_back: 'no', //Show back button when zoomed out and do this JavaScript upon click    

    initial_zoom: -1,  //-1 is zoomed out, 0 is for the first continent etc 

    initial_zoom_solo: 'no', //hide adjacent states when starting map zoomed in

    region_opacity: 1,

    region_hover_opacity: .6,

    zoom_out_incrementally: 'yes',  // if no, map will zoom all the way out on click

    zoom_percentage: .99,

    zoom_time: .5, //time to zoom between regions in seconds

    

    //Popup settings

    popup_color: 'white',

    popup_opacity: .9,

    popup_shadow: 1,

    popup_corners: 5,

    popup_font: '12px/1.5 Verdana, Arial, Helvetica, sans-serif',

    popup_nocss: 'no', //use your own css 

    

    //Advanced settings

    div:'map',

    auto_load: 'yes',   

    url_new_tab: 'yes', 

    images_directory: 'default', //e.g. 'map_images/'

    fade_time:  .1, //time to fade out    

    link_text: '(Link)'  //Text mobile browsers will see for links  

    

  },

  state_specific:{"GU":{"name":"GU Bill 124-34","hide":"no","url":"http:\/\/www.guamlegislature.com\/Bills_Introduced_34th\/Bill%20No.%20124-34%20(COR).pdf","colorkey":"delayed","description":"Status: <font color=\"#b4b1d0\"><strong> IMLC Passed; Implementation Delayed<\/strong><\/font> <br\/>Date: 6\/26\/17<br\/>Click for bill language","color":"#b4b1d0","hover_color":"#b4b1d0"},"VI":{"name":"Virgin Islands","hide":"no"},"PR":{"name":"Puerto Rico","hide":"no"},"MP":{"name":"Northern Mariana Islands","hide":"no"},"WV":{"url":"http:\/\/www.legis.state.wv.us\/Bill_Status\/bills_history.cfm?INPUT=2496&year=2015&sessiontype=RS","name":"West Virginia HB2496","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 3\/31\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"MD":{"url":"http:\/\/mgaleg.maryland.gov\/webmga\/frmMain.aspx?id=SB0234&stab=01&pid=billpage&tab=subject3&ys=2018RS","name":"Maryland SB 234","colorkey":"delayed","description":"Status: <font color=\"#b4b1d0\"><strong> IMLC Passed; Implementation Delayed<\/strong><\/font> <br\/>Date: 1\/19\/2018<br\/>Click for bill language","color":"#b4b1d0","hover_color":"#b4b1d0"},"NH":{"url":"http:\/\/www.gencourt.state.nh.us\/bill_Status\/bill_status.aspx?lsr=2680&sy=2016&sortoption=&txtsessionyear=2016&txtbillnumber=hb1665","name":"New Hampshire HB1665","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 05\/05\/2016<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"PA":{"url":"http:\/\/www.legis.state.pa.us\/CFDOCS\/Legis\/PN\/Public\/btCheck.cfm?txtType=PDF&sessYr=2015&sessInd=0&billBody=H&billTyp=B&billNbr=1619&pn=2348","name":"Pennsylvania HB1619","colorkey":"delayed","description":"Status: <font color=\"#b4b1d0\"><strong> IMLC Passed; Implementation Delayed<\/strong><\/font> <br\/>Date: 10\/26\/2016<br\/>Click for bill language","color":"#b4b1d0","hover_color":"#b4b1d0"},"IL":{"url":"http:\/\/www3.illinois.gov\/PressReleases\/ShowPressRelease.cfm?SubjectID=2&RecNum=13164","name":"Illinois HR3680","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 7\/21\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"WI":{"url":"http:\/\/docs.legis.wisconsin.gov\/2015\/related\/acts\/116","name":"Wisconsin AB253","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 12\/14\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"AL":{"url":"http:\/\/alisondb.legislature.state.al.us\/ALISON\/SearchableInstruments\/2015RS\/PrintFiles\/SB125-int.pdf","name":"Alabama SB125","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 05\/19\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"IA":{"url":"https:\/\/www.legis.iowa.gov\/docs\/Published\/LGI\/86\/SF273.pdf","name":"Iowa SB273","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 7\/02\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"MN":{"url":"https:\/\/www.revisor.mn.gov\/bills\/text.php?number=SF253&version=0&session=ls89&session_year=2015&session_number=0","name":"Minnesota SF253","colorkey":"issuing","description":"Status: <font color=\"#3398cc\"><strong>IMLC Member State Issuing Licenses<\/strong><\/font> <br\/>Date: 5\/19\/2015<br\/>Click for bill language","color":"#3398cc","hover_color":"#3398cc"},"KS":{"url":"http:\/\/www.kslegislature.org\/li\/b2015_16\/measures\/hb2615\/","name":"Kansas HB2456","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 5\/13\/2016<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"SD":{"url":"http:\/\/legis.sd.gov\/Legislative_Session\/Bills\/Bill.aspx?Bill=63&Session=2015&cookieCheck=true","name":"South Dakota SB63","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 3\/12\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"WY":{"url":"http:\/\/legisweb.state.wy.us\/2015\/Introduced\/HB0107.pdf","name":"Wyoming HB0107","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 2\/27\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"MT":{"url":"http:\/\/leg.mt.gov\/bills\/2015\/billhtml\/HB0429.htm","name":"Montana HB429","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 4\/08\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"CO":{"url":"http:\/\/www.leg.state.co.us\/CLICS\/CLICS2016A\/csl.nsf\/billcontainers\/B4D18CB692AE45B287257F24006450B9\/$FILE\/1047_01.pdf","name":"Colorado HB1047","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 6\/08\/2016<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"UT":{"url":"http:\/\/le.utah.gov\/~2015\/bills\/static\/HB0121.html","name":"Utah HB121","colorkey":"issuing","description":"Status: <font color=\"#3398cc\"><strong>IMLC Member State Issuing Licenses<\/strong><\/font> <br\/>Date: 3\/20\/2015<br\/>Click for bill language","color":"#3398cc","hover_color":"#3398cc"},"AZ":{"url":"https:\/\/legiscan.com\/AZ\/bill\/HB2502","name":"Arizona HB2502","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 5\/11\/2016<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"NV":{"url":"https:\/\/www.leg.state.nv.us\/App\/NELIS\/REL\/78th2015\/Bill\/1718\/Overview","name":"Nevada SB251","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 5\/27\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"ID":{"url":"http:\/\/www.legislature.idaho.gov\/legislation\/2015\/H0150.htm","name":"Idaho HB150","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 3\/25\/2015<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"MS":{"url":"http:\/\/billstatus.ls.state.ms.us\/2016\/pdf\/history\/HB\/HB0041.xml","name":"Mississippi HB41","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 5\/17\/2016<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"NE":{"url":"http:\/\/www.nebraskalegislature.gov\/bills\/view_bill.php?DocumentID=31054","name":"Nebraska LB88","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 1\/5\/17<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"WA":{"url":"http:\/\/app.leg.wa.gov\/billsummary?BillNumber=1337&Year=2017","name":"Washington SB5221","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 1\/17\/17<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"MI":{"url":"http:\/\/www.legislature.mi.gov\/(S(slmcvtw3es0xdl5dibx5duyd))\/mileg.aspx?page=getobject&objectname=2017-HB-4066&query=on","name":"Michigan HB4066","colorkey":"introduced","description":"Status: <font color=\"#a0dae3\"><strong>Introduced<\/strong><\/font> <br\/>Date: 1\/25\/17<br\/>Click for bill language","color":"#a0dae3","hover_color":"#a0dae3"},"TN":{"url":"http:\/\/wapp.capitol.tn.gov\/apps\/BillInfo\/default.aspx?BillNumber=HB0664","name":"Tennessee HB 664","colorkey":"delayed","description":"Status: <font color=\"#b4b1d0\"><strong> IMLC Passed; Implementation Delayed<\/strong><\/font> <br\/>Date: 2\/09\/17<br\/>Click for bill language","color":"#b4b1d0","hover_color":"#b4b1d0"},"DC":{"url":"http:\/\/lims.dccouncil.us\/Legislation\/B22-0177?FromSearchResults=true","name":"D.C. B 177","colorkey":"delayed","description":"Status: <font color=\"#b4b1d0\"><strong> IMLC Passed; Implementation Delayed<\/strong><\/font> <br\/>Date: 3\/07\/17<br\/>Click for bill language","color":"#b4b1d0","hover_color":"#b4b1d0"},"ME":{"url":"https:\/\/legislature.maine.gov\/LawMakerWeb\/summary.asp?ID=280064625","name":"Maine LD 1359","colorkey":"issuing loq","description":"Status: <font color=\"#136c9a\"><strong>IMLC State Issuing LOQs & Licenses<\/strong><\/font> <br\/>Date: 4\/06\/17<br\/>Click for bill language","color":"#136c9a","hover_color":"#136c9a"},"VT":{"url":"https:\/\/legislature.vermont.gov\/bill\/status\/2018\/S.253","name":"VT S 253","colorkey":"delayed","description":"Status: <font color=\"#b4b1d0\"><strong> IMLC Passed; Implementation Delayed<\/strong><\/font> <br\/>Date: 12\/21\/17<br\/>Click for bill language","color":"#b4b1d0","hover_color":"#b4b1d0"},"GA":{"url":"http:\/\/www.legis.ga.gov\/Legislation\/en-US\/display\/20172018\/HB\/637","name":"GA HB 637","colorkey":"introduced","description":"Status: <font color=\"#a0dae3\"><strong>Introduced<\/strong><\/font> <br\/>Date: 3\/28\/17<br\/>Click for bill language","color":"#a0dae3","hover_color":"#a0dae3"},"NY":{"url":"http:\/\/assembly.state.ny.us\/ALIS\/?bn=S07579&term=2017#jump_to_Summary","name":"NY SB 7579","colorkey":"introduced","description":"Status: <font color=\"#a0dae3\"><strong>Introduced<\/strong><\/font> <br\/>Date: 1\/26\/18<br\/>Click for bill language","color":"#a0dae3","hover_color":"#a0dae3"},"KY":{"url":"https:\/\/track.govhawk.com\/public\/bills\/1035226","name":"KY SB 153","colorkey":"introduced","description":"Status: <font color=\"#a0dae3\"><strong>introduced<\/strong><\/font> <br\/>Date: 2\/20\/2018<br\/>Click for bill language","color":"#a0dae3","hover_color":"#a0dae3"},"SC":{"url":"http:\/\/www.scstatehouse.gov\/billsearch.php?billnumbers=5174&session=122&summary=B","name":"SC HB 5174","colorkey":"introduced","description":"Status: <font color=\"#a0dae3\"><strong>Introduced<\/strong><\/font> <br\/>Date: 3\/21\/2018<br\/>Click for bill language","color":"#a0dae3","hover_color":"#a0dae3"}}
}