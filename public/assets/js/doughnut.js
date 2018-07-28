$(document).ready(function(){
    $.ajax({
        url:"http://localhost/good/chart/api/datas.php",
        type:"GET",
        success :function(data){
            console.log(data);
            var Account = [];
            var Transactions = [];

            for (var i in data) {
                Account.push(data[i].Account);
                Transactions.push(data[i].Transactions);
}
        var ctx=$("#doughnut-chartcanvas-1");
        var data={
            labels: Account,
            datasets: [
            {
                    label: 'Transactions',
                    backgroundColor:'#337ab7',
                    borderColor: 'lightblue',
                    hoverBackgroundColor: 'blue',
                    hoverBorderColor:'rgba(200,200,200,1)',
                    data: Transactions
                }
            ]
        };
        var  options={
            title:
            {
                display: true,
                position: "top",
                text:"Transactions",
                fontSize: 18,
                fontColor: "#333"
            },
            legend:{
                display: false,
                position:"right"
            }
        }

        var chart = new Chart( ctx,{
        type: "",
        data:data,
        options: options
        });

                        },
        error: function(data){
            console.log(data);
        }
    });
});