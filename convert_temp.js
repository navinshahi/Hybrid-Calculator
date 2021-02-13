function calculate()
{
    var select1=document.getElementById("select1").value;
    var select2=document.getElementById("select2").value;
    var n=select1.localeCompare(select2);
    if(n==0)
    {
        alert("Invalid Conversions!!!");
        document.getElementById("input1").disabled=true;
    }
    else if(select1!="select1" && select2!="select2")
    {
        document.getElementById("input1").disabled=false;
        var result=document.getElementById("input2");
        var val=document.getElementById("input1").value;
        if(select1=="C" && select2=="F")
        result.value=parseFloat(val)*33.8;
        else if(select1=="C" && select2=="K")
        result.value=parseFloat(val)*274.15;
        else if(select1=="F" && select2=="C")
        result.value=parseFloat(val)*-17.2222222;
        else if(select1=="F" && select2=="K")
        result.value=parseFloat(val)*255.927778;
        else if(select1=="K" && select2=="C")
        result.value=parseFloat(val)*-272.15;
        else if(select1=="K" && select2=="F")
        result.value=parseFloat(val)*-457.87;
    }
    else
    {
        document.getElementById("input1").disabled=true;
    }
}