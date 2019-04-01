var array = [["DT-LT-87","Citroen","XM","1999-09-23","34500"],
        ["GF-NX-07","Volkswagen","Polo","1999-07-12","78000"],
        ["GF-PD-34","Volkswagen","Golf","1999-09-23","57500"],
        ["KR-RT-65","Volkswagen","Polo","1999-08-08","42000"],
        ["PT-ER-45","Ford","Fiesta","1999-08-08","25000"],
        ["TT-PR-73","Citroen","XM","1999-03-02","1200"],
        ["TT-RW-01","Volkswagen","Polo","1999-11-14","4500"]],

    tabel = document.getElementById("autostabel");



for(var i = 0; i < array.length; i++)
{
    var regelauto = tabel.insertRow(tabel.length);
    for(var j = 0; j < array[i].length; j++)
    {
        var cell = regelauto.insertCell(j);

        cell.innerHTML = array[i][j];
    }
}