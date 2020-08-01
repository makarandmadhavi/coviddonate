<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>






<div  >
  <canvas  id="gaurav" width="200" height="300">
    
   </canvas>
   

  </div>

  
  <br>
  <br>
    


<div >
  
  <center><h4 style="color:rgb(128, 0, 64);"></h4></center>
  <canvas  id="gaurav" width="200" height="300">
  
  </canvas>
</div>
<script>
  
  
        var label=JSON.parse('<%-JSON.stringify(graphs)%>').stat;
        var getit=JSON.parse('<%-JSON.stringify(graphs)%>').getit;
        var ctx4 = document.getElementById("gaurav");
    new Chart(ctx4, {
        type: 'pie',
        data: {
            datasets: [{
                label: 'states',
                data: getit,
                backgroundColor: [
                    'red',//1
                    'orange',//2
                    'yellow',//3
                    'green',//4
                    'blue',//5
                    
                ],
            }],
            labels: label
            },
            options: {
                    responsive: true
            }
        });
      
    
      
    </script>
    <script>
Router.post('/find',async(req,res)=>{
    try{
    
    var getit=[];
    var stat=[]
    //Chartjs code
    var fs=require('fs');
    var csv= require('csv-parser');
    const results=[];
    var address=[];
    var dict=Object();
    fs.createReadStream('victims.csv')
    .pipe(csv({}))
    .on('data',(data)=>{
        results.push(data)
        address.push(data.address)
        dict[data.address]=(dict[data.address]+1)||1
    })
    .on('end',(data)=>{
       //
       getit=Object.keys(dict);
       stat=Object.values(dict);
    });
       
      var graphs={
        X_axis: X_axis,
        Y_axis: Y_axis,
        Y_Deaths: Y_Deaths,
        Y_Recover:Y_Recover,
        getit:getit,
        stat:stat
        
      }
    if(Object.keys(aray).length == 0){
        res.send("No such country exists");
    }
    else{
    res.render('coviddata.ejs',{graphs:graphs});
    }
}
catch(e){
    res.render("error.ejs");
}

    
});
</script>
  </body>
</html>
