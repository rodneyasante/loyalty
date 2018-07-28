$(document).ready(function(){
	$.ajax({
		url:"http://localhost/good/chart/api/datas.php",
		type:"GET",
		success :function(data){
			
			var Services = [];
			var Amount = [];

			for (var i in data) {
				Services.push(data[i].Services);
				Amount.push(data[i].Volumes);
}
	
var randomColorGenerator = function () { 
    return '#' + (Math.random().toString(16) + '0000500').slice(2, 8); 
};
		var ctx=$("#bar-chartcanvas");
		var data={
			labels: Services,
			datasets: [
			{
					label: 'Volumes',
					fillColor: randomColorGenerator(), 
                strokeColor: randomColorGenerator(), 
                highlightFill: randomColorGenerator(),
                highlightStroke: randomColorGenerator(),
					data: Amount
				}
			]
		};
		var  options={
			title:
			{
				display: true,
				position: "top",
				text:"Services",
				fontSize: 18,
				fontColor: "#333"
			},
			legend:{
				display: true,
				position:"bottom"
			}
		}

		var chart = new Chart( ctx,{
		type: "bar",
		data:data,
		options: options
		});

						},
		error: function(data){
			console.log(data);
		}
	});
});