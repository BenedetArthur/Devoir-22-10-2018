function AjouterConference()
{
    console.log("coucou");  
$.ajax
(
    
    {
        type:"get",
        url:"index.php/Index_Techdays/AjouteruneConference",
        success:function(data)
        {
            $("#Ajout").empty();
            $("#Ajout").append(data);
        },
        error:function()
        {
            alert();
        }
    }
);
}

function ValiderlaConference()
{

$.ajax
(
    {
        type:"get",
        url:"index.php/Index_Techdays/ValiderConference",
        success:function(data)
        {
            $("#Ajout").empty();
            $("#Ajout").append(data);
        },
        error:function()
        {
            alert();
        }
    }
);
}