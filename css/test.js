onclick="total(document.getElementById('formId'))";
function check()
{

    var yes=0;
    var no=0;
    var otvet="";
    var choice;
    for (var v=1; v<=4; v++)
    {
        var q = document.forms['quiz'].elements['vopros'+v];
        for (var i=0; i<q.length; i++)
        {
            if (q[i].checked) {
                choice=q[i].value;
            }
        }
        if (choice=="yes") {yes++;}
        if (choice=="no") {no++;}
    }
    switch (true) {
        case (yes>2):
        case (yes==2): window.open("http://localhost/untitled/mid.php");break;
        case (yes==1):webkitURL("jun.php");break;
        case (yes==0): window.open("freshman.php");break;
    }

}

