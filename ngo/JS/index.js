function pickup(name,username,ngo){
    if(confirm("Do you wish to bring "+name+" under your NGO")){
        $.ajax({
            type: "POST",
            url: "backend/pickup_ajax.php",
            data: {
                //data goes here
                username,
                ngo
            },
            success: function (data) {
               //data is returned here
               console.log(data);
                if(data == "SUCCESS"){
                    alert("Picked up!");
                    window.location = 'servicevictims.php';
                }
                else{
                    alert("Failed to update, please try again later");
                }
            }
        });
    }
    

}

function fnExcelReport(id)
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById(id); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}

function verify1(username,name){
    if(confirm("Do you wish to set "+name+" as verified Victim?")){
        $.ajax({
            type: "POST",
            url: "backend/verify_ajax1.php",
            data: {
                //data goes here
                username
            },
            success: function (data) {
               //data is returned here
                if(data == "SUCCESS"){
                    alert("Verified");
                    window.location = 'verifyvictims.php';
                }
                else{
                    alert("Failed to update, please try again later");
                }
            }
        });
    }
    

}