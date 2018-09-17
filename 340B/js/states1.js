 




/////states pagevar HTML = [],
var STATES = [];
var current, jsonData;


jQuery(function(){
    loadAjax('results.json');
});

function loadAjax(file){
    current = file;
    jQuery.ajax({
        url: "http://18.191.224.212/qa/uploads/json/"+file,
         type: 'GET',
         dataType: "json",
		data: [],
		success: showData
	});	
}


function showData(data, status, xhr) {
	if(data.length){
	    switch(current){
	        case 'results.json':
	            STATES.length = 0;
	            STATES.push('<option value="">Select State</option>');
        		for (var i = 0; i < data.length; i++) {
        			createStates(data[i]);		
        		}
        		jQuery('#states').html(STATES);
                loadAjax('sectiondata.json');
        	break;
            case 'sectiondata.json':
                console.log(data);
                jsonData = data;
            break;
    	}
	}
}


function createStates(arr) {
    var html = '<option value="'+arr.name+'">'+arr.name+'</option>';
    STATES.push(html); 
}

jQuery(document).on('change', '#states', function(){
    var val = jQuery(this).val();
    checkJson(val);     
});

function checkJson(abb){

    var thisData='';
    jQuery.each( jsonData, function( key, value ) {
        if(value.state===abb){
           // console.log(value);
            thisData = value;
        }   
    });
   
    jQuery('#state_data').html('');
    if(!thisData){
        return;
    }
    createData(thisData);
    $("#state_data").show();
     $('.jsmaps-wrapper-box').hide();
    jQuery(".chart_outrss").hide();
    
    
    jQuery("#states option").each(function( index ) {
        var chk = jQuery(this).val();
        if(chk==abb){
            jQuery(this).attr('selected', 'selected');
        }
    });
    
}





function createData(arr) {
   // console.log(arr);
    var html='';
    
    var ab = new Array();
    var source = new Array();
    var source_link = new Array();
    var i=0;
    html +='\
    <div class="chart_outr content_outr">\
     <div class="state_headings">\
              <h3>'+arr.state+'</h3>\
              <h5>'+arr.title+'</h5>\
              <h6>'+arr.description+'</h6>\
        </div><div class="box1">\
        <div class="col-md-9">\
        <div class="ques_ans">\
        ';

        jQuery.each( arr.section, function( key, value ) {
          ab[key] = value.title;
          
        html +=' <div class="inner_data">\
        \<h5 id="section'+key+'">'+value.title+'</h5>\
        ';
          

          html+= '\<h6>Reimbursement Requirements</h6>';
                
            html +='</div><div class="table-responsive">\
          <table> <tr><th></th> <th>Ingredient Cost </th> <th>Dispensing Fee</th> <th>Clarifying Details</th></tr>';
                    jQuery.each( value.table_one, function( key1,value1){
                   
                    html +='<tr>\
                        <td>'+value1.question_title +'</td>\
                        <td>'+value1.ingredient_cost+'</td>';
                       
                            html +='<td>'+value1.dispensing_fee+'</td>\
                            <td>'+value1.clarifying_detail+'</td>\
                            ';
                      
                    html +='</tr>';
                     source[i]=value1.source;
                     source_link[i]=value1.source_link;
                    i++;
                    });
                html +='</table></div>\
                ';
            if(value.table_two.length > 0){
                  html +=' <div class="inner_data">\
                  ';
        html+= '\<h6>Duplicate Discount Mechanism</h6>';
         html +='</div><div class="table-responsive">\
          <table> <tr><th></th> <th>Answer </th> </tr>';
          
          jQuery.each( value.table_two, function( key2,value2){
          
           source[i]=value2.source;
           source_link[i]=value2.source_link;
                    html +='<tr>\
                        <td>'+value2.question_title +'</td>\
                        <td>'+value2.clarifying_detail+'</td>\
                            ';
                      
                    html +='</tr>';
                    i++;
                    });
                html +='</table></div>\
                ';
         }
                 });
                // console.log(ab);
                function unique(list) {
                    var result = [];
                    $.each(list, function(i, e) {
                        if ($.inArray(e, result) == -1) result.push(e);
                    });
                    return result;
                }
                
               console.log(source);
                 console.log(source_link);
                source = unique(source);
                source_link = unique(source_link);
                  console.log(source);
                 console.log(source_link);
            html +='</div></div><div class="col-md-3 hidden-sm hidden-xs">';
   
   html += '<div class="sidenav-wrapper"><ul class="my-navbar">';
                              jQuery.each( ab, function( key,value){
                              html += '<li class="nav-item ">\
                                <a class=" current-tab" href="#section'+key+'" data-scroll="section">'+value+'</a>\
                            </li>';
                              });
                              
                         html +='</ul></div></div></div>\
                 </div></div>' ;
                 
  html += '<section id="section" class="sources" data-anchor="section8">\
                    <div class="section-title">\
                                <h3>Sources</h3>\
                     </div>\
                            <ol>';
                            jQuery.each( source, function( key,value){
                                jQuery.each( source_link, function( key22,value22){
                                    if(key==key22){
                                if(value != 'No requirements located.'){
                            html += '<li id="source1" data-tab="source1" class=""><a href="'+value22+'" target="_blank">'+value+'</a></li>' ;
                                }
                                    }
                                });
                            });
                               html +='</ol>\
                        </section>\
                    ';
   
    
    jQuery('#state_data').html(html);
}

$(document).scroll(function() {
    var y = $(document).scrollTop(), //get page y value 
        header = $(".sidenav-wrapper"); // your div id
    if(y >= 400)  {
        header.css({position: "fixed", "top" : "0", "width": "286px"});
    } else {
        header.css("position", "static");
    }
});





