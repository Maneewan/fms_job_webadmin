<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div class="right_col" role="main">


			<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">		
		        <select id="event_name"  name="event_name" class="select2_single form-control" tabindex="-1">
		                <option value="0"><?php foreach ($this->event_model->getEvent() as $row) 
		                {                      
		                    echo "<option value=".$row['event_no'].">".$row['event_name']."</option>";  
		                                                                          
		                     ;
		                } 
		              ?></option>                                                                                                       
		        </select>        
		    </div>
		    <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">	
		    	<button type="button" onclick="getPoll()" class="btn btn-success">Submit</button>
		    </div>

   
    <div class="col-md-12 col-xs-12">
			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br>
    </div>
</div>

                    
                     <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>

<script type="text/javascript">

	function getPoll(){
		var event_name = $('#event_name').val();
		var event_name_text = $("#event_name option:selected").text();
var obj
var data = [];
if(event_name!=0){
	$.ajax({
		type: "POST",
		url: "<?php echo base_url(); ?>" + "index.php/poll_controller/getPoll",
		data: { 
        'event_name': event_name
    	},
		dataType: 'text',
		success: function(res){
				obj = jQuery.parseJSON(res);
				console.log(obj);
				data.push(Number(obj[0].event));
				data.push(Number(obj[0].facility));
				data.push(Number(obj[0].location));
				data.push(Number(obj[0].communication));
				data.push(Number(obj[0].company));

				console.log(data);

							$(function () {
			    // Create the chart
			    $('#container').highcharts({
			        chart: {
			            type: 'column'
			        },
			        title: {
			            text: 'กราฟแสดงผลคะแนนการประเมินความพึงพอใจของผู้เข้าร่วมงาน FMS Job Fair (เฉลี่ย)<br/>'
			        },
			        subtitle: {
			            text: ''+event_name_text
			        },
			        xAxis: {
			            type: 'category'
			        },
			        yAxis: {
			            title: {
			                text: 'ระดับคะแนน'
			            }

			        },
			        legend: {
			            enabled: false
			        },
			        plotOptions: {
			            series: {
			                borderWidth: 0,
			                dataLabels: {
			                    enabled: true,
			                    format: '{point.y:.1f}'
			                }
			            }
			        },

			        tooltip: {
			            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> เต็ม 5<br/>'
			        },

			        series: [{
			            name: 'คะแนนเฉลี่ย',
			            colorByPoint: true,
			            data: [{
			                name: 'การจัดงาน',
			                y: Number(obj[0].event),
			            }, {
			                name: 'สิ่งอำนวยความสะดวก',
			                y: Number(obj[0].facility),
			            }, {
			                name: 'สถานที่',
			                y: Number(obj[0].location),
			            }, {
			                name: 'การประชาสัมพันธ์',
			                y: Number(obj[0].communication),
			            }, {
			                name: 'หน่วยงาน',
			                y: Number(obj[0].company),
			            }]
			        }],
			    });
			});
		}
	});
	}else{
		alert('select state');
	}
}

</script>

